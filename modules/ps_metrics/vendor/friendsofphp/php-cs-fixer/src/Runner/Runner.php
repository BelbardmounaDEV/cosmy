<?php

declare (strict_types=1);
/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace ps_metrics_module_v4_0_5\PhpCsFixer\Runner;

use ps_metrics_module_v4_0_5\PhpCsFixer\AbstractFixer;
use ps_metrics_module_v4_0_5\PhpCsFixer\Cache\CacheManagerInterface;
use ps_metrics_module_v4_0_5\PhpCsFixer\Cache\Directory;
use ps_metrics_module_v4_0_5\PhpCsFixer\Cache\DirectoryInterface;
use ps_metrics_module_v4_0_5\PhpCsFixer\Differ\DifferInterface;
use ps_metrics_module_v4_0_5\PhpCsFixer\Error\Error;
use ps_metrics_module_v4_0_5\PhpCsFixer\Error\ErrorsManager;
use ps_metrics_module_v4_0_5\PhpCsFixer\FileReader;
use ps_metrics_module_v4_0_5\PhpCsFixer\Fixer\FixerInterface;
use ps_metrics_module_v4_0_5\PhpCsFixer\FixerFileProcessedEvent;
use ps_metrics_module_v4_0_5\PhpCsFixer\Linter\LinterInterface;
use ps_metrics_module_v4_0_5\PhpCsFixer\Linter\LintingException;
use ps_metrics_module_v4_0_5\PhpCsFixer\Linter\LintingResultInterface;
use ps_metrics_module_v4_0_5\PhpCsFixer\Tokenizer\Tokens;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Contracts\EventDispatcher\Event;
/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 */
final class Runner
{
    /**
     * @var DifferInterface
     */
    private $differ;
    /**
     * @var DirectoryInterface
     */
    private $directory;
    /**
     * @var null|EventDispatcherInterface
     */
    private $eventDispatcher;
    /**
     * @var ErrorsManager
     */
    private $errorsManager;
    /**
     * @var CacheManagerInterface
     */
    private $cacheManager;
    /**
     * @var bool
     */
    private $isDryRun;
    /**
     * @var LinterInterface
     */
    private $linter;
    /**
     * @var \Traversable
     */
    private $finder;
    /**
     * @var FixerInterface[]
     */
    private $fixers;
    /**
     * @var bool
     */
    private $stopOnViolation;
    public function __construct($finder, array $fixers, DifferInterface $differ, ?EventDispatcherInterface $eventDispatcher, ErrorsManager $errorsManager, LinterInterface $linter, bool $isDryRun, CacheManagerInterface $cacheManager, ?DirectoryInterface $directory = null, bool $stopOnViolation = \false)
    {
        $this->finder = $finder;
        $this->fixers = $fixers;
        $this->differ = $differ;
        $this->eventDispatcher = $eventDispatcher;
        $this->errorsManager = $errorsManager;
        $this->linter = $linter;
        $this->isDryRun = $isDryRun;
        $this->cacheManager = $cacheManager;
        $this->directory = $directory ?: new Directory('');
        $this->stopOnViolation = $stopOnViolation;
    }
    public function fix() : array
    {
        $changed = [];
        $finder = $this->finder;
        $finderIterator = $finder instanceof \IteratorAggregate ? $finder->getIterator() : $finder;
        $fileFilteredFileIterator = new FileFilterIterator($finderIterator, $this->eventDispatcher, $this->cacheManager);
        $collection = $this->linter->isAsync() ? new FileCachingLintingIterator($fileFilteredFileIterator, $this->linter) : new FileLintingIterator($fileFilteredFileIterator, $this->linter);
        /** @var \SplFileInfo $file */
        foreach ($collection as $file) {
            $fixInfo = $this->fixFile($file, $collection->currentLintingResult());
            // we do not need Tokens to still caching just fixed file - so clear the cache
            Tokens::clearCache();
            if (null !== $fixInfo) {
                $name = $this->directory->getRelativePathTo($file->__toString());
                $changed[$name] = $fixInfo;
                if ($this->stopOnViolation) {
                    break;
                }
            }
        }
        return $changed;
    }
    private function fixFile(\SplFileInfo $file, LintingResultInterface $lintingResult) : ?array
    {
        $name = $file->getPathname();
        try {
            $lintingResult->check();
        } catch (LintingException $e) {
            $this->dispatchEvent(FixerFileProcessedEvent::NAME, new FixerFileProcessedEvent(FixerFileProcessedEvent::STATUS_INVALID));
            $this->errorsManager->report(new Error(Error::TYPE_INVALID, $name, $e));
            return null;
        }
        $old = FileReader::createSingleton()->read($file->getRealPath());
        $tokens = Tokens::fromCode($old);
        $oldHash = $tokens->getCodeHash();
        $newHash = $oldHash;
        $new = $old;
        $appliedFixers = [];
        try {
            foreach ($this->fixers as $fixer) {
                // for custom fixers we don't know is it safe to run `->fix()` without checking `->supports()` and `->isCandidate()`,
                // thus we need to check it and conditionally skip fixing
                if (!$fixer instanceof AbstractFixer && (!$fixer->supports($file) || !$fixer->isCandidate($tokens))) {
                    continue;
                }
                $fixer->fix($file, $tokens);
                if ($tokens->isChanged()) {
                    $tokens->clearEmptyTokens();
                    $tokens->clearChanged();
                    $appliedFixers[] = $fixer->getName();
                }
            }
        } catch (\ParseError $e) {
            $this->dispatchEvent(FixerFileProcessedEvent::NAME, new FixerFileProcessedEvent(FixerFileProcessedEvent::STATUS_LINT));
            $this->errorsManager->report(new Error(Error::TYPE_LINT, $name, $e));
            return null;
        } catch (\Throwable $e) {
            $this->processException($name, $e);
            return null;
        }
        $fixInfo = null;
        if (!empty($appliedFixers)) {
            $new = $tokens->generateCode();
            $newHash = $tokens->getCodeHash();
        }
        // We need to check if content was changed and then applied changes.
        // But we can't simply check $appliedFixers, because one fixer may revert
        // work of other and both of them will mark collection as changed.
        // Therefore we need to check if code hashes changed.
        if ($oldHash !== $newHash) {
            $fixInfo = ['appliedFixers' => $appliedFixers, 'diff' => $this->differ->diff($old, $new, $file)];
            try {
                $this->linter->lintSource($new)->check();
            } catch (LintingException $e) {
                $this->dispatchEvent(FixerFileProcessedEvent::NAME, new FixerFileProcessedEvent(FixerFileProcessedEvent::STATUS_LINT));
                $this->errorsManager->report(new Error(Error::TYPE_LINT, $name, $e, $fixInfo['appliedFixers'], $fixInfo['diff']));
                return null;
            }
            if (!$this->isDryRun) {
                $fileName = $file->getRealPath();
                if (!\file_exists($fileName)) {
                    throw new IOException(\sprintf('Failed to write file "%s" (no longer) exists.', $file->getPathname()), 0, null, $file->getPathname());
                }
                if (\is_dir($fileName)) {
                    throw new IOException(\sprintf('Cannot write file "%s" as the location exists as directory.', $fileName), 0, null, $fileName);
                }
                if (!\is_writable($fileName)) {
                    throw new IOException(\sprintf('Cannot write to file "%s" as it is not writable.', $fileName), 0, null, $fileName);
                }
                if (\false === @\file_put_contents($fileName, $new)) {
                    $error = \error_get_last();
                    throw new IOException(\sprintf('Failed to write file "%s", "%s".', $fileName, $error ? $error['message'] : 'no reason available'), 0, null, $fileName);
                }
            }
        }
        $this->cacheManager->setFile($name, $new);
        $this->dispatchEvent(FixerFileProcessedEvent::NAME, new FixerFileProcessedEvent($fixInfo ? FixerFileProcessedEvent::STATUS_FIXED : FixerFileProcessedEvent::STATUS_NO_CHANGES));
        return $fixInfo;
    }
    /**
     * Process an exception that occurred.
     */
    private function processException(string $name, \Throwable $e) : void
    {
        $this->dispatchEvent(FixerFileProcessedEvent::NAME, new FixerFileProcessedEvent(FixerFileProcessedEvent::STATUS_EXCEPTION));
        $this->errorsManager->report(new Error(Error::TYPE_EXCEPTION, $name, $e));
    }
    private function dispatchEvent(string $name, Event $event) : void
    {
        if (null === $this->eventDispatcher) {
            return;
        }
        $this->eventDispatcher->dispatch($event, $name);
    }
}

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

use ps_metrics_module_v4_0_5\PhpCsFixer\Cache\CacheManagerInterface;
use ps_metrics_module_v4_0_5\PhpCsFixer\FileReader;
use ps_metrics_module_v4_0_5\PhpCsFixer\FixerFileProcessedEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Contracts\EventDispatcher\Event;
/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * @internal
 */
final class FileFilterIterator extends \FilterIterator
{
    /**
     * @var null|EventDispatcherInterface
     */
    private $eventDispatcher;
    /**
     * @var CacheManagerInterface
     */
    private $cacheManager;
    /**
     * @var array<string,bool>
     */
    private $visitedElements = [];
    public function __construct(\Traversable $iterator, ?EventDispatcherInterface $eventDispatcher, CacheManagerInterface $cacheManager)
    {
        if (!$iterator instanceof \Iterator) {
            $iterator = new \IteratorIterator($iterator);
        }
        parent::__construct($iterator);
        $this->eventDispatcher = $eventDispatcher;
        $this->cacheManager = $cacheManager;
    }
    public function accept() : bool
    {
        $file = $this->current();
        if (!$file instanceof \SplFileInfo) {
            throw new \RuntimeException(\sprintf('Expected instance of "\\SplFileInfo", got "%s".', \is_object($file) ? \get_class($file) : \gettype($file)));
        }
        $path = $file->isLink() ? $file->getPathname() : $file->getRealPath();
        if (isset($this->visitedElements[$path])) {
            return \false;
        }
        $this->visitedElements[$path] = \true;
        if (!$file->isFile() || $file->isLink()) {
            return \false;
        }
        $content = FileReader::createSingleton()->read($path);
        // mark as skipped:
        if ('' === $content || !$this->cacheManager->needFixing($file->getPathname(), $content)) {
            $this->dispatchEvent(FixerFileProcessedEvent::NAME, new FixerFileProcessedEvent(FixerFileProcessedEvent::STATUS_SKIPPED));
            return \false;
        }
        return \true;
    }
    private function dispatchEvent(string $name, Event $event) : void
    {
        if (null === $this->eventDispatcher) {
            return;
        }
        $this->eventDispatcher->dispatch($event, $name);
    }
}

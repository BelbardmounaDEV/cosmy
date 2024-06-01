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
namespace ps_metrics_module_v4_0_5\PhpCsFixer\Fixer\FunctionNotation;

use ps_metrics_module_v4_0_5\PhpCsFixer\AbstractFixer;
use ps_metrics_module_v4_0_5\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_5\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_5\PhpCsFixer\FixerDefinition\VersionSpecification;
use ps_metrics_module_v4_0_5\PhpCsFixer\FixerDefinition\VersionSpecificCodeSample;
use ps_metrics_module_v4_0_5\PhpCsFixer\Tokenizer\CT;
use ps_metrics_module_v4_0_5\PhpCsFixer\Tokenizer\Token;
use ps_metrics_module_v4_0_5\PhpCsFixer\Tokenizer\Tokens;
use ps_metrics_module_v4_0_5\PhpCsFixer\Tokenizer\TokensAnalyzer;
/**
 * @author Gregor Harlan
 */
final class UseArrowFunctionsFixer extends AbstractFixer
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('Anonymous functions with one-liner return statement must use arrow functions.', [new VersionSpecificCodeSample(<<<'SAMPLE'
<?php

namespace ps_metrics_module_v4_0_5;

foo(function ($a) use($b) {
    return $a + $b;
});

SAMPLE
, new VersionSpecification(70400))], null, 'Risky when using `isset()` on outside variables that are not imported with `use ()`.');
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return \PHP_VERSION_ID >= 70400 && $tokens->isAllTokenKindsFound([\T_FUNCTION, \T_RETURN]);
    }
    /**
     * {@inheritdoc}
     */
    public function isRisky() : bool
    {
        return \true;
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        $analyzer = new TokensAnalyzer($tokens);
        for ($index = $tokens->count() - 1; $index > 0; --$index) {
            if (!$tokens[$index]->isGivenKind(\T_FUNCTION) || !$analyzer->isLambda($index)) {
                continue;
            }
            // Find parameters end
            // Abort if they are multilined
            $parametersStart = $tokens->getNextMeaningfulToken($index);
            if ($tokens[$parametersStart]->isGivenKind(CT::T_RETURN_REF)) {
                $parametersStart = $tokens->getNextMeaningfulToken($parametersStart);
            }
            $parametersEnd = $tokens->findBlockEnd(Tokens::BLOCK_TYPE_PARENTHESIS_BRACE, $parametersStart);
            if ($this->isMultilined($tokens, $parametersStart, $parametersEnd)) {
                continue;
            }
            // Find `use ()` start and end
            // Abort if it contains reference variables
            $next = $tokens->getNextMeaningfulToken($parametersEnd);
            $useStart = null;
            $useEnd = null;
            if ($tokens[$next]->isGivenKind(CT::T_USE_LAMBDA)) {
                $useStart = $next;
                if ($tokens[$useStart - 1]->isGivenKind(\T_WHITESPACE)) {
                    --$useStart;
                }
                $next = $tokens->getNextMeaningfulToken($next);
                while (!$tokens[$next]->equals(')')) {
                    if ($tokens[$next]->equals('&')) {
                        // variables used by reference are not supported by arrow functions
                        continue 2;
                    }
                    $next = $tokens->getNextMeaningfulToken($next);
                }
                $useEnd = $next;
                $next = $tokens->getNextMeaningfulToken($next);
            }
            // Find opening brace and following `return`
            // Abort if there is more than whitespace between them (like comments)
            $braceOpen = $tokens[$next]->equals('{') ? $next : $tokens->getNextTokenOfKind($next, ['{']);
            $return = $braceOpen + 1;
            if ($tokens[$return]->isGivenKind(\T_WHITESPACE)) {
                ++$return;
            }
            if (!$tokens[$return]->isGivenKind(\T_RETURN)) {
                continue;
            }
            // Find semicolon of `return` statement
            $semicolon = $tokens->getNextTokenOfKind($return, ['{', ';']);
            if (!$tokens[$semicolon]->equals(';')) {
                continue;
            }
            // Find closing brace
            // Abort if there is more than whitespace between semicolon and closing brace
            $braceClose = $semicolon + 1;
            if ($tokens[$braceClose]->isGivenKind(\T_WHITESPACE)) {
                ++$braceClose;
            }
            if (!$tokens[$braceClose]->equals('}')) {
                continue;
            }
            // Abort if the `return` statement is multilined
            if ($this->isMultilined($tokens, $return, $semicolon)) {
                continue;
            }
            // Transform the function to an arrow function
            $this->transform($tokens, $index, $useStart, $useEnd, $braceOpen, $return, $semicolon, $braceClose);
        }
    }
    private function isMultilined(Tokens $tokens, int $start, int $end) : bool
    {
        for ($i = $start; $i < $end; ++$i) {
            if (\str_contains($tokens[$i]->getContent(), "\n")) {
                return \true;
            }
        }
        return \false;
    }
    private function transform(Tokens $tokens, int $index, ?int $useStart, ?int $useEnd, int $braceOpen, int $return, int $semicolon, int $braceClose) : void
    {
        $tokensToInsert = [new Token([\T_DOUBLE_ARROW, '=>'])];
        if ($tokens->getNextMeaningfulToken($return) === $semicolon) {
            $tokensToInsert[] = new Token([\T_WHITESPACE, ' ']);
            $tokensToInsert[] = new Token([\T_STRING, 'null']);
        }
        $tokens->clearRange($semicolon, $braceClose);
        $tokens->clearRange($braceOpen + 1, $return);
        $tokens->overrideRange($braceOpen, $braceOpen, $tokensToInsert);
        if (null !== $useStart) {
            $tokens->clearRange($useStart, $useEnd);
        }
        $tokens[$index] = new Token([\T_FN, 'fn']);
    }
}

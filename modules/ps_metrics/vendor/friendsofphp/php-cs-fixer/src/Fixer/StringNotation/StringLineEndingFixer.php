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
namespace ps_metrics_module_v4_0_5\PhpCsFixer\Fixer\StringNotation;

use ps_metrics_module_v4_0_5\PhpCsFixer\AbstractFixer;
use ps_metrics_module_v4_0_5\PhpCsFixer\Fixer\WhitespacesAwareFixerInterface;
use ps_metrics_module_v4_0_5\PhpCsFixer\FixerDefinition\CodeSample;
use ps_metrics_module_v4_0_5\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_5\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_5\PhpCsFixer\Preg;
use ps_metrics_module_v4_0_5\PhpCsFixer\Tokenizer\Token;
use ps_metrics_module_v4_0_5\PhpCsFixer\Tokenizer\Tokens;
/**
 * Fixes the line endings in multi-line strings.
 *
 * @author Ilija Tovilo <ilija.tovilo@me.com>
 */
final class StringLineEndingFixer extends AbstractFixer implements WhitespacesAwareFixerInterface
{
    /**
     * {@inheritdoc}
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isAnyTokenKindsFound([\T_CONSTANT_ENCAPSED_STRING, \T_ENCAPSED_AND_WHITESPACE, \T_INLINE_HTML]);
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
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('All multi-line strings must use correct line ending.', [new CodeSample("<?php \$a = 'my\r\nmulti\nline\r\nstring';\r\n")], null, 'Changing the line endings of multi-line strings might affect string comparisons and outputs.');
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        $ending = $this->whitespacesConfig->getLineEnding();
        foreach ($tokens as $tokenIndex => $token) {
            if (!$token->isGivenKind([\T_CONSTANT_ENCAPSED_STRING, \T_ENCAPSED_AND_WHITESPACE, \T_INLINE_HTML])) {
                continue;
            }
            $tokens[$tokenIndex] = new Token([$token->getId(), Preg::replace('#\\R#u', $ending, $token->getContent())]);
        }
    }
}

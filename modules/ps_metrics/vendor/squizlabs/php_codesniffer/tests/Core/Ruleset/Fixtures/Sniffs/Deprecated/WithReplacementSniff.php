<?php

/**
 * Test fixture.
 *
 * @see \PHP_CodeSniffer\Tests\Core\Ruleset\SniffDeprecationTest
 */
namespace ps_metrics_module_v4_0_5\Fixtures\Sniffs\Deprecated;

use ps_metrics_module_v4_0_5\PHP_CodeSniffer\Files\File;
use ps_metrics_module_v4_0_5\PHP_CodeSniffer\Sniffs\DeprecatedSniff;
use ps_metrics_module_v4_0_5\PHP_CodeSniffer\Sniffs\Sniff;
class WithReplacementSniff implements Sniff, DeprecatedSniff
{
    public function getDeprecationVersion()
    {
        return 'v3.8.0';
    }
    public function getRemovalVersion()
    {
        return 'v4.0.0';
    }
    public function getDeprecationMessage()
    {
        return 'Use the Stnd.Category.OtherSniff sniff instead.';
    }
    public function register()
    {
        return [\T_WHITESPACE];
    }
    public function process(File $phpcsFile, $stackPtr)
    {
        // Do something.
    }
}

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
namespace ps_metrics_module_v4_0_5\PhpCsFixer\RuleSet\Sets;

use ps_metrics_module_v4_0_5\PhpCsFixer\Fixer\PhpUnit\PhpUnitTargetVersion;
use ps_metrics_module_v4_0_5\PhpCsFixer\RuleSet\AbstractMigrationSetDescription;
/**
 * @internal
 */
final class PHPUnit84MigrationRiskySet extends AbstractMigrationSetDescription
{
    public function getRules() : array
    {
        return ['@PHPUnit60Migration:risky' => \true, '@PHPUnit75Migration:risky' => \true, 'php_unit_expectation' => ['target' => PhpUnitTargetVersion::VERSION_8_4]];
    }
}

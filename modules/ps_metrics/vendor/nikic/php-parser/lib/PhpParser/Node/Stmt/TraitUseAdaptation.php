<?php

declare (strict_types=1);
namespace ps_metrics_module_v4_0_5\PhpParser\Node\Stmt;

use ps_metrics_module_v4_0_5\PhpParser\Node;
abstract class TraitUseAdaptation extends Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}

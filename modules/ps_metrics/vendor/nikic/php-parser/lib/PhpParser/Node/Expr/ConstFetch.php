<?php

declare (strict_types=1);
namespace ps_metrics_module_v4_0_5\PhpParser\Node\Expr;

use ps_metrics_module_v4_0_5\PhpParser\Node\Expr;
use ps_metrics_module_v4_0_5\PhpParser\Node\Name;
class ConstFetch extends Expr
{
    /** @var Name Constant name */
    public $name;
    /**
     * Constructs a const fetch node.
     *
     * @param Name  $name       Constant name
     * @param array $attributes Additional attributes
     */
    public function __construct(Name $name, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->name = $name;
    }
    public function getSubNodeNames() : array
    {
        return ['name'];
    }
    public function getType() : string
    {
        return 'Expr_ConstFetch';
    }
}

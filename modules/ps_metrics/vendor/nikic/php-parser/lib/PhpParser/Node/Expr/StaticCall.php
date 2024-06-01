<?php

declare (strict_types=1);
namespace ps_metrics_module_v4_0_5\PhpParser\Node\Expr;

use ps_metrics_module_v4_0_5\PhpParser\Node;
use ps_metrics_module_v4_0_5\PhpParser\Node\Arg;
use ps_metrics_module_v4_0_5\PhpParser\Node\Expr;
use ps_metrics_module_v4_0_5\PhpParser\Node\Identifier;
use ps_metrics_module_v4_0_5\PhpParser\Node\VariadicPlaceholder;
class StaticCall extends CallLike
{
    /** @var Node\Name|Expr Class name */
    public $class;
    /** @var Identifier|Expr Method name */
    public $name;
    /** @var array<Arg|VariadicPlaceholder> Arguments */
    public $args;
    /**
     * Constructs a static method call node.
     *
     * @param Node\Name|Expr                 $class      Class name
     * @param string|Identifier|Expr         $name       Method name
     * @param array<Arg|VariadicPlaceholder> $args       Arguments
     * @param array                          $attributes Additional attributes
     */
    public function __construct($class, $name, array $args = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->class = $class;
        $this->name = \is_string($name) ? new Identifier($name) : $name;
        $this->args = $args;
    }
    public function getSubNodeNames() : array
    {
        return ['class', 'name', 'args'];
    }
    public function getType() : string
    {
        return 'Expr_StaticCall';
    }
    public function getRawArgs() : array
    {
        return $this->args;
    }
}

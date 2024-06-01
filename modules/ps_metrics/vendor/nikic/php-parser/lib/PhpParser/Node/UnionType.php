<?php

declare (strict_types=1);
namespace ps_metrics_module_v4_0_5\PhpParser\Node;

class UnionType extends ComplexType
{
    /** @var (Identifier|Name|IntersectionType)[] Types */
    public $types;
    /**
     * Constructs a union type.
     *
     * @param (Identifier|Name|IntersectionType)[] $types      Types
     * @param array               $attributes Additional attributes
     */
    public function __construct(array $types, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->types = $types;
    }
    public function getSubNodeNames() : array
    {
        return ['types'];
    }
    public function getType() : string
    {
        return 'UnionType';
    }
}

<?php

declare (strict_types=1);
namespace ps_metrics_module_v4_0_5\PhpParser\Node\Expr\Cast;

use ps_metrics_module_v4_0_5\PhpParser\Node\Expr\Cast;
class Object_ extends Cast
{
    public function getType() : string
    {
        return 'Expr_Cast_Object';
    }
}

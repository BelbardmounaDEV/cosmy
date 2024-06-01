<?php

namespace ps_metrics_module_v4_0_5\PrestaShop\PsAccountsInstaller\Tests;

use ps_metrics_module_v4_0_5\Faker\Generator;
class TestCase extends \ps_metrics_module_v4_0_5\PHPUnit\Framework\TestCase
{
    /**
     * @var Generator
     */
    public $faker;
    /**
     * @return void
     */
    protected function setUp()
    {
        parent::setUp();
        $this->faker = \ps_metrics_module_v4_0_5\Faker\Factory::create();
    }
}

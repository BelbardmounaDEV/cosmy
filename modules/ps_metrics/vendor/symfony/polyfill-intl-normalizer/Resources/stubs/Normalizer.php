<?php

namespace ps_metrics_module_v4_0_5;

class Normalizer extends \Symfony\Polyfill\Intl\Normalizer\Normalizer
{
    /**
     * @deprecated since ICU 56 and removed in PHP 8
     */
    public const NONE = 2;
    public const FORM_D = 4;
    public const FORM_KD = 8;
    public const FORM_C = 16;
    public const FORM_KC = 32;
    public const NFD = 4;
    public const NFKD = 8;
    public const NFC = 16;
    public const NFKC = 32;
}
\class_alias('ps_metrics_module_v4_0_5\\Normalizer', 'Normalizer', \false);

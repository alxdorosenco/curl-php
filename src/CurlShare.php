<?php

namespace AlxDorosenco\CurlPhp;

use AlxDorosenco\CurlPhp\Builder\IBuilder;
use AlxDorosenco\CurlPhp\Traits\TCurlShareFunctions;

class CurlShare implements ICurl
{
    use TCurlShareFunctions;

    /**
     * @var bool|\CurlShareHandle
     */
    protected bool|\CurlShareHandle $shareHandle;

    public function __construct()
    {
        $this->shareHandle = $this->init();
    }

    /**
     * @param IBuilder $builder
     * @return void
     */
    public function build(IBuilder $builder): void
    {
        foreach ($builder->toArray() as $option => $value) {
            curl_share_setopt($this->shareHandle, $option, $value);
        }
    }
}
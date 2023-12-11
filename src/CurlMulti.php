<?php

namespace AlxDorosenco\CurlPhp;

use AlxDorosenco\CurlPhp\Builder\ABuilder;
use AlxDorosenco\CurlPhp\Traits\TCurlMultiFunctions;

class CurlMulti implements ICurl
{
    use TCurlMultiFunctions;

    /**
     * @var bool|\CurlMultiHandle
     */
    protected bool|\CurlMultiHandle $multiHandle;

    public function __construct()
    {
        $this->multiHandle = $this->init();
    }

    /**
     * @param ABuilder $builder
     * @return void
     */
    public function build(ABuilder $builder): void
    {
        foreach ($builder->toArray() as $option => $value) {
            curl_multi_setopt($this->multiHandle, $option, $value);
        }
    }
}
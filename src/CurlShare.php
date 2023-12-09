<?php

namespace AlxDorosenco\CurlPhp;

use AlxDorosenco\CurlPhp\Traits\TCurlShareFunctions;

class CurlShare
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
}
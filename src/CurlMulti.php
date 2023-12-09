<?php

namespace AlxDorosenco\CurlPhp;

use AlxDorosenco\CurlPhp\Traits\TCurlMultiFunctions;

class CurlMulti
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
}
<?php

namespace AlxDorosenco\CurlPhp;

use AlxDorosenco\CurlPhp\Traits\TCurlFunctions;

class Curl
{
    use TCurlFunctions;

    /**
     * @var bool|\CurlHandle
     */
    protected bool|\CurlHandle $handle;

    /**
     * @param \CurlHandle|bool|null $handle
     */
    public function __construct(\CurlHandle|bool|null $handle = null)
    {
        $this->handle = $handle ?? $this->init();
    }

    /**
     * @param CurlBuilder $builder
     * @return void
     */
    public function build(CurlBuilder $builder): void
    {
        foreach ($builder->getOpts() as $option => $value) {
            curl_setopt($this->handle, $option, $value);
        }
    }
}
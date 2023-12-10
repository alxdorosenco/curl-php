<?php

namespace AlxDorosenco\CurlPhp;

use AlxDorosenco\CurlPhp\Builder\IBuilder;
use AlxDorosenco\CurlPhp\Traits\TCurlFunctions;

class Curl implements ICurl
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
     * @param IBuilder $builder
     * @return void
     */
    public function build(IBuilder $builder): void
    {
        foreach ($builder->toArray() as $option => $value) {
            curl_setopt($this->handle, $option, $value);
        }
    }
}
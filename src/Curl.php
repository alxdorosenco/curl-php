<?php

namespace AlxDorosenco\CurlPhp;

use AlxDorosenco\CurlPhp\Builder\ABuilder;
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
     * @param ABuilder $builder
     * @return void
     */
    public function build(ABuilder $builder): void
    {
        foreach ($builder->toArray() as $option => $value) {
            curl_setopt($this->handle, $option, $value);
        }
    }

    /**
     * @return CurlMulti
     */
    public static function multi(): CurlMulti
    {
        return new CurlMulti();
    }

    /**
     * @return CurlShare
     */
    public static function share(): CurlShare
    {
        return new CurlShare();
    }
}
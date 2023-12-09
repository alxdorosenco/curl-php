<?php

namespace AlxDorosenco\CurlPhp\Traits;

trait TCurlMultiFunctions
{
    public function addHandle(\CurlHandle $handle): int
    {
        return curl_multi_add_handle($this->multiHandle, $handle);
    }

    public function close(): void
    {
        curl_multi_close($this->multiHandle);
    }

    public function errno(): int
    {
        return curl_multi_errno($this->multiHandle);
    }

    public function exec(): int
    {
        return curl_multi_exec($this->multiHandle, $active);
    }

    public function getContent(\CurlHandle $handle): ?string
    {
        return curl_multi_getcontent($handle);
    }

    public function infoRead(): bool|array
    {
        return curl_multi_info_read($this->multiHandle);
    }

    public function init(): \CurlMultiHandle
    {
        return curl_multi_init();
    }

    public function removeHandle(\CurlHandle $handle): int
    {
        return curl_multi_remove_handle($this->multiHandle, $handle);
    }

    public function select(float $timeout = 1.0): int
    {
        return curl_multi_select($this->multiHandle, $timeout);
    }

    public function setOpt(int $option, mixed $value): bool
    {
        return curl_multi_setopt($this->multiHandle, $option, $value);
    }

    public function strError(int $errorCode): bool
    {
        return curl_multi_strerror($errorCode);
    }
}
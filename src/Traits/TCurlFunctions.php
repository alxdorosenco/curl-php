<?php

namespace AlxDorosenco\CurlPhp\Traits;

use AlxDorosenco\CurlPhp\Curl;

trait TCurlFunctions
{
    public function close(): void
    {
        curl_close($this->handle);
    }

    public function copyHandle(): Curl
    {
        $curl = curl_copy_handle($this->handle);

        return new Curl($curl);
    }

    public function errNo(): string
    {
        return curl_errno($this->handle);
    }

    public function error(): string
    {
        return curl_error($this->handle);
    }

    public function escape(string $string): string
    {
        return curl_escape($this->handle, $string);
    }

    public function exec(): bool|string
    {
        return curl_exec($this->handle);
    }

    public function getInfo(?int $option = null)
    {
        return curl_getinfo($this->handle, $option);
    }

    public function init(): \CurlHandle|bool
    {
        return curl_init();
    }

    public function pause(int $flags): int
    {
        return curl_pause($this->handle, $flags);
    }

    public function reset(): void
    {
        curl_reset($this->handle);
    }

    public function setOptArray(array $options): bool
    {
        return curl_setopt_array($this->handle, $options);
    }

    public function setOpt($option, mixed $value): bool
    {
        return curl_setopt($this->handle, $option, $value);
    }

    public function strError(int $errorCode): ?string
    {
        return curl_strerror($errorCode);
    }

    public function unescape(string $string): bool|string
    {
        return curl_unescape($this->handle, $string);
    }

    public function upkeep(): bool
    {
        return curl_upkeep($this->handle);
    }

    public function version(): bool|array
    {
        return curl_version();
    }
}
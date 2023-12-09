<?php

namespace AlxDorosenco\CurlPhp\Traits;

trait TCurlShareFunctions
{
    public function close(): void
    {
        curl_share_close($this->shareHandle);
    }

    public function errno(): int
    {
        return curl_share_errno($this->shareHandle);
    }

    public function init(): \CurlShareHandle
    {
        return curl_share_init();
    }

    public function setOpt(int $option, mixed $value): bool
    {
        return curl_share_setopt($this->shareHandle, $option, $value);
    }

    public function strError(int $errorCode): ?string
    {
        return curl_share_strerror($errorCode);
    }
}
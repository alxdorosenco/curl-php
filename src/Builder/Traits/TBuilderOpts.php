<?php

namespace AlxDorosenco\CurlPhp\Builder\Traits;

use AlxDorosenco\CurlPhp\Builder\ABuilder;

trait TBuilderOpts
{
    /**
     * @param bool $value
     * @return ABuilder
     */
    public function setAutoReferer(bool $value = true): ABuilder
    {
        $this->opts[CURLOPT_AUTOREFERER] = $value;

        return $this;
    }

    public function setCookieSession(bool $value = true): ABuilder
    {
        $this->opts[CURLOPT_COOKIESESSION] = $value;

        return $this;
    }

    public function setCertInfo(bool $value = true): ABuilder
    {
        $this->opts[CURLOPT_CERTINFO] = $value;

        return $this;
    }

    public function setConnectOnly(bool $value = true): ABuilder
    {
        $this->opts[CURLOPT_CONNECT_ONLY] = $value;

        return $this;
    }

    public function setCrlf(bool $value = true): ABuilder
    {
        $this->opts[CURLOPT_CRLF] = $value;

        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function setReturnTransfer(bool $value = true): ABuilder
    {
        $this->opts[CURLOPT_RETURNTRANSFER] = $value;

        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setUrl($value): ABuilder
    {
        $this->opts[CURLOPT_URL] = $value;

        return $this;
    }

    public function setCustomRequest($value): ABuilder
    {
        $this->opts[CURLOPT_CUSTOMREQUEST] = $value;

        return $this;
    }

    public function setPost($value = true): ABuilder
    {
        $this->opts[CURLOPT_POST] = $value;

        return $this;
    }

    public function setPostFields($value): ABuilder
    {
        $this->opts[CURLOPT_POSTFIELDS] = $value;

        return $this;
    }

    public function setHeader($value = true): ABuilder
    {
        $this->opts[CURLOPT_HEADER] = $value;

        return $this;
    }

    public function setHttpHeader($value = []): ABuilder
    {
        $this->opts[CURLOPT_HTTPHEADER] = $value;

        return $this;
    }

    public function setSslVerifyPeer($value = true): ABuilder
    {
        $this->opts[CURLOPT_SSL_VERIFYPEER] = $value;

        return $this;
    }

    public function setSslVerifyHost($value): ABuilder
    {
        $this->opts[CURLOPT_SSL_VERIFYPEER] = $value;

        return $this;
    }
}
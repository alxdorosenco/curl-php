<?php

namespace AlxDorosenco\CurlPhp;

final class CurlBuilder
{
    /**
     * @var array
     */
    private array $opts = [];

    /**
     * @return array
     */
    public function getOpts(): array
    {
        return $this->opts;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function setAutoReferer(bool $value = true): CurlBuilder
    {
        $this->opts[CURLOPT_AUTOREFERER] = $value;

        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function setReturnTransfer(bool $value = true): CurlBuilder
    {
        $this->opts[CURLOPT_RETURNTRANSFER] = $value;

        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setUrl($value): CurlBuilder
    {
        $this->opts[CURLOPT_URL] = $value;

        return $this;
    }

    public function setCustomRequest($value): CurlBuilder
    {
        $this->opts[CURLOPT_CUSTOMREQUEST] = $value;

        return $this;
    }

    public function setPost($value = true): CurlBuilder
    {
        $this->opts[CURLOPT_POST] = $value;

        return $this;
    }

    public function setPostFields($value): CurlBuilder
    {
        $this->opts[CURLOPT_POSTFIELDS] = $value;

        return $this;
    }

    public function setHeader($value = true): CurlBuilder
    {
        $this->opts[CURLOPT_HEADER] = $value;

        return $this;
    }

    public function setHttpHeader($value = []): CurlBuilder
    {
        $this->opts[CURLOPT_HTTPHEADER] = $value;

        return $this;
    }

    public function setSslVerifyPeer($value = true): CurlBuilder
    {
        $this->opts[CURLOPT_SSL_VERIFYPEER] = $value;

        return $this;
    }

    public function setSslVerifyHost($value): CurlBuilder
    {
        $this->opts[CURLOPT_SSL_VERIFYPEER] = $value;

        return $this;
    }
}
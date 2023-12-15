<?php

namespace AlxDorosenco\CurlPhp\Builder;

/**
 * https://www.php.net/manual/en/function.curl-share-setopt.php
 */
class BuilderShareOpts extends ABuilder
{
    public function setShare(int $value): static
    {
        $this->opts[CURLSHOPT_SHARE] = $value;

        return $this;
    }

    public function setUnShare(int $value): static
    {
        $this->opts[CURLSHOPT_UNSHARE] = $value;

        return $this;
    }
}
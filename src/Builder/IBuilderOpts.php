<?php

namespace AlxDorosenco\CurlPhp\Builder;

interface IBuilderOpts
{
    public function setAutoReferer(bool $value = true): self;

    public function setCookieSession(bool $value = true): self;
}
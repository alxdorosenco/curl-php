<?php

namespace AlxDorosenco\CurlPhp\Builder;

interface IBuilderOpts
{
    public function setAutoReferer(bool $value = true): ABuilder;

    public function setCookieSession(bool $value = true): ABuilder;
}
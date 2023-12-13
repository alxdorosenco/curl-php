<?php

namespace AlxDorosenco\CurlPhp\Builder;

interface IBuilderOpts extends IBuilder
{
    public function setAutoReferer(bool $value = true): IBuilder;

    public function setCookieSession(bool $value = true): IBuilder;
}
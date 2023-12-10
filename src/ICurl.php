<?php

namespace AlxDorosenco\CurlPhp;

use AlxDorosenco\CurlPhp\Builder\IBuilder;

interface ICurl
{
    public function build(IBuilder $builder): void;
}
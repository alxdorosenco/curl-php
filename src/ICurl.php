<?php

namespace AlxDorosenco\CurlPhp;

use AlxDorosenco\CurlPhp\Builder\ABuilder;

interface ICurl
{
    public function build(ABuilder $builder): void;
}
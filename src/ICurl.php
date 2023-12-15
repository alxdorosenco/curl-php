<?php

namespace AlxDorosenco\CurlPhp;

use AlxDorosenco\CurlPhp\Builder\ABuilder;

interface ICurl
{
    /**
     * @param ABuilder $builder
     * @return void
     */
    public function build(ABuilder $builder): void;
}
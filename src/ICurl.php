<?php

namespace AlxDorosenco\CurlPhp;

use AlxDorosenco\CurlPhp\Builder\IBuilder;

interface ICurl
{
    /**
     * @param IBuilder $builder
     * @return void
     */
    public function build(IBuilder $builder): void;
}
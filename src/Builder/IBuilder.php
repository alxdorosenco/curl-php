<?php

namespace AlxDorosenco\CurlPhp\Builder;

interface IBuilder
{
    /**
     * @return array
     */
    public function toArray(): array;

    /**
     * @param int $option
     * @param $value
     * @return $this
     */
    public function setOpt(int $option, $value): IBuilder;
}
<?php

namespace AlxDorosenco\CurlPhp\Builder;

abstract class ABuilder
{
    /**
     * @var array
     */
    protected array $opts = [];

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->opts;
    }

    /**
     * @param int $option
     * @param $value
     * @return $this
     */
    public function setOpt(int $option, $value): static
    {
        $this->opts[$option] = $value;

        return $this;
    }

    /**
     * @param int $option
     * @return mixed
     */
    public function getOpt(int $option): mixed
    {
        return $this->opts[$option];
    }
}
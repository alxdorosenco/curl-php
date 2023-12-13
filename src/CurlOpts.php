<?php

namespace AlxDorosenco\CurlPhp;

use AlxDorosenco\CurlPhp\Builder\IBuilderMultiOpts;
use AlxDorosenco\CurlPhp\Builder\IBuilderOpts;
use AlxDorosenco\CurlPhp\Builder\IBuilderShareOpts;
use AlxDorosenco\CurlPhp\Builder\Traits\TBuilderMultiOpts;
use AlxDorosenco\CurlPhp\Builder\Traits\TBuilderOpts;
use AlxDorosenco\CurlPhp\Builder\Traits\TBuilderShareOpts;

class CurlOpts implements IBuilderOpts, IBuilderMultiOpts, IBuilderShareOpts
{
    use TBuilderOpts;
    use TBuilderMultiOpts;
    use TBuilderShareOpts;

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
}
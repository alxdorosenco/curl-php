<?php

namespace AlxDorosenco\CurlPhp;

use AlxDorosenco\CurlPhp\Builder\ABuilder;
use AlxDorosenco\CurlPhp\Builder\IBuilderMultiOpts;
use AlxDorosenco\CurlPhp\Builder\IBuilderOpts;
use AlxDorosenco\CurlPhp\Builder\IBuilderShareOpts;
use AlxDorosenco\CurlPhp\Builder\Traits\TBuilderMultiOpts;
use AlxDorosenco\CurlPhp\Builder\Traits\TBuilderOpts;
use AlxDorosenco\CurlPhp\Builder\Traits\TBuilderShareOpts;

final class BuilderOpts extends ABuilder implements IBuilderOpts, IBuilderMultiOpts, IBuilderShareOpts
{
    use TBuilderOpts;
    use TBuilderMultiOpts;
    use TBuilderShareOpts;
}
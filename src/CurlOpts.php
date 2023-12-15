<?php

namespace AlxDorosenco\CurlPhp;

use AlxDorosenco\CurlPhp\Builder\BuilderMultiOpts;
use AlxDorosenco\CurlPhp\Builder\BuilderOpts;
use AlxDorosenco\CurlPhp\Builder\BuilderShareOpts;

class CurlOpts
{
    /**
     * @return BuilderOpts
     */
    public static function instance(): BuilderOpts
    {
        return new BuilderOpts();
    }

    /**
     * @return BuilderMultiOpts
     */
    public static function multi(): BuilderMultiOpts
    {
        return new BuilderMultiOpts();
    }

    /**
     * @return BuilderShareOpts
     */
    public static function share(): BuilderShareOpts
    {
        return new BuilderShareOpts();
    }
}
<?php

namespace AlxDorosenco\CurlPhp\Tests\Unit;

use AlxDorosenco\CurlPhp\CurlOpts;
use AlxDorosenco\CurlPhp\CurlShare;
use PHPUnit\Framework\TestCase;

class CurlShareTest extends TestCase
{
    public function testBuildMethod()
    {
        $this->expectNotToPerformAssertions();

        $curl = new CurlShare();
        $curl->build(
            CurlOpts::share()
        );
    }
}
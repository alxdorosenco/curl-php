<?php

namespace AlxDorosenco\CurlPhp\Tests\Unit;

use AlxDorosenco\CurlPhp\Curl;
use AlxDorosenco\CurlPhp\CurlOpts;
use PHPUnit\Framework\TestCase;

class CurlTest extends TestCase
{
    public function testBuildMethod()
    {
        $this->expectNotToPerformAssertions();

        $curl = new Curl();
        $curl->build(
            CurlOpts::instance()
        );
    }
}
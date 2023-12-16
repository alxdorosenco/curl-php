<?php

namespace AlxDorosenco\CurlPhp\Tests\Unit;

use AlxDorosenco\CurlPhp\CurlMulti;
use AlxDorosenco\CurlPhp\CurlOpts;
use PHPUnit\Framework\TestCase;

class CurlMultiTest extends TestCase
{
    public function testBuildMethod()
    {
        $this->expectNotToPerformAssertions();

        $curl = new CurlMulti();
        $curl->build(
            CurlOpts::multi()
        );
    }
}
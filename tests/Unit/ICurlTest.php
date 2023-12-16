<?php

namespace AlxDorosenco\CurlPhp\Tests\Unit;

use AlxDorosenco\CurlPhp\Builder\ABuilder;
use AlxDorosenco\CurlPhp\ICurl;
use PHPUnit\Framework\TestCase;

class ICurlTest extends TestCase
{
    public function testBuildMethod()
    {
        $this->expectNotToPerformAssertions();

        $aBuilder = $this->createStub(ABuilder::class);
        $iCurl = $this->createStub(ICurl::class);

        $iCurl->build($aBuilder);
    }
}
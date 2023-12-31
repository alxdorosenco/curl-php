<?php

namespace AlxDorosenco\CurlPhp\Tests\Unit\Builder;

use AlxDorosenco\CurlPhp\Builder\ABuilder;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ABuilderTest extends TestCase
{
    /**
     * @var (ABuilder&MockObject)|MockObject
     */
    private MockObject|ABuilder $stub;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->stub = $this
            ->getMockBuilder(ABuilder::class)
            ->getMock();
    }

    /**
     * @throws Exception
     */
    public function testToArrayMethod(): void
    {
        $this->stub
            ->method('toArray')
            ->willReturn([]);

        $this->assertSame([], $this->stub->toArray());
    }

    public function testSetOptMethod(): void
    {
        $option = CURL_HTTP_VERSION_1_0;
        $value = $this->anything();

        $this->stub
            ->method('setOpt')
            ->with($option, $value)
            ->willReturnSelf();

        $this->assertSame($this->stub, $this->stub->setOpt($option, $value));
    }

    public function testGetOptMethod(): void
    {
        $option = CURL_HTTP_VERSION_2_0;
        $value = $this->anything();

        $this->stub
            ->method('setOpt')
            ->with($option, $value)
            ->willReturnSelf();

        $this->stub
            ->method('getOpt')
            ->with($option)
            ->willReturn($value);

        $this->assertSame($value, $this->stub->getOpt($option));
    }
}
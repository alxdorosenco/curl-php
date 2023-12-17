<?php

namespace AlxDorosenco\CurlPhp\Tests\Feature;

use AlxDorosenco\CurlPhp\Curl;
use AlxDorosenco\CurlPhp\CurlOpts;
use PHPUnit\Framework\TestCase;

class CurlTest extends TestCase
{
    public function testCurlSimpleExample(): void
    {
        $curl = new Curl();

        $curl->build(
            CurlOpts::instance()
                ->setReturnTransfer()
                ->setUrl('https://google.com')
        );

        $out = $curl->exec();

        $curl->close();

        $this->assertIsString($out);
    }

    public function testCurlAdvancedExample(): void
    {
        $curl = new Curl();

        $curl->build(
            CurlOpts::instance()
                ->setReturnTransfer()
                ->setUserAgent('Dark Secret Ninja/1.0')
                ->setUrl('https://google.com')
                ->setCustomRequest('POST')
                ->setPostFields([
                    'key' => 'value'
                ])
                ->setHttpHeader([
                    'Content-Type: application/pdf'
                ])
                ->setHeader(false)
                ->setSslVerifyPeer(false)
                ->setSslVerifyHost(0)
        );

        $out = $curl->exec();
        $code = $curl->getInfo(CURLINFO_HTTP_CODE);

        $curl->close();

        $this->assertIsString($out);

        $this->assertIsInt($code);
        $this->assertEquals(405, $code);
    }
}
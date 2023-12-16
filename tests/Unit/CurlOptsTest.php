<?php

namespace AlxDorosenco\CurlPhp\Tests\Unit;

use AlxDorosenco\CurlPhp\Builder\BuilderMultiOpts;
use AlxDorosenco\CurlPhp\Builder\BuilderOpts;
use AlxDorosenco\CurlPhp\Builder\BuilderShareOpts;
use AlxDorosenco\CurlPhp\CurlOpts;
use PHPUnit\Framework\TestCase;

class CurlOptsTest extends TestCase
{
    public function testInstanceMethod()
    {
        $object = CurlOpts::instance();

        $this->assertIsObject($object);
        $this->assertSame(BuilderOpts::class, get_class($object));
    }

    public function testMultiMethod()
    {
        $object = CurlOpts::multi();

        $this->assertIsObject($object);
        $this->assertSame(BuilderMultiOpts::class, get_class($object));
    }

    public function testShareMethod()
    {
        $object = CurlOpts::share();

        $this->assertIsObject($object);
        $this->assertSame(BuilderShareOpts::class, get_class($object));
    }
}
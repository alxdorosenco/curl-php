<?php

namespace AlxDorosenco\CurlPhp\Tests\Unit\Builder;

use AlxDorosenco\CurlPhp\Builder\ABuilder;
use AlxDorosenco\CurlPhp\Builder\BuilderShareOpts;
use PHPUnit\Framework\TestCase;

class BuilderShareOptsTest extends TestCase
{
    private BuilderShareOpts $builder;

    public function setUp(): void
    {
        $this->builder = new BuilderShareOpts();

        parent::setUp(); // TODO: Change the autogenerated stub
    }

    /**
     * @return array[]
     */
    public static function methodsProvider(): array
    {
        return [
            ['share', CURL_LOCK_DATA_COOKIE],
            ['unShare', CURL_LOCK_DATA_DNS]
        ];
    }

    /**
     * @dataProvider methodsProvider
     * @return void
     */
    public function testMethod(string $method, $value): void
    {
        $methodName = 'set'.ucfirst($method);

        $stub = $this->builder->$methodName($value);

        $this->assertIsObject($stub);
        $this->assertSame(ABuilder::class, get_parent_class($stub));
        $this->assertSame(BuilderShareOpts::class, get_class($stub));
    }
}
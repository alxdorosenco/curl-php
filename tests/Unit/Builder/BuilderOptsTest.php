<?php

namespace AlxDorosenco\CurlPhp\Tests\Unit\Builder;

use AlxDorosenco\CurlPhp\Builder\ABuilder;
use AlxDorosenco\CurlPhp\Builder\BuilderOpts;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class BuilderOptsTest extends TestCase
{
    private BuilderOpts $builder;

    public function setUp(): void
    {
        $this->builder = new BuilderOpts();

        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public static function tearDownAfterClass(): void
    {
        unlink('test.txt');
        unlink('test2.txt');
        unlink('test3.txt');
        unlink('test4.txt');

        parent::tearDownAfterClass(); // TODO: Change the autogenerated stub
    }

    /**
     * @return array[]
     * @throws \Exception
     */
    public static function methodsProvider(): array
    {
        $faker = Factory::create();

        return [
            ['autoReferer', true],
            ['cookieSession', false],
            ['certInfo', true],
            ['connectOnly', false],
            ['crlf', true],
            ['disallowUsernameInUrl', false],
            ['dnsShuffleAddresses', true],
            ['haproxyProtocol', false],
            ['sshCompression', true],
            ['dnsUseGlobalCache', false],
            ['failOnError', true],
            ['sslFalseStart', false],
            ['fileTime', true],
            ['followLocation', false],
            ['cookieSession', true],
            ['forbidReuse', false],
            ['freshConnect', true],
            ['ftpUseEprt', false],
            ['ftpUseEpsv', true],
            ['ftpCreateMissingDirs', false],
            ['ftpAppend', true],
            ['tcpNodeLay', false],
            ['ftpListOnly', false],
            ['header', true],
            ['headerOut', false],
            ['http09Allowed', true],
            ['httpGet', false],
            ['httpProxyTunnel', true],
            ['httpContentDecoding', false],
            ['keepSendingOnError', true],
            ['netrc', false],
            ['nobody', true],
            ['noProgress', false],
            ['noSignal', true],
            ['pathAsIs', false],
            ['pipeWait', true],
            ['post', false],
            ['put', true],
            ['returnTransfer', false],
            ['saslIr', true],
            ['sslEnableAlpn', false],
            ['sslEnableNpn', true],
            ['sslVerifyPeer', false],
            ['sslVerifyStatus', true],
            ['proxySslVerifyPeer', false],
            ['suppressConnectHeaders', true],
            ['tcpFastOpen', false],
            ['tftpNoOptions', true],
            ['transferText', false],
            ['unrestrictedAuth', true],
            ['upload', false],
            ['verbose', true],
            ['bufferSize', $faker->randomNumber()],
            ['connectTimeout', $faker->randomNumber()],
            ['connectTimeoutMs', $faker->randomNumber()],
            ['cDnsCacheTimeout', $faker->randomNumber()],
            ['expect100TimeoutMs', $faker->randomNumber()],
            ['ftpSslAuth', $faker->randomNumber()],
            ['headerOpt', $faker->randomNumber()],
            ['httpVersion', $faker->randomNumber()],
            ['httpAuth', $faker->randomNumber()],
            ['infileSize', $faker->randomNumber()],
            ['lowSpeedLimit', $faker->randomNumber()],
            ['lowSpeedTime', $faker->randomNumber()],
            ['maxConnects', $faker->randomNumber()],
            ['maxReDirs', $faker->randomNumber()],
            ['port', $faker->randomNumber()],
            ['postReDir', $faker->randomNumber()],
            ['protocols', $faker->randomNumber()],
            ['proxyAuth', $faker->randomNumber()],
            ['proxyPort', $faker->randomNumber()],
            ['proxyType', $faker->randomNumber()],
            ['reDirProtocols', $faker->randomNumber()],
            ['resumeFrom', $faker->randomNumber()],
            ['sockSsAuth', $faker->randomNumber()],
            ['sslOptions', $faker->randomNumber()],
            ['sslVerifyHost', $faker->randomNumber()],
            ['sslVersion', $faker->randomNumber()],
            ['proxySslOptions', $faker->randomNumber()],
            ['proxySslVerifyHost', $faker->randomNumber()],
            ['proxySslVersion', $faker->randomNumber()],
            ['streamWeight', $faker->randomNumber()],
            ['tcpKeepAlive', $faker->randomNumber()],
            ['tcpKeepDle', $faker->randomNumber()],
            ['tcpKeepIntVl', $faker->randomNumber()],
            ['timeCondition', $faker->randomNumber()],
            ['timeOut', $faker->randomNumber()],
            ['timeOutMs', $faker->randomNumber()],
            ['timeValue', $faker->randomNumber()],
            ['timeValueLarge', $faker->randomNumber()],
            ['maxReCvSpeedLarge', $faker->randomNumber()],
            ['maxSendSpeedLarge', $faker->randomNumber()],
            ['sshAuthTypes', $faker->randomNumber()],
            ['ipResolve', $faker->randomNumber()],
            ['ftpFileMethod', $faker->randomNumber()],
            ['abstractUnixSocket', $faker->slug()],
            ['catInfo', $faker->slug()],
            ['cookie', $faker->slug()],
            ['cookieFile', $faker->slug()],
            ['cookieJar', $faker->slug()],
            ['cookieList', $faker->slug()],
            ['customRequest', $faker->slug()],
            ['defaultProtocol', $faker->slug()],
            ['dnsInterface', $faker->slug()],
            ['dnsLocalIp4', $faker->slug()],
            ['dnsLocalIp6', $faker->slug()],
            ['egdSocket', $faker->slug()],
            ['encoding', $faker->slug()],
            ['ftpPort', $faker->slug()],
            ['interface', $faker->slug()],
            ['keyPassWd', $faker->slug()],
            ['krb4Level', $faker->slug()],
            ['loginOptions', $faker->slug()],
            ['pinnedPublicKey', $faker->slug()],
            ['cookieFile', $faker->slug()],
            ['postFields', ['test' => $faker->slug()]],
            ['private', $faker->slug()],
            ['preProxy', $faker->slug()],
            ['proxy', $faker->slug()],
            ['proxyServiceName', $faker->slug()],
            ['proxyCaInfo', $faker->slug()],
            ['proxyCaPath', $faker->slug()],
            ['proxyCrlFile', $faker->slug()],
            ['proxyKeyPassWd', $faker->slug()],
            ['proxyKeyPinnedPublicKey', $faker->slug()],
            ['proxySslCert', $faker->slug()],
            ['proxySslCertType', $faker->slug()],
            ['proxySslCipherList', $faker->slug()],
            ['proxyTls13Ciphers', $faker->slug()],
            ['proxySslKey', $faker->slug()],
            ['proxySslKeyType', $faker->slug()],
            ['proxyTlsAuthPassword', $faker->slug()],
            ['proxyTlsAuthType', $faker->slug()],
            ['proxyTlsAuthUsername', $faker->slug()],
            ['proxyUserPwd', $faker->slug()],
            ['randomFile', $faker->slug()],
            ['range', $faker->slug()],
            ['referer', $faker->slug()],
            ['serviceName', $faker->slug()],
            ['sshHostPublicKeyMd5', $faker->slug()],
            ['sshPublicKeyFile', $faker->slug()],
            ['sshPrivateKeyFile', $faker->slug()],
            ['sslCipherList', $faker->slug()],
            ['sslCert', $faker->slug()],
            ['sslCertPassWd', $faker->slug()],
            ['sslCertType', $faker->slug()],
            ['sslEngine', $faker->slug()],
            ['sslEngineDefault', $faker->slug()],
            ['sslKey', $faker->slug()],
            ['sslKeyPassWd', $faker->slug()],
            ['sslKeyType', $faker->slug()],
            ['tls13Ciphers', $faker->slug()],
            ['unixSocketPath', $faker->slug()],
            ['url', $faker->slug()],
            ['userAgent', $faker->slug()],
            ['userName', $faker->slug()],
            ['password', $faker->slug()],
            ['userPwd', $faker->slug()],
            ['xoAuth2Bearer', $faker->slug()],
            ['connectTo', []],
            ['http200Aliases', []],
            ['httpHeader', [
                'Content-type: application/xml',
                'Authorization: gfhjui'
            ]],
            ['postQuote', ['CWD bussys/','LIST']],
            ['proxyHeader', []],
            ['quote', ['PWD']],
            ['resolve', ['drupal.org:443:127.0.0.1']],
            ['file', fopen('test.txt', 'wb')],
            ['inFile', fopen('test2.txt', 'wb')],
            ['stdErr', fopen('test3.txt', 'wb')],
            ['writeHeader', fopen('test4.txt', 'wb')],
            ['headerFunction', function(int $a, int $b) { return $a + $b; }],
            ['progressFunction', function(int $a, int $b) { return $a + $b; }],
            ['readFunction', function(int $a, int $b) { return $a + $b; }],
            ['writeFunction', function(int $a, int $b) { return $a + $b; }],
            ['share', curl_share_init()]
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
        $this->assertSame(BuilderOpts::class, get_class($stub));
    }
}
# Curl PHP

This is a PHP package of the Curl library who helps work with cUrl with more shortly and comfortable.

You can find additional information in the documentation via this link

<a href="https://www.php.net/manual/en/book.curl.php">https://www.php.net/manual/en/book.curl.php </a>

# Requirements

From PHP version 8.0

# How to install?

```
composer require alxdorosenco/curl-php
```
For PHP versions less 8.2

```
composer require alxdorosenco/curl-php 8.0.*
```

## Example

Standard code

```php
$curl = curl_init();

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'Dark Secret Ninja/1.0');
curl_setopt($curl, CURLOPT_URL, 'https://example.com');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, [
    'key' => 'value'
]);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Content-Type: application/pdf'
]);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

$out = curl_exec($curl);
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);
```

Package code
```php
require __DIR__ . '/vendor/autoload.php';
use AlxDorosenco\CurlPhp\Curl;
use AlxDorosenco\CurlPhp\CurlOpts;

$curl = new Curl();

$curl->build(
    CurlOpts::instance()
        ->setReturnTransfer()
        ->setUserAgent('Dark Secret Ninja/1.0')
        ->setUrl('https://example.com')
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
```

## License
Released under the MIT License, see [LICENSE](LICENSE).
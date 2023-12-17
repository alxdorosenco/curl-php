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

## Example №1

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

## Example №2

Standard code

```php
$ch1 = curl_init();
$ch2 = curl_init();

curl_setopt($ch1, CURLOPT_URL, "https://example.com");
curl_setopt($ch1, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_URL, "https://example.com");
curl_setopt($ch2, CURLOPT_HEADER, 0);

$mh = curl_multi_init();

curl_multi_add_handle($mh,$ch1);
curl_multi_add_handle($mh,$ch2);

do {
    $status = curl_multi_exec($mh, $active);
    if ($active) {
        curl_multi_select($mh);
    }
} while ($active && $status == CURLM_OK);

curl_multi_remove_handle($mh, $ch1);
curl_multi_remove_handle($mh, $ch2);
curl_multi_close($mh);
```

Package code
```php
require __DIR__ . '/vendor/autoload.php';
use AlxDorosenco\CurlPhp\Curl;
use AlxDorosenco\CurlPhp\CurlMulti;
use AlxDorosenco\CurlPhp\CurlOpts;

$ch1 = new Curl();
$ch2 = new Curl();

$ch1->build(
    CurlOpts::instance()
        ->setUrl('https://example.com')
        ->setHeader(false)
);

$ch2->build(
    CurlOpts::instance()
        ->setUrl('https://example.com')
        ->setHeader(false)
);

$mh = new CurlMulti();

$mh->addHandle($ch1);
$mh->addHandle($ch2);

do {
    $status = $mh->exec($active);
    if ($active) {
        $mh->select($mh);
    }
} while ($active && $status == CURLM_OK);

$mh->removeHandle($ch1);
$mh->removeHandle($ch2);
$mh->close();
```

## Example №3

Standard code

```php
$sh = curl_share_init();
curl_share_setopt($sh, CURLSHOPT_SHARE, CURL_LOCK_DATA_COOKIE);

$ch1 = curl_init("http://example.com/");
curl_setopt($ch1, CURLOPT_SHARE, $sh);

curl_exec($ch1);

$ch2 = curl_init("http://php.net/");
curl_setopt($ch2, CURLOPT_SHARE, $sh);

curl_exec($ch2);

curl_share_close($sh);

curl_close($ch1);
curl_close($ch2);
```

Package code
```php
require __DIR__ . '/vendor/autoload.php';
use AlxDorosenco\CurlPhp\Curl;
use AlxDorosenco\CurlPhp\CurlShare;
use AlxDorosenco\CurlPhp\CurlOpts;

$sh = new CurlShare();
$sh->build(
    CurlOpts::share()->setShare(CURLSHOPT_SHARE, CURL_LOCK_DATA_COOKIE)
);

$ch1 = new Curl("http://example.com/");
$ch1->build(
    CurlOpts::instance()->setShare(CURLOPT_SHARE, $sh)
);

$ch1->exec();

$ch2 = new Curl("http://php.net/");
$ch2->build(
    CurlOpts::instance()->setShare(CURLOPT_SHARE, $sh)
);

$ch2->exec();

$sh->close();

$ch1->close();
$ch2->close();
```

## License
Released under the MIT License, see [LICENSE](LICENSE).
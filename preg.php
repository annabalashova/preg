<?php
$array = [
    'https://itea.ua',
    'https://wikipedia.org',
    'https://taobao.com',
    'https://rozetka.com.ua',
    'https://www.google.com',
    'https://www.amazon.com',
    'https://www.php.net',
    'https://allegro.pl',
    'https://telegram.org',
    'https://www.ebay.com',
    'https://www.mobile.de',
    'https://prom.ua',
    'https://aliexpress.com',
    'https://www.ukr.net',
];

function domainSearch($domain, $array)
{
    $strarray = implode(",", $array);
    $pattern = "/https:\/{2}[\w\.]+$domain/";

    preg_match_all($pattern, $strarray, $matches);

    return($matches);
}
$res = domainSearch('com',$array);
print_r($res);

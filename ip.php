<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://ipv4.internet.yandex.ru/api/v0/ip");
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, "https://www.google.ru/");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);

$output = curl_exec($ch);
$info = curl_getinfo($ch);
$outback[0] = $info['http_code'];
$outback[1] = $info['total_time'];
var_dump($outback);
echo $output;
?>

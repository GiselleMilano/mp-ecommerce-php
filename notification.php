<?php
require __DIR__  . '/vendor/autoload.php';
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');

$datas = $_REQUEST;

// print_r($datas);

// foreach ($datas as $d) {
file_put_contents('data.txt', print_r($datas, true), FILE_APPEND);
file_put_contents('data.txt',"\n", FILE_APPEND);

// }

header("HTTP/1.0", 200);

?>
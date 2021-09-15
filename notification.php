<?php
require __DIR__  . '/vendor/autoload.php';
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');

$datas = array($_POST);

foreach ($datas as $d) {
    file_put_contents('https://gisellemilano-mp-ecommerce-php.herokuapp.com/data.txt', $d, FILE_APPEND);
    file_put_contents('https://gisellemilano-mp-ecommerce-php.herokuapp.com/data.txt',"\n", FILE_APPEND);
}

?>
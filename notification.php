<?php
require __DIR__  . '/vendor/autoload.php';
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');

$notification = $_REQUEST;

print_r($notification);

?>
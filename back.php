<?php

require __DIR__  . '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");

$payment_status = $_GET["status"];

switch($payment_status) {
    case "success":
        echo("El pago fue exitoso.");
        echo("Payment_ID: " . $_GET['payment_id']);
        echo("Payment_Type: "$_GET['payment_type']);
        echo("External_Reference: "$_GET['external_reference']);
        break;

    case "pending":
        echo("El pago se encuentra pendiente o en proceso.");
        break;

    case "failure":
        echo("El pago ha sido rechazado o no ha finalizado correctamente.");
        break;
}

?>

<a href="https://gisellemilano-mp-ecommerce-php.herokuapp.com">continuar</a>
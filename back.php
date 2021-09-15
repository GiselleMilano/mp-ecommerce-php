<?php

require __DIR__  . '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");

$payment_status = $_GET["status"];

switch($payment_status) {
    case "approved":
        echo "El pago fue aprovado correctamente" . "<br/>";
        
        echo "Payment_ID: " . $_GET['payment_id'] . "<br/>";
        
        echo "Payment_Type: " . $_GET['payment_type'] . "<br/>";
        
        echo "External_Reference: " . $_GET['external_reference'] . "<br/>";
        $preference->notificaction_url = "https://gisellemilano-mp-ecommerce-php.herokuapp.com/notificaction.php";
        break;

    case "pending":
        echo "El pago se encuentra pendiente o en proceso." . "<br/>";
        break;

    case "failure":
        echo "El pago ha sido rechazado o no ha finalizado correctamente." . "<br/>";
        break;
}

?>

<a href="https://gisellemilano-mp-ecommerce-php.herokuapp.com/">continuar</a>
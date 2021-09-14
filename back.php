<?php

require __DIR__  . '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");

echo($_GET["status"]);
echo($_GET["payment_id"]);
echo($_GET["collection_id"]);

// switch($_GET["status"]) {
    // case "success":
        // echo("El pago fue exitoso.");
        // break;
    // case "pending":
        // echo("El pago se encuentra pendiente o en proceso.");
        // break;
    // case "failure":
        // echo("El pago ha sido rechazado o no ha finalizado correctamente.");
        // break;
    // case "approved":
        // echo("El pago ha sido aprovado correctamente.");
        // break;
// }

?>
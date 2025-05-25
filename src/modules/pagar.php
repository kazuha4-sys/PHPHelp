<?php
require_once __DIR__ . '/vendor/autoload.php';

use MercadoPago\SDK;
use MercadoPago\Preference;
use MercadoPago\Item;

// Define o token do Mercado Pago
SDK::setAccessToken('SEU_TOKEN_AQUI'); // ex: TEST-1234567890-abcdef

$item = new Item();
$item->title = "Curso Supimpa com Pix";
$item->quantity = 1;
$item->unit_price = 49.90;

$preference = new Preference();
$preference->items = [$item];
$preference->payment_methods = [
    "excluded_payment_types" => [
        ["id" => "credit_card"],
        ["id" => "debit_card"],
        ["id" => "ticket"] // remove boleto se quiser só Pix
    ],
    "default_payment_method_id" => "pix"
];
$preference->save();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Pagamento com Pix</title>
</head>
<body>
    <h2>Pagamento com Pix no Mercado Pago</h2>
    <p>Escaneia o QR Code ou clica no botão abaixo:</p>
    <a href="<?= $preference->init_point ?>" target="_blank">Pagar com Pix ⚡</a>
    <br><br>
    <iframe src="<?= $preference->init_point ?>" width="600" height="400" style="border: none;"></iframe>
</body>
</html>

<?php

// Código para relaizar pagamentos com mercado pago(Cartão de Crédito)
require '../vendor/autoload.php';
require '../PhpHelp/env/.env'

MercadoPago\SDK::setAccessToken("SEU_ACCESS_TOKEN"); 


$payment = new MercadoPago\Payment();
$payment->trainsiction_amount = 100.00;
$payment->token = "TOKEN_CARTAO";
$payment->description = "DESCRICAO";
$payment->installments = 1;
$payment->payment_method_id = "visa";
$payment->payer = array(
    "email" => "user@testcom"
);

$payment->save();

if ($payment-> status == "approved") {
    echo "Pagamento efetuado com sucesso";
} else {
    echo "Pagamento não efetuado". $payment->status;
}
?>
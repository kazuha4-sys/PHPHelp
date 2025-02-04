<?php 
// Exemplo de código de pagamento com PIX no Mercado Pago
require '../PhpHelp/vendor/autoload.php';

MercadoPago\SDK::setAccessToken("SEU_ACCESS_TOKEN");

$payment = new MercadoPago\Payment();
$payment->transaction_amount = 100.00;
$payment->token = "TOKEN_PIX";
$payment->description = "DESCRICAO";
$payment->installments = 1;
$payment->payment_method_id = "pix";
$payment->payer = array(
    "email" => "user@testcom"
);

$payment->save();

if ($payment->status == "pedding") {
    echo "Pagamento pendente, aguarde a confirmação";
    echo "Copie e cole o código PIX: ". $payment->point_of_interaction->transaction_data->qr_code;
}else {
    echo "Erro no pagamento: " . $payment->status;
}
?>
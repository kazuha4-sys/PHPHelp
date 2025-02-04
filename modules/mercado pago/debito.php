<?php
require '../PhpHelp/vendor/autoload.php';
require "../PhpHelp/env/autoload.php";

echo getenv('TOKEN');

MercadoPago/SDK::setAcessToken('SEU_ACCESS_TOKEN');

$payment = new MercadoPago\Payment();
$payment->transaction_amount = 100.00; // Valor da compra
$payment->token = "TOKEN_PIX"; // Token do cartão
$payment->description = "DESCRICAO"; // Descrição do produto
$payment->installments = 1; // Parcelas (para débito, smepre 1 parcela)
$payment->payment_method_id = "debit_card"; // Método de pagamento
$payment->payer = array(
    "email" => "user@testcom",
    'identification' => array(
        "type" => "CPF",
        "number" => "12345678910"
    )

);

// Salva e processa o pagamento
$payment->save();

// Verifica o status da transação
if ($payment->status == "approved") {
    echo "Pagamento aprovado!";
} else {
    echo "Erro no pagamento: " . $payment->status . " - " . $payment->status_detail;
}

?>
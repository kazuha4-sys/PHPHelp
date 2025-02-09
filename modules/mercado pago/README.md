* /Mercado Pago 

Está pasta contém dois arquivos principais:
- **credito.php**: Contém as configurações e o script para você adicionar o método de credito no seus pagamentos de produtos no seu site.

- **debito.php**: Contém as configurações e o script para você adiconar o método de debito no seus pagamentos de produtos no seu site.

## Estrutura da pasta é as seguinte :
mercadoPago/
├── credito.php        # Arquivo para configurações de pagamentos em cartão de credito
├── debito.php        # Arquivo para configurações de pagamentos em carão de debito
├── pix.php           # Arquivo para configurações de pagamentos em pix

## Como usar 

## 1. Configuração do Ambiente 

A pasta `env` entre e mude as configurações do arquivo `.env` para as suas configurações.

**IMPORTANTE**: Nunca compartilhe as informações da pasta ``env`` publicamente, pois ele contém informações sensiveis.

## 2. Mude algumas coisas para o front-end

Dependendo do seu projeto você tera que mudar algumas coisas em certos arquivos como 
```php 
// PIX.PHP
$payment->transaction_amount = 100.00;
$payment->token = "TOKEN_PIX";
$payment->description = "DESCRICAO";
$payment->payer = array(
    "email" => "user@testcom"
);
```

```php
// DEBITO.PHP
$payment->transaction_amount = 100.00; // Valor da compra
$payment->token = "TOKEN_PIX"; // Token do cartão
$payment->description = "DESCRICAO"; // Descrição do produto
$payment->payer = array(
    "email" => "user@testcom",
    'identification' => array(
        "type" => "CPF",
        "number" => "12345678910"
    )

);
```

```php
//CREDITO.PHP

$payment->trainsiction_amount = 100.00;
$payment->token = "TOKEN_CARTAO";
$payment->description = "DESCRICAO";
$payment->payer = array(
    "email" => "user@testcom"
);
```
### 3. Exemplo de Uso
No seu projeto, basta você adaptar os scripts para seu código.

## Contribuições 🤝

Se você deseja contribuir para este projeto, basta fazer um fork, criar uma branch com suas mudanças e enviar um pull request.

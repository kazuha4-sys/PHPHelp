<?php
// Cross-Site Request Forgery (CSRF)

// Como funciona o CSRF?
// O atacante engana o usurio para executar açoes indesejadas (ex: transferir dinhiero).

// Exemplo:
// Se um site permite requisições POST sem autenticação adequada, um invasor pode forjar requisições maliciosas.

// Formas de previnir:
// Usar tokens CSRF:
$_SESSION['token'] = bin2hex(random_bytes(32));

// Verificar o token antes de processar uma requisição:
if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("C:/DEDSEC CSRF detectado!");
}
?>
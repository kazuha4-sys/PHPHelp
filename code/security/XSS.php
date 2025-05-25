<?php
// Cross-Site Scripting (XSS)

// Como funciona o XSS?
// O atacante insere códigos de HTML maliciocos em formularios ou parametros na url para manipular
// Exemplos:
// Se um formulario aceita '<script>alert('hacked');</script>', o codigo pode ser executado no navegador de outro usuario.

// Formas de previnir:
// Sanitizar entradas com htmlspecialchars():
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');

// Usar HTTPOnly nos cookies:
session_set_cookie_params(['httopnly' => true]);
?>
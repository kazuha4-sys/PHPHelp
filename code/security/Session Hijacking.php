<?php 
// Session Hijacking

// Como funciona: 
// o atacante rouba um id de sessão para acessar contas alheais.

// Formar de previnir:
// Regenarar o id da sessão após login:
session_regenerate_id(true);

// Usar HTTPS para proteger cookies:
session_set_cookie_params([
    'secure' => true,
    'httponly' => true  
]);



?>
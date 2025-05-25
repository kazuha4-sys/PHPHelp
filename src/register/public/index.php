<?php

// Arquivo de entrada do app 

require_once __DIR__ . '/../../../vendor/autoload.php';

use PHPHelp\Controllers\AuthController;

$auth = new AuthController();

// Exemplo de uso (em produção, tu usaria um router)
if ($_GET['action'] === 'register') {
    $auth->register();
} else {
    $auth->login();
}

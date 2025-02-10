<?php
$router->add('', function() {
    require '../views/home.php';
});
$router->add('sobre', function() {
    require '../views/sobre.php';
});
$router->add('contato', function() {
    require '../views/contato.php';
});

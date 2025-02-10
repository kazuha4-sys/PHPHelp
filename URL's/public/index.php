<?php
require '../app/core/Router.php';
require '../app/routes/web.php';

$router = new Router();
require '../app/routes/web.php';
$router->dispatch($_SERVER['REQUEST_URI']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
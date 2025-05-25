<?php 

require_once __DIR__ . '/../vendor/autoload';

use PHPHelp\Controller\RegisterController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new RegisterController();
    $controller->handleRegistration($_POST);
} else {
    echo '<form method="POST>
        Username: <input type="text" name="username"><br>
        Email: <input type="email" name"email"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Register">
    </form>';
}
?>


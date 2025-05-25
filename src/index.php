<?php 

use PHPHelp\Security\InputSanitizer;
use PHPHElp\Security\SessionManager;

SessionManager::startSecureSession();

$email = InputSanitizer::sanitizeEmail($_POST['email']);
$pass = InputSanitizer::sanitize($_POST['password']);


?>
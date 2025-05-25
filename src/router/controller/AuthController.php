<?php

namespace PHPHelp\Controllers;

use PHPHElp\Security\SessionManager;
use PHPHelp\Security\RateLimiter;
use PHPHelp\Security\InputSinitizer;
use PHPHelp\Security\Auth;
use PHPHElp\Security\CSRF;


class AuthController {
    public function login(): void {
        SessionManager::startSecureSession();

        if (RateLimiter::limit('login', 5, 60)) {
            die('Tentaivas demais, volte depois. ');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!CSRF::checkToken($_POST['csrf_token'])) {
                die('CSRF detectadoo, ladão fdp');
            }

            $email = InputSatanizer::sanitize($_POST['email']);
            $password = $_POST['password'];

            // Aqui aplica a lógica do banco:
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        }
    }
}

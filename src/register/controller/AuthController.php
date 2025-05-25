<?php 

namespace PHPHelp\Controller;

use PHPHelp\Security\SessionManager;
use PHPHelp\Security\InputSanitizer;
use PHPHelp\Auth\AuthService;

class AuthController {
    public function register(): void {
        SessionManager::startSecureSession();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                // Corrige o nome do campo
                $email = InputSanitizer::sanitize($_POST['email']);
                $password = InputSanitizer::sanitize($_POST['password']);

                if (AuthService::register($email, $password)) {
                    http_response_code(201); // Created
                    echo 'Registro com Sucesso! 🎉';
                } else {
                    http_response_code(400); // Bad Request
                    echo 'Erro ao registrar. 😕';
                    error_log("Erro no registro do usuário: $email");
                }
            } catch (Exception $e) {
                error_log("Erro fatal no registro: " . $e->getMessage());

                http_response_code(500); // Internal Server Error
                echo 'Erro interno. 🤯 Tenta novamente mais tarde.';
            }
        } else {
            include __DIR__ . '/../views/register.php';
        }
    }


    public function login(): void {
        SessionManager::startSecureSession();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $email = InputSanitizer::sanitize($_POST['email']);
                $password = InputSanitizer::sanitize($_POST['password']);
                $name = InputSanitizer::sanitize($_POST['username']);

                if (AuthService::login($email, $password, $name)) {
                    echo 'Login efetuado com sucesso 🚀';
                } else {
                    // login deu ruim mas sem exception
                    http_response_code(401);
                    echo 'Credenciais inválidas 😬';
                }
            } catch (Exception $e) {
                error_log("Erro na efetuação de login: " . $e->getMessage());
                http_response_code(500); // erro interno
                echo 'Erro interno, tenta de novo mais tarde 😓';
            }
        } else {
            include __DIR__ . '/../views/login.php';
        }
    }
}
?>
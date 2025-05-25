<?php
namespace PHPHelp\Controller;

use PHPHelp\Model\User;
use PHPHelp\Service\RegisterService;

class RegisterController {
    public function handleRegistration($post) {
        $user = new User($post['username'], $post['email'], $post['password']);
        $service = new RegisterService();

        if ($service->register($user)) {
            echo "Verifique seu email para validar o registro.";
        } else {
            echo "Erro ao registrar.";
        }
    }
}

<?php 

namespace PHPHelp\security;

class CSRF {
    // gera a senha e salva o token CSRF 
    public static function generateToken(): string {
        if (empty($_SESSION)) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    //retorna o token atual 
    public static function getToken(): string {
        return $_SESSION['csrf_token'] ?? self::generateToken();
    }

    // Verificar se o token enviado é válido
    public static function checkToken(string $token): bool {
        return hash_equals($_SESSION['csrf_token'] ?? '', $token);
    }
}

?>
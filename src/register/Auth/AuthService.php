<?php

namespace PHPHelp\Auth;

use PHPHelp\Config\Database;

class AuthService {
    public static function register(string $email, string $password): bool {
        $pdo = Database::connect();
        $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $stmt->execute([$email, $hash]);
    }

    public static function login(string $email, string $password): bool {
        $pdo = Database::connect();
        $stmt = $pdo->prepare("SELECT id, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            return true;
        }
        return false;
    }
}

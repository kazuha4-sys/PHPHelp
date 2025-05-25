<?php

namespace PHPHelp\Security;

class SessionManager {
    public static function startSecureSession(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            // Evita fixação de sessão
            ini_set('session.use_strict_mode', '1');
            session_start();
            session_regenerate_id(true);
        }
    }

    public static function destroySession(): void
    {
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
    }

    public static function isLoggedIn(): bool
    {
        return isset($_SESSION['user_id']);
    }
}

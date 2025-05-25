<?php 
namespace PHPHelp\Service;

use PHPHelp\Model\User;
use PHPHelp\Config\AppConfig;

class RegisterService  {
    public function register(User $user) {
        $conn = AppConfig::getDBConnection();

        $stmt = $conn->prepare("INSERT INTO users (username, email, password, code) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $user->username, $user->email, $user->password, $user->code);

        if ($stmt->execute()) {
            shell_exec("python3 send_email.py {$user->email} {$user->code}");
            return true;
        }

        return false;
    }
}


?>
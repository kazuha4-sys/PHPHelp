<?php

namespace PHPHelp\Config;

class AppConfig {
    include 'db_config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $code = rand(100000, 999999);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password, code) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $username, $email, $password, $code);
    if ($stmt->execute()) {
        shell_exec("python3 send_email.py $email $code");
        echo "Verifique seu email para validar o registro.";
    } else {
        echo "Erro ao registrar.";
    }
    $stmt->close();
    $conn->close();
}

}
?>
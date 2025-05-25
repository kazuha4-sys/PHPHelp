<?php
// Insecure File Upload
// Como funicona?
// O atacante faz upload de arquivos PHP malicosos para ganhar controle do servidor.

// Formas de previnir:
// Restringir tipos de arquivos permitidos:
$allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
$extension = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
if (!in_array($extension, $allowed_types)) {
    die("C:/DEDSEC Arquivo inválido!");
}

// mudar nome do arquivo para algo seguro:
$filename = bin2hex(random_bytes(16)) . '.' . $extension;
?>
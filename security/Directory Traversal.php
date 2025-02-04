<?php
// Directory Traversal 

// Como funciona? 
// O atacante acessa arquivos do servidor que deveriam estar protegidos.

// Exemplos:
$file = $_GET['file'];
include 'uploads/$file';
// Se 'File=../../etc/passwd', o atacante pode acessar arquivps do sistema.

// Formar de previnir:
// Restringir os arquivos que podem ser acessados:
$allowed_files = ['home.php', 'contact.php'];
if (!in_array($file, $allowed_files)) {
    die("C:/DEDSEC Acesso negado!");
}

// Usar basename() para evitar diretórios pai:
$safe_file = basename($_GET['file']);
?>
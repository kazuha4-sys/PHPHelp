<?php
// Conexão e configuração do database


// Para fazer a conexão com o database SQl, vc pode 
// fazer pelo metodo da variavel ou pelo metodo da constante,,
// nos dois vão dar o mesmo resultado 

// VARIAVEL
// $localhost = "localhost"; // ou 127.0.0.1
// $user = "root"; // Mude 'root' para o usuario que vc colocou 
// $password = ""; // Caso voce tenha uma senha
// $database = "teste" // Mude 'teste' para o nome da sua database criada no sql

// CONSTANTE
const DB_HOST = 'localhost'; // Altere se necessário
const DB_USER = 'root'; // Altere se necessario
const DB_DATABASE = 'teste'; // Altere para o nome do seu banco de dados
const DB_PASS = ''; // Altere se for usar senha 

// Opções para maior segurança
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Ativa exceções para erros
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Define fetch padrão como array associativo
    PDO::ATTR_EMULATE_PREPARES => false, // Desativa emulação de prepares para evitar SQL Injection
    PDO::ATTR_PERSISTENT => true, // Conexão persistente para melhorar performance
];

// Se voce for pelo metodo da variavel troque 'DB_HOST', 'DB_DATABASE', 'DB_USER' e 'DB_PASS' por as variaveis '$localhost', '$user', '$database' e '$password'.

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE . ";charset=utf8mb4", DB_USER, DB_PASS, $options);
} catch (PDOException $e) {
    error_log("Erro na conexão com o banco de dados: " . $e->getMessage()); // Log do erro
    die("Erro interno. Tente novamente mais tarde."); // Mensagem genérica para segurança
}


?>
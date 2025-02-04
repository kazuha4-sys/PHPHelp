<?php
// Como funciona o SQL Injection?
// O atacante insere códigos de SQL maliciocos em formularios ou parametros na url para manipular 
// o banco de dados. Exemplo:

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = '$id'";
mysqli_query($conn, $query);

// Se o atacante passar 1' OR '1'='1', ele poe obter todos os usuarios do banco de dados.
// Formas de previnir:

// Usar Preapared Statements(PDO ou MySQLi):
$stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$id]);

// Filtrar as entradas do usuarios:
$id = intval($_GET['id']);
?>
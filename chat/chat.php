<?php
require 'db.php';
session_start();
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
if (!isset($_SESSION["user_id"])) die("Acesso negado");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function loadMessages() {
            $("#messages").load("load_messages.php");
        }
        setInterval(loadMessages, 1000);
    </script>
</head>
<body>
    <div id="chat-container">
        <div id="messages"></div>
        <form id="message-form" method="POST" action="send_message.php">
            <input type="text" name="message" placeholder="Digite sua mensagem" required>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>

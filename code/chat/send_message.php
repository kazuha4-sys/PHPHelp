<?php
require 'db.php';
session_start();
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
if (isset($_SESSION["user_id"]) && isset($_POST["message"])) {
    $user_id = $_SESSION["user_id"];
    $message = htmlspecialchars($_POST["message"]);
    $stmt = $conn->prepare("INSERT INTO messages (user_id, message) VALUES (?, ?)");
    $stmt->bind_param("is", $user_id, $message);
    $stmt->execute();
}
?>
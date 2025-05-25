<?php
require 'db.php';
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
$result = $conn->query("SELECT users.username, messages.message, messages.timestamp FROM messages JOIN users ON messages.user_id = users.id ORDER BY messages.timestamp DESC");
while ($row = $result->fetch_assoc()) {
    echo "<p><strong>{$row["username"]}</strong>: {$row["message"]} <small>{$row["timestamp"]}</small></p>";
}
?>
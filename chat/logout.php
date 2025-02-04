<?php
session_start();
session_destroy();
header("Location: index.php"); // Adicione a URL ou o caminho de um arquivo

?>
<?php
session_start();
session_destroy();
header("Location: "); // Adicione a URL ou o caminho de um arquivo
?>
<?php
namespace PHPHelp\Config;
class AppConfig {
    public static function getDbConnection() {
        require __DIR__ . "/../config/config.php";
        return $conn;
    }
}
?>
<?php 

namespace PHPHelp\Config;

use PDO;
use PDOException;

/**
 * Classe Database
 * Responsável por configurar e retornar uma conexão segura com o dataset
 */

class Database { 
    // Você pode usar constantes, como abaixo, ou transformar isso em leitura de .env ou config 
    private const DB_HOST = 'localhost';       // Altere se necessário, ex: 127.0.0.1
    private const DB_USER = 'root';            // Altere se necessário
    private const DB_PASS = '';                // Coloque sua senha, se tiver
    private const DB_DATABASE = 'teste';       // Altere para o nome do seu banco de dados

    /**
     * Opções de configuração do PDO:
     * - ERRMODE_EXCEPTION: Ativa o modo de exceção para erros, útil para debug.
     * - DEFAULT_FETCH_MODE: Retorna resultados como arrays associativos por padrão.
     * - EMULATE_PREPARES: Desativa a emulação de prepares, prevenindo SQL Injection.
     * - PERSISTENT: Cria conexões persistentes para melhor performance.
     */
    private static array $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_PERSISTENT => true,
    ];

    /**
     * Método estático para criar e retornar a conexão PDO.
     * @return PDO
     */
    public static function connect(): PDO
    {
        try {
            return new PDO(
                "mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_DATABASE . ";charset=utf8mb4",
                self::DB_USER,
                self::DB_PASS,
                self::$options
            );
        } catch (PDOException $e) {
            // Grava o erro no log do servidor, útil para debugar em produção
            error_log("Erro na conexão com o banco de dados: " . $e->getMessage());

            // Mensagem genérica para evitar exposição de dados internos
            die("Erro interno. Tente novamente mais tarde.");
        }
    }
}

?>
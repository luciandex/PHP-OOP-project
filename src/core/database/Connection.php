<?php

namespace App\core\database;


class Connection
{
    private static $pdo;
    private static $conn;

    /**
     * @return \PDO|null
     */
    public function getPdo(): ?\PDO
    {
        return self::$pdo;
    }

    /**
     * @return Connection
     */
    public static function getConn(): Connection
    {
        if (self::$conn == NULL) {
            self::$conn = new Connection();
            self::$conn->setPdo("127.0.0.1", "lamp", "lamp", "lamp");
//            throw new \RuntimeException("Database connection not established");
        }

        return self::$conn;
    }

    private function setPdo($host, $user, $password, $db, $port = 3306, $charset = 'utf8mb4')
    {
        $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_PERSISTENT => false,
        ];

        try {
            self::$pdo = new \PDO($dsn, $user, $password, $options);
        } catch (\PDOException $e) {
            error_log($e->getMessage());
            die("Failed to connect to database");
        }
    }

    private function __construct()
    {
    }

    protected function __clone()
    {
    }

    public function __wakeup()
    {
    }

}
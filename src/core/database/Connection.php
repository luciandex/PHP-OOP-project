<?php

namespace App\core\database;

class Connection
{
    private $pdo;

    public function getPdo(): ?\PDO
    {
        return $this->pdo;
    }

    public function __construct($host, $user, $password, $db, $port = 3306, $charset = 'utf8mb4')
    {
        $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_PERSISTENT => false,
        ];

        try {
            $this->pdo = new \PDO($dsn, $user, $password, $options);
        } catch (\PDOException $e) {
            error_log($e->getMessage());
            die("Failed to connect to database");
        }
    }
}
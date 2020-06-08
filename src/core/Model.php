<?php


namespace App\core;


use App\core\database\Connection;

abstract class Model
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection("127.0.0.1", "lamp", "lamp", "lamp");
    }
}
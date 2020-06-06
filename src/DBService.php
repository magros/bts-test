<?php

namespace App;

use \MySQLi;

abstract class DBService
{
    protected $conn;

    abstract function findAll(): array;

    abstract function create(array $data): Model;

    public function connection()
    {
        if (!$this->conn) {
            $this->conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE'], $_ENV['DB_PORT']);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
        return $this->conn;
    }
}
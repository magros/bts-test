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
            $this->conn = new mysqli('localhost', 'root', 'root', 'bts');
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
        return $this->conn;
    }

//$servername = "localhost";
//$username = "username";
//$password = "password";
//$dbname = "myDB";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//die("Connection failed: " . $conn->connect_error);
//}
//
//$sql = "SELECT id, firstname, lastname FROM MyGuests";
//$result = $conn->query($sql);

}
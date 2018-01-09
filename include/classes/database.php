<?php

class Database {

    private $hostname = 'localhost';
    private $databasenaam = 'seedsofknowlegde';
    private $username = 'root';
    private $password = '';
    public $conn;

    public function __construct() {
        $this->conn = null;
        try {
            $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->databasenaam);
        } catch (mysqli_sql_exception $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
    }

    public function get($queryString) {
        
    }

    public function update($queryString) {
        
    }

    public function delete($queryString) {
        
    }

    public function add($queryString) {
        if ($this->conn->query($queryString) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $queryString . "<br>" . $conn->error;
        }
    }

}

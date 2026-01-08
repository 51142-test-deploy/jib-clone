<?php 

class Database {
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'jib_clone';
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Error connecting to db : " . $this->conn->connect_error);
        }
    }

    public function Connect() {
        return $this->conn;
    }
}

?>
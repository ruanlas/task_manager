<?php 
    class DataBase{
        private $servername = "localhost";
        private $username = "root";
        private $password = "ruan";
        private $dbname = "task_manager";
        private $connection;

        public function getConnection(){
            $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }
            return $this->connection;
        }
    }
?>
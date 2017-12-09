<?php 
    class DataBase{
        private $servername = "localhost";
        private $username = "root";
        private $password = "ruan";
        private $dbname = "task_manager";
        private $connection;

        public function getConnection(){
            $this->connection = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            return $this->connection;
        }
    }
// // echo "Connected successfully";

// $nome = "cecilia";
// $sql = "INSERT INTO tasks (nome_task, descricao)
// VALUES ('$nome', 'Doe demais da conta sô')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

?>
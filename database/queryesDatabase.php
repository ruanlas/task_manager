<?php
    require_once "connectDatabase.php";
    require_once "entity/Task.php";

    class QueryDataBase{
        private function createConnection(){
            $database = new DataBase();
            $conn = $database->getConnection();
            return $conn;
        }

        public function insertTask($task){
            // $database = new DataBase();
            // $connection = $database->getConnection();
            $connection = $this->createConnection();

            $nome = $task->getNome();
            $descricao = $task->getDescricao();
            $arquivo = $task->getArquivo();
            
            $sql = "INSERT INTO tasks (nome_task, descricao, file)
            VALUES ('$nome', '$descricao', '$arquivo')";
            // $sql = "INSERT INTO tasks (nome_task, descricao) VALUES ('$nome', '$descricao')";

            if ($connection->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }

            $connection->close();

        }

        public function selectTasks(){
            // $database = new DataBase();
            // $connection = $database->getConnection();
            $connection = $this->createConnection();

            // $sql = "SELECT id, nome_task, descricao, file FROM tasks";
            $sql = "SELECT * FROM tasks";
            
            $result = $connection->query($sql);
            $listResults = [];
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $task = new Task();
                    $task->setId($row["id"]);
                    $task->setNome($row["nome_task"]);
                    $task->setDescricao($row["descricao"]);
                    $task->setArquivo($row["file"]);
                    array_push($listResults, $task);
                }
            }else{
                $listResults = null;
            }

            $connection->close();

            return $listResults;
        }
    }

?>
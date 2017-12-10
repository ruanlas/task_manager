<?php
    require_once "connectDatabase.php";
    require_once "../entity/Task.php";

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

        public function deleteTask($idTask){
            $connection = $this->createConnection();

            $sql = "DELETE FROM tasks WHERE id = $idTask";
            
            if ($connection->query($sql) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $connection->error;
            }
            
            $connection->close();
        }

        public function updateTask($task){
            $connection = $this->createConnection();

            $id = $task->getId();
            $nome = $task->getNome();
            $descricao = $task->getDescricao();
            $arquivo = $task->getArquivo();
            
            $sql = "UPDATE tasks SET nome_task = '$nome', 
                    descricao = '$descricao', file = '$arquivo' 
                    WHERE id = $id";

            if ($connection->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $sql . "<br>" . $connection->error;
            }

            $connection->close();
        }

        public function selectOneTask($idTask){
            $connection = $this->createConnection();

            $sql = "SELECT * FROM tasks WHERE id = $idTask";
            
            $result = $connection->query($sql);
            $task = new Task();
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $task->setId($row["id"]);
                    $task->setNome($row["nome_task"]);
                    $task->setDescricao($row["descricao"]);
                    $task->setArquivo($row["file"]);
                }
            }else{
                $task = null;
            }

            $connection->close();

            return $task;
        }
    }

?>
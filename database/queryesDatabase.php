<?php
    include_once "connectDatabase.php";

    class QueryDataBase{
        public function insertTask($task){
            $database = new DataBase;
            $connection = $database->getConnection();

            $nome = $task->getNome();
            $descricao = $task->getDescricao();
            $arquivo = $task->getArquivo();

            $sql = "INSERT INTO tasks (nome_task, descricao, file)
            VALUES ('$nome', '$descricao', $arquivo)";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();

        }
    }

?>
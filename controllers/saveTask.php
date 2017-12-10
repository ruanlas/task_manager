<?php
    require_once "../entity/Task.php";
    require_once "../database/connectDatabase.php";
    require_once "../database/queryesDatabase.php";

    $edicao = isset($_POST['idTask']) ? true : false;
    
    $idTask = $_POST['idTask'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $arquivo = $_POST['arquivo'];

    $objQuery = new QueryDataBase();
    $task = new Task();

    if($edicao){
        $task->setId($idTask);
        $task->setNome($nome);
        $task->setDescricao($descricao);
        $task->setArquivo($arquivo);

        $objQuery->updateTask($task);
        //incluir mensagem informando o sucesso
        header("Location: ../views/listTask.php");
    }else{
        $task->setNome($nome);
        $task->setDescricao($descricao);
        $task->setArquivo($arquivo);

        $objQuery->insertTask($task);
        //mandar para um controle perguntando se deseja inserir mais e informar que foi salvo.....
        header("Location: ../views/dashboard.php");
    }
?>
<?php
    require_once "../entity/Task.php";
    require_once "../database/connectDatabase.php";
    require_once "../database/queryesDatabase.php";

    session_start();
    if( !isset($_SESSION['userId']) ){
        header("Location: ../views/login.php");
    }
    $idUser = $_SESSION['userId'];

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
        http_response_code(301);
        // header("Location: ../views/listTask.php");
        header("Location: ../views/taskSalva.php?edit=1");
    }else{
        $task->setNome($nome);
        $task->setDescricao($descricao);
        $task->setArquivo($arquivo);
        $task->setUserId($idUser);

        $objQuery->insertTask($task);
        
        http_response_code(301);
        // header("Location: ../views/dashboard.php");
        header("Location: ../views/taskSalva.php");
    }
?>
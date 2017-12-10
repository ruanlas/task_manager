<?php
    require_once "../entity/Task.php";
    require_once "../database/connectDatabase.php";
    require_once "../database/queryesDatabase.php";

    $tipoAcao = $_POST['tipoAcao'];
    $idTask = $_POST['idTask'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $arquivo = $_POST['arquivo'];

    $task = new Task();

    $task->setNome($nome);
    $task->setDescricao($descricao);
    $task->setArquivo($arquivo);

    $objQuery = new QueryDataBase();
    $objQuery->insertTask($task);

    header("Location: ../views/writeTask.php");
?>
<?php
    require_once "entity/Task.php";
    require_once "database/connectDatabase.php";
    require_once "database/queryesDatabase.php";
    

    $objQuery = new QueryDataBase();
    
    $listaTasks = $objQuery->selectTasks();
    // $task = new Task();

    // $task->setNome("sushi");
    // $task->setDescricao("Sei la onde estou");
    // // $task->setArquivo('2');
    
    // $objQuery->insertTask($task);
    
    echo "Script de teste<br/>";
    var_dump($listaTasks);
?>
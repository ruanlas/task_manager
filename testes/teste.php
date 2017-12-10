<?php
    require_once "../entity/Task.php";
    require_once "../database/connectDatabase.php";
    require_once "../database/queryesDatabase.php";
    

    $objQuery = new QueryDataBase();
    
    $listaTasks = $objQuery->selectTasks();
    // $task = new Task();

    // // $task->setId(44);
    // $task->setNome("Akanamoto");
    // $task->setDescricao("Anikymatuksy matsukumuy");
    // // // $task->setArquivo('2');
    
    // // $objQuery->updateTask($task);
    // // $objQuery = new QueryDataBase();
    // $objQuery->insertTask($task);
    
    echo "Script de teste<br/>";
    var_dump($listaTasks);
?>
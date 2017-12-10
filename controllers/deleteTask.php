<?php
    require_once "../entity/Task.php";
    require_once "../database/connectDatabase.php";
    require_once "../database/queryesDatabase.php";
    
    $idTask = $_POST['idTask'];

    $objQuery = new QueryDataBase();
    $objQuery->deleteTask($idTask);
    
    header("Location: ../views/listTask.php");
?>
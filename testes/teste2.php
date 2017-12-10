<?php
    require_once "../entity/Task.php";
    require_once "../database/connectDatabase.php";
    require_once "../database/queryesDatabase.php";

    $objQuery = new QueryDataBase();
    
    $listaTasks = $objQuery->deleteTask(39);

    // header("Location: teste.php");
?>
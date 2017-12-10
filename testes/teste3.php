<?php
    require_once "../entity/Task.php";
    require_once "../database/connectDatabase.php";
    require_once "../database/queryesDatabase.php";

    $objQuery = new QueryDataBase();
    $task = $objQuery->selectOneTask(44);
    var_dump($task);
    // echo $_GET['teste'];

?>
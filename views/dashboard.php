<?php
    require_once "../entity/User.php";
    require_once "../database/connectDatabase.php";
    require_once "../database/queryesDatabase.php";

    session_start();
    if( !isset($_SESSION['userId']) ){
        header("Location: login.php");
    }

    $idUser = $_SESSION['userId'];

    $objQuery = new QueryDataBase();
    $user = $objQuery->selectOneUser($idUser);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h4>Bem vindo <?= $user->getNome() ?></h4>
    <form method="POST">
        <input type="submit" formaction="../controllers/logoutUser.php" value="Logout"/>
    </form>
    
    <a href="writeTask.php">Criar Task</a>
    <a href="listTask.php">Visalizar Tasks</a>
</body>
</html>
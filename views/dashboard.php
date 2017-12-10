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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../libs/css/reset.css"/>
    <link rel="stylesheet" href="../libs/bootstrap/bootstrap.min.css"/>
    <title>Dashboard</title>
</head>
<body>
    <h1 class="text-center">Task Manager</h1>
    <div class="container">
        <form class="text-right" method="POST">
            <h4>Bem vindo <?= $user->getNome() ?></h4>
            <input type="submit" class="btn btn-default" formaction="../controllers/logoutUser.php" value="Logout"/>
        </form>
        <br/>
        <div class="text-center">
            <a href="writeTask.php" class="btn btn-primary btn-lg btn-block">Criar Task</a>
            <a href="listTask.php" class="btn btn-primary btn-lg btn-block">Visalizar Tasks</a>
        </div>
    </div>
</body>
</html>
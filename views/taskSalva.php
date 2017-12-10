<?php
    require_once "../entity/Task.php";
    require_once "../entity/User.php";
    require_once "../database/connectDatabase.php";
    require_once "../database/queryesDatabase.php";

    session_start();
    if( !isset($_SESSION['userId']) ){
        http_response_code(301);
        header("Location: ../views/login.php");
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../libs/css/reset.css"/>
    <link rel="stylesheet" href="../libs/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="../libs/css/estilos.css"/>
    <title>Task salva</title>
</head>
<body>
    <h1 class="text-center">Task Manager</h1>
    <div class="container">
        <p class="sucesso ">A task foi salva com sucesso!!</p>
        <?php
            if(isset($_GET['edit'])){
        ?>
            <a href="listTask.php" class="btn btn-primary">Voltar para a lista de tasks</a>
        <?php
            }else{
        ?>
            <a href="writeTask.php" class="btn btn-primary">Cadastrar mais task</a>
            <a href="dashboard.php" class="btn btn-primary">Voltar ao Dashboard</a>
        <?php
            }
        ?>
    </div>
</body>
</html>
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
    <title><?= ($edicao) ? "Edição" : "Criação" ;?> de task</title>
</head>
<body>
    <h1 class="text-center">Task Manager</h1>
    <div class="container">
        <form action="../controllers/deleteTask.php" method="POST">
            <?php
                if(isset($_POST['id'])){
                    $idTask = $_POST['id'];
                    
                    $task = $objQuery->selectOneTask($idTask);
                    
                    $nome = $task->getNome();
                    $descricao = $task->getDescricao();
                    $arquivo = $task->getArquivo();
                    
            ?>
                <input type="hidden" name="idTask" value="<?= $idTask ?>"/>
                <div class="form-group">
                    <label for="n">Nome da task: </label>
                    <input type="text" class="form-control" id="n" name="nome" value="<?= $nome ?>" disabled/>
                </div>
                <div class="form-group">
                    <label for="d">Descrição: </label>
                    <textarea id="d" class="form-control" name="descricao" disabled><?= $descricao ?></textarea>
                </div>
                <div class="form-group">
                    <label for="a">Envie um arquivo anexo: </label>
                    <input type="file" class="form-control" id="a" name="arquivo" value="<?= $arquivo ?>" disabled/>
                </div>
                <br/>
                <p>Deseja excluir esta task?</p>
                <input type="submit" class="btn btn-danger" value="Excluir"/>
            <?php
                }else{
                    echo "<span>Selecione uma task para excluir </span>";
                }
            ?>
            <a href="listTask.php" class="btn btn-defaut">Voltar</a>
        </form>
    </div>
</body>
</html>
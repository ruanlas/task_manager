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

    $edicao = isset( $_GET['id'] ) ? true : false;
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
        <form action="../controllers/saveTask.php" method="POST">
            <?php
                if($edicao){
                    $idTask = $_GET['id'];
                    
                    $task = $objQuery->selectOneTask($idTask);
                    if( !is_null($task) ){
                        $nome = $task->getNome();
                        $descricao = $task->getDescricao();
                        $arquivo = $task->getArquivo();
                    }
                }
            ?>
            <?php
                if($edicao){
            ?>
                <input type="hidden" name="idTask" value="<?= $idTask ?>"/>
            <?php
                }
            ?>
            <div class="form-group">
                <label for="n">Nome da task: </label>
                <input type="text" id="n" class="form-control" name="nome" value="<?= isset($nome) ? $nome : null ?>" required/>
            </div>
            <div class="form-group">
                <label for="d">Descrição: </label>
                <textarea class="form-control" id="d" name="descricao"><?= isset($descricao) ? $descricao : null ?></textarea>
            </div>
            <div class="form-group">
                <label for="a">Envie um arquivo anexo: </label>
                <input type="file" class="form-control" id="a" name="arquivo" value="<?= isset($arquivo) ? $arquivo : null ?>"/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Salvar"/>
            </div>
            
        
            <?php
                if($edicao){
            ?>
                <a href="listTask.php" class="btn btn-defaut">Voltar</a>
            <?php
                }else{
            ?>
                <a href="dashboard.php" class="btn btn-defaut">Voltar</a>
            <?php
                }
            ?>
        </form>
    </div>
</body>
</html>
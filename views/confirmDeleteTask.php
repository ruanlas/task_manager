<?php
    require_once "../entity/Task.php";
    require_once "../entity/User.php";
    require_once "../database/connectDatabase.php";
    require_once "../database/queryesDatabase.php";

    session_start();
    if( !isset($_SESSION['userId']) ){
        header("Location: ../views/login.php");
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
    <title><?= ($edicao) ? "Edição" : "Criação" ;?> de task</title>
</head>
<body>
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
            <label for="n">Nome da task: </label>
            <input type="text" id="n" name="nome" value="<?= $nome ?>" disabled/><br/>
            <label for="d">Descrição: </label>
            <textarea rows="10" cols="30" type="text" id="d" name="descricao" disabled><?= $descricao ?></textarea><br/>
            <label for="a">Envie um arquivo anexo: </label>
            <input type="file" id="a" name="arquivo" value="<?= $arquivo ?>" disabled/><br/>
            <p>Deseja excluir esta task?</p>
            <input type="submit" value="Excluir"/>
        <?php
            }else{
                echo "<span>Selecione uma task para excluir</span>";
            }
        ?>
        <a href="listTask.php">Voltar</a>
    </form>
</body>
</html>
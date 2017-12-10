<?php
    require_once "../entity/Task.php";
    require_once "../database/connectDatabase.php";
    require_once "../database/queryesDatabase.php";

    $edicao = isset( $_GET['id'] ) ? true : false;
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
    <form action="../controllers/saveTask.php" method="POST">
        <?php
            if($edicao){
                $idTask = $_GET['id'];
                
                $objQuery = new QueryDataBase();
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
        
        <label for="n">Nome da task: </label>
        <input type="text" id="n" name="nome" value="<?= isset($nome) ? $nome : null ?>"/><br/>
        <label for="d">Descrição: </label>
        <textarea rows="10" cols="30" type="text" id="d" name="descricao"><?= isset($descricao) ? $descricao : null ?></textarea><br/>
        <label for="a">Envie um arquivo anexo: </label>
        <input type="file" id="a" name="arquivo" value="<?= isset($arquivo) ? $arquivo : null ?>"/><br/>
        <input type="submit" value="Salvar"/>
       
        <?php
            if($edicao){
        ?>
            <a href="listTask.php">Voltar</a>
        <?php
            }else{
        ?>
            <a href="dashboard.php">Voltar</a>
        <?php
            }
        ?>
    </form>
</body>
</html>
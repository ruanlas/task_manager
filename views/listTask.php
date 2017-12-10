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
    $listaAllTasks = $objQuery->selectTasks($idUser);

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
    <title>Listar Tasks</title>
</head>
<body>
    <h1 class="text-center">Task Manager</h1>

    <div class="container">
        <a href="dashboard.php" class="btn btn-defaut">Voltar para o Dashboard</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>
                        <strong>Nome da Task</strong>
                    </th>
                    <th>
                        <strong>Descrição</strong>
                    </th>
                    <th class="text-center" colspan="2">
                        <strong>Ações</strong>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(is_null($listaAllTasks)){
                        echo "<tr> Não existem tasks cadastradas</tr>";
                    }else{
                        foreach($listaAllTasks as $task){
                ?>
                        <tr>
                            <td>
                                <?= $task->getNome() ?>
                            </td>
                            <td>
                                <?= $task->getDescricao() ?>
                            </td>
                            <td class="text-center">
                                <form action="confirmDeleteTask.php" method="post">
                                    <input type="hidden" name="id" value="<?= $task->getId() ?>"/>
                                    <input type="submit" class="btn btn-danger" value="Excluir"/>
                                </form>
                            </td>
                            <td class="text-center">
                                <a href="writeTask.php?id=<?= $task->getId() ?>" class="btn btn-info">Editar</a>
                            </td>
                        </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
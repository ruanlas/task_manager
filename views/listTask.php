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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Tasks</title>
</head>
<body>
    <a href="dashboard.php">Voltar</a>
    <table>
        <thead>
            <tr>
                <th>
                    Nome da Task
                </th>
                <th>
                    Descrição
                </th>
                <th>
                    Ações (deleção)
                </th>
                <th>
                    Ações (edição)
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
                        <td>
                            <form action="confirmDeleteTask.php" method="post">
                                <input type="hidden" name="id" value="<?= $task->getId() ?>"/>
                                <input type="submit" value="Excluir"/>
                            </form>
                        </td>
                        <td>
                            <a href="writeTask.php?id=<?= $task->getId() ?>">Editar</a>
                        </td>
                    </tr>
            <?php
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>
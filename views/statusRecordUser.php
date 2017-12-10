<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../libs/css/reset.css"/>
    <link rel="stylesheet" href="../libs/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="../libs/css/estilos.css"/>
    <title>Status</title>
</head>
<body>
    <h1 class="text-center">Task Manager</h1>
    <div class="container">
        <?php
            $statusRecord = (bool)isset($_GET['success']) ? $_GET['success'] : null;

            if($statusRecord){
        ?>
            <p class="sucesso">Cadastro realizado com sucesso!</p>
            <a href="login.php" class="btn btn-defaut">Ir para login</a>
        <?php
            }else{
        ?>
            <p class="alert">Houve um problema e não foi possível concluir o cadastro </p>
            <a href="login.php" class="btn btn-defaut">Ir para login</a>
            <a href="newUser.php" class="btn btn-defaut">Tentar novamente</a>
        <?php
            }
        ?>
    </div>
</body>
</html>
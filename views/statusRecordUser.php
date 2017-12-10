<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status</title>
</head>
<body>
    <?php
        $statusRecord = (bool)isset($_GET['success']) ? $_GET['success'] : null;

        if($statusRecord){
    ?>
        <span>Cadastro realizado com sucesso!</span>
        <a href="login.php">Ir para login</a>
    <?php
        }else{
    ?>
        <span>Houve um problema e não foi possível concluir o cadastro</span>
        <a href="login.php">Ir para login</a>
        <a href="newUser.php">Tentar novamente</a>
    <?php
        }
    ?>
</body>
</html>
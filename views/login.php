<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../libs/css/reset.css"/>
    <link rel="stylesheet" href="../libs/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="../libs/css/estilos.css"/>
    <title>Login</title>
</head>
<body>
    <h1 class="text-center">Task Manager</h1>
    <?php
        if(isset($_GET['success'])){
            $status = (bool)($_GET['success']);
            if( !$status ){
    ?>
            <p class="text-center alert">*Credenciais de acesso inválidas</p>
    <?php
            }
        }
    ?>
    <div class="container">
        <p>Preencha as informações para acessar o sistema</p>
        <form action="../controllers/processLogin.php" method="post">
            <div class="form-group">
                <label for="e">Email: </label>
                <input type="text" class="form-control" id="e" name="emailUsuario"/>
            </div>
            <div class="form-group">
                <label for="p">Senha: </label>
                <input type="password" class="form-control" id="p" name="senhaUsuario"/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Entrar"/>
            </div>
        </form>
        <a href="newUser.php">Novo Usuário</a>
    </div>
</body>
</html>
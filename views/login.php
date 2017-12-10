<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    
    <?php
        if(isset($_GET['success'])){
            $status = (bool)($_GET['success']);
            if( !$status ){
    ?>
            <span>*Credenciais de acesso inválidas</span>
    <?php
            }
        }
    ?>
    <span>Preencha as informações para acessar o sistema</span>
    <form action="../controllers/processLogin.php" method="post">
        <label for="e">Email: </label>
        <input type="text" id="e" name="emailUsuario"/><br/>
        <label for="p">Senha: </label>
        <input type="password" id="p" name="senhaUsuario"/><br/>
        <input type="submit" value="Entrar"/>
    </form>
    <a href="newUser.php">Novo Usuário</a>
</body>
</html>
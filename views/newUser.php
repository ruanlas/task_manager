<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Usuário</title>
</head>
<body>
    <span>Insira as informações para se registrar no sistema</span>
    <form action="../controllers/saveUser.php" method="post">
        <label for="n">Nome: </label>
        <input type="text" id="n" name="nomeUsr"/><br/>
        <!-- <label for="d">Data Nascimento: </label>
        <input type="text" id="d" name="dtNascimentoUsr"/><br/> -->
        <label for="e">Email: </label>
        <input type="text" id="e" name="emailUsr"/><br/>
        <label for="p">Senha: </label>
        <input type="text" id="p" name="senhaUsr"/><br/>
        <label for="cp">Confirmar senha: </label>
        <input type="text" id="cp" name="confSenhaUsr"/><br/>
        <input type="submit" value="Cadastrar"/>
    </form>
    <a href="login.php">Voltar</a>
</body>
</html>
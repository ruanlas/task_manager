<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../libs/css/reset.css"/>
    <link rel="stylesheet" href="../libs/bootstrap/bootstrap.min.css"/>
    <title>Novo Usuário</title>
</head>
<body>
    <h1 class="text-center">Task Manager</h1>
    <div class="container">
        <p>Insira as informações para se registrar no sistema</p>
        <form action="../controllers/saveUser.php" method="post">
            <div class="form-group">
                <label for="n">Nome: </label>
                <input type="text" class="form-control" id="n" name="nomeUsr"/>
            </div>
            <div class="form-group">
                <label for="e">Email: </label>
                <input type="email" class="form-control" id="e" name="emailUsr" required/>
            </div>
            <div class="form-group">
                <label for="p">Senha: </label>
                <input type="text" class="form-control" id="p" name="senhaUsr" required/>
            </div>
            <div class="form-group">
                <label for="cp">Confirmar senha: </label>
                <input type="text" class="form-control" id="cp" name="confSenhaUsr" required/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar"/>
            </div>
            <!-- <label for="d">Data Nascimento: </label>
            <input type="text" id="d" name="dtNascimentoUsr"/><br/> -->
        </form>
        <a href="login.php" class="btn btn-defaut">Voltar</a>
    </div>
</body>
</html>
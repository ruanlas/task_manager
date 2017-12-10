<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de task</title>
</head>
<body>
    <form action="../controllers/saveTask.php" method="POST">
        <input type="hidden" name="tipoAcao" value=""/>
        <input type="hidden" name="idTask" value=""/>
        <label for="n">Nome da task: </label>
        <input type="text" id="n" name="nome"/><br/>
        <label for="d">Descrição: </label>
        <textarea rows="10" cols="30" type="text" id="d" name="descricao"></textarea><br/>
        <label for="a">Envie um arquivo anexo: </label>
        <input type="file" id="a" name="arquivo"/><br/>
        <input type="submit" value="Cadastrar"/>
    </form>
</body>
</html>
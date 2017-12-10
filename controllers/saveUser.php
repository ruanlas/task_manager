<?php
    require_once "../entity/User.php";
    require_once "../database/connectDatabase.php";
    require_once "../database/queryesDatabase.php";
    
    $nome = $_POST['nomeUsr'];
    $email = $_POST['emailUsr'];
    $senha = $_POST['senhaUsr'];
    $confirmSenha = $_POST['confSenhaUsr'];

    if($senha == $confirmSenha){
        $objQuery = new QueryDataBase();
        $user = new User();
    
    
        $user->setNome($nome);
        $user->setEmail($email);
        $user->setSenha($senha);
    
        $objQuery->insertUser($user);

        http_response_code(301);
        header("Location: ../views/statusRecordUser.php?success=1");
    }else{
        http_response_code(301);
        header("Location: ../views/statusRecordUser.php?success=0");
    }
?>
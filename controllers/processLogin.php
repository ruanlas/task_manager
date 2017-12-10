<?php
    require_once "../entity/User.php";
    require_once "../database/connectDatabase.php";
    require_once "../database/queryesDatabase.php";

    $objQuery = new QueryDataBase();

    $email = isset($_POST['emailUsuario']) ? $_POST['emailUsuario'] : null;
    $senha = isset($_POST['senhaUsuario']) ? $_POST['senhaUsuario'] : null;
    
    $idUser = $objQuery->selectIdUser($email, $senha);

    if(is_null($idUser)){
        http_response_code(301);
        header("Location: ../views/login.php?success=0");
    }else{
        session_start();
        $_SESSION["userId"] = $idUser;
        http_response_code(301);
        header("Location: ../views/dashboard.php");
    }
?>
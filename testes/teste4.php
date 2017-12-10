<?php
    require_once "../entity/User.php";
    require_once "../database/connectDatabase.php";
    require_once "../database/queryesDatabase.php";

    $objQuery = new QueryDataBase();
    $email = "ruan";
    $senha = "1234";
    $idUser = $objQuery->selectIdUser($email, $senha);
    $user = $objQuery->selectOneUser(1);
    var_dump($idUser);
    echo "<br/><br/>";
    var_dump($user);
    // echo $_GET['teste'];

?>
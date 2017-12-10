<?php
    session_start();
    session_unset(); 
    session_destroy();

    http_response_code(301);
    header("Location: ../views/login.php");
?>
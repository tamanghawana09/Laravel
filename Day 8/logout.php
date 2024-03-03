<?php
    session_start();

    $_SESSION['islogin']=false;
    
    header('Location: login.php');
    exit();
?>

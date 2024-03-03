<?php
    session_start();
    $_SESSION['islogin'] = TRUE;
    header("Location: login.php");
    exit();
?>
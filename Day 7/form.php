<?php
    session_start();
    
        $name = $_POST['shopping'];

        if(isset($_SESSION['cart'])){
            array_push($_SESSION['cart'],$name);
        }else{
            $_SESSION['cart'] =[$name];
        }
    
        header("Location: index.php");

        exit();
    
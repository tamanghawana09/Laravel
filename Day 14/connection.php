<?php
    $localhost = "localhost";
    $username = "root";
    $password = "0911";
    $dbname = "expense_db";

    $conn = mysqli_connect($localhost,$username,$password,$dbname);
    if(!$conn){
        echo " Error : " . mysqli_connect_error();
    }else{
        echo "connection established";
    }
?>
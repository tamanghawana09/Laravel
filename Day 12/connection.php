<?php
    $username = "root";
    $password = "0911";
    $localhost = "localhost";
    $dbname = "phone_book";

    $conn = mysqli_connect($localhost,$username,$password,$dbname);

    if(!$conn){
        echo "Error: " . mysqli_connect_error();
    }
?>
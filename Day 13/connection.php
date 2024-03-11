<?php
    $localhost ="localhost";
    $username = "root";
    $password = "0911";
    $dbname = "url_db";

    $conn = mysqli_connect($localhost,$username,$password,$dbname);
    if(!$conn){
        echo "Error: " . mysqli_connect_error();
    }
?>
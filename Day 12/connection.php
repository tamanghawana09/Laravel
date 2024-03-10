<?php
    $username = "root";
    $password = "0911";
    $localhost = "localhost";
    $dbname = "phone_book";

    $conn = mysqli_connect($localhost,$username,$password,$dbname);

    if(!$conn){
        echo "Error: " . mysqli_connect_error();
    }else{

    $null_sql = "SELECT COUNT(*) as count FROM contacts";
    $null_result = $conn->query($null_sql);

    if($null_result && $null_result->num_rows>0){
        $null_rowCount = $null_result->fetch_assoc()['count'];
        if ($null_rowCount == 0) {
            $set_query = "ALTER TABLE contacts AUTO_INCREMENT = 1";
            mysqli_query($conn,$set_query);
        } 
    }

    }
?>
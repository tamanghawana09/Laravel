<?php
    include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] = 'POST'){
        $url = $_POST["url"];
        $value = rand(10000,100000);

        $sql = "INSERT INTO url_table(long_url,short_url) VALUES ('$url','$value')";
        $result = mysqli_query($conn,$sql);
        header('Location: index.php');
    }
    
?>
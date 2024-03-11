<?php
    include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] = 'POST'){
        $url = $_POST["url"];
    
        $sql = "SELECT short_url FROM url_table WHERE long_url = '$url'";
        $fetch_result = mysqli_query($conn,$sql);
        header('Location: index.php');
    }
    
?>
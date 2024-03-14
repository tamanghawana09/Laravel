<?php
    require 'connection.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $title = $_POST['title'];
        $description = $_POST['des'];
        $amount = $_POST['amount'];
        $categories = $_POST['categories'];

        echo "$categories";
        $sql = "INSERT INTO expenses(title,amount,description,category_id) VALUE ('$title', '$amount', '$description','$categories')";
        $result = mysqli_query($conn,$sql);

        // header("Location: index.php");
    }
    
?>
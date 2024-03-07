<?php
    include 'connection.php';

    $data = $_POST['momo'];
    echo "$data";

    $sql = "INSERT INTO food_table (name) VALUES('$data')";
    mysqli_query($conn,$sql);

    header('Location: index.php');
?>
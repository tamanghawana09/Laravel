<?php
    echo "Hey this is login";
    echo "<br>";

    echo "<pre>";
    var_dump($_POST["email"]);
    echo "</pre>";

    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "<h1>{$_POST["email"]}</h1>";
    
?>
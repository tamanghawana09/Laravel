<?php
    #this is echo
    echo "<h1>Hey! Learning Laravel here<h2>";

    $name = "Hawana Tamang";
    $age = 20;
    $height = 5.4;
    $isSleepy = true;

    echo $name;
    echo "<h1>{$name}</h1>";
    echo "<h1>$name</h1>";
    echo $age;
    echo "<br>";
    echo $isSleepy;
    echo "<br>";
    var_dump($isSleepy);
    echo "<br>";
    #var_dump shows type data type and value

    #index array
    $students = ["ram", "hari", "sita"];

    echo "<pre>";
    var_dump($students);
    echo "</pre>";

    #associative array
    $details = ["f1"=>"Roshan", "f2" => "Shrestha"];

    echo "<pre>";
    var_dump($details);
    echo "</pre>";

    #multdimensional array
    
    $college = array (
        array("Kist","Kamalpokhari",101),
        array("KMC","Bagbazar",201),
        array("Trinity","Dilibazar",301)
    );

    #looping
    for($i=0; $i<10;$i++){
        echo "Hawana is a problem solver";
        echo "<br>";
    }

    $food = ["samosa", "tea", "chumin", "momo"];

    for($i=0; $i<count($food);$i++){
        echo $food[$i];
        echo "<br>";
    }
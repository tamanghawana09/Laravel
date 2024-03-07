<?php
     $hostname = "localhost";
     $username = "root";
     $password = "0911";
     $dbname = "food";
 
     //Create connection
     $conn = mysqli_connect($hostname,$username,$password,$dbname);
 
     if(!$conn){
        echo "Error : ". connection_aborted();
     }
?>
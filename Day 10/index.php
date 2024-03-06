<?php
    $hostname = "localhost";
    $username = "root";
    $password = "0911";
    $dbname = "food";

    //Create connection
    $conn = mysqli_connect($hostname,$username,$password,$dbname);

    if($conn){
        echo "Connection Established ✅";
    }else{
        echo "Error : ". connection_aborted();
    }


    //fetching the data from the database
    $sql = "SELECT * FROM food_table";
    $result = mysqli_query($conn,$sql);
    echo "<pre>";
    var_dump($result);
    echo "</pre>";

    $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
    // $row = mysqli_fetch_assoc($result);

   
?>
 <ul>
  <?php
  foreach ($row as $value) {
    echo "<li>{$value['name']} , {$value['created_at']}</li>";
  }

  ?>
</ul>
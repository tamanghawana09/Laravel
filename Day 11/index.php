<?php
   include 'connection.php';  //connecting to the database


    //fetching the data from the database
    $sql = "SELECT * FROM food_table";
    $result = mysqli_query($conn,$sql);


    $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
    // $row = mysqli_fetch_assoc($result);

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="addmomo.php" method="post">
        <input type="text" name="momo">
        <button type="submit">Add 🛒</button>
    </form>
    <section>
        <ul>
        <?php
            foreach ($row as $value) {
                echo "<li>{$value['name']} , {$value['created_at']}</li>";
            }

        ?>
        </ul>
    </section>
</body>
</html>
<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.html" method="post">
        <button type="submit">Add</button><br>
    </form>
    <ul>
        <?php
            $sql = "SELECT * FROM contacts";

            $result = mysqli_query($conn,$sql);
            $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
                foreach($rows as $value){
                    echo "<li>{$value['id']} , {$value['first_name']} ,{$value['middle_name']} , {$value['last_name']} , {$value['phone_number']} ,  {$value['email']}</li>";
                    echo "<form action='update.html' method='post'>";
                    echo "<button type='submit'>Edit</button>";
                    echo "</form>";
                    echo "<form action='delete_contact.php' method='post'>";
                    echo "<input type='hidden' name='delete_id' value='{$value['id']}'>";
                    echo "<button type='submit'>Delete</button>";
                    echo "</form>";
            }
        ?>
    </ul>
</body>
</html>
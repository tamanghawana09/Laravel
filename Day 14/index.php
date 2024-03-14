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
    <section>
        <div class="container">
            <form action="add_expense.php" method="POST">
                <h2>Add Expense</h2>
                <label for="text">Title : </label>
                <input type="text" name="title"><br><br>
                <label for="text">Description : </label>
                <input type="text" name="des"><br><br>
                <label for="text">Amount : </label>
                <input type="text" name="amount"><br><br>
                <label for="categories">Categories : </label>
                
                <?php

                    $sql = "SELECT label,id from categories";
                    $result = mysqli_query($conn,$sql);
                    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
                    echo "
                    <select name='categories' id='categories'>
                    <option selected hidden>
                    ";
                    foreach ($rows as $value){
                        echo " 
                        <option value='{$value['id']}'>{$value['label']}</option>
                        ";
                    }

                    echo "
                        </select><br><br>
                    ";
                    ?>
                <button type="submit">Add Expense</button>
            </form>
        </div>
    </section>
    
</body>
</html>
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <?php
                if(isset($_SESSION['islogin']) && $_SESSION['islogin'] === true){
                    echo '<form action="logout.php" method="post">';
                    echo '<button type="submit">Log Out</button>';
                    echo '</form>';
                } else {
                    echo '<form action="method.php" method="post">';
                    echo '<button type="submit">Log In</button>';
                    echo '</form>';
                }
            ?>
        </div>
    </div>
</body>
</html>

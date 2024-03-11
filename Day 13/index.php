<?php
    include 'connection.php';


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL shortner</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="navbar">
            <nav>
                <h1>PHP Url Shortner</h1>
            </nav>
        </div>
        <div class="container">
            <span id="span">
                <?php
                    foreach($rows as $value){
                        echo "{$value['long_url']}" . " ";
                    } 
                ?>
            </span>
            <h3>Enter a URL to shorten:</h3>
            <form action="add_url.php" method="post">
                <input type="text" name="url" placeholder="Enter the url"><br><br>
                <button type="submit" id="btn1">Shorten the URL</button>
            </form>
            <form action="cancel_url.php">
                <button type="submit" id="btn2">Cancel</button>
            </form>
        </div>
    </section>

    <section>
        <div class="container">
            <span id="span">
                <?php
                    foreach($rows as $value){
                        echo "{$value['short_url']}" . " ";
                    } 
                ?>
            </span>
            <h3>Enter URL to make it original</h3>
            <form action="fetch_url.php" method="post">
                <input type="text" name="url" placeholder="Enter the url"><br><br>
                <button type="submit" id="btn1">Original Url</button>
            </form>
            <form action="cancel_url.php">
                <button type="submit" id="btn2">Cancel</button>
            </form>
        </div>
    </section>

</body>
</html>
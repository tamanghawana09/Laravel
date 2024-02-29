<?php
    session_start();
    $shopping_list = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do the shopping</title>
</head>
<body>
    <main>
        <h1>Lets Gooooooo Shopping🛒</h1>
        <section>
            <form action="form.php" method="post">
                <input type="text" name="shopping">
                <button type="submit">Add to cart🛒</button>
            </form>
        </section>

        <section>
            <h4>Shopping list here 👇</h4>
            <ul>
                <li>Buy Beer🍺</li>
                <li>Buy Chicken🍗</li>
                <?php
                    foreach ($shopping_list as $key) {
                        echo "<li>$key</li>";
                    }
                ?>
            </ul>
        </section>
    </main>
</body>
</html>
<?php
    $activePage = 'item';
    include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/items.css">
    <link rel="stylesheet" href="navbar.css">  
</head>
<body>
    <div class="form">
    <h1> Items</h1>
    <form action="php/insert.php" method="POST">
        <div>
            <input type="text" name="id" placeholder="Item ID">
        </div>
        <div>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <input type="number" name="price" placeholder="Price">
        </div>
        <div>
            <input type="date" name="date" placeholder="Date Added">
        </div>
        <div>
            <input type="submit" value="Submit" name="items-submit">
        </div>
    </form>
    </div>
</body>
</html>
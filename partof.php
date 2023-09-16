<?php
    $activePage = 'partof';
    include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/partof.css">
    <link rel="stylesheet" href="navbar.css">  
</head>
<body>
    <div class="form">
    <h1> Part of</h1>
    <form action="php/insert.php" method="POST">
        <div>
            <input type="text" name="mealid" placeholder="Meal ID" required>
        </div>
        <div>
            <input type="text" name="itemid" placeholder="Item" required>
        </div>
        <div>
            <input type="number" name="quantity" placeholder="Quantity" required>
        </div>
        <div>
            <input type="text" name="discount" placeholder="Discount" required>
        </div>
        <div>
            <input type="submit" value="Submit" name="partof-submit">
        </div>
    </form>
    </div>
</body>
</html>
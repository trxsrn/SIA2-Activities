<?php
    $activePage = 'madewith';
    include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/madewith.css">
    <link rel="stylesheet" href="navbar.css">  
</head>
<body>
    <div class="form">
    <h1> Made With</h1>
    <form action="php/insert.php" method="POST">
        <div>
            <input type="text" name="item_id" placeholder="Item ID" required>
        </div>
        <div>
            <input type="text" name="ingredient_id" placeholder="Ingredient ID" required>
        </div>
        <div>
            <input type="number" name="quantity" placeholder="Quantity" required>
        </div>
        <div>
            <input type="submit" value="Submit" name="madewith-submit">
        </div>
    </form>
    </div>
</body>
</html>
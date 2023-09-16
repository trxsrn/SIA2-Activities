<?php
    $activePage = 'ingredient';
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/ingredients.css">
    <link rel="stylesheet" href="navbar.css">    
</head>
<body>
    <div class="form">
    <h1> Ingredients</h1>
    <form action="php/insert.php" method="POST">
        <div>
            <input type="text" name="ingredientid" placeholder="Ingredient ID" required>
        </div>
        <div>
            <input type="text" name="name" placeholder="Name" required>
        </div>
        <div>
            <input type="number" name="unit" placeholder="Unit" required>
        </div>
        <div>
            <input type="text" name="unitprice" placeholder="Unit Price" required>
        </div>
        <div>
            <input type="text" name="foodgroup" placeholder="Food Group" required>
        </div>
        <div>
            <input type="text" name="inventory" placeholder="inventory" required>
        </div>
        <div>
            <input type="text" name="supplier" placeholder="Supplier ID" required>
        </div>
        <div>
            <input type="submit" value="Submit" name="ingredient-submit">
        </div>
    </form>
    </div>
</body>
</html>
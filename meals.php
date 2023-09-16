<?php
    $activePage = 'meals';
    include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/meals.css">
    <link rel="stylesheet" href="navbar.css">  
</head>
<body>
    <div class="form">
    <h1> Meals</h1>
    <form action="php/insert.php" method="POST">
        <div>
            <input type="text" name="mealid" placeholder="Meal ID" required>
        </div>
        <div>
            <input type="text" name="name" placeholder="Name" required>
        </div>
        <div>
            <input type="text" name="description" placeholder="Description" required>
        </div>
        <div>
            <input type="submit" value="Submit" name="meal-submit">
        </div>
    </form>
    </div>
</body>
</html>
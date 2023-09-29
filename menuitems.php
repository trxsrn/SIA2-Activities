<?php
    $activePage = 'menuitems';
    include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/menuitems.css">
    <link rel="stylesheet" href="navbar.css">  
</head>
<body>
    <div class="form">
    <h1> Menu Items</h1>
    <form action="php/insert.php" method="POST">
        <div>
            <input type="text" name="menuitemid" placeholder="Menu Item ID" >
        </div>
        <div>
            <input type="text" name="name" placeholder="Name" required>
        </div>
        <div>
            <input type="text" name="price" placeholder="Price" required>
        </div>
        <div>
            <input type="submit" value="Submit" name="menuitem-submit">
        </div>
    </form>
    </div>
</body>
</html>
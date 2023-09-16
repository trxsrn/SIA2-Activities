<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav>
            <ul class="menu">
            <li class="<?php if ($activePage == 'supplierstbl') echo 'active'; ?>"><a href="index.php">SUPPLIER</a></li>
            <li class="<?php if ($activePage == 'ingredienttbl') echo 'active'; ?>"><a href="db_ingredients.php">INGREDIENTS</a></li>
            <li class="<?php if ($activePage == 'itemtbl') echo 'active'; ?>"><a href="db_items.php">ITEMS</a></li>
            <li class="<?php if ($activePage == 'madewithtbl') echo 'active'; ?>"><a href="db_madewith.php">MADE WITH</a></li>
            <li class="<?php if ($activePage == 'mealstbl') echo 'active'; ?>"><a href="db_meals.php">MEALS</a></li>
            <li class="<?php if ($activePage == 'partoftbl') echo 'active'; ?>"><a href="db_partof.php">PART OF</a></li>
            <li class="<?php if ($activePage == 'menuitemstbl') echo 'active'; ?>"><a href="db_menuitems.php">MENU ITEMS</a></li>
            <li class="sub"><a href="#" id="insert-dropdown">ADD &#9662;</a>
                <ul class="insert-sub" id="insert-sub">
                    <li class="<?php if ($activePage == 'suppliers') echo 'active'; ?>"><a href="supplier.php">SUPPLIER</a></li>
                    <li class="<?php if ($activePage == 'ingredient') echo 'active'; ?>"><a href="ingredients.php">INGREDIENTS</a></li>
                    <li class="<?php if ($activePage == 'item') echo 'active'; ?>"><a href="items.php">ITEMS</a></li>
                    <li class="<?php if ($activePage == 'madewith') echo 'active'; ?>"><a href="madewith.php">MADE WITH</a></li>
                    <li class="<?php if ($activePage == 'meals') echo 'active'; ?>"><a href="meals.php">MEALS</a></li>
                    <li class="<?php if ($activePage == 'partof') echo 'active'; ?>"><a href="partof.php">PART OF</a></li>
                    <li class="<?php if ($activePage == 'menuitems') echo 'active'; ?>"><a href="menuitems.php">MENU ITEMS</a></li>
                </ul>    
            </li>
        </ul>
        </nav>
    </header>
    <script>
        const insertDropdown = document.getElementById('insert-dropdown');
        const insertSubMenu = document.getElementById('insert-sub');

        // Add an event listener to toggle the sub-menu visibility
        insertDropdown.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent the default link behavior
            insertSubMenu.classList.toggle('show');
        });
    </script>
</body>
</html>

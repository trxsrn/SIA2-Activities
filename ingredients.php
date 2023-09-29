<?php
    $activePage = 'ingredient';
    include 'navbar.php';
    include 'connection.php';

    function getNextIngredientID($conn) {
    $sql = "SELECT MAX(CAST(SUBSTRING(ingredientid, 2) AS UNSIGNED)) AS max_id FROM ingredients";
    $result = $conn->query($sql);
    
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $next_id = $row['max_id'] + 1;
            // Format the next ID with leading zeros if necessary (e.g., S0001)
            return 'I' . sprintf('%04d', $next_id);
        } else {
            // If no records exist, start with S0001
            return 'I0001';
        }
    }   

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
            <input type="text" name="ingredientid" placeholder="Ingredient ID" value="<?php echo getNextIngredientID($conn); ?>" readonly>
        </div>
        <div>
            <input type="text" name="name" placeholder="Name" required>
        </div>
        <div>
            <input type="text" name="unit" placeholder="Unit" required>
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
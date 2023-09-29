<?php
    $activePage = 'meals';
    include 'navbar.php';
    include 'connection.php';

    function getNextMealID($conn) {
    $sql = "SELECT MAX(CAST(SUBSTRING(mealid, 2) AS UNSIGNED)) AS max_id FROM meals";
    $result = $conn->query($sql);
    
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $next_id = $row['max_id'] + 1;
            // Format the next ID with leading zeros if necessary (e.g., S0001)
            return 'M' . sprintf('%04d', $next_id);
        } else {
            // If no records exist, start with S0001
            return 'M0001';
        }
    }  
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
            <input type="text" name="mealid" placeholder="Meal ID" value="<?php echo getNextMealID($conn); ?>" readonly>
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
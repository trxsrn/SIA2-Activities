<?php
    $activePage = 'item';
    include 'navbar.php';
    include 'connection.php';

    function getNextItemID($conn) {
    $sql = "SELECT MAX(CAST(SUBSTRING(itemid, 2) AS UNSIGNED)) AS max_id FROM items";
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
    <link rel="stylesheet" href="css/items.css">
    <link rel="stylesheet" href="navbar.css">  
</head>
<body>
    <div class="form">
    <h1> Items</h1>
    <form action="php/insert.php" method="POST">
        <div>
            <input type="text" name="id" placeholder="Item ID" value="<?php echo getNextItemID($conn); ?>" readonly>
        </div>
        <div>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <input type="text" name="price" placeholder="Price">
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
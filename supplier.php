<?php
    $activePage = 'suppliers';
    include_once 'navbar.php';
    include 'connection.php';

    function getNextSupplierID($conn) {
    $sql = "SELECT MAX(CAST(SUBSTRING(supplierid, 2) AS UNSIGNED)) AS max_id FROM suppliers";
    $result = $conn->query($sql);
    
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $next_id = $row['max_id'] + 1;
            // Format the next ID with leading zeros if necessary (e.g., S0001)
            return 'S' . sprintf('%04d', $next_id);
        } else {
            // If no records exist, start with S0001
            return 'S0001';
        }
    }      

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/supplier.css">
    <link rel="stylesheet" href="navbar.css"> 
    <!-- Add these lines in your HTML head to include SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
 
</head>
<body>
    <div class="form">
    <h1> Supplier</h1>
    <form action="php/insert.php" method="POST">
        <div>
            <input type="text" name="supplier_id" placeholder="Supplier ID" value="<?php echo getNextSupplierID($conn); ?>" readonly>
        </div>
        <div>
            <input type="text" name="companyname" placeholder="Company Name" required>
        </div>
        <div>
            <input type="text" name="repfname" placeholder="Representative First Name" required>
        </div>
        <div>
            <input type="text" name="replname" placeholder="Representative Last Name" required>
        </div>
        <div>
            <input type="text" name="referredby" placeholder="Referred by" required>
        </div>
        <div>
            <input type="submit" value="Submit" name="supplier-submit">
        </div>
    </form>
    </div>
    </body>
</html>


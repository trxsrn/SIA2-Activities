<?php
    $activePage = 'suppliers';
    include_once 'navbar.php';
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
            <input type="text" name="supplier_id" placeholder="Supplier ID" required>
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
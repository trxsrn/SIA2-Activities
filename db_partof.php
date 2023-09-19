<?php

$activePage = 'partoftbl';
include_once 'connection.php';
include_once 'navbar.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tbl/css/table.css">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <div class="table">
    <h1>PART OF DATABASE</h1>
    <table>
        <thead>
            <tr>
                <th>Meal ID</th>
                <th>Item ID</th>
                <th>Quantity</th>
                <th>Discount</th>
            </tr>
        </thead>
        <tbody id="table-data">
                        <?php
                        $sql1 = mysqli_query($conn, "SELECT * FROM partof");
                        while ($row = $sql1->fetch_assoc()) {
                            echo '
                                <tr>
                                    <td>' . $row['mealid'] . '</td>
                                    <td>' . $row['itemid'] . '</td>
                                    <td>' . $row['quantity'] . '</td>
                                    <td>' . $row['discount'] . '</td>
                                </tr>';
                        }
                        ?>
                    </tbody>
    </table>
    </div>
</body>
</html>
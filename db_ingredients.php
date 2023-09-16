<?php

$activePage = 'ingredienttbl';
include 'connection.php';
include 'navbar.php';

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
    <h1>INGREDIENTS DATABASE</h1>
    <table>
        <thead>
            <tr>
                <th>Ingredient ID</th>
                <th>Name</th>
                <th>Unit</th>
                <th>Unit Price</th>
                <th>Food Group</th>
                <th>Inventory</th>
                <th>Supplier ID</th>
            </tr>
        </thead>
        <tbody id="table-data">
                        <?php
                        $sql1 = mysqli_query($conn, "SELECT * FROM ingredients");
                        while ($row = $sql1->fetch_assoc()) {
                            echo '
                                <tr>
                                    <td>' . $row['ingredientid'] . '</td>
                                    <td>' . $row['name'] . '</td>
                                    <td>' . $row['unit'] . '</td>
                                    <td>' . $row['unitprice'] . '</td>
                                    <td>' . $row['foodgroup'] . '</td>
                                    <td>' . $row['inventory'] . '</td>
                                    <td>' . $row['supplierid FK'] . '</td>
                                </tr>';
                        }
                        ?>
                    </tbody>
    </table>
    </div>
</body>
</html>
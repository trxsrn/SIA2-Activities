<?php

$activePage = 'menuitemstbl';
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
    <h1>MENU ITEMS DATABASE</h1>
    <table>
        <thead>
            <tr>
                <th>Menu Item ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody id="table-data">
                        <?php
                        $sql1 = mysqli_query($conn, "SELECT * FROM menuitems");
                        while ($row = $sql1->fetch_assoc()) {
                            echo '
                                <tr>
                                    <td>' . $row['menuitemid'] . '</td>
                                    <td>' . $row['name'] . '</td>
                                    <td>' . $row['price'] . '</td>
                                </tr>';
                        }
                        ?>
                    </tbody>
    </table>
    </div>
</body>
</html>
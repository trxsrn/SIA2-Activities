<?php

$activePage = 'madewithtbl';
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
    <h1>MADE WITH DATABASE</h1>
    <table>
        <thead>
            <tr>
                <th>Item ID</th>
                <th>Ingredient ID</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody id="table-data">
                        <?php
                        $sql1 = mysqli_query($conn, "SELECT * FROM madewith");
                        while ($row = $sql1->fetch_assoc()) {
                            echo '
                                <tr>
                                    <td>' . $row['itemid FK'] . '</td>
                                    <td>' . $row['ingredientid FK'] . '</td>
                                    <td>' . $row['quantity'] . '</td>
                                </tr>';
                        }
                        ?>
                    </tbody>
    </table>
    </div>
</body>
</html>
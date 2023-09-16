<?php

$activePage = 'supplierstbl';
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
    <h1>SUPPLIER DATABASE</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Company Names</th>
                <th>Representative First Name</th>
                <th>Representative Last Name</th>
                <th>Referred By</th>
            </tr>
        </thead>
        <tbody id="table-data">
                        <?php
                        $sql1 = mysqli_query($conn, "SELECT * FROM suppliers");
                        while ($row = $sql1->fetch_assoc()) {
                            echo '
                                <tr>
                                    <td>' . $row['supplierid'] . '</td>
                                    <td>' . $row['company_name'] . '</td>
                                    <td>' . $row['rep_fname'] . '</td>
                                    <td>' . $row['rep_lname'] . '</td>
                                    <td>' . $row['referred_by (FK)'] . '</td>
                                </tr>';
                        }
                        ?>
                    </tbody>
    </table>
    </div>
</body>
</html>
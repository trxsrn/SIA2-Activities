<?php
include '../connection.php';

if (isset($_POST['supplier-submit'])) {

    $supplier_id = $_POST['supplier_id'];
    $companyname = $_POST['companyname'];
    $repfname = $_POST['repfname'];
    $replname = $_POST['replname'];
    $referredby = $_POST['referredby'];
        
    $sql = "INSERT INTO suppliers (`supplierid`, `company_name`, `rep_fname`, `rep_lname`, `referred_by (FK)`) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("issss", $supplier_id, $companyname, $repfname, $replname, $referredby);
        
        if ($stmt->execute()) {
            echo '<script type="text/javascript">alert("Added Successfully");</script>';
            header("Location:../index.php");
        } else {
            echo '<script type="text/javascript">alert("Error inserting data: ' . $stmt->error . '");</script>';
        }

        $stmt->close();
    } else {
        echo '<script type="text/javascript">alert("Error preparing statement: ' . $conn->error . '");</script>';
    }

    $conn->close();
}

if (isset($_POST['ingredient-submit'])) {

    $id = $_POST['ingredientid'];
    $name = $_POST['name'];
    $unit = $_POST['unit'];
    $price = $_POST['unitprice'];
    $foodgroup = $_POST['foodgroup'];
    $inventory = $_POST['inventory'];
    $supplier = $_POST['supplier'];
        
    $sql = "INSERT INTO ingredients (`ingredientid`, `name`, `unit`, `unitprice`, `foodgroup`, `inventory`, `supplierid FK`) VALUES (?, ?, ?, ?, ? , ?, ? )";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("issssss", $id, $name, $unit, $price, $foodgroup, $inventory, $supplier);
        
        if ($stmt->execute()) {
            echo '<script type="text/javascript">alert("Added Successfully");</script>';
            header("Location:../db_ingredients.php");
        } else {
            echo '<script type="text/javascript">alert("Error inserting data: ' . $stmt->error . '");</script>';
        }

        $stmt->close();
    } else {
        echo '<script type="text/javascript">alert("Error preparing statement: ' . $conn->error . '");</script>';
    }

    $conn->close();
}

if (isset($_POST['items-submit'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $date = $_POST['date'];
        
    $sql = "INSERT INTO items (`itemid`, `name`, `price`, `dateadded`) VALUES (?, ?, ?, ? )";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("isss", $id, $name, $price, $date);
        
        if ($stmt->execute()) {
            echo '<script type="text/javascript">alert("Added Successfully");</script>';
            header("Location:../db_items.php");
        } else {
            echo '<script type="text/javascript">alert("Error inserting data: ' . $stmt->error . '");</script>';
        }

        $stmt->close();
    } else {
        echo '<script type="text/javascript">alert("Error preparing statement: ' . $conn->error . '");</script>';
    }

    $conn->close();
}

if (isset($_POST['madewith-submit'])) {

    $id = $_POST['supplier_id'];
    $name = $_POST['companyname'];
    $quantity = $_POST['quantity'];
        
    $sql = "INSERT INTO madewith (`itemid FK`, `ingredientid FK`, `quantity`) VALUES (?, ?, ? )";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("iss", $id, $name, $quantity);
        
        if ($stmt->execute()) {
            echo '<script type="text/javascript">alert("Added Successfully");</script>';
            header("Location:../db_madewith.php");
        } else {
            echo '<script type="text/javascript">alert("Error inserting data: ' . $stmt->error . '");</script>';
        }

        $stmt->close();
    } else {
        echo '<script type="text/javascript">alert("Error preparing statement: ' . $conn->error . '");</script>';
    }

    $conn->close();
}

if (isset($_POST['meal-submit'])) {

    $id = $_POST['mealid'];
    $name = $_POST['name'];
    $desc = $_POST['description'];
        
    $sql = "INSERT INTO meals (`mealid`, `name`, `description`) VALUES (?, ?, ? )";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("iss", $id, $name, $desc);
        
        if ($stmt->execute()) {
            echo '<script type="text/javascript">alert("Added Successfully");</script>';
            header("Location:../db_meals.php");
        } else {
            echo '<script type="text/javascript">alert("Error inserting data: ' . $stmt->error . '");</script>';
        }

        $stmt->close();
    } else {
        echo '<script type="text/javascript">alert("Error preparing statement: ' . $conn->error . '");</script>';
    }

    $conn->close();
}

if (isset($_POST['partof-submit'])) {

    $mealid = $_POST['mealid'];
    $itemid = $_POST['itemid'];
    $quantity = $_POST['quantity'];
    $discount = $_POST['discount'];
        
    $sql = "INSERT INTO partof (`mealid`, `itemid`, `quantity`, `discount`) VALUES (?, ?, ?, ? )";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("isss", $mealid, $itemid, $quantity, $discount);
        
        if ($stmt->execute()) {
            echo '<script type="text/javascript">alert("Added Successfully");</script>';
            header("Location:../db_partof.php");
        } else {
            echo '<script type="text/javascript">alert("Error inserting data: ' . $stmt->error . '");</script>';
        }

        $stmt->close();
    } else {
        echo '<script type="text/javascript">alert("Error preparing statement: ' . $conn->error . '");</script>';
    }

    $conn->close();
}

if (isset($_POST['menuitem-submit'])) {
    $menu = $_POST['menuitemid'];
    $name = $_POST['name'];
    $price = $_POST['price'];
        
    $sql = "INSERT INTO menuitems(`menuitemid`, `name`, `price` ) VALUES (?, ?, ? )";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("iss", $menu, $name, $price);
        
        if ($stmt->execute()) {
            echo '<script type="text/javascript">alert("Added Successfully");</script>';
            header("Location:../db_menuitems.php");
        } else {
            echo '<script type="text/javascript">alert("Error inserting data: ' . $stmt->error . '");</script>';
        }

        $stmt->close();
    } else {
        echo '<script type="text/javascript">alert("Error preparing statement: ' . $conn->error . '");</script>';
    }

    $conn->close();
}
?>

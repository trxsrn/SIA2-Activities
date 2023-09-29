<?php
include '../connection.php';

if (isset($_POST['supplier-submit'])) {
    $supplier_id = $_POST['supplier_id'];
    $companyname = $_POST['companyname'];
    $repfname = $_POST['repfname'];
    $replname = $_POST['replname'];
    $referredby = $_POST['referredby'];

    // Check if the referred key exists in the database
    $check_referred_sql = "SELECT * FROM suppliers WHERE `referred_by (FK)` = ?";
    $check_referred_stmt = $conn->prepare($check_referred_sql);
    $check_referred_stmt->bind_param("s", $referredby);
    $check_referred_stmt->execute();
    $check_referred_result = $check_referred_stmt->get_result();

    if ($check_referred_result->num_rows > 0) {
        // Insert data into the database
        $insert_sql = "INSERT INTO suppliers (`supplierid`, `company_name`, `rep_fname`, `rep_lname`, `referred_by (FK)`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_sql);

        if ($stmt) {
            $stmt->bind_param("sssss", $supplier_id, $companyname, $repfname, $replname, $referredby);

            if ($stmt->execute()) {
                echo '<script type="text/javascript">alert("Added Successfully");';
                echo 'window.location.href = "../index.php";</script>';
            } else {
                echo '<script type="text/javascript">alert("Error inserting data: ' . $stmt->error . '");</script>';
            }

            $stmt->close();
        }
    } else {
        echo '<script type="text/javascript">alert("Referred key does not exist in the database. Please enter a valid key.");';
        echo 'window.location.href = "../supplier.php";</script>';
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

    // Check if the supplier exists in the suppliers table
    $check_supplier_sql = "SELECT * FROM suppliers WHERE supplierid = ?";
    $check_supplier_stmt = $conn->prepare($check_supplier_sql);
    $check_supplier_stmt->bind_param("s", $supplier);
    $check_supplier_stmt->execute();
    $check_supplier_result = $check_supplier_stmt->get_result();

    if ($check_supplier_result->num_rows > 0) {
        // Insert data into the ingredients table
        $insert_sql = "INSERT INTO ingredients (`ingredientid`, `name`, `unit`, `unitprice`, `foodgroup`, `inventory`, `supplierid FK`) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_sql);

        if ($stmt) {
            $stmt->bind_param("sssssss", $id, $name, $unit, $price, $foodgroup, $inventory, $supplier);

            if ($stmt->execute()) {
                echo '<script type="text/javascript">alert("Added Successfully");</script>';
                echo 'window.location.href = "../db_ingredients.php";</script>';
            } else {
                echo '<script type="text/javascript">alert("Error inserting data: ' . $stmt->error . '");</script>';
            }

            $stmt->close();
        } else {
            echo '<script type="text/javascript">alert("Error preparing statement: ' . $conn->error . '");</script>';
        }
    } else {
        echo '<script type="text/javascript">alert("Supplier does not exist. Please enter a valid supplier ID.");</script>';
        echo 'window.location.href = "../ingredients.php";</script>';
    }

    $check_supplier_stmt->close();
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
        $stmt->bind_param("ssss", $id, $name, $price, $date);
        
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
    $item_id = $_POST['item_id'];
    $ingredient_id = $_POST['ingredient_id'];
    $quantity = $_POST['quantity'];

    // Check if the item exists in the items table
    $check_item_sql = "SELECT * FROM items WHERE itemid = ?";
    $check_item_stmt = $conn->prepare($check_item_sql);
    $check_item_stmt->bind_param("s", $item_id);
    $check_item_stmt->execute();
    $check_item_result = $check_item_stmt->get_result();

    // Check if the ingredient exists in the ingredients table
    $check_ingredient_sql = "SELECT * FROM ingredients WHERE ingredientid = ?";
    $check_ingredient_stmt = $conn->prepare($check_ingredient_sql);
    $check_ingredient_stmt->bind_param("s", $ingredient_id);
    $check_ingredient_stmt->execute();
    $check_ingredient_result = $check_ingredient_stmt->get_result();

    if ($check_item_result->num_rows > 0 && $check_ingredient_result->num_rows > 0) {
        // Insert data into the madewith table
        $insert_sql = "INSERT INTO madewith (`itemid FK`, `ingredientid FK`, `quantity`) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insert_sql);

        if ($stmt) {
            $stmt->bind_param("sss", $item_id, $ingredient_id, $quantity);

            if ($stmt->execute()) {
                echo '<script type="text/javascript">alert("Added Successfully");';
                echo 'window.location.href = "../db_madewith.php";</script>';
            } else {
                echo '<script type="text/javascript">alert("Error inserting data: ' . $stmt->error . '");</script>';
            }

            $stmt->close();
        } else {
            echo '<script type="text/javascript">alert("Error preparing statement: ' . $conn->error . '");</script>';
        }
    } else {
        echo '<script type="text/javascript">alert("Item or Ingredient does not exist. Please enter valid IDs.");';
        echo 'window.location.href = "../madewith.php";</script>';
    }

    $check_item_stmt->close();
    $check_ingredient_stmt->close();
    $conn->close();
}


if (isset($_POST['meal-submit'])) {

    $id = $_POST['mealid'];
    $name = $_POST['name'];
    $desc = $_POST['description'];
        
    $sql = "INSERT INTO meals (`mealid`, `name`, `description`) VALUES (?, ?, ? )";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $id, $name, $desc);
        
        if ($stmt->execute()) {
            echo '<script type="text/javascript">alert("Added Successfully");';
            echo 'window.location.href = "../meal.php";</script>';
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

    // Check if the meal ID exists in the meals table
    $check_meal_sql = "SELECT * FROM meals WHERE mealid = ?";
    $check_meal_stmt = $conn->prepare($check_meal_sql);
    $check_meal_stmt->bind_param("s", $mealid);
    $check_meal_stmt->execute();
    $check_meal_result = $check_meal_stmt->get_result();

    // Check if the item ID exists in the items table
    $check_item_sql = "SELECT * FROM items WHERE itemid = ?";
    $check_item_stmt = $conn->prepare($check_item_sql);
    $check_item_stmt->bind_param("s", $itemid);
    $check_item_stmt->execute();
    $check_item_result = $check_item_stmt->get_result();

    if ($check_meal_result->num_rows > 0 && $check_item_result->num_rows > 0) {
        // Insert data into the partof table
        $insert_sql = "INSERT INTO partof (`mealid`, `itemid`, `quantity`, `discount`) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_sql);

        if ($stmt) {
            $stmt->bind_param("ssss", $mealid, $itemid, $quantity, $discount);

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
    } else {
        echo '<script type="text/javascript">alert("Meal or Item does not exist. Please enter valid IDs.");';
        echo 'window.location.href = "../partof.php";</script>';
    }

    $check_meal_stmt->close();
    $check_item_stmt->close();
    $conn->close();
}


if (isset($_POST['menuitem-submit'])) {
    $menu = $_POST['menuitemid'];
    $name = $_POST['name'];
    $price = $_POST['price'];
        
    $sql = "INSERT INTO menuitems(`menuitemid`, `name`, `price` ) VALUES (?, ?, ? )";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $menu, $name, $price);
        
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

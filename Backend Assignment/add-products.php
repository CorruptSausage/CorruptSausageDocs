<?php

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: admin-login");
    exit;
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $product_name_form = $_POST['product_name_form'];
    $product_price_form = $_POST['product_price_form'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "products";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO products (product_name, product_price)
    VALUES ('$product_name_form', '$product_price_form')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css//style.css" type="text/css">
    <link rel="stylesheet" href="./css/navbar.css" type="text/css">
    <title>Add products</title>
</head>

<body>
    <?php
    include("./inc/admin-navbar.php");
    ?>
    <div class="form">
        <form method="POST" action="#">
            <ul>
                <li>
                    <label>Product name</label>
                    <input type="text" name="product_name_form" required>
                </li>
                <li>
                    <label>Product price</label>
                    <input type="text" name="product_price_form" required>
                </li>
                <li>
                    <button type="submit">Add</button>
                </li>
            </ul>
        </form>
    </div>

</body>

</html>
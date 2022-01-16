<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id_to_remove = $_POST['product_id_to_delete'];


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

    // sql to delete a record
    $sql = "DELETE FROM products WHERE product_id=$product_id_to_remove";

    if ($conn->query($sql) === TRUE) {
        echo "Product was deleted succesfully!";
    } else {
        echo "Error deleting record: " . $conn->error;
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
    <title>Remove products</title>
</head>

<body>
    <?php
    include("./inc/navbar.php");

    ?>
    <div class="form">
        <form method="POST" action="#">
            <ul>
                <li>
                    <label>Product id</label>
                </li>
                <li>
                    <input type="text" name="product_id_to_delete" class="product_id_to_delete" required>
                </li>
                <li>
                    <button type="submit">Remove</button>
                </li>
            </ul>
        </form>
    </div>

</body>

</html>
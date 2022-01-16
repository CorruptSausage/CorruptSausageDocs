<?php

// connect to database connection
function db()
{
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
}

function db_print_data()
{
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
    $sql = "SELECT product_id, product_name, product_price FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<div class='products' . <div class>" . "<div class='product_name'>" . "Product Name: " . $row["product_name"] . "</div>" . "<br>" . " ID: " . $row["product_id"] . "<br>" . "  Price: " . "€" . $row["product_price"] . "<br>" . "</div>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}

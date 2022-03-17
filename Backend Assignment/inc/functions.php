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
            echo "<div class='products' . <div class>" . "<div class='product_name'>" . $row["product_name"] . "</div>" . "<br>" . " ID: " . $row["product_id"] . "<br>" . "  Price: " . "€" . $row["product_price"] . "<br>" . "</div>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}

function add_products()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $product_name_form = $_POST['product_name_form'];
        $product_price_form = $_POST['product_price_form'];

        $errors = [];

        if (trim($product_name_form) == "") {
            $errors[] = "Error! " . "Please fill in a name.";
        }

        if (trim($product_price_form) == "") {
            $errors[] = "Please fill in a price.";
        }

        if (count($errors) == 0) {
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
                echo "<div class='success'>" . "Product uploaded succesfully" . "</div>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } else {
            foreach ($errors as $errors) {
                echo "<div class='errors'>" . $errors . "</div>";
            }
        }
    }
}

function remove_products()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_id_to_remove = $_POST['product_id_to_delete'];

        $errors = [];

        if (trim($product_id_to_remove) == "") {
            $errors[] = "Error! " . "Please give a product ID";
        }

        if (count($errors) == 0) {
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
                echo "<div class='success'>" . "If this products ID exists, it was succesfully removed." . "</div>";
            } else {
                echo "Error deleting record: " . $conn->error;
            }

            $conn->close();
        } else {
            foreach ($errors as $errors) {
                echo "<div class='errors'>" . $errors . "</div>";
            }
        }
    }
}

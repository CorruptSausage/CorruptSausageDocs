<?php
require("./inc/functions.php");
add_products();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css//style.css" type="text/css">
    <link rel="stylesheet" href="./css/navbar.css" type="text/css">
    <title>Add products</title>
</head>

<body>
    <?php
    require("./inc/navbar.php");
    ?>
    <div class="form">
        <form method="POST" action="#">
            <ul>
                <li>
                    <label>Product name</label>
                    <input type="text" name="product_name_form" class="product_info_input">
                </li>
                <li>
                    <label>Product price</label>
                    <input type="number" name="product_price_form" class="product_info_input">
                </li>
                <li>
                    <button type="submit" class="button">Add</button>
                </li>
            </ul>
        </form>
    </div>

</body>

</html>
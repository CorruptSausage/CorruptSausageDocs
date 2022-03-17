<?php
require("./inc/functions.php");
remove_products();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="stylesheet" href="./css/navbar.css" type="text/css">
    <title>Remove products</title>
</head>

<body>
    <?php
    require("./inc/navbar.php");
    ?>
    <div class="form2">
        <form method="POST" action="#">
            <ul>
                <li>
                    <label>Product id</label>
                </li>
                <li>
                    <input type="number" name="product_id_to_delete" class="product_info_input">
                </li>
                <li>
                    <button type="submit" class="button">Remove</button>
                </li>
            </ul>
        </form>
    </div>

</body>

</html>
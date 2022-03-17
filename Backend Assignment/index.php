<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css//style.css" type="text/css">
    <link rel="stylesheet" href="./css/navbar.css" type="text/css">
    <title>All products</title>
</head>

<body>
    <?php
    require("./inc/navbar.php");
    ?>
    <div class="all_products">
        <?php
        // include functions file
        require("./inc/functions.php");
        // execute db connection
        db_print_data();
        ?>
    </div>
</body>

</html>
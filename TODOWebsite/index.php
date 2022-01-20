<?php
session_start();




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("inc/fonts-header.php"); ?>
    <?php include("./inc/basic-heads.php") ?>
    <title>ToDo - Home</title>
</head>

<body>
    <?php
    include("./inc/database.php");
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        include("./inc/navbar-logged-in.php");
    } else {
        include("./inc/navbar-normal.php");
    }


    ?>

</body>

</html>
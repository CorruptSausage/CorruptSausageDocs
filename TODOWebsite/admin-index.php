<?php
session_start();

include("./inc/loginDB.php");

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["management"] !== "true") {
    header("location: login");
    
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./inc/bootstrap-header.php") ?>
    <?php include("./inc/fonts-header.php"); ?>
    <?php include("./inc/basic-heads.php") ?>
    <title>ToDo - Admin</title>
</head>

<body>
    <?php
        if ($_SESSION["management"] == "true") {
            echo '<h1>Logged in as Admin: ' . htmlspecialchars($_SESSION["username"]) . "</h1>";
            echo '
            <div class="admin-panel-main">
            
            <a><button type="button" class="btn btn-primary">Create users</button></a>
            <a><button type="button" class="btn btn-primary">Edit users</button></a>
            <a href="./logout"><button type="button" class="btn btn-danger">Logout</button></a>
            
            </div>
            ';
        }

    ?>

</body>

</html>
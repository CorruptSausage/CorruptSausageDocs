<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/navbar.css" type="text/css">
    <link rel="stylesheet" href="./css/basic.css" type="text/css">
    <style>
        body {
            font: 14px sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include("./inc/database.php");
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        include("./inc/navbar-logged-in.php");
    } else {
        include("./inc/navbar-normal.php");
    }  ?>
    <h1>Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?></h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Account information
        </button>
    </p>


    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Account information</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="modal-body-content">
                        Username: <p style="font-weight: bold;"><?php echo htmlspecialchars($_SESSION["username"]); ?></p>
                        Account ID: <p style="font-weight: bold;"><?php echo htmlspecialchars($_SESSION["id"]);  ?></p>
                        Created at: <p style="font-weight: bold;"><?php echo htmlspecialchars($_SESSION["created_at"]); ?></p>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>







</body>

</html>
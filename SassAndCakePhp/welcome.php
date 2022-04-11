<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
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
    <link rel="stylesheet" href="./css/navbar.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>

<body>
    <?php include("./inc/navbar.php"); ?>
    <h1 class="my-5">Welkom, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
        Account information
    </button>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Account Information</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                <h2>Logged in since: <?php echo htmlspecialchars($_SESSION["logginInSince"]); ?></h2>
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
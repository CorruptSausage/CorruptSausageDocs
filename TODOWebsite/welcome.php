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
    <title>ToDo - <?php echo htmlspecialchars($_SESSION["username"]); ?></title>
    <?php include("./inc/bootstrap-header.php") ?>
    <?php include("inc/fonts-header.php"); ?>
    <?php include("./inc/basic-heads.php") ?>
    <link rel="stylesheet" href="./css/welcome.css" type="text/css">
</head>

<body>
    <?php include("./inc/database.php");
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        include("./inc/navbar-logged-in.php");
    } else {
        include("./inc/navbar-normal.php");
    }  ?>
    <div class="account_username">
        <h1>Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?></h1>
    </div>
    <div class="account_options">
        <p>
        <h3>Account options</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#account_info_modal">
            Account information
        </button>
        <br>
        <div class="fix_buttons">

        </div>
        <a href="./reset-password" class="btn btn-warning">Reset Your Password</a>
        <div class="fix_buttons">

        </div>
        <?php
        if ($_SESSION['management'] == "true") {
            echo '<a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#admin_modal_continue">Admin panel</a>';

            echo '<!-- The Modal -->
            <div class="modal fade" id="admin_modal_continue">
              <div class="modal-dialog">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Continue to Admin Panel</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                    Are you sure you want to continue to the admin panel? This panel will contain critical data for some users.
                  </div>
            
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <a href="./admin-index"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Continue</button></a>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                  </div>
            
                </div>
              </div>
            </div>';
        }
        ?>
        <div class="fix_buttons">

        </div>
        <a href="./logout" class="btn btn-secondary">Logout</a>
        </p>
    </div>


    <!-- Account information Modal -->
    <div class="modal fade" id="account_info_modal">
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
                        Email: <p style="font-weight: bold;"><?php echo htmlspecialchars($_SESSION["email"]); ?></p>
                        Account ID: <p style="font-weight: bold;"><?php echo htmlspecialchars($_SESSION["id"]);  ?></p>
                        Created at: <p style="font-weight: bold;"><?php echo htmlspecialchars($_SESSION["created_at"]); ?></p>
                        <?php
                        if ($_SESSION['management'] == "true") {
                            echo 'ADMIN: <p style="font-weight: bold;">True</p>';
                        }
                        ?>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <a href="./reset-information"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Update information</button></a>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    







</body>

</html>
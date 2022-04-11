<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    echo
    '
    <div class="topnav" id="myTopnav">
    <a href="index.php" class="active">Home</a>
    <a href="login.php" style="float: right;">Login</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
    </div>
    ';
}else{
    echo 
    '
    <div class="topnav" id="myTopnav">
    <a href="index.php" class="active">Home</a>
    <a href="logout.php" style="float: right;">Logout</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
    </div>
    ';
}
?>


<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
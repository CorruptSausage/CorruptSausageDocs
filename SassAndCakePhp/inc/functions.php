<?php


function changeLoginText()
{
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false) {
        echo 'Login';
    }
    else if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        echo 'Logout';
    }
}

function ChangeLoginHref()
{
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false) {
        echo './login.php';
    }
    else if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        echo './logout.php';
    }
}
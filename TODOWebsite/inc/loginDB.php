<?php


/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'eu02-sql.pebblehost.com');
define('DB_USERNAME', 'customer_230868_users');
define('DB_PASSWORD', '5stOErd!-iy2695L9ih3');
define('DB_NAME', 'customer_230868_users');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
}

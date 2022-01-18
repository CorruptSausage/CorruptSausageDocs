<?php

function loginDB(){
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'eu02-sql.pebblehost.com');
define('DB_USERNAME', 'customer_230868_logins');
define('DB_PASSWORD', 'Ftlt#qU!GhkFCbXGH0MY');
define('DB_NAME', 'customer_230868_logins');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{
    
}
}

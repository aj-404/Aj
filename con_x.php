<?php

# $DB_SERVER = "127.0.0.1";
$DB_SERVER = "Ghosts-MacBook-Pro.local";
$DB_USER = "panda";
$DB_PASS = "panda@12";
$DB_NAME = "sip";
$DB_PORT = "3306";

// 1. Create a database connection
$con = mysqli_connect($DB_SERVER,$DB_USER,$DB_PASS,$DB_NAME,$DB_PORT);

if (!$con) {
    error_log("Failed to connect to MySQL: " . mysqli_connect_error($con));
    die('Internal server error');
}

// 2. Select a database to use 
$db_select = mysqli_select_db($con, $DB_NAME);
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_connect_error($con));
    die('Internal server error');
}

?>

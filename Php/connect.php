<?php
// Set connection variables
$server = "localhost";
$username = "root";
$password = "";
$dbname = "employee_db";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $dbname);

// Check for connection success
if(!$con){
    die("Connection to the database failed due to " . mysqli_connect_error());
}

$insert = false;
?>                  
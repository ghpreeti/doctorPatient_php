<?php
// Database connection details
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'dbb';  // Corrected database name

// Create connection
$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>

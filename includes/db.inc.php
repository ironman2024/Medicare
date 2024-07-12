<?php
$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'pharmacy';
$dbPort = 4306; // Specify the port here

// Attempt to establish connection
$conn = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbName, $dbPort);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

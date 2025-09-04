<?php
$host = "localhost"; // Replace with your host name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "chatapp"; // Replace with your database name

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Remove any echo statements like: echo "Database connected";
?>
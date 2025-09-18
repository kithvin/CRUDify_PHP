<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php-crud"; // DB name

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection status
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connected successfully";
}
?>
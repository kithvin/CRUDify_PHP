<?php
// Database configuration
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "php-crud"; // Database name

// Validate config before connecting
if (empty($servername) || empty($username) || empty($dbname)) {
    die("Error: Missing database configuration values.");
}

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Validate connection
if ($conn->connect_errno) {
    // Show detailed error only in development
    die("Database connection failed: (" . $conn->connect_errno . ") " . $conn->connect_error);
} else {
    echo "";
}



<?php
// Database details
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "useracc"; // Database name

// Validate config before connecting
if (empty($servername) || empty($username) || empty($dbname)) {
    die("Error: Missing database configuration values.");
}

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_errno) {
    // Show detailed error only in development
    die("Database connection failed: (" . $conn->connect_errno . ") " . $conn->connect_error);
} else {
    echo "";
}



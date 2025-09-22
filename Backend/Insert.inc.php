<?php

require_once __DIR__ . '/../backend/dbConnection.php'; // DB connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // --- validation ---
    if (empty($name) || empty($email) || empty($password)) {
        echo "<script>alert('All fields are required'); window.history.back();</script>";
        exit;
    }

    // Email format check
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email'); window.history.back();</script>";
        exit;
    }

    // Check if email already exists 
    $checkQuery = "SELECT * FROM user_details WHERE email = '$email'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        // Email already exists
        echo "<script>alert('This email address is already registered');</script>";
        echo "<script>window.location.href='../frontend/insert.php';</script>";
        exit;
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user 
    $stmt = $conn->prepare("INSERT INTO user_details (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "<script>alert('Data Added Successfully'); window.location.href='../frontend/display.php';</script>";
    } else {
        echo "<script>alert('Database error: " . $conn->error . "'); window.history.back();</script>";
    }

    // Cleanup
    $stmt->close();
    $conn->close(); 
}
?>
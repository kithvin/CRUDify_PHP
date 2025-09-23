<?php
// database connection 
require_once __DIR__ . '/../backend/dbConnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // ---  Validation ---
    if (empty($email) || empty($password)) {
        echo "<script>alert('Email and Password are required!');</script>";
        echo "<script>window.location.href = '../frontend/login.php';</script>";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format!');</script>";
        echo "<script>window.location.href = '../frontend/login.php';</script>";
        exit();
    }

    // --- Secure DB Query using prepared statements ---
    $sql = "SELECT * FROM user_details WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        echo "<script>alert('User login successful');</script>";
        echo "<script>window.location.href = '../frontend/display.php';</script>";
    } else {
        echo "<script>alert('Invalid Email or Password');</script>";
        echo "<script>window.location.href = '../frontend/login.php';</script>";
    }

    $stmt->close();
}
$conn->close();
?>

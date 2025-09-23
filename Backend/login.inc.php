<?php

// database connection 
require_once __DIR__ . '/../backend/dbConnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Check email and password
    $sql = "SELECT * FROM user_details WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "<script>alert('User login sucessfull')</script>";
        echo "<script>window.location.href = '../frontend/display.php'</script>";
    } else {
        echo "<script>alert('Invalid Gmail or Password')</script>";
        echo "<script>window.location.href = '../frontend/login.php'</script>";
    }
}

$conn->close();

?>

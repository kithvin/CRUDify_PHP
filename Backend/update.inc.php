<?php

// Include DB Connection
require_once __DIR__ . '/../backend/dbConnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

// Update data in the database
$sql = "UPDATE user_details SET name='$name', email='$email', password='$password' 
WHERE id = '$id'";

// Check if update was Successful

if($conn->query($sql) === TRUE){
    echo "<script>User Update successfully</script>";
    echo "<script>window.location.href = '../frontend/display.php'</script>";
    exit();
}else{
    echo "Details Update Failed." .$conn->error;
}

}
// close connection 
$conn->close();
?>

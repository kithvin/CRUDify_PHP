<?php 

// Include database connection file
require_once __DIR__ . '/../backend/dbConnection.php';

//check the delete_id parameter exists in the URL
if(isset($_GET['delete_id']) && $_GET['delete_id']){
    // Store the ID to delete
    $deleteID = $_GET['delete_id'];

    // SQL query to delete user record by ID
    $sql = "DELETE FROM user_details WHERE id ='$deleteID'";

    // Execute the query and check if it was successful
    if($conn->query($sql) === TRUE){
        echo "<script>alert('User Account Deleted');</script>";
        echo "<script>window.location.href = '../frontend/insert.php';</script>";
    } else {
        // If query failed
        echo "Account delete Failed";
    }
}else{
    // If no delete_id parameter found in URL
    echo "Delete id parameter not found";
}

// Close the database connection
$conn->close();

?>

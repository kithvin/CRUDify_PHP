<?php 

// Include database connection file
require_once __DIR__ . '/../backend/dbConnection.php';

//check the delete_id parameter exists in the URL
if(isset($_GET['delete_id']) && $_GET['delete_id']){
    $deleteID = $_GET['delete_id'];

    $sql = "DELETE FROM user_details WHERE id ='$deleteID'";
    if($conn->query($sql) === TRUE){
        echo "<script>alert('User Account Deleted');</script>";
        echo "<script>window.location.href = '../frontend/insert.php';</script>";
    } else {
        echo "Account delete Failed";
    }
}else{
    echo "Delete id parameter not found";
}

$conn->close();

?>

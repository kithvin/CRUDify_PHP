<?php

require_once 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and validate form input
    $userName     = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $userGmail    = filter_input(INPUT_POST, 'userGmail', FILTER_VALIDATE_EMAIL);
    $userPassword = $_POST['userPassword'] ?? ''; 

    if (!$userName || !$userGmail || !$userPassword) {
        die("Error: Invalid input data.");
    }

    // Check if email already exists
    $check = $conn->prepare("SELECT COUNT(*) FROM table_details WHERE userGmail = ?");
    if ($check === false) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }
    $check->bind_param("s", $userGmail);
    $check->execute();
    $check->bind_result($exists);
    $check->fetch();
    $check->close();

    if ($exists > 0) {
        die("Error: This email is already registered.");
    }

    // Encrypt password
    $hashedPassword = password_hash($userPassword, PASSWORD_BCRYPT);

    // Insert new record
    $stmt = $conn->prepare("INSERT INTO table_details (userName, userGmail, userPassword) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    $stmt->bind_param("sss", $userName, $userGmail, $hashedPassword);
    
    if ($stmt->execute()) {
        header("Location: success.php");
        exit();
    } else {
        die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    }

    // Close statement
    $stmt->close();
}

?>

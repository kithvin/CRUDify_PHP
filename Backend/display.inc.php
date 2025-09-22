<?php

// Include database connection file
require_once __DIR__ . '/../backend/dbConnection.php';

// Get all records from user_details table
$sql = "SELECT * FROM user_details";
$result = $conn->query($sql);

// Check if records exist
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>***********************************************************</td>";
        echo "<td>";
        echo "<button onclick=\"window.location.href='../frontend/update.php?id=" . $row['id'] . "'\">Update</button>";
        echo "<button type=\"button\" class=\"btn btn-cancel\" onclick=\"window.location.href='../backend/delete.inc.php?delete_id=" . $row["id"] . "'\">Delete</button>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    // If no records found
    echo "No data available";
}

// Close database connection
$conn->close();

?>

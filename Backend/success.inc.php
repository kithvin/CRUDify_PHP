<?php

// Include database connection
require_once __DIR__ . '/dbConnection.php';

// SQL query to fetch all records from table_details
$sql = "SELECT * FROM table_details";
$result = $conn->query($sql);

// Check if any records exist
if ($result->num_rows > 0) {
    // Loop through each record and display data in table rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['id']) . "</td>
                <td>" . htmlspecialchars($row['userName']) . "</td>
                <td>" . htmlspecialchars($row['userGmail']) . "</td>
                <td>••••••</td> <!-- Hidden password for security -->
                <td>
                  <button>Update</button>
                  <button>Delete</button>
                </td>
              </tr>";
    }
} else {
    // If no records are found
    echo "<tr><td colspan='5'>No records found</td></tr>";
}

// Close database connection
$conn->close();

?>
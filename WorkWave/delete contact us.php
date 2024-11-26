<?php
// Include the database configuration file
include 'Admin config.php'; // Ensure this file contains the necessary connection code

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_id'])) {
    $delete_id = intval($_POST['delete_id']); // Convert ID to an integer to avoid SQL injection risks

    // Prepare the delete statement
    $delete_sql = "DELETE FROM messages WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $delete_id); // Bind the ID to the statement

    // Execute the statement
    if ($stmt->execute()) {
        echo '<script>alert("Message deleted successfully.");</script>';
        echo '<script>window.location.href = "my list.php";</script>'; // Redirect back to list.php after deletion
    } else {
        echo '<script>alert("Error deleting message.");</script>';
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>







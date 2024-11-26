<?php
// Include the database configuration file
require 'Admin config.php'; // Ensure this file contains the necessary connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST['id'], $_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message'])) {
        // Get the form data
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Prepare the SQL statement
        $sql = "UPDATE messages SET name=?, phone=?, email=?, message=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $name, $phone, $email, $message, $id);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Message updated successfully.";
        } else {
            echo "Error updating message: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
    } else {
        echo "Error: Missing required fields.";
    }
    $conn->close();
}
?>









<?php
require 'Admin config.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into the messages table
    $sql = "INSERT INTO messages (name, phone,email, message) VALUES ('$name', '$phone','$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New message created successfully";
        header("Location: my list.php"); // Redirect to the message list page
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
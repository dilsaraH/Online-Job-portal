<?php
require "Admin config.php";

//obtain user inputs from login page
$user = $_POST["username"];
$pwd = $_POST["password"];

// check whether obtained inputs matches with data in the database
$sql = "SELECT * FROM admin WHERE username='$user' AND password	='$pwd'";
$result = $conn->query($sql);

// Check if any rows are returned (meaning login is successful)
if($result->num_rows > 0){
    echo "<script>alert('User logged in successfully');
    window.location.href = ('Admin Dashboard.php');</script>";
} 

//direct user back to login page if credentials are invalid
else {
    echo "<script>alert('Invalid username or password');
    window.location.href = ('Admin login.php');</script>";
}

//close connection to save resources
$conn->close();
?>
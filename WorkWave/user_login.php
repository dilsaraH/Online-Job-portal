<?php
require "Admin config.php";

$user = $_POST["username"];
$pwd = $_POST["password"];

$sql = "SELECT * FROM user_details WHERE username='$user' AND password	='$pwd'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<script>alert('User logged in successfully');
    window.location.href = ('index.php');</script>";
} 

else {
    echo "<script>alert('Invalid username or password');
    window.location.href = ('login.php');</script>";
}

$conn->close();
?>
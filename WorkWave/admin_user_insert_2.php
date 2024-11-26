<?php

include("Admin config.php");

$Firstname = $_POST["first_name"];
$Lastname = $_POST["last_name"];
$Username = $_POST["username"];
$Password = $_POST["password"];
$Email = $_POST["email"];
$Phone = $_POST["phone"];

$sql = "insert into user_details(Firstname,Lastname,Username,Password,Email,Phone)
        values('$Firstname','$Lastname','$Username','$Password','$Email','$Phone')";
        
if ($conn->query($sql)) {
    echo "<script>alert('User added successfully');
    window.location.href = 'admin_user_read.php';</script>";
    } 
else {
    echo "<script>alert('Error creating User'); 
    window.location.href = 'admin_user_read.php';</script>";
    }
         

$conn->close();
?>
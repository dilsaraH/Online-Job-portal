<?php

include("Admin config.php");

$Firstname = $_POST["firstName"];
$Lastname = $_POST["lastName"];
$Username = $_POST["username"];
$Password = $_POST["password"];
$Email = $_POST["email"];
$Phone = $_POST["phone"];

$sql = "insert into user_details(Firstname,Lastname,Username,Password,Email,Phone)
        values('$Firstname','$Lastname','$Username','$Password','$Email','$Phone')";
        
if ($conn->query($sql)) {
    echo "<script>alert('User added successfully');
    window.location.href = 'index.php';</script>";
    } 
else {
    echo "<script>alert('Error creating User'); 
    window.location.href = 'user_register.php';</script>";
    }
         
$conn->close();
?>
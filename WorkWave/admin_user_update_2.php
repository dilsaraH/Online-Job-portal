<?php
require "Admin config.php";

$User_ID = $_POST["user_id"];
$Firstname = $_POST["first_name"];
$Lastname = $_POST["last_name"];
$Username = $_POST["username"];
$Password = $_POST["password"];
$Email = $_POST["email"];
$Phone = $_POST["phone"];

$sql = "UPDATE user_details SET Firstname = '$Firstname', 
                                Lastname = '$Lastname', 
                                Username = '$Username', 
                                Password = '$Password', 
                                Email = '$Email', 
                                Phone = '$Phone' 
                                WHERE UID = '$User_ID'";

if($conn->query($sql)){
    echo "<script> alert('User Updated successfully');
    window.location.href = 'admin_user_read.php';</script>";
}
else{
    echo "<script> alert('User Update Failed');
    window.location.href = 'admin_user_read.php';</script>";
}
?>

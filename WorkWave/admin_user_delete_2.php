<?php
require "Admin config.php";

if (isset($_GET["user_id"])) {
    $User_ID = $_GET["user_id"];

    // Prepare the DELETE statement
    $sql = "DELETE FROM user_details WHERE UID = '$User_ID'";

    if ($conn->query($sql)) {
        echo "<script> alert('User Deleted successfully');
        window.location.href = 'admin_user_read.php';</script>";
    } else {
        echo "<script> alert('User Deletion Failed');
        window.location.href = 'admin_user_read.php';</script>";
    }
} else {
    echo "<script> alert('No User ID provided.');
    window.location.href = 'admin_user_read.php';</script>";
}

$conn->close();
?>

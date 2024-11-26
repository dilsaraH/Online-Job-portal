<?php
require "Admin config.php";

//obtain job id from the table
if (isset($_GET['job_id'])) {
    $jobID = $_GET['job_id'];

    //sql query to delete 
    $sql = "DELETE FROM jobpost WHERE JobID = '$jobID'";

    //check wheater query executes
    if ($conn->query($sql)) {
        echo "<script>alert('Job deleted successfully'); window.location.href = 'Admin jobmanagement.php';</script>";
    } else {
        echo "<script>alert('Error deleting job');</script>";
    }
    $conn->close();
}
?>

<?php
require "Admin config.php";

//store new data to variables
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jobID = $_POST["jobid"];
    $title = $_POST["jobtitle"];
    $company = $_POST["companyname"];
    $location = $_POST["location"];
    $salary = $_POST["salary"];
    $description = $_POST["description"];

    //sql query to update table
    $sql = "UPDATE jobpost SET Title = '$title', Company_name = '$company', Location = '$location', Salary = '$salary', Description = '$description' WHERE JobID = '$jobID'";

    //check wheater query executes
    if ($conn->query($sql)) {
        echo "<script>alert('Job updated successfully'); window.location.href = 'Admin jobmanagement.php';</script>";
    } else {
        echo "<script>alert('Error updating job');</script>";
    }
    $conn->close();
}
?>

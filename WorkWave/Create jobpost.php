<?php
//import the Admin config file to esablish a connection
require "Admin config.php";

//obtain data from the form
$title = $_POST["jobtitle"];
$cname = $_POST["companyname"];
$location = $_POST["location"];
$salary = $_POST["salary"];
$description = $_POST["description"];

//insert data to the table job post
$sql = "insert into jobpost(Title,Company_name,Location,Salary,Description)
        values('$title','$cname','$location','$salary','$description')";
        

//if data insertion succesfull display alert message using javascript and redirect user to the website
if($conn->query($sql)){
    echo "<script> alert('Job Created succesfully');
    window.location.href = 'Admin jobmanagement.php';</script>";
}
//if data insertion unsuccesfull display alert message using javascript
else{
    echo "<script>alert('Error creating Jobpost');</script>";
}   

//closed the connection to save server resources
$conn->close();
?>
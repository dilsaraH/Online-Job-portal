<?php
//import the Admin config file to esablish a connection
require "Admin config.php";

//obtain data from the form
$name = $_POST["username"];
$title = $_POST["title"];
$address = $_POST["address"];
$email = $_POST["email"];
$contact = $_POST["contact"];

//insert data to the table job post
$sql = "insert into jobapplications(Applicant_name,Job,Address,Email,Contact)
        values('$name','$title','$address','$email','$contact')";
        

//if data insertion succesfull display alert message using javascript and redirect user to the website
if($conn->query($sql)){
    echo "<script> alert('Job Created succesfully');
    window.location.href = 'job apply.php';</script>";
}
//if data insertion unsuccesfull display alert message using javascript
else{
    echo "<script>alert('Unable to Apply Job');</script>";
}   

//closed the connection to save server resources
$conn->close();
?>
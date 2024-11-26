<?php
//establish a connection with the server
$serverdb = "localhost";
$userdb = "root";
$pwd = "";
$namedb = "admindbww";

$conn = new mysqli($serverdb,$userdb,$pwd,$namedb);

if($conn->connect_error){
    die("Failed to establish a connection!".$conn->connect_error);
}
?>
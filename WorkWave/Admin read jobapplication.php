<?php

//import the Admin config file to esablish a connection
require "Admin config.php";

//select coloumns from the table jobpost
$sql = "Select * from jobapplications";

//store all the rows returned from the jobpost table in the  $result variable
$result = $conn->query($sql); 

//display result if number of rows selected is greater than 0
if($result->num_rows>0){

    //display each row in the $result variable using fetch assoc function
    while($row=$result->fetch_assoc()){

        //display the row as a table
         echo "<tr>";
         echo "<td>".$row["Application_ID"]."</td>";
         echo "<td>".$row["Applicant_name"]."</td>";
         echo "<td>".$row["Job"]."</td>";
         echo "<td>".$row["Address"]."</td>";
         echo "<td>".$row["Email"]."</td>";
         echo "<td>".$row["Contact"]."</td>";
        echo "</tr>";
    }
}

//display a warning if there are no data in the table
else{
    echo "<script>alert('No Data to display');</script>";
    }

//close connection to save resources    
$conn->close();
?>
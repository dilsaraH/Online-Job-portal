<?php

//import the Admin config file to esablish a connection
require "Admin config.php";

//select coloumns from the table jobpost
$sql = "Select * from jobpost";

//store all the rows returned from the jobpost table in the  $result variable
$result = $conn->query($sql); 

//display result if number of rows selected is greater than 0
if($result->num_rows>0){

    //display each row in the $result variable using fetch assoc function
    while($row=$result->fetch_assoc()){

        //display the row as a table
         echo "<tr>";
         echo "<td>".$row["JobID"]."</td>";
         echo "<td>".$row["Title"]."</td>";
         echo "<td>".$row["Company_name"]."</td>";
         echo "<td>".$row["Location"]."</td>";
         echo "<td>".$row["Salary"]."</td>";
         echo "<td style = 'text-align:justify;'>".$row["Description"]."</td>";

         //create buttons for update and delete jobpost for each joblist and direct user to job update page using javascript
        echo "<td><input id = 'action' type = 'button' value = 'Apply' onclick = 'buttondirect6()'></td>";
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
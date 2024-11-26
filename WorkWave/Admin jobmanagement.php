<?php
    include "Admin header.php";
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="styles/styles_adminjobmanagement.css">
    <title>Work Wave - Jobpost Management</title>
</head>
<body>
    <div id="content">
    <!--greeting-->
        <h1>Manage Job Listings</h1><br/>
        <p id="para">
            Hello, Administrator! Welcome to your job management hub. Here, you can easily oversee and update job listings to keep your job board accurate and up-to-date.
        </p>
    </div>

     <!--create table to display job posts-->
    <div id="divtable">
        <table border="1" width="100%" cellpadding="10" cellspacing="0">
            <tr>
                <th>Job ID</th>
                <th>Title</th>
                <th>Company Name</th>
                <th>Location</th>
                <th>Salary</th>
                <th>Description</th>
                <th>Action</th>
            </tr>

            <?php

                include("Admin config.php");

                //select data from table
                $sql = "SELECT * FROM jobpost";
                $result = $conn->query($sql);//check wheater query executes

                //check  if selected results has more rows
                if ($result->num_rows > 0) {
                    //break rows from total result
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["JobID"] . "</td>";
                        echo "<td>" . $row["Title"] . "</td>";
                        echo "<td>" . $row["Company_name"] . "</td>";
                        echo "<td>" . $row["Location"] . "</td>";
                        echo "<td>" . $row["Salary"] . "</td>";
                        echo "<td>" . $row["Description"] . "</td>";
                        echo "<td>
                                <a href='Update jobpost form.php?job_id=" . $row["JobID"] . "'><input id='action' type='button' value='Update'></a> 
                                <a href='Delete job.php?job_id=" . $row["JobID"] . "' onclick=\"return confirm('Are you sure you want to delete this job?');\">
                                    <input id='action' type='button' value='Delete'>
                                </a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No job data available</td></tr>";
                }
                $conn->close();
            ?>
        </table>
    </div><br/>
    
    <script src="js/admin.js"></script>
</body>
</html>
<?php
    include "Admin footer.php";
?>

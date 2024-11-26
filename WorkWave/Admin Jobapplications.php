<?php
    include "Admin header.php";
?>
<!DOCTYPE html>
<head>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="styles/styles_adminjobmanagement.css">
    <title>Work Wave- Job Application Manage</title>
</head>
<body>
    <!-- Greeting of the job list -->
    <div id = "content">
    <h1>View Job Applications</h1><br/>
    </div>

     <!-- Create a table to display joblists from the table joblist-->
    <div id = "divtable">
        <table border = "4" width = "100%" height = "400">

             <!--Create table headers-->
            <tr>
                <th>Application ID</th>
                <th>Applicant_name</th>
                <th>Job</th>
                <th>Address</th>
                <th>Email</th>
                <th>Contact</th>
    
            </tr>

             <!-- Import the jobpost.php to display data stored in the table -->
            <?php
            include("Admin read jobapplication.php");
            ?>

        </table>
    </div><br/>
    
    <script src = "js/admin.js"></script>
</body>
</html>

<?php
  include "Admin footer.php";
?>
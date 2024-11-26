<?php
include("header.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="styles/styles_adminjobmanagement.css">
        <title>WorkWave - Apply jobs</title>
    </head>

    <body style = "background-image:url('Images/adminmanage.jpg');">
   <!-- Greeting of the job list -->
   <div id = "content">
    <h1>Apply Jobs!</h1><br/>

    <p id = "para">
    Welcome to our Job Application page! Browse open positions and apply by submitting your details and resume.
     We look forward to reviewing your application!</p>
    </div>

         <!-- Create a table to display joblists from the table joblist-->
         <div id = "divtable">
        <table border = "4" width = "100%" height = "400">

             <!--Create table headers-->
            <tr>
                <th>Job ID</th>
                <th>Title</th>
                <th>Company Name</th>
                <th>Location</th>
                <th>Salary</th>
                <th>Description</th>
                <th>Action</th>
    
            </tr>

             <!-- Import the jobpost.php to display data stored in the table -->
            <?php
            include("Applyjobs_read.php");
            ?>

        </table>

    </div><br/>

    <script src = "js/admin.js"></script>
    </body>
</html>
<?php
    include("footer.php");
?>
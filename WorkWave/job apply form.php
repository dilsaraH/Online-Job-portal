<?php
include("header.php");
?>
<!DOCTYPE html>
<head>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="styles/styles_adminjobpost.css">
    <title>Work Wave-Job apply Form</title>
</head>
<body >
      <!-- Greeting of the job list -->
      <div id = "content">
    <h1>Apply a Jobpost</h1><br/>
    </div>

    <!-- Job list Update form -->
     <form method="POST" action="job application insert.php" onsubmit="return CRUDVALIDATE()">
        <fieldset style = "width:500px;height:600px;">
            <center><h2 style = "color:#2a3439;margin-top:30px;">Apply a Job</h2><br/><br/></center>

            <!-- Insert textbox -->
            <label> Applicant Name</label><br/>
            <input id = "jobtag" type="text" name = "username"><br/><br/>

             <!-- Insert textbox -->
            <label> Job Title</label><br/>
            <input id = "jobtag" type="text" name = "title"><br/><br/>

            <!-- Insert textbox -->
            <label>Address</label><br/>
            <input id = "jobtag" type="text" name = "address"><br/><br/>

            <!-- Insert textbox -->
            <label>Email</label><br/>
            <input id = "jobtag" type="email" name = "email"><br/><br/>

            <!-- Insert textbox -->
            <label>contact no</label><br/>
            <input id = "jobtag" type="text" name = "contact" pattern="[0-9]{10}"><br/><br/>

            <!-- Insert Submit button -->
            <input style = "margin-top:20px;" id = "subbtn" type = "submit" value = "Apply Job"><br/><br/>
        </fieldset>
     </form>
    
    
    
    <script src = "js/admin.js"></script>
</body>
</html>
<?php
    include("footer.php");
?>

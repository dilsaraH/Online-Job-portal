<?php
    include "Admin header.php";
?>
<!DOCTYPE html>
<head>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="styles/styles_adminjobpost.css">
    <title>Work Wave-Create Jobpost</title>
</head>
<body>
    <!-- Greeting of the job list -->
    <div id = "content">
    <h1>Create a New Joblisting</h1><br/>

    <p id = "para">Welcome to the job creation portal! Here, you can post exciting new opportunities and connect top talent with employers.
     Ensure the details are accurate, compelling, and up-to-date to attract the best candidates.</p>
    </div>

    <!-- Job list create form -->
     <form method="POST" action="Create jobpost.php" onsubmit="return CRUDVALIDATE()">
        <fieldset>
            <center><h2 style = "color:#2a3439;">Post a Job</h2><br/><br/></center>

            <!-- Insert textbox -->
            <label> Title</label><br/>
            <input id = "jobtag" type="text" name = "jobtitle" placeholder="Ex:Junior Marketing Manager"><br/><br/>

            <!-- Insert textbox -->
            <label>Company Name</label><br/>
            <input id = "jobtag" type="text" name = "companyname" placeholder="Ex:Your Company"><br/><br/>

            <!-- Insert textbox -->
            <label>Location</label><br/>
            <input id = "jobtag" type="text" name = "location" placeholder="Ex:Colombo 05"><br/><br/>

            <!-- Insert textbox -->
            <label>Salary</label><br/>
            <input id = "jobtag" type="number" name = "salary" placeholder="Ex:100000"><br/><br/>

            <!-- Insert textarea -->
            <label>Job Description</label><br/>
            <textarea id = "discription" cols = "37" rows = "5" name = "description"></textarea><br/><br/>

            <!-- Insert Submit button -->
            <input id = "subbtn" type = "submit" value = "Post Job"><br/><br/>
        </fieldset>
     </form>
    
    <script src = "js/admin.js"></script>
</body>
</html>

<?php
    include "Admin footer.php";
?>
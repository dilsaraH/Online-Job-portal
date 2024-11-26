<?php
    include "Admin config.php";
    include "Admin header.php";

    //obtain values that need to be displayed on the form
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['job_id'])) {
        $jobID = $_GET['job_id'];
        $sql = "SELECT * FROM jobpost WHERE JobID = '$jobID'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="styles/styles_adminjobpost.css">
    <title>Work Wave - Update Jobpost</title>
</head>
<body style = "background-image:url('Images/adminmanage.jpg');">
    <!--greeting-->
    <div id="content">
        <h1>Update a Job Post</h1><br/>
        <p id="para">
            Welcome to the job update portal! Here, you can modify existing job posts to ensure they remain relevant and attractive to top talent.
        </p>
    </div>
    
     <!--Update form with details and used js to validate-->
    <form method="POST" action="Update jobpost.php" onsubmit="return CRUDVALIDATE()">
        <fieldset style="width:500px;height:600px;">
            <h2 style="color:#2a3439; text-align:center;">Update a Job</h2><br/>
            
            <input type="hidden" name="jobid" value="<?php echo $row['JobID']; ?>">

            <label>Title</label><br/>
            <input id="jobtag" type="text" name="jobtitle" value="<?php echo $row['Title']; ?>"><br/><br/>

            <label>Company Name</label><br/>
            <input id="jobtag" type="text" name="companyname" value="<?php echo $row['Company_name']; ?>"><br/><br/>

            <label>Location</label><br/>
            <input id="jobtag" type="text" name="location" value="<?php echo $row['Location']; ?>"><br/><br/>

            <label>Salary</label><br/>
            <input id="jobtag" type="number" name="salary" value="<?php echo $row['Salary']; ?>"><br/><br/>

            <label>Job Description</label><br/>
            <textarea id="description" cols="37" rows="5" name="description"><?php echo $row['Description']; ?></textarea><br/><br/>

            <input id="subbtn" type="submit" value="Update Job"><br/><br/>
        </fieldset>
    </form>
</body>
</html>

<?php
include "Admin header.php";
?>
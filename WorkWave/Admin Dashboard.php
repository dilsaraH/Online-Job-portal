<?php
    include "Admin header.php";
?>
<!DOCTYPE html>
<head> 
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="styles/styles_admindashboard.css">
    <title>Work Wave-Admin Dashboard </title>
</head>
<body>
     <!--Greeting -->
    <h1 id = "welcome">Welcome to Admin Dashboard,</h1><br/><br/>

    <!--Display random greetings in admin dashboard using javascript -->
    <script>
        //obtain random value
        const rand = Math.random();

        //display greeting according to the value obtained
        if(rand <= 0.25){
            document.getElementById("welcome").innerHTML = "Welcome back, Admin!";
        }
        else if(rand > 0.25 && rand <= 0.50){
            document.getElementById("welcome").innerHTML = "Good to see you, Admin!";
        }
        else if(rand > 0.50 && rand <= 0.75){
            document.getElementById("welcome").innerHTML = "Hope you're having a productive day, Admin!";
        }
        else{
            document.getElementById("welcome").innerHTML = "Let's proceed with today's agenda, Admin.";
        }
    </script>

     <!-- Display content -->
    <div id = "box">
    <p>Want to List a Job?</p><br/>
    
     <!-- Insert a button -->
    <input type = "button" id = "mybutton" value="List a Job" onclick="buttondirect()">
    </div>

    <div id = "box">
        <p>Want to Update a Job?</p><br/>
    
        <!-- Insert a button -->
        <input type = "button" id = "mybutton" value="View Job list" onclick="buttondirect2()">
        </div>

    <div id = "box">
        <p>Want to Manage Users?</p><br/>
        
        <!-- Insert a button -->
        <input type = "button" id = "mybutton" value="User Management" onclick="buttondirect5()">
    </div>

    <script src = "js/admin.js"></script>
</body>
</html>
<?php
    include "Admin footer.php";
?>
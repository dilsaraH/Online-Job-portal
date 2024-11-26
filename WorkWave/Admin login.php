<!DOCTYPE html>
<head>

    <title>Work Wave - Admin Login</title>

    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="styles/styles_adminlogin.css">
</head>
<body>
    <!-- login form -->
    <form id="form" method="post" action ="dillogin.php" onsubmit="return validateForm()">
        <fieldset>

            <!-- Greeting -->
            <center><h1 class = "heading">Admin Login</h1><br/></center>
            <h3 class = "heading" id = "hour" style = "margin-left: 80px;"><center>Welcome back!</center></h3><br/><br/>

            <div>
            
            <!-- insert textbox -->    
            <p id = "align">Enter Username</p>
            <center><input id = "boxsize1" type = "text" name = "username" placeholder="johndoe"><br/><br/></center>

            <!-- insert textbox -->   
            <p id = "align">Enter Password</p>
            <center>
                <input id = "boxsize2" type = "password" name = "password" placeholder="password"><br/><br/><br/>
            </center>   
             
            <!-- insert submit Button -->   
            <center>
                <input id="loginbutton" type="submit" value="Login"><br/><br/>
                <font color ="grey">or</font>
            </center>
            </div>
            
            <!-- Help links -->   
            <div id="help">
            <a href = "login.php" style = "text-decoration: none;"><font color = "white">Login as an User</font></a><br/><br/>  
            </div>

        </fieldset>
    </form>

    
 <!-- Linked the external javascript file -->
<script type="text/javascript" src = "js/admin.js"></script>

</body>
</html>
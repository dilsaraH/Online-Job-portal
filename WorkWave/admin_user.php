<?php
    include "Admin header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/admin_user.css">
    <title>Work Wave - User Management</title>
</head>
<body>
    <main>
        <div class="all-content">
            <h1>User Management Panel</h1>
            <h2 id="greet"></h2>
            <p class="para">You can Register Users and Update existing Users here.</p>
            <div class="boxes">
                <div class="box1">
                    <h3>You can Register New Users Here</h3>
                    <p>Fill in the necessary details to register a new user to the system.</p>
                    <input type="button" value="Register a User" onclick="window.location.href='admin_user_insert.php'">
                </div>
                <div class="box2">
                    <h3>You can Update Existing Users Here</h3>
                    <p>Edit the details of existing users to keep the information up-to-date.</p>
                    <input type="button" value="Update Users" onclick="window.location.href='admin_user_read.php'">
                </div>
            </div>
        </div>
    </main>

    <script src="js/admin_user.js"></script>
</body>
</html>

<?php
    include "Admin footer.php";
?>
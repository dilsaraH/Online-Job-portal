<?php
    include "Admin header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/admin_user_insert.css">
    <title>Work Wave - User Management</title>
</head>
<body>
    <main>
        <div class="form-container">
            <h1>User Registration Form</h1>
            <form action="admin_user_insert_2.php" method="POST" onsubmit="return userRegistrationForm()">
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name">
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                <input type="submit" value="Register User">
            </form>
        </div>
    </main>

    <script src="JS/admin_user.js"></script>
</body>
</html>

<?php
    include "Admin footer.php";
?>
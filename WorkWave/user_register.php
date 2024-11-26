<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="styles/user_registration.css">
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form id="registerForm" action="user_register_2.php" method="POST" onsubmit="return validateForm()">
            <div class="input-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName">
            </div>
            <div class="input-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName">
            </div>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="input-group">
                <label for="confirmPassword">Re-enter Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword">
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" >
            </div>
            <div class="input-group">
                <label for="phone">Telephone Number</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}">
            </div>

            <button type="submit" class="btn">Register</button>

            <div class="input-group">
                <p class="log">Login as <a href="Admin login.php">Admin</a> or Login as <a href="login.php">User</a></p>
            </div> 
        </form>
    </div>
    <script src="JS/user.js"></script>
</body>
</html>

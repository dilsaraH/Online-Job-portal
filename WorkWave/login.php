<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="user_login.php" method="POST" onsubmit="return loginValidate()">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit" class="btn">Login</button>
            <p class="signup-link">Don't have an account? <a href="user_register.php">Sign up here</a> or Login as <a href="Admin login.php">Admin</a></p>
        </form>
    </div>
    <script src="JS/user.js"></script>
</body>
</html>

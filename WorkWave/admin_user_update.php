<?php
include "Admin header.php";
include "Admin config.php"; // Include your database connection

// Fetch user data based on the user_id provided in the URL (GET parameter)
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $query = "SELECT * FROM user_details WHERE UID = '$user_id'";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('User not found.'); window.location.href='admin_user_read.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('No user ID provided.'); window.location.href='admin_user_read.php';</script>";
    exit;
}
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
            <h1>User Update Form</h1>
            <form action="admin_user_update_2.php" method="POST" onsubmit="return checkRegistrationForm()">
                <div class="form-group">
                    <label for="user_id">User ID:</label>
                    <input type="text" id="user_id" name="user_id" value="<?php echo $user['UID']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name" value="<?php echo $user['Firstname']; ?>">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" value="<?php echo $user['Lastname']; ?>">
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="<?php echo $user['Username']; ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" value="<?php echo $user['Password']; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $user['Email']; ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" value="<?php echo $user['Phone']; ?>">
                </div>
                <input type="submit" value="Update User">
            </form>
        </div>
    </main>

    <script src="JS/admin_user.js"></script>
</body>
</html>

<?php
include "Admin footer.php";
?>

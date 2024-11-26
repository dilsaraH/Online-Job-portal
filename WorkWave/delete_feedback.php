<?php
require 'Admin config.php';
session_start();
//$userID = $_SESSION['userID'];
$userID = 1;

$query = "SELECT * FROM feedback WHERE userID = '$userID'";
$result = mysqli_query($conn, $query);

$feedbackExists = $result->num_rows > 0;

if (!$feedbackExists) {
    header("Location: feedback.php");
    exit();
}

$feedback = mysqli_fetch_assoc($result);
?>

<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/style.css">
    <title>User Profile Page</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="feedback.php">Add Feedback</a></li>
                <li><a href="edit_feedback.php">Edit Feedback</a></li>
                <li><a href="delete_feedback.php">Delete Feedback</a></li>
            </ul>
        </div>

        <div class="main-content">
            <header>
                <h1>Delete Your Feedback</h1>
            </header>
            <section>
                <p>Are you sure you want to delete this feedback?</p>
                
                <form action="feedback_process.php" method="POST">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" value="<?php echo $feedback['id']; ?>">
                    <input type="submit" value="Yes, Delete">
                    <a href="user_profile.php">Cancel</a>
                </form>
            </section>
        </div>
    </div>
</body>
</html>
<?php
    include "footer.php";
?>
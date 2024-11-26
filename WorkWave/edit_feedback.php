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
                <h1>Edit Your Feedback</h1>
            </header>
            <section>
                <form id="feedbackForm" action="feedback_process.php" method="POST">
                    <input type="hidden" name="action" value="edit">
                    <input type="hidden" name="id" value="<?php echo $feedback['id']; ?>">
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $feedback['email']; ?>" ><br>
                    
                    <label for="feedback">Feedback:</label>
                    <textarea id="feedback" name="feedback" ><?php echo $feedback['feedback']; ?></textarea><br>
                    
                    <input type="submit" value="Update Feedback">
                </form>
            </section>
        </div>
    </div>
</body>
</html>


<script>
document.getElementById('feedbackForm').addEventListener('submit', function(event) {
    // Get input values
    const email = document.getElementById('email').value.trim();
    const feedback = document.getElementById('feedback').value.trim();
    
    // Basic validation: Check if email and feedback fields are not empty
    if (email === '' || feedback === '') {
        alert('Please fill in all fields.');
        event.preventDefault(); // Prevent form submission
    }
});
</script>

<?php
    include "footer.php";
?>
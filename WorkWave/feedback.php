<?php
require 'Admin config.php';
session_start();
//$userID = $_SESSION['userID'];
$userID = 1;

$query = "SELECT * FROM feedback WHERE userID = '$userID'";
$result = $conn->query($query);

$feedbackExists = $result->num_rows > 0;
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
                <h1>User Feedback</h1>
            </header>
            
            <section>
                <?php if ($feedbackExists): 
                    $feedbackData = $result->fetch_assoc();
                ?>
                    <div class="feedback-details">
                        <h2>Your Submitted Feedback</h2>
                        <p><strong>Email:</strong> <?php echo $feedbackData['email']; ?></p>
                        <p><strong>Feedback:</strong> <?php echo $feedbackData['feedback']; ?></p>
                        <p><strong>Date Submitted:</strong> <?php echo $feedbackData['date']; ?></p>
                    </div>
                    <p>If you want to edit your feedback, please go to the <a href="edit_feedback.php">Edit Feedback</a> page.</p>

                <?php else: ?>
                    <form id="feedbackForm" action="feedback_process.php" method="POST">
                        <input type="hidden" name="action" value="add">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" ><br>
                        
                        <label for="feedback">Feedback:</label>
                        <textarea id="feedback" name="feedback" ></textarea><br>
                        
                        <input type="submit" value="Submit Feedback">
                    </form>
                <?php endif; ?>
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
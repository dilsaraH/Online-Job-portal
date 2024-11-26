<?php

include 'Admin config.php';


session_start();
//$userID = $_SESSION['userID'];
$userID = 1;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Determine the action (add, edit, or delete)
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        // Add Feedback
        if ($action == 'add') {
            $email = $_POST['email'];
            $feedback = $_POST['feedback'];

            // Insert query to add feedback
            $query = "INSERT INTO feedback (userID, email, feedback) VALUES ('$userID', '$email', '$feedback')";

            if ($conn->query($query) === TRUE) {
                echo "<script>
                        alert('Feedback added successfully!');
                        window.location.href = 'feedback.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Error: " . $conn->error . "');
                        window.location.href = 'feedback.php';
                      </script>";
            }

        // Edit Feedback
        } elseif ($action == 'edit') {
            $feedbackID = $_POST['id'];  // Assuming feedbackID is passed when editing
            $feedback = $_POST['feedback'];
            $email = $_POST['email'];

            // Update query to edit feedback
            $query = "UPDATE feedback SET feedback = '$feedback' , email = '$email' WHERE id = '$feedbackID' AND userID = '$userID'";

            if ($conn->query($query) === TRUE) {
                echo "<script>
                        alert('Feedback updated successfully!');
                        window.location.href = 'feedback.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Error: " . $conn->error . "');
                        window.location.href = 'feedback.php';
                      </script>";
            }

        // Delete Feedback
        } elseif ($action == 'delete') {
            $feedbackID = $_POST['id'];  // Assuming feedbackID is passed when deleting

            // Delete query to remove feedback
            $query = "DELETE FROM feedback WHERE id = '$feedbackID' AND userID = '$userID'";

            if ($conn->query($query) === TRUE) {
                echo "<script>
                        alert('Feedback deleted successfully!');
                        window.location.href = 'feedback.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Error: " . $conn->error . "');
                        window.location.href = 'feedback.php';
                      </script>";
            }
        }
    }
} else {
    echo "<script>
            alert('Invalid request!');
            window.location.href = 'feedback.php';
          </script>";
}

$conn->close();
?>

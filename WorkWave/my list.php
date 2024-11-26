<?php
    include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Message List</title>
    <link rel="stylesheet" href="styles/styles contact us.css">
</head>
<body>
    <main>
        <section class="message-list-section">
            <h1>Message List</h1>
            <div id="MessageContainer">
            <?php
    // Include the database configuration file
    include 'Admin config.php'; // Ensure this file contains the necessary connection code
    // Fetch messages from the database
    $sql = "SELECT * FROM messages"; // Adjust table name as per your database
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<div class="message" data-id="' . $row['id'] . '">';
            echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
            echo '<p>Phone Number: ' . htmlspecialchars($row['phone']) . '</p>';
            echo '<p>Email: ' . htmlspecialchars($row['email']) . '</p>';
            echo '<p>Message: ' . htmlspecialchars($row['message']) . '</p>';
            echo '<div class="buttons">';
            echo '<button class="button update" onclick="openUpdateModal(' . $row['id'] . ', \'' . addslashes($row['name']) . '\', \'' . addslashes($row['email']) . '\', \'' . addslashes($row['phone']) . '\', \'' . addslashes($row['message']) . '\')">Update</button>';
            echo '<form method="POST" action="delete contact us.php" style="display:inline;">';
                    echo '<input type="hidden" name="delete_id" value="' . $row['id'] . '">'; // Hidden input for ID
                    echo '<button type="submit" class="button delete" onclick="return confirm(\'Are you sure you want to delete this message?\')">Delete</button>';
                    echo '</form>';
                    echo '</div>';
                    echo '</div>';
        }
    
    } else {
        echo '<p>No messages found.</p>';
    }

    // Close the connection
    $conn->close();
?>
            </div>
        </section>
    </main>

    <!-- Modal for updating message -->
    <div id="updateModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close-btn" onclick="closeUpdateModal()">&times;</span>
            <h2>Update Message</h2>
            <form id="updateForm"   method = "POST" action ="update contact us.php" onsubmit="updateMessage(event)">
                <label for="messageId">Message ID:</label>
                <input type="text" id="messageId" name = "id" readonly>

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name = "phone" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name = "email" required>

                <label for="message">Message:</label>
                <textarea id="message"  name = "message" required></textarea>

                <button type="submit">Update</button>
            </form>
        </div>
    </div>
    
    

    <!-- Modal for deleting message -->
    <div id="deleteModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close-btn" onclick="closeDeleteModal()">&times;</span>
            <h2>Delete Message</h2>
            <p>Are you sure you want to delete this message?</p>
            <button id="confirmDelete" onclick="deleteMessage()">Yes, Delete</button>
            <button id="cancelDelete" onclick="closeDeleteModal()">Cancel</button>
        </div>
    </div>

    <script src="JS/script.js"></script>
</body>
</html>

<?php
    include "footer.php";
?>
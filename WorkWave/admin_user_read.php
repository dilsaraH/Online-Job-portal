<?php
    include "Admin header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="styles/admin_user_read.css">
    <title>Work Wave - User Management</title>
</head>
<body>
    <main>
        <div id="content">
            <h1>Manage User Details</h1><br/>
            <p id="para">
                Hello, Administrator! Welcome to the user management page. Here, you can manage all the registered users on the platform. You can update user information or remove user accounts as needed to maintain an up-to-date system.
            </p>
        </div>

        <div id="divtable">
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("Admin config.php");

                        // Query to select all user details
                        $sql = "SELECT * FROM user_details";  // Adjust table name if needed

                        $result = $conn->query($sql); 

                        // Check if there are any rows
                        if($result->num_rows > 0){
                            // Loop through the results and display each row
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                echo "<td>".$row["UID"]."</td>";
                                echo "<td>".$row["Firstname"]."</td>";
                                echo "<td>".$row["Lastname"]."</td>";
                                echo "<td>".$row["Username"]."</td>";
                                echo "<td>".$row["Email"]."</td>";
                                echo "<td>".$row["Phone"]."</td>";
                                echo "<td>
                                        <a href='admin_user_update.php?user_id=" . $row["UID"] . "'>
                                            <input id='action' type='button' value='Update'>
                                        </a>
                                        <a href='admin_user_delete_2.php?user_id=" . $row["UID"] . "' onclick=\"return confirm('Are you sure you want to delete this user?');\">
                                            <input id='action' type='button' value='Delete'>
                                        </a>
                                    </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>No User Data Available</td></tr>";
                        }
 
                        $conn->close();
                    ?>
                </tbody>
            </table>
        </div><br/>
    </main>
    
    <script src="js/admin_user.js"></script>
</body>
</html>

<?php
    include "Admin footer.php";
?>
document.getElementById("contact-form").addEventListener("submit", function(event) {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    // Basic validation
    if (name === "" || phone === "" || email === "" || message === "") {
        alert("Please fill in all required fields.");
        event.preventDefault(); // Prevent form submission if validation fails
    }
});


//----------------------------------------------------------------------------------------------------------------------------------------------------------
/*
    Someparts below were coded with help of some Youtube channels
    Referrences - brocode,freecodecamp
*/

let currentMessageId; // Store the ID of the message being updated

// Function to open the update modal
function openUpdateModal(id, name, email, phone, message) {
    // Set the values in the update form
    document.getElementById('messageId').value = id;
    document.getElementById('name').value = name;
    document.getElementById('email').value = email;
    document.getElementById('phone').value = phone;
    document.getElementById('message').value = message;

    // Display the modal
    document.getElementById('updateModal').style.display = 'block';
}

// Function to close the update modal
function closeUpdateModal() {
    document.getElementById('updateModal').style.display = 'none';
}

// Function to update the message
function updateMessage(event) {
    event.preventDefault(); // Prevent default form submission

    // Gather form data
    const formData = new FormData(document.getElementById('updateForm'));

    // Use fetch to send the form data to update.php
    fetch('update contact us.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text()) // Get response as text
    .then(result => {
        console.log(result); // Log the result for debugging

        // Optionally, you can update the UI to reflect the changes
        const id = formData.get('id');
        const messageDiv = document.querySelector(`.message[data-id='${id}']`);
        if (messageDiv) {
            messageDiv.querySelector('h3').innerText = formData.get('name');
            messageDiv.querySelector('p:nth-of-type(1)').innerText = `Phone Number: ${formData.get('phone')}`;
            messageDiv.querySelector('p:nth-of-type(2)').innerText = `Email: ${formData.get('email')}`;
            messageDiv.querySelector('p:nth-of-type(3)').innerText = `Message: ${formData.get('message')}`;
        }

        closeUpdateModal(); // Close the modal after updating
    })
    .catch(error => console.error('Error:', error));
}

//Function to open the delete modal
function openDeleteModal(id) {
    console.log("Opening delete modal for ID:", id); // Debugging line
    deleteMessageId = id; // Store the ID of the message to be deleted
    document.getElementById('deleteModal').style.display = 'block'; // Show the delete confirmation modal
}

// Function to close the delete modal
function closeDeleteModal() {
    document.getElementById('deleteModal').style.display = 'none'; // Hide the delete confirmation modal
}

// Function to delete the message
function deleteMessage() {
    console.log("Attempting to delete message with ID:", deleteMessageId); // Debugging line
    
    // Create a FormData object to send as form data
    const formData = new FormData();
    formData.append('id', deleteMessageId);

    // Send a request to delete the message
    fetch('delete contact us.php', {
        method: 'POST',
        body: formData // Send the form data 
    })
    .then(response => response.text()) // Assuming 'delete.php' sends a text response
    .then(result => {
        console.log(result); // Log the result for debugging

        // Assuming the delete.php returns 'success' or similar response
        if (result.includes('success')) {
            // Remove the message from the DOM
            const messageDiv = document.querySelector(`.message[data-id='${deleteMessageId}']`);
            if (messageDiv) {
                messageDiv.remove();
            }
            closeDeleteModal(); // Close the modal after deleting
        } else {
            alert('Error deleting the message. Please try again.');
        }
    })
    .catch(error => console.error('Error:', error));
}
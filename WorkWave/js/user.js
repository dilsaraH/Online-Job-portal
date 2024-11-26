function loginValidate(){
    var username = document.getElementById("username").value;
    if (username == "") {
        alert("All fields must be filled out");
        return false;
    }

    var password = document.getElementById("password").value;
    if (password == "") {
        alert("All fields must be filled out");
        return false;
    }
}

function validateForm() {
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;

    // Check if all fields are filled
    if (firstName == "" || lastName == "" || username == "" || password == "" || confirmPassword == "" || email == "" || phone == "") {
        alert("All fields must be filled out");
        return false;
    }

    // Check if passwords match
    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return false;
    }

    // If all validations pass
    return true;
}

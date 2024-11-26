function userRegistrationForm(){
    var firstName = document.getElementById("first_name").value;
    var lastName = document.getElementById("last_name").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;

    if (firstName === "" || lastName === "" || username === "" || password === "" || email === "" || phone === "") {
        alert("All fields must be filled out");
        return false;
    }
}

function cheackRegistrationForm() {
    var userId = document.getElementById("user_id").value;
    var firstName = document.getElementById("first_name").value;
    var lastName = document.getElementById("last_name").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;

    if (userId === "" || firstName === "" || lastName === "" || username === "" || password === "" || email === "" || phone === "") {
        alert("All fields must be filled out");
        return false;
    }
    
    return true;
}

function greetUser() {
    // Get the current hour
    const hour = new Date().getHours();
    let greet = document.getElementById("greet");

    // Determine the greeting based on the current hour
    if (hour < 12) {
        greeting = "Good Morning!";
    } else if (hour < 18) {
        greeting = "Good Afternoon!";
    } else if (hour < 21) {
        greeting = "Good Evening!";
    } else {
        greeting = "Good Night!";
    }

    // Display the greeting
    greet.innerHTML = greeting;
};

greetUser();

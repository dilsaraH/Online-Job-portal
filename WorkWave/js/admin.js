//linked before the ending of body tag to avoid compiler to confuse

//Greeting
const d = new Date();//get system date from new date function
const hours = d.getHours();//get system hour from new date function

//display the greeting based on the time
if(hours >=0 && hours<12){
    document.getElementById("hour").innerHTML = "Good Morning, Welcome back!";
}
else if(hours >= 12 && hours<17){
    document.getElementById("hour").innerHTML = "Good Afternoon, Welcome back!";
}
else{
    document.getElementById("hour").innerHTML = "Good Evening, Welcome back!";
}

//admin login validation
function validateForm() {
    //check wheater username field is undefined and display a alert message
    var username = document.getElementById("boxsize1").value;
    if (username == "") {
        alert("Username must be filled out");
        return false;
    }

     //check wheater password field is undefined and display a alert message
    var pwd = document.getElementById("boxsize2").value;
    if (pwd == "") {
        alert("password must be filled out");
        return false;
    }
}

//CRUD validation
function CRUDVALIDATE(){
    //check wheater username field is undefined and display a alert message
    var jobdetails = document.getElementById("jobtag").value;
    if (jobdetails == "") {
        alert("All fields must be filled out");
        return false;
    }

     //check wheater password field is undefined and display a alert message
    var discription = document.getElementById("discription").value;
    if (discription == "") {
        alert("All fields must be filled out");
        return false;
    }
}


//take confirmation from user before deleting job list
function confirmSubmit() {
    return confirm("Are you sure you want to Delete?");
}

//Direct user to the admin jobpost.php page from admin dashboard.php
function buttondirect(){
    window.location.href = "Admin jobpost.php";
}

//Direct user to the admin jobmanagement.php page from admin dashboard.php
function buttondirect2(){
    window.location.href = "Admin jobmanagement.php";
}

//Direct user to the admin jobmanagement.php page from admin dashboard.php
function buttondirect3(){
    window.location.href = "Update jobpost form.php";
}

//Direct user to the admin jobmanagement.php page from admin dashboard.php
function buttondirect4(){
    window.location.href = "Delete jobpost form.php";
}

//Direct user to the admin jobmanagement.php page from admin dashboard.php
function buttondirect5(){
    window.location.href = "admin_user.php";
}

//Direct user to the Apply job form.php page from admin dashboard.php
function buttondirect6(){
    window.location.href = "job apply form.php";
}


/*
*
*       This script file is for validation purpose
*
*/

// feedback validation
function feedback1() {
    
    var email1 = document.getElementById("email1").value;
    var subject = document.getElementById("subject1").value;
    var message = document.getElementById("message1").value;

    if (email1 === null || email1 === "" || email1.length === 0) {
        document.getElementById("email1Message").innerHTML = "Please fill your email correctly";
        return false;
    }
    document.getElementById("email1Message").innerHTML = "<i style='color:green'>accepted</i>";


    if (subject === null || subject === "" || subject.length === 0) {
        document.getElementById("subject1Message").innerHTML = "Please enter the subject";
        return false;
    }
    document.getElementById("subject1Message").innerHTML = "<i style='color:green'>accepted</i>";

    if (message === null || message === "" || message.length === 0) {
        document.getElementById("message1Message").innerHTML = "Please enter your message";
        return false;
    }
    document.getElementById("message1Message").innerHTML = "<i style='color:green'>accepted</i>";


    return true;

}



// feedback validation
function feedback2() {
    
    
    var fname = document.getElementById("fname").value;
   
    if (fname === null || fname === "" || fname.length === 0) {
        document.getElementById("fnameMessage").innerHTML = "Please fill your first name correctly";
        return false;
    }
    document.getElementById("fnameMessage").innerHTML = "<i style='color:green'>accepted</i>";

     var lname = document.getElementById("lname").value;

    if (lname === null || lname === "" || lname.length === 0) {
        document.getElementById("lnameMessage").innerHTML = "Please fill your first name correctly";
        return false;
    }
    document.getElementById("lnameMessage").innerHTML = "<i style='color:green'>accepted</i>";

    
    var email1 = document.getElementById("email2").value;

    if (email1 === null || email1 === "" || email1.length === 0) {
        document.getElementById("email2Message").innerHTML = "Please fill your email correctly";
        return false;
    }
    document.getElementById("email2Message").innerHTML = "<i style='color:green'>accepted</i>";

    
    var address = document.getElementById("address").value;
    
    if (address === null || address === "" || address.length === 0) {
        document.getElementById("addressMessage").innerHTML = "Please fill your address correctly";
        return false;
    }
    document.getElementById("addressMessage").innerHTML = "<i style='color:green'>accepted</i>";
    
    
    var city = document.getElementById("city").value;
    
    
    if (city === null || city === "" || city.length === 0) {
        document.getElementById("cityMessage").innerHTML = "Please fill your city correctly";
        return false;
    }
    document.getElementById("cityMessage").innerHTML = "<i style='color:green'>accepted</i>";


    
    var genderM = document.getElementById("male").checked;
    var genderF = document.getElementById("famale").checked;

    if(!(genderF || genderM)){
        document.getElementById("genderMessage").innerHTML = "Please select your gender";
        return false;
    }
    
    
    var programmer = document.getElementById("programmer").checked;
    var engineer = document.getElementById("engineer").checked;
    var student = document.getElementById("student").checked;
    if(!(programmer || engineer || student)){
        alert();
        document.getElementById("occupationMessage").innerHTML = "Please select your gender";
        return false;
    }
    
    var subject = document.getElementById("subject2").value;
    var message = document.getElementById("message2").value;
    
    if (subject === null || subject === "" || subject.length === 0) {
        document.getElementById("subject2Message").innerHTML = "Please enter the subject";
        return false;
    }
    document.getElementById("subject2Message").innerHTML = "<i style='color:green'>accepted</i>";

    if (message === null || message === "" || message.length === 0) {
        document.getElementById("message2Message").innerHTML = "Please enter your message";
        return false;
    }
    document.getElementById("message2Message").innerHTML = "<i style='color:green'>accepted</i>";



    return true;

}



// Registration (Sign up) validation
function register() {
    var username = document.getElementById("username").value;
    if (username === null || username === "" || username.length === 0) {
        document.getElementById("usernameMessage").innerHTML = "Please fill your username correctly";
        return false;
    } else {
        document.getElementById("usernameMessage").innerHTML = "";
    }
    var password = document.getElementById("password").value;
    if (password === null || password === "" || password.length < 5) {
        document.getElementById("passwordMessage").innerHTML = "Please fill your password correctly";
        return false;
    } else {
        document.getElementById("passwordMessage").innerHTML = "";
    }
    var email = document.getElementById("email").value;
    if (email === null || email === "") {
        document.getElementById("emailMessage").innerHTML = "Please fill your email correctly";
        return false;
    } else {
        document.getElementById("emailMessage").innerHTML = "";
    }
    return true;

}



// Contant validation 
function contact() {
    var username = document.getElementById("email").value;
    if (username === null || username === "" || username.length === 0) {
        document.getElementById("emailMessage").innerHTML = "Please fill your username correctly";
        return false;
    } else {
        document.getElementById("emailMessage").innerHTML = "";
    }
    var password = document.getElementById("subject").value;
    if (password === null || password === "" || password.length < 5) {
        document.getElementById("subjectMessage").innerHTML = "Please fill your password correctly";
        return false;
    } else {
        document.getElementById("passwordMessage").innerHTML = "";
    }
    return true;

}



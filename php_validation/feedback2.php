<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["fname"])) {
        echo "<script>alert('sorry you need to insert you first name');</script>";
    }

    if (empty($_POST["lname"])) {
        echo "<script>alert('sorry you need to insert you last name');</script>";
    }
    
    if (empty($_POST["email2"])) {
        echo "<script>alert('sorry you need to insert you email');</script>";
    }
    if (empty($_POST["address"])) {
        echo "<script>alert('sorry you need to insert you address');</script>";
    }
    
    if (empty($_POST["city"])) {
        echo "<script>alert('sorry you need to insert you city');</script>";
    }

    if (empty($_POST["country"])) {
        echo "<script>alert('sorry you need to insert you country');</script>";
    }

    if (empty($_POST["gender"])) {
        echo "<script>alert('please select your gender');</script>";
    }
    
    if (empty($_POST["occupation"])) {
        echo "<script>alert('please select your occupation');</script>";
    }
    
     if (empty($_POST["subject2"])) {
        echo "<script>alert('please insert your subject');</script>";
    }

    if (empty($_POST["message2"])) {
        echo "<script>alert('sorry you need to insert you mesage');</script>";
    }

    $servername = "localhost";
    $username = "id2714243_fcit123";
    $password = "fcit123@";
    $dbname = "id2714243_test";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email2']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $gender =mysqli_real_escape_string($conn, $_POST['gender']);
    $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject2']);
    $message = mysqli_real_escape_string($conn, $_POST['message2']);
    
    $sql = "SELECT email FROM feedback2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        
        $sql = "DELETE FROM feedback2 WHERE email='$email'";
        if ($conn->query($sql) === TRUE) {
            echo "<h2> $email has been updated</h2>";
        }
    }
        
    $sql = "INSERT INTO feedback2 (fname,lname,email,address,city,country,gender,occupation,subject,message) VALUES ('$fname', '$lname', '$email', '$address', '$city', '$country', '$gender', '$occupation', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1>Your Feedback 2 has been sent and saved</h1>";
        echo "<b>First Name: $fname </b><br/>";
        echo "<b>Last Name: $lname </b><br/>";
        echo "<b>Email Address: $email </b><br/>";
        echo "<b>Address: $address </b><br/>";
        echo "<b>Cit: $city </b><br/>";
        echo "<b>Country: $country </b><br/>";
        echo "<b>Gender: $gender </b><br/>";
        echo "<b>Occupation: $occupation </b><br/>";
        echo "<b>Subject:</b> $subject <br> <b>Message:</b> $message";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
        
    
    
    
    $conn->close();
}

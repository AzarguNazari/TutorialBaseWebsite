<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        echo "<script>alert('sorry you need to insert your username');</script>";
    }


    if (empty($_POST["password"])) {
        echo "<script>alert('sorry you need to insert your password');</script>";
    }

    if (empty($_POST["email"])) {
        echo "<script>alert('sorry you need to insert your email');</script>";
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

    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    
   
    $sql = "SELECT username,email,password FROM account where email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>You have already registered</h1>";
        echo "<h1>There is account for this email please insert another email</h1>";
    } else {
        $sql = "INSERT INTO account (username, email, password) VALUES ('$uname', '$email', '$pass')";
        if ($conn->query($sql) === TRUE) {
            echo "<h1>Congratuately Mr. $uname you have account now with us</h1>";
        }
       
    }
   
    
    $conn->close();
}

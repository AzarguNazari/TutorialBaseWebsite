<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email1"])) {
        echo "<script>alert('sorry you need to insert you email');</script>";
    }


    if (empty($_POST["subject1"])) {
        echo "<script>alert('sorry you need to insert you subject');</script>";
    }

    if (empty($_POST["message1"])) {
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

    $email = mysqli_real_escape_string($conn, $_POST['email1']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject1']);
    $message = mysqli_real_escape_string($conn, $_POST['message1']);
    
    $sql = "SELECT email FROM feedback2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        
        $sql = "DELETE FROM feedback1 WHERE email='$email'";
        if ($conn->query($sql) === TRUE) {
            echo "<h2> $email has been updated</h2>";
        }
    }
    
    $sql = "INSERT INTO feedback1 (email, subject, message) VALUES ('$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1>You Message has be sent</h1>";
        echo "<b>Email:</b> $email <br /> <b>Subject:</b> $subject <br> <b>Message:</b> $message";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

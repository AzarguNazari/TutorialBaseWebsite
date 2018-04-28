<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        echo "<script>alert('Please insert your email');</script>";
    }

    if (empty($_POST["password"])) {
        echo "<script>alert('sorry you need to insert your password');</script>";
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

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    
    $sql = "SELECT username,email,password FROM account where email='$email' and password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>You have account in our system</h1>";
        while($row = $result->fetch_assoc()) {
            echo "<b>Username:</b> " . $row["username"]. "<br>";
            echo "<b>Emamil:</b> " . $row["email"]. "<br>";
            echo "<b>Password:</b> " . $row["password"]. "<br>";
        }
    } else {
        echo "<h1>Sorry! you have no account in our system</h1>";
    }
    
    $conn->close();
}

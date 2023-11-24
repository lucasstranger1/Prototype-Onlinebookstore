<?php
session_start();
include('db_connection.php');

if (isset($_POST['register'])) {
    // Registration process
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['psw'];

    // Perform registration and add the user to the database
    $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        // Registration successful
        header("Location: registration_successful.html");
        
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif (isset($_POST['login'])) {
    $email = $_POST['uname'];
    $password = $_POST['psw'];

    // Check if the user exists in the database and get their role
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['uname'] = $email;
        header("Location: user_dashboard.php");
        exit();
        // You can redirect the user to another page if login is successful.
    } else {
        echo "Login failed. Invalid email or password.";
        echo "Email: $email, Password: $password";

    }
}

// Close the database connection
$conn->close();
?>

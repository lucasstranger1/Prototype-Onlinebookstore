<?php
session_start();
include('db_connection.php');
if (isset($_SESSION['uname'])) {
    $email = $_SESSION['uname'];

    // Retrieve user data from the database
    $sql = "SELECT firstname, lastname, email FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user data
        $userData = $result->fetch_assoc();
        echo json_encode($userData);
    } else {
        // If the user is not found, return an empty JSON object
        echo json_encode(array());
    }
}

// Close the database connection
$conn->close();
?>

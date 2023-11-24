<?php
session_start();
include('db_connection.php');

// Check if the form was submitted and the 'confirm-delete' button was clicked
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['confirm-delete'])) {
    $email = $_SESSION['uname'];

    // Perform the account deletion by executing a SQL query
    $sql = "DELETE FROM users WHERE email='$email'";
    
    if ($conn->query($sql) === TRUE) {
        // Account deletion successful
        $_SESSION = array(); // Unset all session variables
        session_destroy(); // Destroy the session

        header("Location: index.php"); // Redirect to the index page after successful deletion
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Account Deletion Confirmation</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Include your CSS styles here -->
</head>
<body>
    <div class="confirmation-content">
        <h2>Account Deletion Confirmation</h2>
        <p>Are you sure you want to delete your account? This action cannot be undone.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <button type="submit" name="confirm-delete">Confirm Deletion</button>
        </form>
        <a href="user_dashboard.php">Cancel</a> <!-- Provide a way to cancel the deletion process -->
    </div>
</body>
</html>

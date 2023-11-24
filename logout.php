<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['uname'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session cookie
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Destroy the session
    session_destroy();

    // Redirect the user to the homepage or another page
    header("Location: index.php");
    exit();
} else {
    // User was not logged in, show a message indicating successful logout
    echo "You have been successfully logged out. <a href='index.php'>Go to the homepage</a>";
}
?>

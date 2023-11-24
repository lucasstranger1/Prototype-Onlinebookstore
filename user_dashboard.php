<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/javascript.js"></script>
    <link rel="stylesheet" href="/css/style.css"> <!-- Include your CSS styles here -->
</head>
<body>

    <ul class="navbar">
        <li class="navitem">
            <a href="index.php">
                <img class="logo" src="img/logo.png" alt="Logo">
            </a>
        </li>
        <li class="navitem"><a href="index.php">Home Page</a></li>
        <li class="navitem"><a href="shoppingcart.php">Shopping Cart</a></li>
        <li class="navitem"><a href="user_dashboard.php">User Dashboard</a></li>
        <li class="navitem"><a href="logout.php">Logout</a></li>
    </ul>

    <!-- User Dashboard Content -->
    <div class="content">
        <h2>Welcome, Dear User!</h2>
        <p>This is the User dashboard where you can manage various aspects of the website.</p>

        <h2>User Information</h2>
        <div class="user-info">
            <img src="img/profile.png" alt="Profile Picture" style="width: 30%;">
            <p><strong>Name:</strong> <span id="user-name"></span></p>
            <p><strong>Email:</strong> <span id="user-email"></span></p>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <a href="confirmation_page.php">Delete My Account</a>
    </form>
    </div>
    <?php
if (isset($_POST['confirm-delete'])) {
    include('db_connection.php');
    
    $email = $_SESSION['uname'];

    // Perform the account deletion by executing a SQL query
    $sql = "DELETE FROM users WHERE email='$email'";
    
    if ($conn->query($sql) === TRUE) {
        // Account deletion successful
        // Redirect the user to a confirmation page or the homepage
        header("Location: index.php"); // You can create a confirmation page
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
    <div class="order-history">
            <h2>Order History</h2>
            <ul>
                <li>Order ID: 1, Date: 2023-01-01, Total: $50.00</li>
                <li>Order ID: 2, Date: 2023-02-15, Total: $30.00</li>
            </ul>
        </div>

        <div class="shipment-tracking">
            <h2>Shipment Tracking</h2>
            <ul>
                <li>Order ID: 1, Status: Shipped, Tracking Number: ABC123XYZ, Estimated Delivery: 2023-03-01</li>
                <li>Order ID: 2, Status: Shipped, Tracking Number: DEF456ABC, Estimated Delivery: 2023-03-10</li>
            </ul>
        </div>


    </div>

    <footer>
        &copy; 2023 BookWorm Haven. All rights reserved.
    </footer>

    <script>
        function isLoggedIn() {
            // check if a session variable is set
            return <?php echo isset($_SESSION['uname']) ? 'true' : 'false'; ?>;
        }
    </script>
</body>
</html>

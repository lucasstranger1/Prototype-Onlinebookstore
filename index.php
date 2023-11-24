<?php
session_start();
if (isset($_SESSION['uname'])) {
    // unset($_SESSION['uname']); // Unset the specific session variable
    // OR
    session_destroy(); // Destroy all session variables
    
    // Redirect to the login page or any other appropriate page
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CSC 350 Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/javascript.js"></script>
</head>

<body>
    <div class="container-nav">
            <ul class="navbar">
                <li class="navitem">
                    <a href="index.php">
                        <img class="logo" src="img/logo.png" alt="Logo">
                    </a>
                </li>
                <li class="navitem"><a href="index.php">Homepage</a></li>
                <li class="navitem"><a href="shoppingcart.php">Shopping Cart</a></li>
                <?php
            if (isset($_SESSION['uname'])) {
                // User is logged in, show user-specific links
                echo '<li class="navitem"><a href="user_dashboard.php">User Dashboard</a></li>';
                echo '<li class="navitem"><a href="logout.php">Logout</a></li>';
            }
            else {
                // User is not logged in, show login/register links
                echo '<li class="navitem"><a href="login.html">Login/Register</a></li>';
            }
            ?>
            </ul>
        </div>
        <div class="pageslides">
            <img class="mySlides" src="img/slider-image-1-1920x700.jpg" style="width:100%">
            <img class="mySlides" src="img/slider-image-2-1920x700.jpg" style="width:100%">
            <img class="mySlides" src="img/slider-image-3-1920x700.jpg" style="width:100%">
        </div>

    <h1>BookWorm Haven</h1>
    <p>Shop Your Dream Books</p>
    <button id="orderButton" onclick="window.location.href = 'shoppingcart.php';">Order Now</button>
        <div class="row">
                <div class="container-column">
                    <img src="https://m.media-amazon.com/images/I/41YywOd3pGL._SY445_SX342_.jpg" alt="book" class="image">
                    <div class="middle">
                        <div class="text">Pet Sematery</div>
                    </div>
            </div>

                <div class="container-column">
                    <img src="https://m.media-amazon.com/images/I/51+P+KfTdmL._SY445_SX342_.jpg" alt="book" class="image">
                    <div class="middle">
                        <div class="text">Billy Summers</div>
                    </div>
                </div>

                <div class="container-column">
                    <img src="https://m.media-amazon.com/images/I/517z4+iMEZL._SY445_SX342_.jpg" alt="book" class="image">
                    <div class="middle">
                        <div class="text">Finders Keepers</div>
                    </div>
        </div>
    </div>
    <div class="row">

                <div class="container-column">
                    <img src="https://m.media-amazon.com/images/I/41h8tLeMLcL._SY445_SX342_.jpg" alt="book" class="image">
                    <div class="middle">
                        <div class="text">It</div>
                    </div>
        
            </div>

                <div class="container-column">
                    <img src="https://m.media-amazon.com/images/I/41oCl0W6LiL._SY445_SX342_.jpg" alt="book" class="image">
                    <div class="middle">
                        <div class="text">Misery</div>
                    </div>
                </div>

                <div class="container-column">
                    <img src="https://m.media-amazon.com/images/I/41ksNxnzTIL._SY445_SX342_.jpg" alt="book" class="image">
                    <div class="middle">
                        <div class="text">The Shining</div>
                    </div>
                    </div>
    </div>
    <footer class="footer">
        <hr>
                <div class="footer-logo">
                    <img class="footer-img"src="img/logo.png" alt="Company Logo">
                </div>
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <p>123 Main Street</p>
                    <p>City Brooklyn, State NY ZIP 12121</p>
                    <p>Email: info@company.com</p>
                    <p>Phone: (123) 456-7890</p>
            
            </div>
    
        <div class="footer-bottom">
            <p>&copy; 2023 'BookWorm Haven'. All rights reserved.</p>
        </div>
    </footer>
    <script>
    var myIndex = 0;
carousel();

function carousel() {
var i;
var x = document.getElementsByClassName("mySlides");
for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
}
myIndex++;
if (myIndex > x.length) {myIndex = 1}    
x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
    </body>
</body>
</html>
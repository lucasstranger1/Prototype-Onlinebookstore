<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Shopping cart</title>
    
    <link rel="stylesheet" href="/css/shoppingcart.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/javascript.js"></script>
</head>

<body class="ux-app">
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
        } else {
            // User is not logged in, show login/register links
            echo '<li class="navitem"><a href="login.html">Login/Register</a></li>';
        }
        ?>
    </ul>

    <header id="site-header">
    <div class="container">
      <h1>Shopping cart <span>[</span> <em><a href="#" target="_blank">Enjoying shopping</a></em> <span class="last-span is-open">]</span></h1>
    </div>
  </header>

  <div class="container">

    <section id="cart"> 
      <article class="product">
        <header>
          <a class="remove">
            <img src="https://m.media-amazon.com/images/I/517z4+iMEZL._SY445_SX342_.jpg" alt="">
            <h3>Remove product</h3>
          </a>
        </header>

        <div class="content">
          <h1>Finders Keepers</h1>
          "Finders Keepers," a crime novel by Stephen King, was published on June 2, 2015. It's the second volume in a trilogy following Detective Bill Hodges after "Mr. Mercedes." The story revolves around the murder of reclusive writer John Rothstein, the search for his missing notebooks, and the release of his killer after 35 years in prison. King's official site revealed the book's cover on January 30, and an excerpt was published in the May 15, 2015 issue of Entertainment Weekly.


        </div>

        <footer class="content">
          <span class="qt-minus">-</span>
          <span class="qt">0</span> <!-- Default quantity set to 0 -->
          <span class="qt-plus">+</span>

          <h2 class="full-price">
            $0.00 <!-- Default full price -->
          </h2>

          <h2 class="price">
            $13.99 <!-- Price for each item -->
          </h2>
        </footer>
      </article>

      <article class="product">
        <header>
          <a class="remove">
            <img src="https://m.media-amazon.com/images/I/41YywOd3pGL._SY445_SX342_.jpg" alt="">
            <h3>Remove product</h3>
          </a>
        </header>

        <div class="content">
          <h1>Pet Sematary</h1>
          Pet Sematary is a 1983 horror novel by American writer Stephen King. The novel was nominated for a World Fantasy Award for Best Novel in 1984, and adapted into two films: one in 1989 and another in 2019. In November 2013, PS Publishing released Pet Sematary in a limited 30th-anniversary edition.
        </div>

        <footer class= "content">
          <span class="qt-minus">-</span>
          <span class="qt">0</span> <!-- Default quantity set to 0 -->
          <span class="qt-plus">+</span>

          <h2 class="full-price">
            $0.00 <!-- Default full price -->
          </h2>

          <h2 class="price">
            $13.99 <!-- Price for each item -->
          </h2>
        </footer>
      </article>

      <article class="product">
        <header>
          <a class="remove">
            <img src="https://m.media-amazon.com/images/I/51+P+KfTdmL._SY445_SX342_.jpg" alt="">
            <h3>Remove product</h3>
          </a>
        </header>

        <div class="content">
          <h1>Billy Summers</h1>
          
          Billy Summers is a crime novel written by American author Stephen King, published by Scribner on August 3, 2021.
        </div>

        <footer class="content">
          <span class="qt-minus">-</span>
          <span class="qt">0</span> <!-- Default quantity set to 0 -->
          <span class="qt-plus">+</span>

          <h2 class="full-price">
            $0.00 <!-- Default full price -->
          </h2>

          <h2 class="price">
            $13.99 <!-- Price for each item -->
          </h2>
        </footer>
      </article>
      <article class="product">
        <header>
          <a class="remove">
            <img src="https://m.media-amazon.com/images/I/41h8tLeMLcL._SY445_SX342_.jpg" alt="">
            <h3>Remove product</h3>
          </a>
        </header>

        <div class="content">
          <h1>IT </h1>
     
          It is a 1986 horror novel by American author Stephen King. It was his 22nd book and his 17th novel written under his own name. The story follows the experiences of seven children as they are terrorized by an evil entity that exploits the fears of its victims to disguise itself while hunting its prey.
        </div>

        <footer class="content">
          <span class="qt-minus">-</span>
          <span class="qt">0</span> <!-- Default quantity set to 0 -->
          <span class="qt-plus">+</span>

          <h2 class="full-price">
            $0.00 <!-- Default full price -->
          </h2>

          <h2 class="price">
            $13.99 <!-- Price for each item -->
          </h2>
        </footer>
      </article>
      <article class="product">
        <header>
          <a class="remove">
            <img src="https://m.media-amazon.com/images/I/41oCl0W6LiL._SY445_SX342_.jpg" alt="">
            <h3>Remove product</h3>
          </a>
        </header>

        <div class="content">
          <h1>Misery</h1>
          Misery is an American psychological horror thriller novel written by Stephen King and first published by Viking Press on June 8, 1987. The novel's narrative is based on the relationship of its two main characters – the romance novelist Paul Sheldon and his deranged self-proclaimed number one fan Annie Wilkes.


        </div>

        <footer class="content">
          <span class="qt-minus">-</span>
          <span class="qt">0</span> <!-- Default quantity set to 0 -->
          <span class="qt-plus">+</span>

          <h2 class="full-price">
            $0.00 <!-- Default full price -->
          </h2>

          <h2 class="price">
            $13.99 <!-- Price for each item -->
          </h2>
        </footer>
      </article>
      <article class="product">
        <header>
          <a class="remove">
            <img src="https://m.media-amazon.com/images/I/41ksNxnzTIL._SY445_SX342_.jpg" alt="">
            <h3>Remove product</h3>
          </a>
        </header>

        <div class="content">
          <h1>The Shining</h1>

          The Shining is a 1977 horror novel by American author Stephen King. It is King's third published novel and first hardcover bestseller; its success firmly established King as a preeminent author in the horror genre. 


        </div>

        <footer class="content">
          <span class="qt-minus">-</span>
          <span class="qt">0</span> <!-- Default quantity set to 0 -->
          <span class="qt-plus">+</span>

          <h2 class="full-price">
            $0.00 <!-- Default full price -->
          </h2>

          <h2 class="price">
            $13.99 <!-- Price for each item -->
          </h2>
        </footer>
      </article>
    </section>
  </div>

  <footer id="site-footer">
    <div class="container clearfix">
      <div class="left">
        <h2 class="subtotal">Subtotal: <span>$0.00</span></h2>
        <h3 class="tax">Taxes (5%): <span>$0.00</span></h3>
        <h3 class="shipping">Shipping: <span>$5.00</span></h3>
      </div>

      <div class="right">
        <h1 class="total">Total: <span>$5.00</span></h1>
        <a class="btn">Checkout</a>
      </div>
    </div>
  </footer>
</body>
</html>

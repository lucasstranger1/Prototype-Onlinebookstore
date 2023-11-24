
// Home page pageslides 
//_______________________________________________________________________________

// Shopping cart 
//_______________________________________________________________________________
var check = false;

function changeVal(el) {
  var qt = parseFloat(el.parent().children(".qt").html());
  var price = parseFloat(el.parent().children(".price").html().replace('$', '')); // Parse the price without the currency symbol
  var eq = Math.round(price * qt * 100) / 100;
  
  el.parent().children(".full-price").html("$" + eq.toFixed(2)); // Update price with currency symbol
  
  changeTotal();
}

function changeTotal() {
  var price = 0;
  
  $(".full-price").each(function(index){
    price += parseFloat($(".full-price").eq(index).html().replace('$', '')); // Parse the price without the currency symbol
  });
  
  price = Math.round(price * 100) / 100;
  var tax = Math.round(price * 0.05 * 100) / 100;
  var shipping = parseFloat($(".shipping span").html().replace('$', '')); // Parse shipping without currency symbol
  var fullPrice = Math.round((price + tax + shipping) * 100) / 100;
  
  if(price == 0) {
    fullPrice = 0;
  }
  
  $(".subtotal span").html("$" + price.toFixed(2)); // Update subtotal with currency symbol
  $(".tax span").html("$" + tax.toFixed(2)); // Update tax with currency symbol
  $(".total span").html("$" + fullPrice.toFixed(2)); // Update total with currency symbol
}

$(document).ready(function(){
  
  $(".remove").click(function(){
    var el = $(this);
    el.parent().parent().addClass("removed");
    window.setTimeout(
      function(){
        el.parent().parent().slideUp('fast', function() { 
          el.parent().parent().remove(); 
          if($(".product").length == 0) {
            if(check) {
              $("#cart").html("<h1>The shop does not function, yet!</h1><p>If you liked my shopping cart, feel free to reach out  <a href='https://www.linkedin.com/in/lu-yao-6abb90236/'>Linkedin</a>. Thank you!</p>");
            } else {
              $("#cart").html("<h1>No products!</h1>");
            }
          }
          changeTotal(); 
        });
      }, 200);
  });
  
  $(".qt-plus").click(function(){
    $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);
    
    $(this).parent().children(".full-price").addClass("added");
    
    var el = $(this);
    window.setTimeout(function(){el.parent().children(".full-price").removeClass("added"); changeVal(el);}, 150);
  });
  
  $(".qt-minus").click(function(){
    
    child = $(this).parent().children(".qt");
    
    if(parseInt(child.html()) > 1) {
      child.html(parseInt(child.html()) - 1);
    }
    
    $(this).parent().children(".full-price").addClass("minused");
    
    var el = $(this);
    window.setTimeout(function(){el.parent().children(".full-price").removeClass("minused"); changeVal(el);}, 150);
  });
  
  window.setTimeout(function(){$(".is-open").removeClass("is-open")}, 1200);
  
  $(".btn").click(function(){
    check = true;
    $(".remove").click();
  });
});
//_______________________________________________________________________________
// Loggin page
$(document).ready(function() {
  // Check if the user is logged in (you can use any condition to check this)
  if (isLoggedIn()) {
      // User is logged in, make an AJAX request to get user data
      $.ajax({
          url: 'user_data.php',
          type: 'GET',
          dataType: 'json',
          success: function(data) {
              if (data.firstname && data.lastname && data.email) {
                  // Update HTML elements with user data
                  $('#user-name').text(data.firstname + ' ' + data.lastname);
                  $('#user-email').text(data.email);
              }
          },
          error: function() {
              // Handle the error if the request fails
              console.log('Failed to retrieve user data');
          }
      });
  }
});
$(document).ready(function() {
  // Make an AJAX request to fetch user data
  $.get("user_data.php", function(data) {
      // Parse the JSON response
      var userData = JSON.parse(data);

      // Display user data on the webpage
      if (userData) {
          $("#firstname").text(userData.firstname);
          $("#lastname").text(userData.lastname);
          $("#email").text(userData.email);
          $("#profile_picture").attr("src", userData.profile_picture);
      } else {
          // Handle the case where no user data is found
          $("#userdata").text("User data not found.");
      }
  });
});

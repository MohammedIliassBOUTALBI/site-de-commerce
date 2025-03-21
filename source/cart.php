<?php
$serveur="localhost";
$user="root";
$password="";
$bdd="csv_db 6";
$conn=mysqli_connect($serveur, $user,$password,$bdd);


if(!$conn)
  {
    die("Connexion echouée : revérifiez vos parametres de connexion à la base de données");
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="images/loog.png" type="image">
    <title>F.R.I.E.N.D.S</title>
    <link rel="stylesheet" href="./css/style_cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    
</head>
<body id="body">
   <div class="header">
        <div class="logo">
            <a href="./F.R.I.E.N.D.S.php"><img src="./F.R.I.E.N.D.S_files/logowhite-removebg-preview resized.png" alt="" class="logoimg">
              <img src="./F.R.I.E.N.D.S_files/loog-removebg-preview.png" alt="" class="logoimg1">
            </a>
        </div>
        <div class="searchbar">
            <div class="searchbar">
                <form method="POST" action="search.php">
                <img src="./F.R.I.E.N.D.S_files/icons8-chercher-16.png" alt="" class="searchicon">
                <img src="./F.R.I.E.N.D.S_files/icons8-search-24.png" alt="" class="searchicon1">
                <input type="search" name="search" placeholder="Search" class="search"></form>
            </div>
        </div>
        
        <div class="icons">
            <ul class="icons">
                <li class="cart"><a href="./cart.php"><img src="./F.R.I.E.N.D.S_files/icons8-shopping-bag-50.png" alt="" class="carticon">
                <img src="./F.R.I.E.N.D.S_files/icons8-shopping-bag-48.png" alt="" class="carticon1"></a> 
                
                </li>
                <li class="profileicon"><a href=""><img src="./F.R.I.E.N.D.S_files/icons8-male-user-48.png" alt="" class="profileicon" id="profileicon">
                  <img src="./F.R.I.E.N.D.S_files/icons8-male-user-48 (2).png" alt="" class="profileicon1">
                  <i class="fa fa-caret-down" id="toggle"></i></a> 
                  <div class="dropdown-content">
                    <a href="./derdourmohamedphp/register.php">Account</a>
                    <a href="./derdourmohamedphp/login.php">Login</a>
                    <a href="./derdourmohamedphp/register.php">Register</a>
                    <button id="dark" class="dark"><img src="./F.R.I.E.N.D.S_files/icons8-crescent-moon-50.png" alt="" class="darkbtn">
                      <img src="./F.R.I.E.N.D.S_files/icons8-sun-60 (1).png" alt="" class="darkbtn1">
                    
                    </button>
                </div>

                </li>

                
            </ul>
        </div>
        <div class="categories">
            <ul class="categories">
                <li class="men"><a href="./MEN_Products.php" class="men1">Men</a> 
                  <div id="m" class="dropdown-content3">
                    <a href="./Pulls_men.php#">Pulls</a>
                    <a href="./Chemises_men.php#">Chemises</a>
                    <a href="./Pantalons_men.php#">Pantalons</a>
                    <a href="./Shorts_men.php#">Shorts</a>
                    <a href="./T-shirts_men.php#">T-shirts</a>
                    <a href="./Vests_men.php#">Vests</a>
                </div>
                </li>

                <li class="men"><a href="./WOMEN_Products.php" class="men1">Women</a> 
                  <div id="w" class="dropdown-content3">
                    <a href="./Robes_wom.php#">Robes</a>
                    <a href="./Pulls_wom.php#">Pulls</a>
                    
                    <a href="./Pantalons_wom.php#">Pantalons</a>
                    <a href="./Shorts_wom.php#">Jupes</a>
                    <a href="./Vests_wom.php#">Vests</a>
                </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="header2">
        <h1 class="SHIPPING">FREE SHIPPING</h1>
        <h4>ON ORDER OVER 10000DA - USE COUPON CODE Friends5</h4>
        <div class="buttons" >
            <button class="btn">Shop Women</button>
            <button class="btn">Shop Men</button>
            <button class="btn">Shop Sales</button>
        </div>
    </div>
    <div class="main" id="main2">
        <p class="item">Description</p>
        <ul class="QPD">
            <li class="QP">Quantity</li>
            <li class="QP">Price</li>
        </ul>
       
    </div>

    
    
    <div class="main2">

    
    <div class="cartitem">
    <div class="description">
        <img class="cart-item-image" src="./img/Women/Jupes/Clothing__1_-removebg-preview.png" >
        <p class="cart-item-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis omnis doloribus autem officia laborum. Aliquam illo omnis</p>
    </div>
    <p class="cart-price">5000دج</p>
    <div class="cart-quantity">
        <input class="cart-quantity-input" type="number" value="1">
        
    </div>
    <div>
    <button class="btnnn" type="button">REMOVE</button>
    </div>

    
    </div>
    </div>
    
<div class="llll">
<div class="cart-total">
        <strong class="cart-total-title">Total</strong>
        <span class="cart-total-price">دج0</span>
    </div>
</div>
<div class="purchase">
   <div class="purchasebtn">
    <button class="btn-purchase"> PURCHASE</button>
</div> 
</div>

    


<div class="footer">
    <div class="f2">
        <div class="faq">
        <p><a href="">FAQ</a> </p>
        <p><a href="">Payment Methods</a> </p>
        <p><a href="">Contact</a> </p>
      </div>
      <div class="social">
        <p><a href="">Instagram</a> </p>
        <p><a href="">Facebook</a></p>
        <p><a href="">Twitter</a></p>
      </div>
      <div class="mail">
        <p><b>Join Our Mailing List</b> </p>
        <p>and get 10% off</p>
        <input type="email" id="email" placeholder="Enter your email here" class="inputemail">
        <button class="emailsub">Subscribe Now</button>

      </div>
    </div>
    
  </div>
    
    







<script>
        const dark = document.getElementById("dark")
        const body = document.getElementById("body")
        dark.addEventListener("click" ,(eo) =>{
          body.classList.toggle("mode")

        })
</script>
<script>
     var removeCartItemButtons = document.getElementsByClassName('btnnn')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }
    function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}
var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }
    function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}
function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('main2')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cartitem')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('دج', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = 'دج' + total
}
document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
function purchaseClicked() {
    alert('Thank you for your purchase')
    var cartItems = document.getElementsByClassName('main2')[0]
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
}
</script>

</body>
</html>
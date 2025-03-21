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

  echo'
  <style>
  </style>
  ';
    
?>
<!DOCTYPE html>
<!-- saved from url=(0055)https://sitedjellloulf15042002.on.drv.tw/site/home.php -->
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="./images/loog.png" type="image">
    <title>F.R.I.E.N.D.S</title>
    <link rel="stylesheet" href="./css/style_formulaire.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./F.R.I.E.N.D.S_files/css2" rel="stylesheet">
    <link rel="stylesheet" href="./F.R.I.E.N.D.S_files/font-awesome.min.css">
    <link rel="stylesheet" href="./F.R.I.E.N.D.S_files/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
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
                <input type="search" name="search" placeholder="Search" class="search">
                </form>
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
                    <a href="./Chemises_wom.php#">Chemises</a>
                    <a href="./Pantalons_wom.php#">Pantalons</a>
                    <a href="./Shorts_wom.php#">Jupes</a>
                    <a href="./Vests_wom.php#">Vests</a>
                </div>
                </li>
            </ul>
        </div>
</div> <!-- fin header -->
<!-- main--><div class="main">
  
<div  class="forum"> 
 <form class="form" method="POST" action="./php/Page_FORMULAIRE.php">
  <h2>CONTACT US</h2>
  <p type="Adress:">
  <input type="text" name="Name"
placeholder="Write your adress here.." /></p>
  <p type="Email:"><input placeholder="@gmail.com" name="mail"></input></p>
  <p type="Phone:"><input value="+213 " name="phone"></input></p>
  <p type="Message:"><input placeholder="What would you like to tell us.." name="notice"></input></p>
  <button>Send Message</button>
</form>
<!-- fin main--></div>
</div>
    
      <div class="footer">
        <div class="f2">
            <div class="faq">
            <p><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">FAQ</a> </p>
            <p><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">Payment Methods</a> </p>
            <p><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">Contact</a> </p>
          </div>
          <div class="social">
            <p><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">Instagram</a> </p>
            <p><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">Facebook</a></p>
            <p><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">Twitter</a></p>
          </div>
          <div class="mail">
            <p><b>Join Our Mailing List</b> </p>
            <p>and get 10% off</p>
            <input type="email" id="email" placeholder="Enter your email here" class="inputemail">
            <button class="emailsub">Subscribe Now</button>

          </div>
        </div>
        
      </div>

     
          
        
    

        



        <script type="text/javascript" async="" src="./F.R.I.E.N.D.S_files/analytics.js.download"></script><script type="text/javascript" async="" src="./F.R.I.E.N.D.S_files/js"></script><script async="" src="./F.R.I.E.N.D.S_files/js(1)"></script><script src="./F.R.I.E.N.D.S_files/swiper-bundle.min.js.download"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
              slidesPerView: 3,
              spaceBetween: 30,
              
            });
        </script>
         <script>
          var swiper = new Swiper(".mySwiper1", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
           
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
          });
        </script>
         <script>
          const dark = document.getElementById("dark")
          const body = document.getElementById("body")
          dark.addEventListener("click" ,(eo) =>{
            body.classList.toggle("mode")
  
          })
        </script>

<script src="./F.R.I.E.N.D.S_files/wd.js.download"></script>
</body></html>
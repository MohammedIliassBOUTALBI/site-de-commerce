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
  echo'<style>
  .header{
    margin-top: -18px
  }
  #w{
    height: 210px;
}

  </style>;'

?>
<!DOCTYPE html>
<!-- saved from url=(0055)https://sitedjellloulf15042002.on.dfrv.tw/site/home.php -->
<html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>F.R.I.E.N.D.S</title>
    <link rel="icon" href="./images/loog.png" type="image">
    <link rel="stylesheet" href="./F.R.I.E.N.D.S_files/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./F.R.I.E.N.D.S_files/css2" rel="stylesheet">
    <link rel="stylesheet" href="./F.R.I.E.N.D.S_files/font-awesome.min.css">
    <link rel="stylesheet" href="./F.R.I.E.N.D.S_files/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
        <div class="buttons">
            <button class="btn">Shop Women</a></button>
            <button class="btn">Shop Men</button>
            <button class="btn">Shop Sales</button>
        </div>
    </div>
    <div class="main">
        <h1><a href="" class="new">NEW ARRIVALE</a> </h1>
        <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-25e35d33c10ed60c0" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo1-->
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                <img src="./img/Women/Robes/Agua_By_Agua_Bendita_Fashion_Collections_For_Women___Moda_Operandi-removebg-preview.png" alt="" class="images">
                </a>
                <button class="btnn">ADD TO CART</button>
                <div class="productcontent">
                  <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                  <p class="price">5000دج</p>
                </div>
              </div>
              <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo2-->
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                  <img src="./img/Women/Vests/Black_Shawl_Collar_Roll_Sleeve_Patch_Long_Sweater_Coat-removebg-preview.png" alt="" class="images">
                  </a>
                  <button class="btnn"> ADD TO CART</button>
                  <div class="productcontent">
                    <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                    <p class="price">5000دج</p>
                  </div>
              </div>
              <div class="swiper-slide" role="group" aria-label="3 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo3-->
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                  <img src="./img/Women/pants/Calça_Jeans_Boyfriend_-_Marcas_de_Luxo-removebg-preview.png" alt="" class="images">
                  </a>
                  <button class="btnn"> ADD TO CART</button>
                  <div class="productcontent">
                    <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                    <p class="price">5000دج</p>
                  </div>
              </div>
              <div class="swiper-slide" role="group" aria-label="4 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo4-->
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                  <img src="./img/Women/Pulls/Designer_T-Shirts___Jerseys_for_Women-removebg-preview.png" alt="" class="images">
                  </a>
                  <button class="btnn"> ADD TO CART</button>
                  <div class="productcontent">
                    <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                    <p class="price">5000دج</p>
                  </div>
              </div>
              <div class="swiper-slide" role="group" aria-label="5 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo5-->
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                  <img src="./img/Women/Pulls/Clothing___Tops___Mistress_Rocks__Give_My_Love___Light_Beige_Satin_Gathered_Crop_Top-removebg-preview.png" alt="" class="images">
                  </a>
                  <button class="btnn"> ADD TO CART</button>
                  <div class="productcontent">
                    <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit 
                    </h4></a>
                    <p class="price">5000دج</p>
                  </div>
              </div>
              <div class="swiper-slide" role="group" aria-label="6 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo6-->
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                  <img src="./img/Women/pants/download__15_-removebg-preview.png" alt="" class="images">
                  </a>
                  <button class="btnn"> ADD TO CART</button>
                  <div class="productcontent">
                    <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                    <p class="price">5000دج</p>
                  </div>
              </div>
              <div class="swiper-slide" role="group" aria-label="7 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo7-->
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                  <img src="./img/Women/Vests/Christmas_Gift_Fashion_Knit_Cardigans_Coat_Ladies_Loose_Autumn_Winter_Sweaters_Woman_s_Cardigan_Warm_Knitted_Sweater_Pocket_Embroidery__Jacket1119_-_M___Red-removebg-preview.png" alt="" class="images">
                  </a>
                  <button class="btnn"> ADD TO CART</button>
                  <div class="productcontent">
                    <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                    <p class="price">5000دج</p>
                  </div>
              </div>
              <div class="swiper-slide" role="group" aria-label="8 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo8-->
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                  <img src="./img/Women/Pulls/download__4_-removebg-preview.png" alt="" class="images">
                  </a>
                  <button class="btnn"> ADD TO CART</button>
                  <div class="productcontent">
                    <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                    <p class="price">5000دج</p>
                  </div>
              </div>
              <div class="swiper-slide" role="group" aria-label="9 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo9-->
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                  <img src="./img/Women/Pulls/download__13_-removebg-preview.png" alt="" class="images">
                  </a>
                  <button class="btnn"> ADD TO CART</button>
                  <div class="productcontent">
                    <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                    <p class="price">5000دج</p>
                  </div>
              </div>
          </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        <h1><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php" class="trending">TRENDING</a> </h1>
        <div class="swiper mySwiper1 swiper-initialized swiper-horizontal swiper-pointer-events">
          <div class="swiper-wrapper" id="swiper-wrapper-9c90f327c239a3c8" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-1379px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6" role="group" aria-label="7 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo7-->
              <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                <img src="./img/Women/Pulls/cecf2477-cb08-4117-acdd-7c8da756bdcc-removebg-preview.png" alt="" class="images">
                </a>
                <button class="btnn"> ADD TO CART</button>
                <div class="productcontent">
                  <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                  <p class="price">5000دج</p>
                </div>
            </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="7" role="group" aria-label="8 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo8-->
              <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                <img src="./F.R.I.E.N.D.S_files/Calça_Jeans_Boyfriend_-_Marcas_de_Luxo__1_-removebg-preview.png" alt="" class="images">
                </a>
                <button class="btnn"> ADD TO CART</button>
                <div class="productcontent">
                  <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                  <p class="price">5000دج</p>
                </div>
            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="8" role="group" aria-label="9 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo9-->
              <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                <img src="./F.R.I.E.N.D.S_files/Calça_Jeans_Boyfriend_-_Marcas_de_Luxo__1_-removebg-preview.png" alt="" class="images">
                </a>
                <button class="btnn"> ADD TO CART</button>
                <div class="productcontent">
                  <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                  <p class="price">5000دج</p>
                </div>
            </div><!--photo1-->
            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 9" style="width: 429.667px; margin-right: 30px;"><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
              <img src="./img/Women/Pulls/Designer_T-Shirts___Jerseys_for_Women-removebg-preview.png" alt="" class="images">
              </a>
              <button class="btnn">ADD TO CART</button>
              <div class="productcontent">
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                <p class="price">5000دج</p>
              </div>
            </div>
            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 9" style="width: 429.667px; margin-right: 30px;"><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><!--photo2-->
              <img src="./img/Women/Pulls/download__8_-removebg-preview.png" alt="" class="images">
              </a>
              <button class="btnn"> ADD TO CART</button>
              <div class="productcontent">
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                <p class="price">5000دج</p>
              </div>
            </div>
            <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo3-->
              <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
              <img src="./img/Women/Pulls/download__3_-removebg-preview.png" alt="" class="images">
              </a>
              <button class="btnn"> ADD TO CART</button>
              <div class="productcontent">
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                <p class="price">5000دج</p>
              </div>
            </div>
            <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo4-->
              <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                <img src="./img/Women/Vests/Black_Shawl_Collar_Roll_Sleeve_Patch_Long_Sweater_Coat-removebg-preview.png" alt="" class="images">
                </a>
                <button class="btnn"> ADD TO CART</button>
                <div class="productcontent">
                  <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit</h4></a>
                  <p class="price">5000دج</p>
                </div>

            </div>
            <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo5-->
              <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                <img src="./img/Women/Pulls/download__8_-removebg-preview.png" alt="" class="images">
                </a>
                <button class="btnn"> ADD TO CART</button>
                <div class="productcontent">
                  <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                  <p class="price">5000دج</p>
                </div>
            </div>
            <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo6-->
              <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                <img src="./img/Women/Jupes/Clothing__1_-removebg-preview.png" alt="" class="images">
                </a>
                <button class="btnn"> ADD TO CART</button>
                <div class="productcontent">
                  <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                  <p class="price">5000دج</p>
                </div>
            </div>
            <div class="swiper-slide" data-swiper-slide-index="6" role="group" aria-label="7 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo7-->
              <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                <img src="./img/Women/Pulls/cecf2477-cb08-4117-acdd-7c8da756bdcc-removebg-preview.png" alt="" class="images">
                </a>
                <button class="btnn"> ADD TO CART</button>
                <div class="productcontent">
                  <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                  <p class="price">5000دج</p>
                </div>
            </div>
            <div class="swiper-slide" data-swiper-slide-index="7" role="group" aria-label="8 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo8-->
              <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                <img src="./img/Women/pants/Calça_Jeans_Boyfriend_-_Marcas_de_Luxo__1_-removebg-preview.png" alt="" class="images">
                </a>
                <button class="btnn"> ADD TO CART</button>
                <div class="productcontent">
                  <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                  <p class="price">5000دج</p>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="8" role="group" aria-label="9 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo9-->
              <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
                <img src="./img/Women/pants/download__14_-removebg-preview.png" alt="" class="images">
                </a>
                <button class="btnn"> ADD TO CART</button>
                <div class="productcontent">
                  <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                  <p class="price">5000دج</p>
                </div>
            </div>
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 9" style="width: 429.667px; margin-right: 30px;"><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
              <img src="./F.R.I.E.N.D.S_files/Designer_T-Shirts___Jerseys_for_Women-removebg-preview.png" alt="" class="images">
              </a>
              <button class="btnn">ADD TO CART</button>
              <div class="productcontent">
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                <p class="price">5000دج</p>
              </div>
            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 9" style="width: 429.667px; margin-right: 30px;"><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><!--photo2-->
              <img src="./F.R.I.E.N.D.S_files/download__8_-removebg-preview.png" alt="" class="images">
              </a>
              <button class="btnn"> ADD TO CART</button>
              <div class="productcontent">
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                <p class="price">5000دج</p>
              </div>
            </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 9" style="width: 429.667px; margin-right: 30px;"><!--photo3-->
              <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php">
              <img src="./F.R.I.E.N.D.S_files/download__3_-removebg-preview.png" alt="" class="images">
              </a>
              <button class="btnn"> ADD TO CART</button>
              <div class="productcontent">
                <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><h4 class="productname">Lorem ipsum dolor sit </h4></a>
                <p class="price">5000دج</p>
              </div>
            </div></div>
          <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-9c90f327c239a3c8"></div>
          <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-9c90f327c239a3c8"></div>
          
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        <div class="shopall">
          <button class="shopallbtn">Shop All</button>
        </div>
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Article</title>
  <link rel="icon" href="./images/loog.png" type="image">
	<link rel="stylesheet" type="text/css" href="./css/style_article.css">
</head>
<body>

<div class="header">
        <div class="logo">
            <a href="./F.R.I.E.N.D.S.html"><img src="./F.R.I.E.N.D.S_files/logowhite-removebg-preview resized.png" alt="" class="logoimg">
              <img src="./F.R.I.E.N.D.S_files/loog-removebg-preview.png" alt="" class="logoimg1">
            </a>
        </div>
        <div class="searchbar">
            <div class="searchbar">
                <img src="./F.R.I.E.N.D.S_files/icons8-chercher-16.png" alt="" class="searchicon">
                <img src="./F.R.I.E.N.D.S_files/icons8-search-24.png" alt="" class="searchicon1">
                <input type="search" placeholder="Search" class="search">
            </div>
        </div>
        
        <div class="icons">
            <ul class="icons">
                <li class="cart"><a href="./cart.html"><img src="./F.R.I.E.N.D.S_files/icons8-shopping-bag-50.png" alt="" class="carticon">
                <img src="./F.R.I.E.N.D.S_files/icons8-shopping-bag-48.png" alt="" class="carticon1"></a> 
                
                </li>
                <li class="profileicon"><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.html"><img src="./F.R.I.E.N.D.S_files/icons8-male-user-48.png" alt="" class="profileicon" id="profileicon">
                  <img src="./F.R.I.E.N.D.S_files/icons8-male-user-48 (2).png" alt="" class="profileicon1">
                  <i class="fa fa-caret-down" id="toggle">.</i></a> 
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
                <li class="men"><a href="./MEN_Products.html" class="men1">Men</a> 
                  <div id="m" class="dropdown-content3">
                    <a href="./Pulls_men.html#">Pulls</a>
                    <a href="./Chemises_men.html#">Chemises</a>
                    <a href="./Pantalons_men.html#">Pantalons</a>
                    <a href="./Shorts_men.html#">Shorts</a>
                    <a href="./T-shirts_men.html#">T-shirts</a>
                    <a href="./Vests_men.html#">Vests</a>
                </div>
                </li>

                <li class="men"><a href="./WOMEN_Products.html" class="men1">Women</a> 
                  <div id="w" class="dropdown-content3">
                    <a href="./Robes_wom.html#">Robes</a>
                    <a href="./Pulls_wom.html#">Pulls</a>
                    <a href="./Chemises_wom.html#">Chemises</a>
                    <a href="./Pantalons_wom.html#">Pantalons</a>
                    <a href="./Shorts_wom.html#">Jupes</a>
                    <a href="./Vests_wom.html#">Vests</a>
                </div>
                </li>
            </ul>
        </div>
</div>
    
<main>
      <div class="contenu">
    	 <div id="img">><img src="./img/Women/pants/Calça_Jeans_Boyfriend_-_Marcas_de_Luxo-removebg-preview.png"></div>
    	 <div class="details">
    		<p>Model: </p><p> Pant</p>
    		</br>
    		<p>Taille: </p><div id="taille">
    						<button >XXL</button>
    						<button >XL</button>
    						<button >L</button>
    						<button >M</button>
    					</div>
    		</br>
    		<p>Prix: </p><button ><!-- -->x DA</button>
    		<p>Quantite: </p><button> </button>
    	 </div>
      </div>
      <button id="cart"><a href=""><img src="./images/icons8-shopping-cart-48.png"></a></button>
</main>

<div class="footer">
        <div class="f2">
            <div class="faq">
            <p><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.html">FAQ</a> </p>
            <p><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.html">Payment Methods</a> </p>
            <p><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.html">Contact</a> </p>
          </div>
          <div class="social">
            <p><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.html">Instagram</a> </p>
            <p><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.html">Facebook</a></p>
            <p><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.html">Twitter</a></p>
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
<script src="./F.R.I.E.N.D.S_files/wd.js.download"></script>
</body>
</html>
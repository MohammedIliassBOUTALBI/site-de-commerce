<?php
	session_start();
	$serveur="localhost";
$user="root";
$password="";
$bdd="articleshomme";
$connect=mysqli_connect($serveur, $user,$password,$bdd);

$i = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Chemises |F.R.I.E.N.D.S Shop</title>
	<link rel="stylesheet" href="./css/Men_Prod.css">
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
                    <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.html#">Link 1</a>
                    <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.html#">Link 2</a>
                    <a href="https://sitedjellloulf15042002.on.drv.tw/site/home.html#">Link 3</a>
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
                </li>

                <li class="men"><a href="./WOMEN_Products.html" class="men1">Women</a> 
                  <div class="dropdown-content3">
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

<!-- --><div class="main">

	<?php $i = 0;
?>

	<div class="small-container">
		<div class="row">
			<h2><span>Chemises</span></h2>
		</div>
		<div class="men-bar">
			<ul>
				<li><a href="Vests_men.html">Vests</a></li>
				<li><a href="Pulls_men.html">Pulls</a></li>
				<li><a href="T-shirts_men.html">T-shirts</a></li>
				<li><a href="Chemises_men.html">Chemises</a></li>
				<li><a href="Pantalons_men.html">Pantalons</a></li>
				<li><a href="Shorts_men.html">Shorts</a></li>
			</ul>
		</div>
		<div class="wor all-products">
			<h2>Tous Les Articles</h2>
			<select>
				<option>Nouvel arrivage</option>
				<option>Les plus demandés</option>
				<option>prix croissant</option>
				<option>prix décroissant</option>
			</select>
		</div>
		<div class="row">
			<div class="col-4">
				<?php

$query = "SELECT * FROM `articleshomme` ORDER BY Model ASC";
$result = mysqli_query($connect, $query);
$h = $i + 4;
if(mysqli_num_rows($result > 0))
{
	while($row = mysqli_fetch_array($result) && $i <$h)
	{
		$i++;
	?>
			<div class="col-4">
				<img src="<?php echo $row["images"]; ?>" />
				<h4><?php echo $row["Model"]; ?></h4>
				<p><?php echo $row["Prix"]; ?></p>
			</div>

	<?php
	}
}
?>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<img src="./img/Men/Chemises/product5.png" />
				<h4>ZARA Chemise</h4>
				<p>1500da</p>
			</div>
			<div class="col-4">
				<img src="./img/Men/Chemises/product6.png" />
				<h4>ZARA Chemise</h4>
				<p>1500da</p>
			</div>
			<div class="col-4">
				<img src="./img/Men/Chemises/product7.png" />
				<h4>ZARA Chemise</h4>
				<p>1500da</p>
			</div>
			<div class="col-4">
				<img src="./img/Men/Chemises/product8.png" />
				<h4>ZARA Chemise</h4>
				<p>1500da</p>
			</div>
		</div>

		<div class="page-btn">
			<a href="index.html">1</a>
			<a href="index.html">2</a>
			<a href="index.html">3</a>
			<a href="index.html">4</a>
			<a href="index.html">&#8594;</a>
		</div>
	</div>
<!-- --></div>

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
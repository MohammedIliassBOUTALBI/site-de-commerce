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
	<title>Homme |F.R.I.E.N.D.S Shop</title>
	<link rel="stylesheet" href="./css/Men_Prod.css">
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
                <input type="search" name="search" placeholder="Search" class="search">
            	</form>
            </div>
        </div>
        
        <div class="icons">
            <ul class="icons">
                <li class="cart"><a href="./cart.php"><img src="./F.R.I.E.N.D.S_files/icons8-shopping-bag-50.png" alt="" class="carticon">
                <img src="./F.R.I.E.N.D.S_files/icons8-shopping-bag-48.png" alt="" class="carticon1"></a> 
                
                </li>
                <li class="profileicon"><a href="https://sitedjellloulf15042002.on.drv.tw/site/home.php"><img src="./F.R.I.E.N.D.S_files/icons8-male-user-48.png" alt="" class="profileicon" id="profileicon">
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
                </li>

                <li class="men"><a href="./WOMEN_Products.php" class="men1">Women</a> 
                  <div class="dropdown-content3">
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

<!-- --><div class="main">

	<div class="small-container">
		<div class="row">
			<h2>Homme</h2>
		</div>
		<div class="men-bar">
			<ul>
				<li><a href="Vests_men.php">Vests</a></li>
				<li><a href="Pulls_men.php">Pulls</a></li>
				<li><a href="T-shirts_men.php">T-shirts</a></li>
				<li><a href="Chemises_men.php">Chemises</a></li>
				<li><a href="Pantalons_men.php">Pantalons</a></li>
				<li><a href="Shorts_men.php">Shorts</a></li>
			</ul>
		</div>
		<div class="wor all-products">
			<h2>Tous Les Articles</h2>
			<form method="GET">
			<select name="trie">
				<option value="Prix">Prix croissant</option>
				<option value="Prix Desc">Prix décroissant</option>
				<option value="Taille">Taille</option>
				<option value="Couleur">Couleur</option>
			</select>
			</form>
		</div>
		<div class="row">
<?php
	if (isset($_GET['trie'])) {
	switch ($_GET['trie']) {
		case 'Prix':
			echo $tri;
			$tri= "Prix";
			break;
		case 'Prix Desc':
			echo $tri;
			$tri= "Prix Desc";
			break;
		case 'Taille':
			echo $tri;
			$tri= "Taille";
			break;
		case 'Couleur':
			echo $tri;
			$tri= "Couleur";
			break;
		default:
			echo $tri;
			$tri= "Prix";
		break;
	}
	}else {$tri = "Prix";}
	$sql="SELECT * FROM `articleshomme` WHERE sexe='m' ORDER BY $tri ";
	$result=$conn->query($sql);
	if ($result->num_rows>0)
	{
		$i=0;
		while($row=$result->fetch_assoc())
		{
			if ($i==0){?>
			<div class="row">
			<?php
			}
			?>	
				<!--<form method="POST"></from> -->
				<div class="col-4"><a href="./Page_ARTICLE.php?var=<?php echo $row['Model']?>">
				<img src="<?php echo $row["src"].$row["Image"]; ?>" />
				<h4><?php echo $row["Model"] ?></h4>
				<p><?php echo $row["Prix"] ?>DA</p>
				</a>
			</div>
			<?php
			$i++;
			if ($i==4 || !($row=$result->fetch_assoc()) ){
			?>
				</div>
			<?php
				$i=0;
			}
		}
		
	}
?>

	</div>
</div>
<!-- --></div>

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

<script src="./F.R.I.E.N.D.S_files/wd.js.download"></script>

</body>

</html>
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
    
    $var= $_GET['var'];
    if ($var=='no_data') {
        // code...
    }
    $sql="SELECT * FROM `articleshomme` ";
    $result=$conn->query($sql);

    echo '<style> 
        .contenu img{
            max-width:450px;
            border-radius: 5px;
        }
        .contenu .details p{ 
            font-size: 20px;
            color: #FF6200;
        }
        </style>';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article</title>
  <link rel="icon" href="./images/loog.png" type="image">
    <link rel="stylesheet" type="text/css" href="./css/style_article.css">
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
    
<main>
    <?php
        if ($result->num_rows>0) 
    {
        while($row=$result->fetch_assoc())
        {
        if ($row["Model"]==$var) {
            if ($row["sexe"]=="f") {
                $s = "Femme";
            }else $s = "Homme";
    ?>
      <div class="contenu">
         <div id="img"><img src="<?php echo $row['src'].$row['Image']; ?>"></div>
         <div class="details">
            <h2>Model: </h2><p><?php echo $row["Model"] ?></p>

            <h2>Type: </h2><p><?php echo $row["Type"] ?></p>
            
            <h2>Taille: </h2><p><?php echo $row["Taille"] ?></p>
            
            <h2>Prix: </h2><p><!-- --><?php echo $row["Prix"] ?> DA</p>

            <h2>Sexe: </h2><p><?php echo $s ?></p>
           
            <h2>Quantite: </h2><p>1</p>
         </div>
      </div>
      <a href="Page_FORMULAIRE.php"><button id="cart"><img src="./images/icons8-shopping-cart-48.png"></button></a>
      <?php }
        }
        
    }


?>
</main>

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

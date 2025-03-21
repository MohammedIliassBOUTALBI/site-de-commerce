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

  echo '<style>
  .small-container .women-bar {
          margin-left: 100px;
  display: flex;
  align-items: center;
  padding: 20px;
  flex: 1;
  text-align: right;

}

.small-container .women-bar ul {
  display: inline-block;
  list-style-type: none;
  background-color: #0091F7;
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 10px;
}

.small-container .women-bar ul li {
  display: inline-block;
  margin-right: 60px;
  margin-left: 35px;
  font-size: 20px;
  color: #000000;
}
  </style>';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Pulls |F.R.I.E.N.D.S Shop</title>
  <link rel="stylesheet" href="./css/Wom_Prod.css">
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
                  <div class="dropdown-content3">
                    <a href="./Pulls_men.php#">Pulls</a>
                    <a href="./Chemises_men.php#">Chemises</a>
                    <a href="./Pantalons_men.php#">Pantalons</a>
                    <a href="./Shorts_men.php#">Shorts</a>
                    <a href="./T-shirts_men.php#">T-shirts</a>
                    <a href="./Vests_men.php#">Vests</a>
                </div>
                </li>

                <li class="Women"><a href="./WOMEN_Products.php" class="men1">Women</a> 
                </li>
            </ul>
        </div>
    </div>

<!-- --><div class="main">

  <div class="small-container">
    <div class="row">
      <h2><span>Pulls</span></h2>
    </div>
    <div class="women-bar">
      <ul>
        <li><a href="Vests_wom.php">Vests</a></li>
        <li><a href="Pulls_wom.php">Pulls</a></li>
        <li><a href="Pantalons_wom.php">Pantalons</a></li>
        <li><a href="Robes_wom.php">Robes</a></li>
        <li><a href="Jupes_wom.php">Jupes</a></li>
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
      echo $var;
      $var= "Prix";
      break;
    case 'Prix Desc':
      echo $var;
      $var= "Prix Desc";
      break;
    case 'Taille':
      echo $var;
      $var= "Taille";
      break;
    case 'Couleur':
      echo $var;
      $var= "Couleur";
      break;
    default:
      echo $var;
      $var= "Prix";
    break;
  }
  }else {$var = "Prix";}

  $sql="SELECT * FROM `articleshomme` WHERE sexe='f' ORDER BY $var ";
  $result=$conn->query($sql);
  if ($result->num_rows>0)
  {
    $i=0;
    while($row=$result->fetch_assoc())
    { 
      if ($row['Type']=='Pulls') {
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
    
  }
?>
  </div>
</div>
<!-- --></div>

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
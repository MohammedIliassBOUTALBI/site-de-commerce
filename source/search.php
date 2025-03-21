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
        .col-4 img{max-height:215px;
              max-width:215px;
              background-color: #2221;
              border-radius: 5px;
        }
        .main{
         min-height: 100%;
        }
        .mode .main{
          background-color: #343a40;
        }
        </style>';

?>
<!DOCTYPE html>
<!-- saved from url=(0055)https://sitedjellloulf15042002.on.drv.tw/site/home.php -->
<html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>F.R.I.E.N.D.S</title>
    <link rel="icon" href="./images/loog.png" type="image">
    <link rel="stylesheet" href="./css/search_page.css">
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
<!-- --><div class="main">
  <?php
    $search=$_POST['search'];
    $sql="SELECT * FROM `articleshomme` WHERE `Model` LIKE '%$search%' ";
    $result=$conn->query($sql);
  ?>
    <br><br><br><br><br><h1 id="res">Resultats de: "<?php echo $search; ?>"</h1><br>
  <div class="small-container">
  <div class="row">
  <?php
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
      
      }else{
      ?>
        <h2 id="no_result">Ce Modele n'est pas encore disponible.</h2>
      <?php
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

        <script type="text/javascript" async="" src="./F.R.I.E.N.D.S_files/analytics.js.download"></script><script type="text/javascript" async="" src="./F.R.I.E.N.D.S_files/js"></script><script async="" src="./F.R.I.E.N.D.S_files/js(1)"></script><script src="./F.R.I.E.N.D.S_files/swiper-bundle.min.js.download"></script>
        
         <script>
          const dark = document.getElementById("dark")
          const body = document.getElementById("body")
          dark.addEventListener("click" ,(eo) =>{
            body.classList.toggle("mode")
  
          })
        </script>

<script src="./F.R.I.E.N.D.S_files/wd.js.download"></script>
</body></html>
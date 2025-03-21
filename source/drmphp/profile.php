<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
    exit();
}

    echo '<style> 
        main{
            padding:120px;
            height:100%;
        }
        #info{
        padding: 50px;
        opacity: 90%;
        background-color: #343a40;
        border-radius: 40px;
    }
        main p{
            line-height: 70px;
            font-size: 40px;
            color: white;

        }

        main a{
            font-size: 30px;
            margin-top: -70px;
            margin-left: 40px;
            display:flex;
            flex-direction: column;
            padding: 40px;
            color: #FF6200 ;
            background-color: #343a40;
            float: right;
            border-radius: 5px;
        }
        main a:hover{
            transition-duration: 0.5s;
            background-color: white;
        }
        </style>';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.R.I.E.N.D.S | Profil</title>
    <link rel="stylesheet" type="text/css" href="./css/profil_style.css">
</head>
<body>

    <div class="header">
        <div class="logo">
            <a href="../F.R.I.E.N.D.S.php"><img src="../F.R.I.E.N.D.S_files/logowhite-removebg-preview resized.png" alt="" class="logoimg">
              <img src="../F.R.I.E.N.D.S_files/loog-removebg-preview.png" alt="" class="logoimg1">
            </a>
        </div>
        <div class="searchbar">
            <div class="searchbar">
                <form method="POST" action=".../search.php">
                <img src="../F.R.I.E.N.D.S_files/icons8-chercher-16.png" alt="" class="searchicon">
                <img src="../F.R.I.E.N.D.S_files/icons8-search-24.png" alt="" class="searchicon1">
                <input type="search" name="search" placeholder="Search" class="search"></form>
            </div>
        </div>
        
        <div class="icons">
            <ul class="icons">
                <li class="cart"><a href="../cart.php"><img src="../F.R.I.E.N.D.S_files/icons8-shopping-bag-50.png" alt="" class="carticon">
                <img src="../F.R.I.E.N.D.S_files/icons8-shopping-bag-48.png" alt="" class="carticon1"></a> 
                
                </li>
                <li class="profileicon"><a href=""><img src="../F.R.I.E.N.D.S_files/icons8-male-user-48.png" alt="" class="profileicon" id="profileicon">
                  <img src="../F.R.I.E.N.D.S_files/icons8-male-user-48 (2).png" alt="" class="profileicon1">
                  <i class="fa fa-caret-down" id="toggle"></i></a> 
                  <div class="dropdown-content">
                    <a href="../derdourmohamedphp/register.php">Account</a>
                    <a href="../derdourmohamedphp/login.php">Login</a>
                    <a href="../derdourmohamedphp/register.php">Register</a>
                    <button id="dark" class="dark"><img src="../F.R.I.E.N.D.S_files/icons8-crescent-moon-50.png" alt="" class="darkbtn">
                      <img src="../F.R.I.E.N.D.S_files/icons8-sun-60 (1).png" alt="" class="darkbtn1">
                    
                    </button>
                </div>

                </li>

                
            </ul>
        </div>
        <div class="categories">
            <ul class="categories">
                <li class="men"><a href="../MEN_Products.html" class="men1">Men</a> 
                  <div id="m" class="dropdown-content3">
                    <a href="../Pulls_men.html#">Pulls</a>
                    <a href="../Chemises_men.html#">Chemises</a>
                    <a href="../Pantalons_men.html#">Pantalons</a>
                    <a href="../Shorts_men.html#">Shorts</a>
                    <a href="../T-shirts_men.html#">T-shirts</a>
                    <a href="../Vests_men.html#">Vests</a>
                </div>
                </li>

                <li class="men"><a href="../WOMEN_Products.php" class="men1">Women</a> 
                  <div id="w" class="dropdown-content3">
                    <a href="../Robes_wom.html#">Robes</a>
                    <a href="../Pulls_wom.html#">Pulls</a>
                    <a href="../Chemises_wom.html#">Chemises</a>
                    <a href="../Pantalons_wom.html#">Pantalons</a>
                    <a href="../Shorts_wom.html#">Jupes</a>
                    <a href="../Vests_wom.html#">Vests</a>
                </div>
                </li>
            </ul>
        </div>
    </div>

    <main>
    <div id="info">
    <p>name : <?php echo $_SESSION['user']['name']; ?></p><br><br>
    <p>email : <?php echo $_SESSION['user']['email']; ?></p><br><br>
    <a href="logout.php">logout</a>

    <a href="index.php">home</a>


    </div>

    </main>


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

    <script src="../F.R.I.E.N.D.S_files/wd.js.download"></script>
</body>
</html>
<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:profile.php');
    exit();
}
if(isset($_POST['submit'])){
 include 'conn-db.php';
   $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
   $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

   $errors=[];
   

   // validate email
   if(empty($email)){
    $errors[]="entrer ton email svp";
   }


   // validate password
   if(empty($password)){
        $errors[]="entrer le mot de passe svp ";
   }



   // insert or errros 
   if(empty($errors)){
   
      // echo "check db";

    $sql="SELECT * FROM users WHERE email ='$email'";
    $q=$conn->prepare($sql);
    $q->execute();
    $data=$q->fetch();
    if(!$data){
       $errors[] = "erreur d'identification";
    }else{
        
         $password_hash=$data['password']; 
         
         if(!password_verify($password,$password_hash)){
            $errors[] = "erreur d'identification";
         }else{
            $_SESSION['user']=[
                "name"=>$data['name'],
                "email"=>$email,
                
              ];
            header('location:profile.php');

         }
    }
     
    
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../derdourmohamedphp/css1/master.css">
    <title>F.R.I.E.N.D.S | Login</title>
</head>
<body>

   <div class="container">
<form action="login.php" method="POST">
<?php 
        if(isset($errors)){
            if(!empty($errors)){
                foreach($errors as $msg){
                    echo $msg . "<br>";
                }
            }
        }
    ?>
 

<div class="title">Login</div>
        <div class="input-box underline">
    <input type="text" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" name="email" placeholder="email">
    <div class="underline"></div>
        </div>
        <br><br>
        <div class="input-box">
    <input type="password" name="password" placeholder="mot de passe"><br><br>
    <div class="underline"></div>
        </div>
        <div class="input-box button">
    
        <input type="submit" name="submit" value="Login">
        </div>
    <br><br>
  
</form>
<div class="option">pour créer un nouveau compte  </div>
        -<div class="twitter">
          <a href="register.php">Sign up</a>
        </div>
    </div>
</body>
</html>
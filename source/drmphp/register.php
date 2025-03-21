<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:profile.php');
    exit();
}
if(isset($_POST['submit'])){
include 'conn-db.php';
   $name=filter_var($_POST['name'],FILTER_SANITIZE_STRING);
   $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
   $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

   $errors=[];
   // validate name
   if(empty($name)){
       $errors[]="entrer le nom svp";
   }elseif(strlen($name)>100){
       $errors[]="Le nom ne doit pas dépasser 100 caractères ";
   }

   // validate email
   if(empty($email)){
    $errors[]="entrer ton email svp";
   }elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
    $errors[]="Email invalide";
   } 

   $sql="SELECT email FROM users WHERE email ='$email'";
   $q=$conn->prepare($sql);
   $q->execute();
   $data=$q->fetch();

   if($data){
     $errors[]="l'email existe déjà";
   }


   // validate password
   if(empty($password)){
        $errors[]="entrer le mot de passe svp ";
   }elseif(strlen($password)<6){
    $errors[]=" Le mot de passe ne doit pas être inférieur à 6 caractères";
}



   // insert or errros 
   if(empty($errors)){
      // echo "insert db";
      $password=password_hash($password,PASSWORD_DEFAULT);
      $sql="INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
      $conn->prepare($sql)->execute();
      $_POST['name']='';
      $_POST['email']='';
      

      $_SESSION['user']=[
        "name"=>$name,
        "email"=>$email,
      ];
      header('location:profile.php');
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../derdourmohamedphp/css/main.css">
    <title>F.R.I.E.N.D.S | Registration</title>
</head>
<body>
    
<div class="wrapper">

<form action="register.php" method="POST">
    <?php 
        if(isset($errors)){
            if(!empty($errors)){
                foreach($errors as $msg){
                    echo $msg . "<br>";
                }
            }
        }
    ?>  <p class="psign">signup</p>
    <div class="input-box">
  
    <input type="text" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>" name="name" placeholder="nom utilisateur"><br><br>
    </div>
    <div class="input-box">
   <input type="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" name="email" placeholder="email"><br><br>
   </div>
   <div class="input-box">
   <input type="password" name="password" placeholder="mot de passe"><br><br>
   </div>
   <div class="policy">
                <input type="checkbox">
                <h3>J'accepte tous les termes et conditions</h3>
            </div>
            <div class="input-box button">
    <input type="submit" name="submit" value="Register">
    <br><br>
    </div>
   
    <div class="text">
                <h3>Vous avez déjà un compte? <a href="login.php">Login now</a></h3>
            </div>
</form>
</div>
</body>
</html>
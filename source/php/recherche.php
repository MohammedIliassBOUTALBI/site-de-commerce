<?php

$serveur="localhost";
$user="root";
$password="";
$bdd="formation";
$conn=mysqli_connect($serveur, $user,$password,$bdd);


if(!$conn)
	{
		die("Connexion echouée : revérifiez vos parametres de connexion à la base de données");
	}

if (isset($_POST['model']))

{
	$sql="SELECT `Nom`, `Prénom`, `Sexe`, `Date`, `Niveau d'étude` FROM `article` WHERE model='' ";

	/*$sql="INSERT INTO etudiant VALUES ('$num','$nom','$prenom','$sexe','$date','$niveau_etude')";*/

	$result=$conn->query($sql);

	if ($result->num_rows>0) 
	{
		while($row=$result->fetch_assoc())
		{
			echo "les informations que vous cherchez sont :<br /> ";
			echo "le nom de l'etudiant est :" .$row["Nom"]."<br />"; 
			echo "le prénom de l'etudiant est :" .$row["Prénom"]."<br />"; 
			echo "le sexe de l'etudiant est :" .$row["Sexe"]."<br />"; 
			echo "la date de naissance de l'etudiant est :" .$row["Date"]."<br />"; 
			echo "le niveau d'etude de l'etudiant est :" .$row["Niveau d'étude"];
		}
		
	}
	else 
	{
		echo "Désolé cet étudiant n'existe pas dans notre base de données";
	}
	
}
?>
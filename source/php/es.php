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

	$sql="SELECT * FROM `articleshomme` ";

	/*$sql="INSERT INTO etudiant VALUES ('$num','$nom','$prenom','$sexe','$date','$niveau_etude')";*/

	$result=$conn->query($sql);

	if ($result->num_rows>0) 
	{
		while($row=$result->fetch_assoc())
		{
			echo $row["Model"]."<br />";

			?>
			<img src="<?php echo $row["Image"]; ?>"> 
			<?php
			echo $row["Prix"]."<br />"; 
			echo $row["Taille"]."<br />"; 
			echo $row["Couleur"];
		}
		
	}
	else 
	{
		echo "Désolé cet étudiant n'existe pas dans notre base de données";
	}
	
?>
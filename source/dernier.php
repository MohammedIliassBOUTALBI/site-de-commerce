
--->

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
    //$var= $_GET['var'];
    $sql="SELECT * FROM `articleshomme` ";
    $result=$conn->query($sql);
    if ($result->num_rows>0) 
    {
        while($row=$result->fetch_assoc())
        {
        if ($row["Model"]=="black n white") {
            echo $row["Model"]."<br />";

            ?>
            <img src="<?php echo $row["src"].$row["Image"]; ?>"> 
            <?php
            echo $row["Prix"]."<br />"; 
            echo $row["Taille"]."<br />"; 
            echo $row["Couleur"];
        }
        }
        
    }


?>

-->

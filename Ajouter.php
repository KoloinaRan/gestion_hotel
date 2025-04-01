<?php 
require_once('Connexion.php');
if (empty($_POST['nom']) or empty($_POST['image']) or empty($_POST['prix'])) { ?>
	
	<center><font color=#FF0000><b><h1>AJOUT REFUSER</h1><b></font>
				Existance d'un ou plusieurs champs vide,veuillez les remplir.
				<br>
				<a href="Admin.php">
					<button>Reessayer</button>
				</a></center>
               
<?php } else {
$nom = $_POST['nom'];
$image = $_FILES['image']['name'];
$tmp_image = $_FILES['image']['tmp_name'];
move_uploaded_file($tmp_image, "KOLOINA/$image");
$prix = $_POST['prix'];
$requete = "INSERT INTO hotels (nom, image, prix) VALUES ('$nom', '$image', '$prix')";
$resultat = mysqli_query($db,$requete);
if ($resultat == true) { ?>

	<center><font color=green><b><h1>AJOUT ACCEPTER</h1><b></font>
               Veuillez le verifier dans le tableau "Liste des hotels".
			   <br>
			<a href="Admin.php">
				<button >
					OK
				</button>
			</a></center>
	
<?php	
}
}
 ?>

<?php 
require_once('Connexion.php');
if (empty($_POST['nom']) or empty($_POST['mdp'])) { ?>
	<div  style="width: 500px;">
			<h2>Erreur</h2>
			Il se peut que vous êtes en présence d'une ou plusieurs champs vides !
			<br>
			<a href="acceuil.html">
				<button  onclick="document.getElementById('modal_error').style.display = 'none'">OK</button>
			</a>
</div>



<?php } else {
$nom = $_POST['nom'];
$mdp = $_POST['mdp'];
$hash = md5($mdp);

$requete = "SELECT * FROM client where (nom = '$nom' AND mdp = '$hash')";
$resultat = mysqli_query($db,$requete);

if ($data = mysqli_fetch_assoc($resultat) > 0) { ?>

<center>
On vous souhaite la bienvenue. Nous sommes ravis de vous accueillir en tant que nouveau membre.
	<font color=green><b><h1>Connéxion reussie!</h1><b></font>
			<a href="reservation membre.php">
				<button >
					OK
				</button>
			</a></center>

<?php 
} else { ?>

	<center><div style="width: 500px;">
			<h2>Erreur</h2>
			Aucun client ne corréspond au données entrés, veuillez réessayer.
			<br>
			<a href="Connexion.html">
				<button>OK</button>
			</a>
     </div></center>

<?php
}

}

?>
 



 <!DOCTYPE html>
 <html>
 <head>
 	<title>Reponse</title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="style/style.css">
 	<style type="text/css">
 	
 	</style>
 </head>
 <body>

 </body>
 </html>
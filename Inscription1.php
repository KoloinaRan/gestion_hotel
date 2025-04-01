<?php 
include('Connexion.php');
 // Declarations des variables
if (empty($_POST['nom']) or empty($_POST['mail']) or empty($_POST['mdp']) or empty($_POST['confirmation'])) { ?>

	<div style="width: 500px;">
		
			<h2>Erreur d'inscription</h2>
			Il se peut que vous êtes en présence d'un ou plusieurs champs vides!
			<br>
				<a href="Page d'acceuil.html">
					<button type="button">Recommencer</button>
				</a>
</div>
<?php } else {

$nom = $_POST['nom'];
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$confirmation = $_POST['confirmation'];
$hash_mdp = md5($mdp);
$hash_confirmation = md5($confirmation);


if ($hash_mdp != $hash_confirmation) {
?>
<center><font color=red><b><h1>Le mot de passe ne correspond pas,veuillez réessayer.</h1><b></font>
			<a href="Inscription.php">
				<button >
					OK
				</button>
			</a></center>

<?php
} else {

$requete3 = "INSERT INTO client(nom, mail, mdp, confirmation) VALUES ('$nom', '$mail',  '$hash_mdp', '$hash_confirmation')";
$resultat3 = mysqli_query($db,$requete3);


if ($resultat3 == true) { ?>

<center><font color=green><b><h1>AJOUT ACCEPTER</h1><b></font>
             Cher nouveau membre, bienvenue a vous. Vous êtes actuellement inscrite dans notre liste d'abonnées.
			   <br>
			<a href="Page d'acceuil.html">
				<button >
					OK
				</button>
			</a></center>
<?php

}


}

}

?>



<!DOCTYPE html>
<html>
<head>
	<title>erreur</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

</body>
</html>
<?php 
require_once('Connexion.php');
if (empty($_POST['hotel']) or empty($_POST['clients']) or empty($_POST['contact']) or empty($_POST['nombres']))
{ ?>
	<center><font color=#FF0000><b><h1>Erreur</h1><b></font>
	Veuillez remplir les champs vide.
	<br>
	<a href="Reservation.html">
		<button  type="button">Recommencer</button>
	</a>
    </center>
<?php } else {
$hotel = $_POST['hotel'];
$clients = $_POST['clients'];
$contact = $_POST['contact'];
$arriver = $_POST['arriver'];
$nombres = $_POST['nombres'];
$commentaire = $_POST['commentaire'];
$requete = "INSERT INTO reservations(hotel, clients, contact, arriver, nombres, commentaire) VALUES ('$hotel', '$clients', '$contact', '$arriver', '$nombres', '$commentaire')";
$resultat = mysqli_query($db,$requete);
if ($resultat = true) { ?>
	<div style="margin-top:20%"><center><div style="width: 50%; 
            background-image: 
            linear-gradient(10deg,rgba(190, 186, 186, 0.329),transparent,rgba(190, 186, 186, 0.329));
            box-shadow: -2px 2px 0px 0px #808080;
			border-top-left-radius: 50px;border-top-right-radius: 50px;
			border-bottom-left-radius: 50px;border-bottom-right-radius: 50px;"><font color=grey><b><h1>Votre reservation a ete faite avec succes.</h1><b></font>
	<b>
		<a href="Page d'acceuil.html">
		<input style="min-width: 270px; background-color:rgb(3, 18, 51); color: white; margin-bottom: 10px;"type="submit" value="Ok" >

	</a></div></center>
</div>
	
<?php
}
}
 ?>

<!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">
 	<title>Réponse</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<style type="text/css">
	body {
			background-image: url(KOLOINA/black.jpg);
			background-size: cover;
			background-attachment: fixed;
			color:grey;
			min-width: 600px;
		}
	</style>
 </head>
 <body><center><footer  style="color: black; opacity: 0.7;">
		Koloina| copyright 2023&copy;.
	</footer>
    </center>
 
 </body>
 </html>

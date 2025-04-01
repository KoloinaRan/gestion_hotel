<?php 
require_once('Connexion.php');
$hotel = $_POST['hotel'];
$requete2= "DELETE FROM reservations WHERE (hotel= '$hotel')";
$resultat2 = mysqli_query($db,$requete2);
if ($resultat2 == true) { ?>
		<center><div style="width: 500px;">
				<h2>Suppréssion efféctuée</h2>
				Le client à été supprimé correctement du base de données!
				<br>
					<a href="Admin.php">
						<button >OK</button>
					</a>
	</div></center>
<?php } ?>

<!DOCTYPE html>
<html>
<head>
	<title>Reponse à votre action</title></head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<style type="text/css">
</style>
<body>

</body>
</html>
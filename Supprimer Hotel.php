<?php 
require_once('Connexion.php');
$nom = $_POST['nom'];
$requete1= "DELETE FROM hotels WHERE (nom = '$nom')";
$resultat1 = mysqli_query($db,$requete1);
if ($resultat1 == true) { ?>
		<center><div style="width: 500px;">
				<h2>Suppréssion efféctuée</h2>
				L'hotel à été supprimé correctement du base de données!
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
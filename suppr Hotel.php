<?php 
require_once('Connexion.php');
$nom = $_GET['nom'];
$requete = "SELECT * FROM hotels WHERE (nom = '$nom')";
$res = mysqli_query($db,$requete);
$data = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Site de reservation en ligne</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<style type="text/css">
		table {
    		
            margin-top: 20px;
		}

		body {
			color: white;
            background: url(KOLOINA/supp.jpg);
            background-size: cover;
			
		}
	</style>
</head>
<body>

<center>

<div style="width: 40%; margin-top:200px;
            background-image: 
            linear-gradient(10deg,rgba(190, 186, 186, 0.329),transparent,rgba(190, 186, 186, 0.329)); float:center;
            box-shadow: -2px 2px 0px 0px #808080;
			border-top-left-radius: 50px;border-top-right-radius: 50px;
			border-bottom-left-radius: 50px;border-bottom-right-radius: 50px;">
           <i style="font-size: 25px;color: darkred;">Suppression</i>

<form action="Supprimer Hotel.php" method="POST">

 		<table BORDER="1"> 
 	<tr>
 		<td>Nom</td>
 		<td><input type="text" readonly="true" name="nom" value="<?php echo($data['nom']); ?>"></td>
 	</tr>
 
 	<tr>
 		<td>Loyer</td>
 		<td><input  type="nombre" readonly="true" name="prix" value="<?php echo($data['prix']); ?>"></td>
 	</tr>
   
       </table>
 

 	<button style="margin: 10px; background-color:red;" type="submit">Supprimer</button>
 	
</form>
</div>
</center>


</body>
</html>

<?php 
require_once('Connexion.php');
$hotel = $_GET['hotel'];
$requete = "SELECT * FROM reservations WHERE (hotel = '$hotel')";
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

<form action="Supprimer Reservation.php" method="POST">

 		<table BORDER="1"> 
 	<tr>
 		<td>Hotel</td>
 		<td><input type="text" readonly="true" name="hotel" value="<?php echo($data['hotel']); ?>"></td>
 	</tr>
 	<tr>
 		<td>Nom du client</td>
 		<td><input type="text" readonly="true" name="clients" value="<?php echo($data['clients']); ?>"></td>
 	</tr>
 	<tr>
 		<td>Contact</td>
 		<td><input  type="number" readonly="true" name="contact" value="<?php echo($data['contact']); ?>"></td>
 	</tr>
     <td>Nombres de client</td>
 		<td><input  type="number" readonly="true" name="nombres" value="<?php echo($data['nombres']); ?>"></td>
 	</tr>
     <td>Commentaire</td>
 		<td><input  type="text" readonly="true" name="commentaire" value="<?php echo($data['commentaire']); ?>"></td>
 	</tr>
   
       </table>
 

 	<button style="margin: 10px; background-color:red;" type="submit">Supprimer</button>
 
</form>
</div>
</center>


</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title>RESERVATION EN LIGNE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<style type="text/css">
		body {
			background: url(KOLOINA/reservation.jpg);
			background-size: cover;
			background-attachment: fixed;
			color: black;
			min-width: 600px;
		}

		

		img {
			width: 50px;
			height:50px;
			margin-left:120px;
			margin-top:10px;
            margin-bottom:0px;
            margin-right:20px;
		
			left: 10px;
            top: 30px;
			box-shadow: 0px 0px 2px black;
			border-top-left-radius: 10px;border-top-right-radius: 10px;
			border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;
		}


	button {
		
		width: 50px;
        margin-bottom:10x;
		background-image: 
        linear-gradient(10deg,rgb(62, 108, 146),transparent,rgb(80, 137, 175) );
		}
	</style>
</head>
<body>
<center>

<div style="width: 55%; margin-top: 150px; background-image: 
linear-gradient(10deg,rgba(190, 186, 186, 0.329),transparent,rgba(190, 186, 186, 0.329)); box-shadow:  0 0 10px black;
border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
<table border="0">
	<tr><td>
	
		<img src="KOLOINA/id.png">
	
			<center>
				<form action="Confirmation.php" method="POST">
				<table border="1">	
						<tr>
							<td>Hotel</td>
							<td><input type="text" name="hotel" placeholder="Nom hotel" ></td>
						</tr>
					
						<tr>
							<td>Nom</td>
							<td><input type="text" name="clients" placeholder="Votre nom" ></td>
						</tr>

					    <tr>
							<td>Contact</td>
							<td><input  type="text" name="contact" placeholder="Contact "></td>
						</tr>
						<tr>
							<td>Date d'arrivée</td>
							<td><input  type="date" name="arriver" placeholder="date d'arrivee"></td>
						</tr>
						<tr>
							<td>Nombres</td>
							<td><input  type="number" name="nombres" placeholder="Nombre de personne"></td>
						</tr>
						<tr>
							<td >Notice</td>
								<td><textarea  name="commentaire" placeholder="Ajouter un commentaire" ></textarea>
							</td>
			</tr>
					</div>
				</form>
					 </div></tr></td>
			</center> </td></tr></table>
			<a href ="Confirmation.php">
			<input style="min-width: 100px; background-color:rgb(14, 75, 110); color: white;margin-top: 10px; margin-bottom: 10px;"type="submit" value="Résérver" >
		</a></td>
	   </tr>
</table>
</div>
</center>
<center>
Voulez-vous quitter?
<br><a href="Page d'acceuil.html"><button type="button">Oui</button></a>
                           <button  type="button">Non</button></center>
<center> <footer style="color: greywhite; opacity: 0.8;">
	Koloina| copyright 2023&copy;.
</footer></center>
</div>
</body>
</html>
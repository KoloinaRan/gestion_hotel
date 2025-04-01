<!DOCTYPE html>
<html>
<head>
	<title>Site de reservation en ligne</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<style type="text/css">
		

		body {
			background-image: url(KOLOINA/inscription.jpg);
			background-size:cover;
			background-attachment: fixed;
			color: :rgb(16, 43, 102);
			min-width: 600px;
		}

	</style>
</head>
<body>

<center><div style="width: 50%; margin-top:200px;
            background-image: 
            linear-gradient(10deg,rgba(190, 186, 186, 0.329),transparent,rgba(190, 186, 186, 0.329)); float:center;
            box-shadow: -2px 2px 0px 0px #808080;
			border-top-left-radius: 50px;border-top-right-radius: 50px;
			border-bottom-left-radius: 50px;border-bottom-right-radius: 50px;">
					
					<h2>S'inscrire</h2>
					<center><form action="Inscription1.php" method="POST">
						<table style="width: 500px;">
						<tr>
					<td><i><b>Nom</b></i></td>
					<td><input style="min-width: 300px; background-color: transparent;color: black;" type="text" 
						 placeholder="Entrer votre nom" name="nom"></td>
				        </tr>

						<tr>
					<td><i><b>Email</i></td>
					<td><input style="min-width: 300px; background-color: transparent;color: black;" type="text" 
						 placeholder="Entrer votre mail" name="mail"></td>
				         </tr>

						 <tr>
					<td><i><b>Mot de passe</i></td>
					<td><input style="min-width: 300px; background-color: transparent;color:black;" type="password" 
						 placeholder="Entrer un nouveau mot de passe" name="mdp"></td>
				        </tr>

						<tr>
					<td><i><b>Confirmer le mot de passe</i></td>
					<td><input style="min-width: 300px; background-color: transparent;color: black;" type="password" 
						 placeholder="Confirmer votre mot de passe" name="confirmation" required></td>
				        </tr>
		
						</table>
						<input style="min-width: 40px; background-color:rgb(32, 134, 134); margin-bottom: 10px;margin-top: 10px;color: black;
							border-top-left-radius: 50px;border-top-right-radius: 50px;
			border-bottom-left-radius: 50px;border-bottom-right-radius: 50px;"type="submit" value="Inscription" >
					</form>
				

	
				</div></center>


				<br>
<center> <footer style="color: black; opacity: 0.8;">
	Koloina| copyright 2023&copy;.
</footer></center>


</body>
</html>
<?php 
require_once('connexion.php');
$requete1 = "SELECT * FROM client";
$resultat1 = mysqli_query($requete1);


$requete2 = "SELECT * FROM hotel";
$resultat2 = mysqli_query($requete2);

$requete3 = "SELECT * FROM reservation";
$resultat3 = mysqli_query($requete3);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Site de reservation en ligne</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="lib/w3.css">
	<link rel="stylesheet" type="text/css" href="style/all.min.css">
	<link rel="stylesheet" type="text/css" href="style/fontawesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<style type="text/css">
		
		table tr, td {
			text-align: center;
			padding: 3px;
		}

		table tr {

		}

		table {
			width: 90%;
			border-top: 2px solid #000;
			border-bottom: 2px solid #000;
		}

		#navigation ul li {
			display: inline-block;
			list-style-type: none;
		}

		#navigation ul li a {
			padding: 6px;
			color: white;
			text-decoration: none;
		}

		#navigation ul li a:hover {
			animation: anim_nav 3s forwards; 
		}

		@keyframes anim_nav {
			from {
				background-color: white;
				box-shadow: 3px 3px 15px white;
				color: black;
			} to {
				background-color: red;
				box-shadow: 3px 3px 15px red;
				color: #000;
			}
		}

		body {
			background-image: url(fond/goku.jpg);
			background-attachment: fixed;
			/* background-size: 1600px; */
			color: white;
			
		}

		table {
			border-top: 2px solid white;
			border-bottom: 2px solid white;
			width: 70%;
		}

		nav ul li {
			list-style-type: none;
			display: inline;
			margin-left: 10px;
		}

		nav ul li a {
			padding: 6px;
			text-decoration: none;
			color: white;
		}

		nav ul li a:hover {
			animation: animat 1.6s forwards;
			color: black;
		}

		@keyframes animat {
			from {
					background-color: white;
					box-shadow: 1px 1px 10px white;
				} to {
						background-color: red;
				}
		}

		a {
			text-decoration: none;
		}

		h3 {
			color: purple;
			text-shadow: 1px 1px 2px white;
		}

	</style>
</head>
<body>
<!-- Menu de navigation -->

<div class="w3-center w3-top" style="background-image: linear-gradient(70deg, darkred, darkred, red, red, darkred, darkred);">
	<h2 class="w3-padding">Résérver un hotel</h2>
	<nav class="w3-transparent">
	<ul class="w3-padding w3-center">
		
		<li><a href="acceuil.html"><i class="fa fa-home"></i> Acceuil</a></li>
		<li><a href="select.php" target="blank"><i class="fa fa-hotel"></i> Dévis</a></li>
		<li><a href="propos.html"><i class="fa fa-street-view"></i> A propos</a></li>
		<li><a href="authentification_admin.html"><i class="fa fa-user-plus"></i> Administrateur</a></li>
		<li><a href="acceuil_principale.html"><i class="fa fa-reply-all"></i> Menu principale</a></li>
	</ul>
</nav>
</div>
<!-- fin de menu de navigation -->

<section class="w3-"  style="">


	<div style="margin-top: 150px;"></div>
	<p class="w3-text-justify w3-border w3-margin w3-padding w3-leftbar w3-border-red w3-text-green">Bienvenue Mr Abraham Lincoln! En tant qu'administrateur, vous pouvez creer ajouter, supprimer, modifier les hotels ou les clients inscrits à votre site internet de résérvation d'hotel ou les résérvations.</p>

	

	<center>
			<h3 class="w3-margin">Voici la liste de tous les clients inscrits à notre site.</h3>


		<table>
		<tr>
			<th>id_client</th>
			<th>Nom_client</th>
			<th>mail_client</th>
			<th>photo_client</th>
			<th>Mot_de_asse_cl</th>
			<th>Actions</td>
		</tr>

		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		<?php while ($data1 = mysql_fetch_assoc($resultat1)) { ?>
			<tr>
				<td><?php echo($data1['id']) ?></td>
				<td><?php echo($data1['nom']) ?></td>
				<td><?php echo($data1['mail']) ?></td>
				<td><img style="width: 45px; height: 45px; padding: 3px;" src="images/<?php echo($data1['photo']); ?>"></td>
				<td><?php echo($data1['mdp']) ?>"</td>
				<td>
					<a href="select_modif_client.php?id=<?php echo($data1['id']); ?>"><i style="font-size: 25px; border: none; color: green;" class="fa fa-wrench" data-toogle="tooltip" title="Modifier"></i></a>
					<a href="imprimerClient.php?id=<?php echo($data1['id']); ?>">
						<i class="fa fa-print" style="font-size: 25px; border: none; color: white;" data-toogle="tooltip" title="Affichage avant impression"></i>
					</a>
					<a href="select_suppr_client.php?id=<?php echo($data1['id']); ?>"><i style="font-size: 25px; border: none; color: darkred;" class="fa fa-trash" data-toogle="tooltip" title="Affichage avant suppression"></i></a>
					
				</td>
			</tr>
		<?php } ?>
	</table>

	</center>

	<br>

	<center>
		<h3 class="w3-margin">Voici la liste des hotels que nous disposons</h3>
	<table>
		<tr>
			<th>code_hotel</th>
			<th>Nom_hotel</th>
			<th>Caté_hotel</th>
			<th>image</th>
			<th style="color: green;">prix_reserv</th>
			<th>Actions</th>
		</tr>

		<?php while ($data2 = mysql_fetch_assoc($resultat2)) { ?>
			<tr>
				<td><?php echo($data2['code']); ?></td>
				<td><?php echo($data2['nom']); ?></td>
				<td><?php echo($data2['cate']); ?></td>
				<td><img style="width: 45px; height: 45px; padding: 3px;" src="images/<?php echo($data2['image']); ?>"></td>
				<td style="color: green; font-weight: bold;"><?php echo($data2['prix']); ?></td>
				<td>

					<a href="select_modif_hotel.php?code=<?php echo($data2['code']) ?>">
						<i style="font-size: 25px; color: green;" class="fa fa-wrench" title="Modifier"></i>
					</a>

					<a href="imprimerHotel.php?code=<?php echo($data2['code']); ?>">
						<i class="fa fa-print" style="font-size: 25px; border: none; color: white;" title="Affichage avant impression"></i>
					</a>

					
						<a href="select_suppr_hotel.php?code=<?php echo($data2['code']); ?>">
							<i style="font-size: 25px; color: darkred;" class="fa fa-trash" id="trash" title="Affichage avant suppression"></i>
						</a>
					
				</td>
			</tr>
		<?php } ?>
			<tr>
				<td colspan="6" style="font-weight: bolder; background-color: green; color: white;">
					Saisissez une nouvelle hotel
				</td>
			</tr>
			<tr id="anim_add">
			<form action="add_hotel.php" method="POST" enctype="multipart/form-data">
				<td><input type="number" placeholder="Auto_increment" class="form-control" readonly="true"></td>
				<td><input class="form-control" type="text" name="nom" id="nom" placeholder="nouvelle nom"></td>
				<td><input class="form-control" type="text" name="cate" id="cate" placeholder="nouvelle catégorie"></td>
				<td><input class="form-control" type="file" name="image" id="image" placeholder="nouvelle image"></td>
				<td><input class="form-control" type="text" name="prix" id="prix" placeholder="nouvelle prix"></td>
				<td>
					<button type="submit" class="btn btn-danger">
					+Ajouter
					</button>
				</td>
				<tr>
					<td colspan="6">
					<button type="button" class="w3-btn w3-red w3-round w3-ripple w3-margin" onclick="effacer()">
					Effacer les cellules
				</button>
				</td>
				</tr>
			</form>
			</tr>
			
	</table>



	</center>
		
	<br>

	<center>
		
		<h3 class="w3-margin">Voici la liste des résérvations</h3>

	<table>
		<tr>
			<th>id_résérvation</th>
			<th>Nom_loc</th>
			<th>Nom_hotel</th>
			<th>Contact_loc</th>
			<th>Date_arriv</th>
			<th>Nbre_pers</th>
			<th style="color: green;">Accompte</th>
			<th>Commentaires</th>
			<th>Action</th>
		</tr>
	<?php while($data3 = mysql_fetch_assoc($resultat3)) { ?>
		<tr>
			<td><?php echo($data3['id']); ?></td>
			<td><?php echo($data3['nom']); ?></td>
			<td><?php echo($data3['nom_hotel']); ?></td>
			<td><?php echo($data3['contact']); ?></td>
			<td><?php echo($data3['datea']); ?></td>
			<td><?php echo($data3['nbre_pers']); ?></td>
			<td style="color: green; font-weight: bold;"><?php echo($data3['acc']); ?></td>
			<td><?php echo($data3['comm']); ?></td>
			<td><a href="select_modif_reserve.php?id=<?php echo($data3['id']); ?>"><i style="font-size: 25px; border: none; color: green;" class="fa fa-wrench" title="Modifier"></i></a>

				<a href="imprimerReserve.php?id=<?php echo($data3['id']); ?>">
						<i class="fa fa-print" style="font-size: 25px; border: none; color: white;" title="Affichage avant impression"></i>
					</a>

			<a href="select_suppr_reserve.php?id=<?php echo($data3['id']); ?>"><i style="font-size: 25px; border: none; color: darkred;" class="fa fa-trash" title="Affichage avant Suppression"></i></a></td>
		</tr>
	<?php } ?>
	</table>

	


	</center>

	<br>
	<br>

	<footer class="w3-center" style="background-color: #162200;">
	<div class="w3-padding">

<nav class="w3-container" id="navigation">
	<ul>
		
		<h2 id="h2_nav" class="w3-text-white">Info connexion</h2>
		<li><a href="#" onclick="document.getElementById('modal_dec').style.display = 'block'"><i class="fa fa-sign-out" style="color: purple;"></i> Se deconnecter</a></li>
		<li><a href="#"><i class="fa fa-user" style="color: orange;"></i> Se connecter en tant que ...</a></li>
		<li><a href="admin.php"><i class="fa fa-spinner fa-spin" style="color: white;"></i>Actualiser</a></li>

	</ul>
</nav>

		<div class="w3-container w3-text-white">
			Rejoignez nous sur
		</div>
		<br>
		<i style="font-size: 22px; cursor: pointer; color: blue;" class="fab fa-facebook-f"></i>
		<i style="font-size: 22px; cursor: pointer; color: cyan;" class="fab fa-twitter"></i>
		<i style="font-size: 22px; cursor: pointer; color: white;" class="fab fa-google-plus"></i>
		<i style="font-size: 22px; cursor: pointer; color: darkblue" class="fab fa-wordpress"></i>
		<i style="font-size: 22px; cursor: pointer; color: red;" class="fab fa-youtube"></i>
	
	</div>
</footer>


<!-- modal_dec -->
<!-- <div class="w3-modal w3-center" id="modal_dec">
	<div class="w3-modal-content w3-rond-xlarge" style="width: 500px; margin-top: 220px;">
		<div class="w3-container">
			<h2>Se deconnecter?</h2>
			<div class="w3-container">
				<a href="acceuil.html">
					<button type="button" class="w3-btn w3-round-large w3-red w3-margin">Se deconnecter</button>
				</a>
				<a href="admin.php">
					<button type="button" class="w3-btn w3-round-large w3-green w3-margin">Annuler</button>
				</a>
			</div>
		</div>
	</div>
</div> -->

	

</section>




		
	</div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);    
}

function effacer() {
	document.getElementById('nom').value = '';
	document.getElementById('cate').value = '';
	document.getElementById('image').value = '';
	document.getElementById('prix').value = '';
}
</script>

<!-- modal-deconnexion -->
<div class="w3-modal w3-animate-zoom w3-center" id="modal_dec">
	<div class="w3-modal-content w3-white w3-white w3-xround" style="margin-top: 270px;">
		<div class="w3-container">
			<h2>Souhaitez-vous vraiment déconnecter</h2>
			Cette action quittera la page du côté administrater et vous dirrigera vers la page d'acceuil
			<br>
			<a href="acceuil.html"><button class="w3-btn w3-round w3-red w3-margin" type="button" onclick="document.getElementById('modal_dec').style.display = 'none'">Oui</button></a><button class="w3-btn w3-round w3-green w3-margin" type="button" onclick="document.getElementById('modal_dec').style.display = 'none'">Non</button>
		</div>
	</div>
</div>
</body>
</html>
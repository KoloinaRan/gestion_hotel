<?php
session_start();

if (isset($_POST['username']) && isset ($_POST['password']))
{
	/// NOM BDD
	$db_name='hotel';
	/// UTILISATEUR BDD WAMP
	$db_username='root';
	/// MDP BDD WAMP
	$db_password='';
	/// HOST WAMP => localhost
	$db_host='localhost';
	/// mysqli_connect(host, user, password, dbname)
	$db = mysqli_connect($db_host, $db_username, $db_password, $db_name);
	//or die('could not connect to database');

	$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username']));
	$password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));


	
	if($username != "" AND $password != "")
	{
		$requete = "SELECT * FROM login where nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
		$exec_requete = mysqli_query($db, $requete);
		$count = mysqli_num_rows($exec_requete);

		if($count > 0)
		{
			$_SESSION['username'] = $username;
			header ('Location: Admin.php');
		} else {
			header('Location: Admin1.php?erreur=1');
		}
	} else {
		header('Location:Admin1.php?erreur=2');
	}
} else {
	header('Location:Admin1.php');
}
	
 mysqli_close($db);
 ?>
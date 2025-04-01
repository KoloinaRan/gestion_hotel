<!DOCTYPE html>
<html>
<head>
	<title>Login utilisateur</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<style type="text/css">
		h1{
			margin-top:5px;
            margin-bottom:10px;
		}

        button{margin-top:13px;
            margin-bottom:10px;
			margin-left:-35px;
           width:310px;
        }

		body {
            background-image: url(KOLOINA/admin.jpg);
			background-size: cover;
			background-attachment: fixed;
			color: white;
			min-width: 1000px;
			}

            input {
		border-radius: 6px;
		width: 100px;
		height: 30px;
		background-image: 
        linear-gradient(10deg,rgb(16, 43, 102),transparent,rgb(100, 137, 146));
		}
	</style>
</head>
<body>

<!-- Fin menu de navigation -->

<section>

    <center><div style="width: 40%; 
            background-image: 
            linear-gradient(10deg,rgba(190, 186, 186, 0.329),transparent,rgba(190, 186, 186, 0.329)); float:center;
            box-shadow: -2px 2px 0px 0px #808080;
			border-top-left-radius: 50px;border-top-right-radius: 50px;
			border-bottom-left-radius: 50px;border-bottom-right-radius: 50px;">
    <table border="0"> <tr> <td><img src="KOLOINA/ADMIN.png" width="70px",height="70px"></td> </tr>
    <div style="margin-top: 150px;">
		<form action="Login.php" method="POST">
            <table>
			<tr>
                <b><i><h1>Administrateur</h1></i></b>
                <table style="width: 40%;">
				<tr>
					<td><i>Administrator</i></td>
					<td><input style="min-width: 200px; background-color: transparent;color: white;" type="text" 
						 placeholder="Confirmer votre identite" name="username" required></td>
				</tr>

				<tr>
					<td><i>Password</i></td>
					<td><input style="min-width: 200px; background-color: transparent; color: white;"  type="password"
						 placeholder="Votre mot de passe"name="password" required></td>
				</tr>
			</table>
            <input style="min-width: 300px; background-color:rgb(16, 43, 102); margin-bottom: 0px;margin-top: 10px;color: white;"type="submit" value="LOGIN" >
        <?php
        if(isset($_GET['erreur'])){
            $err=$_GET['erreur'];
            if($err==1 || $err==2)
            echo"<p style='color:red'> MOT DE PASSE OU UTILISATEUR INCORRECT </p>";
        }
        ?>
		</form>
		</div>
    </div>
	</center>  
</div>

<br>
<center> <footer style="color: white; opacity: 0.8;">
	Koloina| copyright 2023&copy;.
</footer></center>

    </body>
    </html>
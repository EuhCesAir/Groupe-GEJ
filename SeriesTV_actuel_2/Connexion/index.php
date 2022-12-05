<?php
	require('config.php');
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}

	$query = "SELECT rang FROM Utilisateurs WHERE pseudo = '".$_SESSION['username']."' ";
	$result = mysqli_query($conn,$query) ;
	$row =  mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="sucess">
			<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
			<p>C'est votre tableau de bord.</p>
			<a href="logout.php">Déconnexion</a>
			</br>
			<a href="mdpvérification.php">Changer de mot de passe</a>
			</br>
			
			<?php if($row['rang'] == 'Admin'){ ?>
				<a href="admin.php">Commentaire</a> 
			</br>
				<a href="admincompte.php">Administration</a>
			<?php } ?>
		</div>
	</body>
</html>
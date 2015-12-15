<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TP</title>
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>
	<div class="profil">
		<?php
		session_start();
		var_dump($_SESSION);
		if (!isset($_SESSION['user_id'])){
			echo "Vous n'êtes pas connecté !";
		}
		else {
			$user = fetch_user($_SESSION['user_id']);
			?>
			<header>
				<div class="avatar">
					<img src="images/<?php echo $user['avatar']; ?>" />
				</div>
				<div class="welcome">
					Bienvenue <?php echo $user['login']; ?> !
				</div>
				<div class="logout">
					<a href="logout.php">Se déconnecter </a>
				</div>
				<span class="stretch"></span>
			</header>
			<div class="content">
				<p>Mon profil</p>
				<p>Prénom: </p>
				<?php
				if ($user['firstname'] == ""){
					echo "<p>Pas de prénom spécifié</p>";
				}
				else {
					echo "<p>".$user['firstname']."</p>";
				}
				?>
				<p>Nom:</p>
				<?php
				if ($user['firstname'] == ""){
					echo "<p>Pas de prénom spécifié</p>";
				}
				else {
					echo "<p>".$user['firstname']."</p>";
				}
				?>

			</div>
			<aside>
			</aside>
		</div>
		<?php
}//end else
function fetch_user($id){
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=tp-php;charset=utf8', 'root', 'root');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	$req = $bdd->prepare('SELECT * FROM user WHERE id = ?');
	$req->execute(array($id));
	return($req->fetch());
}
?>
</body>
</html>

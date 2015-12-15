<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="index.php" method="POST">
		<p class="message">
			<?php
			if (isset($_POST['submit'])){
				if ($_POST['login'] == "" || $_POST['password'] == "" ){
					echo "Les champs ne doivent pas être vides";
				}
				else {
					echo verify_login($_POST['login'], $_POST['password']);
				}
			}
			?>
		</p>
		<label for="login">Login:
			<input type="text" id="login" name="login"/>
		</label>
		<label for="password">Password:
			<input type="text" id="password" name="password"/>
		</label>
		<input type="submit" id="submit" name="submit" value="Connexion"/>
	</form>
	<?php
	function verify_login($login, $password){
		return "message renvoyé par verify_login($login, $password)";
	}
	?>
</body>
</html>
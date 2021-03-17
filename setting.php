<!DOCTYPE html>
<html>
<head>
	<title>Paramètres</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/setting.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>

	<?php include("header.php")?>

	<section class="setting_user">
		<div class="header_card_setting">Paramètres du compte</div>
		<div class="champs_setting_user">
			<form method="POST" action="" enctype="multipart/form-data">
				<div class="setting_pseudo">
					<label for="pseudo">Nom d'utilisateur : </label>
					<input type="text" id="pseudo" name="new_username" placeholder="Pseudo"> 
				</div>
				<div class="setting_mdp1">
					<label for="psw1">Nouveau mot de passe : </label>
					<input type="password" id="psw1" name="password" placeholder="Mot de passe">
				</div>
				<div class="setting_mdp2">
					<label for="psw2">Confirmation du mot de passe : </label>
					<input type="password" id="psw2" name="passeword2" placeholder="Confirmation du mot de passe">
				</div>
				<input class="button_actualiser" type="submit" value="Mettre à jour mon profil">
			</form>
		</div>
	</section>

	<?php include("footer.php")?>

</body>
</html>
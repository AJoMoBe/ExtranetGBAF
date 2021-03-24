<?php

require "database.php";

// on test $_POST pour savoir s'il y a des données de formulaires
if(!empty($_POST)){
	//on sécurise les données fournis par l'utilisateur avec htmlspecialchars()
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$username = htmlspecialchars($_POST['username']);
	$qs = htmlspecialchars($_POST['qs']);
	$repqs = htmlspecialchars($_POST['repqs']);
	$mdp = htmlspecialchars($_POST['mdp']);
	$mdp2 = htmlspecialchars($_POST['mdp2']);

	if (!empty($nom)
		AND !empty($prenom)
		AND !empty($username)
		AND !empty($mdp)
		AND !empty($mdp2)
		AND !empty($qs)
		AND !empty($repqs)
	) {
		if (strlen($nom) <= 255) {
			if (strlen($prenom) <= 255) {
				if (strlen($username) <= 255 ) {
					if ($mdp == $mdp2) {
						$mdp = password_hash($mdp, PASSWORD_DEFAULT);
						$requser = $bdd->prepare("SELECT * FROM membres WHERE username = ?");
						$requser->execute(array($username));
						$userinfo = $requser->fetch();
						if ($userinfo == false) {
							$insertmbr = $bdd->prepare("INSERT INTO membres(nom, prenom, username, motdepasse, qs, repqs) VALUES(?, ?, ?, ?, ?, ?)");
						$insertmbr->execute(array($nom, $prenom, $username, $mdp, $qs, $repqs));
						header("Location: index.php");
						exit();
						} else {
							$erreur = "Identifiant déjà utilisé !";
						}
						
					} else {
						$erreur = "Vos mots de passes ne correspondent pas !";
					}
				}
			}
		}
	} else {
		$erreur = "Tous les champs doivent être remplis ! ";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>S'inscrire</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/inscription.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>

	<?php include("header.php")?>

	<main>
		<form action="signup.php" method="POST" class="register-card">
			<div class="header-card"> S'inscrire</div>

			<div class="nom">
				<label for="nom">Votre nom : </label>
				<input type="text" name="nom" id="nom">
			</div>

			<div class="prenom">
				<label for="prenom">Votre prénom : </label>
				<input type="text" name="prenom" id="prenom">
			</div>

			<div class="username">
				<label for="username">Votre nom d'utilisateur : </label>
				<input type="text" name="username" id="username">
			</div>

			<div class="motdepasse">
				<label for="mdp">Votre mot de passe : </label>
				<input type="password" name="mdp" id="mdp">
			</div>

			<div class="motdepasse2">
				<label for="mdp2">Confirmation du mot de passe : </label>
				<input type="password" name="mdp2" id="mdp2">
			</div>

			<div class="questionsecrete">
				<label for="qs">Question secrète : </label>
				<select name="qs" id="qs">
					<option value="" selected="">Choisissez une question secrète</option>
					<option value="animal">Quel est le nom de votre premier animal de compagnie ?</option>
					<option value="mere">Quel est le nom de jeune fille de votre mère ?</option>
					<option value="voiture">Quelle est la première voiture que vous avez acheté ?</option>
					<option value="ville">Quelle est la ville ou vous avez eu votre premier logement ?</option>
				</select>
			</div>

			<div class="reponse">
				<label for="repqs">Réponse : </label>
				<input type="text" name="repqs" id="repqs">
			</div>

			<input class="button" type="submit" name="button" value="S'inscrire">
		</form>
	</main>

	<?php 
	if (isset($erreur)) {
		echo '<font color="red">'.$erreur."</font>";
	}
	?>

	<?php include("footer.php")?>

</body>
</html>
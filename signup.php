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
		<form method="POST" class="register-card">
			<div class="header-card"> S'inscrire</div>

			<div class="nom">
				<label for="nom">Votre nom : </label>
				<input type="text" name="nom">
			</div>

			<div class="prenom">
				<label for="prenom">Votre prénom : </label>
				<input type="text" name="prenom">
			</div>

			<div class="pseudo">
				<label for="pseudo">Votre nom d'utilisateur : </label>
				<input type="text" name="pseudo">
			</div>

			<div class="motdepasse">
				<label for="mdp">Votre mot de passe : </label>
				<input type="password" name="mdp">
			</div>

			<div class="motdepasse2">
				<label for="mdp2">Confirmation du mot de passe : </label>
				<input type="password" name="mdp2">
			</div>

			<div class="questionsecrete">
				<label for="questionsecrete">Question secrète : </label>
				<select name="questionsecrete">
					<option value="" selected="">Choisissez une question secrète</option>
					<option value="animal">Quel est le nom de votre premier animal de compagnie ?</option>
					<option value="mère">Quel est le nom de jeune fille de votre mère ?</option>
					<option value="voiture">Quelle est la première voiture que vous avez acheté ?</option>
					<option value="ville">Quelle est la ville ou vous avez eu votre premier logement ?</option>
				</select>
			</div>

			<div class="reponse">
				<label for="reponse">Réponse : </label>
				<input type="text" name="reponse">
			</div>

			<input class="button" type="submit" name="button" value="S'inscrire">
		</form>
	</main>

	<?php include("footer.php")?>

</body>
</html>
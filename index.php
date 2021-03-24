<?php

session_start();

require "database.php";

if (!empty($_POST)) {
    $username = htmlspecialchars($_POST['username']);
    $mdp = htmlspecialchars($_POST['mdp']);
    if (!empty($username) && !empty($mdp)) {
        $requser = $bdd->prepare("SELECT * FROM membres WHERE username = ?");
        $requser->execute(array($username));
        $userinfo = $requser->fetch();
        if ($userinfo != false) {
            if (password_verify($mdp, $userinfo['motdepasse'])) {
                $_SESSION['id'] = $userinfo['id'];
                $_SESSION['username'] = $userinfo['username'];
                header("Location: accueil.php");
            } else {
                $erreur = "Mauvais mot de passe !";
            }
        } else {
            $erreur = "Mauvais pseudo !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Se connecter</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/connexion.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
    <?php include("header.php")?>

    <main>
        <form method="POST" action="index.php">
            <div class="header-card">S'identifier</div>
            <div class="pseudo">
                <label for="username"> Nom d'utilisateur : </label>
                <input type="text" name="username">
            </div>

            <div class="mdp">
                <label for="mdp"> Mot de passe : </label>
                <input type="password" name="mdp">
            </div>

            <input type="submit" name="button" class="button">
            <a href="signup.php">Pas encore inscrit ?</a>
            <a href="#">Mot de passe oublié ?</a>
        </form>
    </main>

    <?php
    if(isset($erreur)){
        echo '<font color="red">'.$erreur."</font>";
    }
    ?>

    <?php include("footer.php")?>

</body>
</html>
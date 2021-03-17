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
        <form>
            <div class="header-card">S'identifier</div>
            <div class="pseudo">
                <label for="pseudo"> Nom d'utilisateur : </label>
                <input type="text" name="pseudo">
            </div>

            <div class="mdp">
                <label for="mdp"> Mot de passe : </label>
                <input type="text" name="mdp">
            </div>

            <input type="submit" name="button" class="button">
            <a href="signup.php">Pas encore inscrit ?</a>
            <a href="#">Mot de passe oublié ?</a>
        </form>
    </main>

    <?php include("footer.php")?>

</body>
</html>
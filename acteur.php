<?php

session_start();
require 'auth.php';
require 'database.php';
user_connect();

$acteurinfo="";
if(isset($_GET['id'])) {
  $reqacteur = $bdd->prepare("SELECT * FROM acteurs where id = ?");
  $reqacteur->execute(array($_GET['id']));
  $acteurinfo = $reqacteur->fetch();
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Acteurs & Partenaires</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/acteur.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
  <?php include("header.php")?>

  <section class="zone_acteur">
    <img src="<?php echo $acteurinfo['logo']?>" class="logo-acteur">
    <h2><?php echo $acteurinfo['nom']?></h2>
    <p><?php echo nl2br($acteurinfo['description']) ?>
    </p>
  </section>

  <section class="zone-coms">
    <div class="header-coms">
      <h3>Commentaires</h3>
      <button class="newcoms">Nouveau commentaire</button>
      <div class="vote_btns">
        <div class="vote_btns_like">145 <a href="#">&#128077;</a></div>
        <div class="vote_btns_dislike">10 <a href="#">&#128078;</a></div>
      </div>
    </div>

    <div class="affichage-commentaire">
      <ul class="id_comment">
        <li>Nom Prénom</li>
        <li>Date</li>
      </ul>
      <p class="texte_comment">Texte</p>
    </div>
  </section>

  <?php include("footer.php")?>

</body>
</html>
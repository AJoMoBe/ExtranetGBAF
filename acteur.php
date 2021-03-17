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
    <img src="img/CDE.png" class="logo-acteur">
    <h2>La Chambre Des Entrepreneurs</h2>
    <p>La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation. Son président est élu pour 3 ans par ses pairs, chefs d’entreprises et présidents des CDE.
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
        <li>Nom</li>
        <li>Prénom</li>
      </ul>
      <p class="texte_comment">Texte</p>
    </div>
  </section>

  <?php include("footer.php")?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>Accueil</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/accueil.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>

  <?php include("header.php")?>

  <section class="presentation">
    <h1> Qu'est ce que GBAF ?</h1>
    <p>Le Groupement Banque Assurance Français (GBAF) est une fédération représentant les 6 grands groupes français :
      <ul>
        <li>BNP Paribas</li>
        <li>BPCE</li>
        <li>Crédit Agricole</li>
        <li>Crédit Mutuel-CIC</li>
        <li>Société Générale</li>
        <li>La Banque Postale</li>
      </ul>
      Même s’il existe une forte concurrence entre ces entités, elles vont toutes travaillerde la même façon pour gérer près de 80 millions de comptes sur le territoire national. Le GBAF est le représentant de la profession bancaire et des assureurs sur tous les axes de la réglementation financière française. Sa mission est de promouvoir l'activité bancaire à l’échelle nationale. C’est aussi un interlocuteur privilégié des pouvoirs publics.
    </p>
    <img src="img/illustration.png" class="img-presentation">
  </section>

  <section class="act-part">
    <h2>Texte acteurs et partenaires</h2>
    <article>
      <img src="img/formation_co.png" class="logo">
      <div>
        <h3>Formation&Co</h3>
        <p>Formation&co est une association française présente sur tout le territoire...</p>
      </div>
      <button onclick="window.location.href ='#'" class="button-suite1">Suite</button>
    </article>

    <article>
      <img src="img/protectpeople.png" class="logo">
      <div>
        <h3>ProtectPeople</h3>
        <p>Protectpeople finance la solidarité nationale...
</p>
      </div>
      <button onclick="window.location.href = '#';" class="button-suite2">Suite</button>
    </article>

    <article>
      <img src="img/DSA_france.png" class="logo">
      <div>
        <h3>DSA France</h3>
        <p>Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales...</p>
      </div>
      <button onclick="window.location.href = '#'" class="button-suite3">Suite</button>
    </article>

    <article>
      <img src="img/CDE.png" class="logo">
      <div>
        <h3>CDE</h3>
        <p>Nous sommes la Chambre Des Entrepreneurs..</p>
      </div>
      <button onclick="window.location.href ='#'" class="button-suite4">Suite</button>
    </article>

  </section>

  <?php include("footer.php")?>

</body>
</html>
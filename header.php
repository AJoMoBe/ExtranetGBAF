<?php
require 'database.php';

?>

<header class="header">
	<img src="img/Logo_GBAF.PNG" class="logo_gbaf_header">
	<div id="conteneur_menu_header">
		<?php
		if(isset($_SESSION['username'])){
			$requser = $bdd->prepare("SELECT * FROM membres WHERE username = ?");
        $requser->execute(array($_SESSION['username']));
        $userinfo = $requser->fetch();

			?>


			<div id="menu">
				<dl>
					<dt><?php echo $userinfo['nom'] ." ". $userinfo['prenom']?></dt>
					<dd>
						<ul>
							<li><a href="accueil.php">Accueil</a></li>
							<li><a href="setting.php">Paramètres</a></li>
							<li><a href="logout.php">Déconnexion</a></li>
						</ul>
					</dd>
				</dl>
			</div>

			<?php
		}
		?>
	</div>
</header>

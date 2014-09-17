<!DOCTYPE html>
<html lang="fr">
<?php include('php/head.php'); ?>
	<body >
		<div id="conteneur">
			<?php include('php/header.php'); ?>
			<?php include('php/menu.php'); ?>
			<div class="container">
							<p>Veuillez choisir à quelle niveau vous voulez obtenir de l'information!</p>
			<div class="section">
				<a href="news.php" accesskey="0" title="news">International</a>	
				<img width=400 height=200 src="./img/carte_monde.jpg"	alt="Carte du monde" />
			</div>
			<div class="section">	
				<a href="news.php" accesskey="0" title="news">National</a>	
				<img width=400 height=200 src="./img/carte_france.png"	alt="Carte du monde" />
			</div>	
			<div class="section">
				<a href="news.php" accesskey="0" title="news">Régional</a>	
				<img width=400 height=200 src="./img/carte_france_region.gif"	alt="Carte du monde" />
			</div>	
			<div class="section">
				<a href="news.php" accesskey="0" title="news">Départemental</a>	
				<img width=400 height=200 src="./img/carte_france_departements.png"	alt="Carte du monde" />
			</div>	
			<div class="section">
				<a href="news.php" accesskey="0" title="news">Communal</a>	
				<img width=400 height=200 src="./img/carte_france_communes.png"	alt="Carte du monde" />
			</div>
			</div>
			<?php include('php/footer.php');?>
		</div>
	</body>
</html>
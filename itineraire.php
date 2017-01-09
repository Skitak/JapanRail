<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="style/fonts.css" />
			<link rel="stylesheet" href="style/style.css" />
			<link rel="stylesheet" href="style/header.css"/>
			<!--
			<link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
			-->
			<title>Template site</title>
		</head>
		
		<body>
		
		<section id="page">


<?php include('include/header.html') ?>



				<section class="basic">
					<figure>
						<img src="./assets/trains/FujiBulletTrain.jpg">
						<figcaption>Le Shinkansen devant le mont Fuji</figcaption>
					</figure>
					<p>Itinéraire 1 : Pacific Side</br>
Aéroport -> Tokyo via Keikyu</br>
Tokyo -> Fujiyama via Odakyu</br>
Fujiyama-> Nagoya via JR Shinkansen</br>
Nagoya-> Kyoto via Meitetsu</br>
Kyoto-> Osaka via Keihan</p>
				</section>
				<section class="basic">
					<figure>
						<img src="./assets/trains/meitestu_senkei.jpeg">
					</figure>
					<p>Itinéraire 2 : Inner Japan</br>
Kansai International Airport -> Osaka via Kintetsu</br>
Osaka -> Kobe -> Kintetsu Nara via Hanshin</br>
Kintetsu Nara -> Kintetsu Nagoya via Kintetsu</br>
Nagoya -> Inuyama via Meitetsu</br>
Inuyama -> Nagoya -> Airport via Meitetsu</p>
				</section>

			<footer>
			<?php require('include/footer.html') ?>
			</footer>
			
		</section>
	</body>

</html>
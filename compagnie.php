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
			
			<header>
			<?php require('include/header.html') ?>
			</header>
			
			<h1 id="titre">Les compagnies ferroviaires Japonaises</h1>
			<p>日本は電車の国です</p>
			<p>Le Japon, c'est le pays des train</p>
			<p>Entre les centaines de compagnies, c'est dur de s'y retrouver. En voici quelques compagnies essentielles pour faire un bon "電車で旅行をします"( bon voyage en train )</p>
			
			<h1>Japan Railway</h1>
			<section class="basic">
				<p>Anciennement la JNR, compagnie ferroviaire nationale privatisé en 1987, le groupe des compagnies Japan Railway ( JREast, JRWest, JRHokkaido, JRKyushu, JRCentral, JRShikoku ) est la grande incontournable compagnie nippone.</p>
			</section>
			
			<section class="basic">
				<figure>
					<img src="./assets/trains/keikyu2100.jpg">
					<figcaption>Une 京急2100. Source : allaboutjapantrain.com</figcaption>
				</figure>
				<p>Keikyu ( 京急 ) est une compagnie connectant les villes de Kanagawa et de Tokyo. Fondé en 1895, cette compagnie est en service aux alentours du nord de Tokyo, et vous permettra notamment de rejoindre les aéroports de la capitale japonaise</p>
			</section>
			
			<section class="basic">
				<figure>
					<img src="./assets/trains/urban_liner.jpeg">
					<figcaption>近鉄2100R　アーバンライナー, l'Urban Liner 21000R</figcaption>
				</figure>
				<p>Kintetsu, alias Kinki Nippon Tetsudo ( 鉄道, le chemin de fer, en japonais ), est une des plus grandes compagnies ferroviaire japonaise, reliant les grandes villes du japon ( Osaka, Kyoto, Nagoya, Nara, plus la Kansai Intl Airport et la Chubu Int Airport ), opérant au sud de Kinki.</p>
			</section>
			
			<section class="basic">
				<figure>
					<img src="./assets/trains/Meitetsu_2000_series_015.jpeg">
					<figcaption>Une Meitetsu 2000 Series, liant l'aeroport</figcaption>
				</figure>
				<p>Parlant de Chubu, Meitetsu (　名鉄 = Meitetsu, 名古屋 = Nagoya, donc littéralement chemin de fer de nagoya ), est une compagnie ferroviaire reliant notamment, en plus de l’aéroport, est de pouvoir accéder à Inuyama, peu loin de Nagoya.</p>
			</section>
			
			<section class="basic">
				<figure>
					<img src="./assets/trains/k8000.jpg">
					<figcaption>京阪8000 sur la Keihan 本線 ( honsen, Ligne principale )</figcaption>
				</figure>
				<p>Keihan Railway fait, sur ses 90 km de voies, fait un parcours un entre Osaka & Kyoto. La compagnie propose des prix réduits entre 5 et 10€ pour un “sightseeing pass”, afin de parcourir la ligne avec un bon angle de vue sur le paysage</p>
			</section>
			
			<section class="basic">
				<figure>
					<img src="./assets/trains/h6000.jpg">
					<figcaption>Une Hankyu 6000 attendant a la gare. Source : wikipedia</figcaption>
				</figure>
				<p>De Kobe a Kyoto, via Osaka et Takarazuka, la Hankyu Railway vous aidera à accomplir votre tour du japon avec son “Hankyu Tourist Center”, vous aidant en plusieurs langues afin de vous diriger a travers le Kansai.</p>
			</section>
			
			<section class="basic">
				<figure>
					<img src="./assets/trains/romancecar.jpg">
					<figcaption>La RomanceCar de Odakyu</figcaption>
				</figure>
				<p>Odakyu railway, ou, pour les touristes, comment rejoindre Hakone, le pied de la montagne Fuji, depuis Shinjuku ( gare la plus fréquenté du monde ), le tout assis confortablement dans une belle LSE 7000 Romance Car.</p>
			</section>
		
			<footer>
			<?php require('include/footer.html') ?>
			</footer>
			
		</section>
	</body>

</html>
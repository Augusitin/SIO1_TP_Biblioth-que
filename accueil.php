<!DOCTYPE html>
<html lang="fr">

<head>
    <title>SIO1 - TP Bibliothèque</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
    <link href="bibliotheque.css" rel="stylesheet">
</head>

<body>
	<header>
		<h1>Ma bibliothèque</h1>
		
		<?php include 'menu.php'; ?>
	</header>
	
	
	<main>

		<h2> Tous les livres </h2>
		
		<div id="collection">
		
			<div class="livre">
				<img src="img/9782070755899.jpg">
				<h6> Le petit Prince </h6>
			</div>
			
			<div class="livre">
				<img src="img/9782070253173.jpg">
				<h6> Zazie dans le metro </h6>
			</div>

			<div class="livre">
				<img src="img/9791020318220.jpg">
				<h6> Transformer son esprit pour changer sa vie </h6>
			</div>

			<div class="livre">
				<img src="img/9791020318176.jpg">
				<h6> Intelligence énergétique - Le secret du bien-être </h6>
			</div>
			
			<div class="livre">
				<img src="img/9782081487000.jpg">
				<h6> Robinson Crusoé </h6>
			</div>
			
			<div class="livre">
				<img src="img/9782081487024.jpg">
				<h6> L'île au trésor </h6>
			</div>
		
		</div>
		
	
	</main>
	
	<footer>
		Exercice PHP du BTS SIO1 <br>
		Ecole IPSSI (Montévrain) <br>
		Par Augustin LOR <br>
	</footer>
	
</body>

<?php session_start(); ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Header</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>

<header>
	<?php echo $titre; ?><h1>Votre salle de sport, </h1><?php if(isset($_SESSION['prenom'])): ?>
<?php endif; ?>
	<nav>
		<ul>
			<li <?php if ($page == "index") echo 'class="active"'; ?>><a href="index.php">accueil |</a></li>

			<li <?php if ($page == "presenstation") echo 'class="active"'; ?>><a href="presenstation.php">présentation |</a></li>

			<li <?php if ($page == "inscription") echo 'class="active"'; ?>><a href="inscription.php">inscription |</a></li>

			<li <?php if ($page == "contact") echo 'class="active"'; ?>><a href="contact.php">contact  </a></li>

			<li>
				<form class="droite" action="connexion.php" method="post">
					<label for="connexion" id="connexion"><?php if (isset($_SESSION['prenom'])) echo 'Déconnexion'; else echo 'Connexion'; ?> 
						<pre><?php
						$connecteur = new PDO('mysql:host=localhost;dbname=salle de sport', 'salledesport', 'hopeforce3');
						$adherent = $connecteur->query('SELECT * FROM adherent;')->fetchAll(PDO::FETCH_ASSOC);
						
						?></pre>
					</label>
					<input type="password" name="connexion">
				</form>
			</li>

		</ul>
	</nav>
	<?php echo $trait; ?><hr>
</header>

<main>




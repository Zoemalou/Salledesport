<?php session_start(); ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Header</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>

<header>
	<img class="logo" src="img/Mylogo.png">
	<h1>Votre salle de sport, </h1><?php if(isset($_SESSION['prenom'])): ?>
<?php endif; ?>
	<nav>
		<ul>
			<li <?php if ($page == "index") echo 'class="active"'; ?>><a href="index.php">accueil |</a></li>

			<li <?php if ($page == "presenstation") echo 'class="active"'; ?>><a href="presenstation.php">présentation |</a></li>

			<li <?php if ($page == "inscription") echo 'class="active"'; ?>><a href="inscription.php">inscription |</a></li>

			<li <?php if ($page == "contact") echo 'class="active"'; ?>><a href="contact.php">contact  </a></li>

			<li>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#connexion"><a href="connexion.php">Connexion</a></button>
			</li>

		</ul>
	</nav>
<hr>
</header>

<main>




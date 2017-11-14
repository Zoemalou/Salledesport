<?php
try {
	$connecteur = new PDO('mysql:host=localhost;dbname=salledesport', 'salledesport','hopeforce3');
	}
catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
	}
?>

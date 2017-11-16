<?php 

    $nom=$_POST['nom']; $prenom=$_POST['prenom']; $email=$_POST['email']; $pass=$_POST['pass'];
    $connecteur = new PDO('mysql:host=localhost;dbname=salle_de_sport','salledesport','hopeforce3');
$requete = "INSERT INTO adherent (nom,prenom,email,mdp) VALUES ('".$nom.",".$prenom.",".$email.",".$pass."'");
$georges = $connecteur->exec($requete)->fetchAll(PDO::FETCH_ASSOC);

endif;?>
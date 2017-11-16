<?php 

if (isset($_POST['selection']));  





  require_once('connexionbdd.php');
  $nom = $_POST['Email'];
  
  if ($_POST['selection'] == 'coach') {
    $requete = "SELECT mdp FROM coach WHERE email = '" .$nom. "'";
  } else {
    $requete = "SELECT mdp FROM adherent WHERE email = '" .$nom. "'";    
  }
  var_dump($requete);
  $sql = $connecteur->query($requete)->fetchAll(PDO::FETCH_ASSOC);
  

  if ($sql['mdp'] == $_POST['mdp']) {
    header('Location: membre.php');
    exit(); 
  } else {
    header('Location: connexion.php');
  }


?>
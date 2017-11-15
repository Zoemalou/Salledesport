<?php
if (!isset($_POST['nom'])):?>




<!DOCTYPE html>
<html>
<head>
  <title>Pages d'insciprion</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body>
  <header>
    <img class="tigre" src="img/tigrelogo.jpg">
    <h1>Salut à toi, tu veux rejoindre la team? Inscris toi vite!</h1>

    <h2>Nos salles sont ouvertes de 6h30h à 23h le soir. Des coachs sont disponibles toute la journée non-stop.</h2>
  </header>

<form method="post" action="">
 
   <fieldset>
       <legend>Vos coordonnées</legend> <!-- Titre du fieldset --> 

       <label for="nom">NOM ?</label>
       <input type="text" name="nom" id="nom" />

       <label for="prenom">PRENOM ?</label>
       <input type="text" name="prenom" id="prenom" />
 
       <label for="email">EMAIL ?</label>
       <input type="email" name="email" id="email" />
       
       <label for="pass"> MOT DE PASSE :</label>
       <input type="password" name="pass" id="pass" />
       
   </p>
  
       <legend>Choix du coach (obligatoire pour la première séance)</legend> <!-- Titre du fieldset -->

  <div class="row">
      <p> Sélectionnez le coach que vous souhaitez avoir (peut changer au cours de entrainement et suivant le niveau) :

        <div class="col s3">
          <img class="coach" src="img/harold.jpg" alt="harold">
          <input type="radio" name="coach" value="harold" id="harold" /> <label for="harold">Harol</label>
        </div>
         
        <div class="col s3">   
          <img class="coach" src="img/tina.jpg" alt="tina">
          <input type="radio" name="coach" value="tina" id="tina" /> <label for="tina">Tina</label>
        </div>
           
        <div class="col s3">    
           <img class="coach" src="img/leo.jpg" alt="leo">
           <input type="radio" name="coach" value="leo" id="leo" /> <label for="leo">Léo</label>
        </div>

        <div class="col s3">   
           <img class="coach" src="img/louna.jpg" alt="louna">
           <input type="radio" name="coach" value="louna" id="louna" /> <label for="louna">Louna</label>
        </div>

       </p>
 </div>
        <p><input type="submit" value="M'inscrire" /></p>

   </fieldset>
</form>


          
</body>
</html>

<?php 
  else:
    $nom=$_POST['nom'];$prenom=$_POST['prenom'];$email=$_POST['email'];$pass=$_POST['pass'];
    $connecteur = new PDO('mysql:host=localhost;dbname=salle_de_sport','salledesport','hopeforce3');
$requete = "INSERT INTO adherent (nom,prenom,email,mdp) VALUES ('".$nom.",".$prenom.",".$email.",".$pass."'";
$georges = $connecteur->exec($requete)->fetchAll(PDO::FETCH_ASSOC);
var_dump($adherents);
endif;?>

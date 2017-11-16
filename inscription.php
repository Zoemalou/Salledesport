<?php
$page = 'inscription';
require_once('parts/header.php');
?>



<form method="post" action="">
      <p>
   
   <fieldset class="col-xs-2">
       <legend>Vos coordonnées</legend> <!-- Titre du fieldset --> 
      <hr class="trait">
       <label for="nom">Nom :</label>
       <input type="text" placeholder="Martin" name="nom" id="nom" autofocus />
       <hr class="trait">

       <label for="prenom">Prénom :</label>
       <input type="text" placeholder="Marie" name="prenom" id="prenom" autofocus />
       <hr class="trait">
 
       <label for="email">EmailL :</label>
       <input type="email" autocomplete="off" placeholder="marie@orange.com" name="email" id="email" autofocus />
       <hr class="trait">
       
       <label for="pass">Mot de passe :</label>
       <input type="password" autocomplete="off" placeholder="à retenir" name="pass" id="pass" autofocus />
  </fieldset>
       
  
  <fieldset class="deux">
       <h2>Choix du coach (obligatoire pour la première séance)</h2> 

  <div class="row">
     
      <h4>Sélectionnez le coach que vous souhaitez avoir (peut changer au cours de entrainement et suivant le niveau) :</h4>
  

  <container class="phototexte">
        <div class="col-xs-2">
          <img class="coach" src="img/harold.jpg" alt="harold">
          <input type="radio" name="coach" value="harold" id="harold" /> <label for="harold">Harol</label>
        </div>
         
        <div class="col-xs-2">   
          <img class="coach" src="img/tina.jpg" alt="tina">
          <input type="radio" name="coach" value="tina" id="tina" /> <label for="tina">Tina</label>
        </div>
           
        <div class="col-xs-2">    
           <img class="coach" src="img/leo.jpg" alt="leo">
           <input type="radio" name="coach" value="leo" id="leo" /> <label for="leo">Léo</label>
        </div>

        <div class="col-xs-2">   
           <img class="coach" src="img/louna.jpg" alt="louna">
           <input type="radio" name="coach" value="louna" id="louna" /> <label for="louna">Louna</label>
        </div>
  </container>

  </div>
  </fieldset>

        <p><input type="submit" value="M'inscrire" /></p>

  
</form>

<?php require_once('parts/footer.php'); ?>



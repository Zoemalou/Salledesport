<?php session_start();

if (!isset($_POST['selection'])): ?> 

<div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="connexion">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Connexion</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="form-group">
            <label for="Email" class="control-label">Email : </label>
            <input type="email" name="Email" class="form-control" id="Email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="mdp" class="control-label">Mot de Passe :</label>
            <input type="password" name="mdp" class="form-control" id="Email" placeholder="Mot de passe" required>
          </div>
          <div class="form-group">
            <label for="selection" class="control-label">Catégorie :</label>
            <select class="form-control" name="selection" id="selection" required>
              <option disabled selected>-- Sélectionner --</option>
              <option value="adherent">Adhérent</option>
              <option value="coach">Coach</option>
            </select>
          </div>          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            <input type="submit" name="submit" value="Envoyer" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div> 

<?php else :

  include('connexionbdd.php');
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
endif;
?>
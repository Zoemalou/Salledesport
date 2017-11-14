<?php session_start();

if (!isset($_POST['selection'])) {
echo '
<div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="connexion">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Connexion</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="">
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
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> '; } else {




  include('connexionbdd.php');
  $table = $_POST['selection'];
  $nom = $_POST['Email'];
  $sql = $connecteur->query('SELECT mdp FROM $table WHERE \'email\' = $nom ;');

  if ($sql == $_POST['mdp']) {
    header('Location: membre.php?email=$_POST[\'email\']');
  } else {
    header('Location: connexion.php'); 
  }
}
?>

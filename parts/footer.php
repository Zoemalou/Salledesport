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
</main>

<footer>

<div>
	<i class="fa fa-facebook-official" aria-hidden="true"></i>
	<i class="fa fa-pinterest-square" aria-hidden="true"></i>
	<i class="fa fa-twitter-square" aria-hidden="true"></i>
	<h5> </h5>
</div>
	<hr class="bas">

	<p>Site fait par Eva, Clément, Joël et Emma</p>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>

<?php



?>

  <div class="modal" id="connexion" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="gridSystemModalLabel">Connexion</h4>
          </div>
        <div class="modal-body">
          <form method="post" action="function_connexion.php" enctype="multipart/form-data">
      			
      			<label for="pseudo">Pseudo</label>
      			<input type="text" name="pseudo" id="pseudo" /><br><br>
      			
      			<label for="mot_de_passe">mot de passe</label>
      			<input type="password" name="mot_de_passe" id="mot_de_passe" /><br><br>
      			
      			<input type="submit" class="validation" name="valider" id="valider" value="Valider" />
      		</form>

        <div>
          <a class="text-muted" href="inscription.php">Vous n'avez pas de compte inscrivez-vous</a>
        </div>
        </div>
      </div>
    </div>
</div>
    
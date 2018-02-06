<?php

// connection à la base de donnée
include('inc/header.inc.php');
include('inc/nav.inc.php');
require_once ('connect.php');


?>

<div class="container">

        <div class="col-md-8 col-lg-10>

            <form   method="post" action="addUser.php" >

                <div class="form-group">
                    <fieldset>
                        <legend>Inscription</legend>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="genre">Civilité</label>
                            <div class="col-md-8">
                                <select id="genre" name="genre" class="form-control input-md" required>
                                    <option value="mlle">Mademoiselle</option>
                                    <option value="mme">Madame</option><option value="m">Monsieur</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="pseudo">Pseudo</label>
                            <div class="col-md-8">
                                <input id="pseudo" name="pseudo" type="text" class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="prenom">Prénom</label>
                            <div class="col-md-8">
                                <input id="prenom" name="prenom" type="text" class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nom">Nom</label>
                            <div class="col-md-8">
                                <input id="nom" name="nom" type="text" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">Email</label>
                            <div class="col-md-8">
                                <input id="email" name="email" type="email" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="telephone">Téléphone</label>
                            <div class="col-md-8">
                                <input id="telephone" name="telephone" type="text" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="mot_de_passe">Mot de passe</label>
                            <div class="col-md-8">
                                <input id="mot_de_passe" name="mot_de_passe" type="password" class="form-control input-md" required>
                            </div>
                        </div>

                   
                </div>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4">

                            <input type="submit" class="btn btn-default">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

<?php
include('inc/footer.inc.php');

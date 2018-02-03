<?php

// connection à la base de donnée
include('inc/header.inc.php');
include('inc/nav.inc.php');
require_once ('connect.php');



$errors = [];

// si post n'est pas vide
if(!empty($_POST)) {

    // on fait une boucle sur POST, pour sécuriser les données et enlever les espaces au début et fin de la valeur
    foreach ($_POST as $key => $value) {
        $_POST[$key] = strip_tags(trim($value));
    }

    // si firstname fait moins de 3 caractères
    if (strlen($_POST['nom']) < 3) {
        $errors[] = 'Le nom doit comporter au moins 3 caractères';
    }
    // si lastname fait moins de 3 caractères
    if (strlen($_POST['prenom']) < 3) {
        $errors[] = 'Le prénom doit comporter au moins 3 caractères';
    }
    // si le mail n'est pas valide
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'L\'adresse email est invalide';
    }
    // si la date de naissance est vide
    if (empty($_POST['date_de_naissance'])) {
        $errors[] = 'La date de naissance doit être complétée';
    }
    //si le telephone est vide
    if (empty($_POST['telephone'])) {
        $errors[] = 'Le téléphone ne peut être vide';
    } 
    if (empty($_POST['mot_de_passe'])) {
        $errors[] = 'Le mot de passe ne peut être vide';
    }

    // S'il n'y a pas d'erreur, on insert l'utilisateur en bdd
    if (count($errors) == 0) {

        // error = 0 = insertion user
        $insertUser = $db->prepare('INSERT INTO utilisateur (nom, prenom, email, date_de_naissance, telephone, mot_de_passe) VALUES(:nom, :prenom, :email, :date_de_naissance, :telephone, mot_de_passe)');
       
        $insertUser->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
        $insertUser->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
        $insertUser->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $insertUser->bindValue(':date_de_naissance', date('Y-m-d', strtotime($_POST['date_de_naissance'])), PDO::PARAM_STR);
        $insertUser->bindValue(':telephone', $_POST['telephone'], PDO::PARAM_STR);
        $insertUser->bindValue(':mot_de_passe', $_POST['mot_de_passe'], PDO::PARAM_STR);

        if ($insertUser->execute()) {
            $createUser = true;
        } else {
            $errors[] = 'Une erreur est survenu';
        }
    }
}

$queryUsers = $db->prepare('SELECT * FROM utilisateur' . $order);
if ($queryUsers->execute()) {
    $users = $queryUsers->fetchAll();
}

?>


<div class="container">

	<div class="row">
<?php
// si l'insertion à réussit, on affiche un message de réussite
if(isset($createUser) && $createUser == true){
echo '<div class="col-md-6 col-md-offset-3">';
echo '<div class="alert alert-success">Votre inscription est validée.</div>';
echo '</div><br>';
}
// s'il y a des erreurs, on les affiche
if(!empty($errors)){
echo '<div class="col-md-6 col-md-offset-3">';
echo '<div class="alert alert-danger">'.implode('<br>', $errors).'</div>';
echo '</div><br>';
}
?>

        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th>Civilité</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user):?>
                    <tr>
                        <td><?php echo $user['gender'];?></td>
                        <td><?php echo $user['firstname'];?></td>
                        <td><?php echo $user['lastname'];?></td>
                        <td><?php echo $user['email'];?></td>
                        <td><?php echo DateTime::createFromFormat('Y-m-d', $user['birthdate'])->diff(new DateTime('now'))->y;?> ans</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="col-md-5">

            <form action="index.php" method="post" class="form-horizontal well well-sm">
                <fieldset>
                    <legend>Ajouter un utilisateur</legend>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="gender">Civilité</label>
                        <div class="col-md-8">
                            <select id="gender" name="gender" class="form-control input-md" required>
                                <option value="Mlle">Mademoiselle</option>
                                <option value="Mme">Madame</option><option value="M">Monsieur</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="firstname">Prénom</label>
                        <div class="col-md-8">
                            <input id="firstname" name="firstname" type="text" class="form-control input-md" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="lastname">Nom</label>
                        <div class="col-md-8">
                            <input id="lastname" name="lastname" type="text" class="form-control input-md" required>
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

                   
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4"><button type="submit" class="btn btn-primary">Envoyer</button></div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php
include('inc/footer.inc.php');

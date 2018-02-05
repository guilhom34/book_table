<?php

// connection à la base de donnée
require_once ('connect.php');


// on créé la variable $errors qui vaut un tableau vide
// elle nous permettra de récupérer les différentes erreures du formulaire si besoin
$errors = [];
$password_crypt = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
$genre = $_POST['genre'];
$pseudo = $_POST['pseudo'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];




        $insertUser = $db->prepare('INSERT INTO utilisateur(genre, pseudo,  nom, prenom, email, telephone, mot_de_passe) VALUES(:genre, :pseudo, :nom, :prenom, :email, :telephone, :mot_de_passe)');


        $insertUser->execute(array(

            'genre' => $genre,

            'pseudo' => $pseudo,

            'nom' => $nom,

            'prenom' => $prenom,

            'email' => $email,

            'telephone' => $telephone,

            'mot_de_passe' => $password_crypt
            

    ));


        $insertUser->execute();
        

        if ($insertUser->execute()) {
            $createUser = true;
        } else {
            $errors[] = 'Il y a une erreur dans les coordonnées saisies';
        }
        echo "votre inscription à bien été validée";
    



?>

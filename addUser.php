<?php

// connection à la base de donnée
require_once ('connect.php');


// on créé la variable $errors qui vaut un tableau vide
// elle nous permettra de récupérer les différentes erreures du formulaire si besoin
$errors = [];
$password_crypt = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
$genre = $_POST['genre'];
$pseudo = htmlspecialchars($_POST['pseudo']) >3;
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$telephone = htmlspecialchars($_POST['telephone']);
$email = htmlspecialchars($_POST['email']);

        // if (isset($telephone))

        // {


        //     if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $telephone))

        //     {

        //         echo 'Le ' . $telephone . ' est un numéro <strong>valide</strong> !';

        //     }

        //     else

        //     {

        //         echo 'Le ' . $telephone . ' n\'est pas valide, recommencez !';

        //     }
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

                   // header('location: index.php');
                   
                    echo "votre inscription à bien été validée";
                } 
                else {
                    $errors[] = 'Il y a une erreur dans les coordonnées saisies';
                }
        


 
        
    



?>

<?php
require_once ('connect.php');



// Déclaration des variables


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$jour = $_POST['jour'];
$heure = $_POST['heure'];
$nb_pers = $_POST['nb_pers'];
$table = $_POST['table'];

var_dump($_POST);

        
// choisir sa date et heure de reservation


$insertReservation = $db->prepare('INSERT INTO reservation(nom, prenom, email, telephone, heure, jour, nb_pers) VALUES(:nom, :prenom, :email, :telephone, :heure, :jour, :nb_pers)'); 

$insertReservation->execute(array(

            
            'nom' => $nom,

            'prenom' => $prenom,

            'email' => $email,

            'telephone' => $telephone,

			'heure' => $heure,
				
			'jour' => $jour,
				
			'nb_pers' => $nb_pers,

			'table' => $table,

			));

    $insertReservation->execute();
    

    if ($insertReservation->execute()) {
        $createReservation = true;
    } else {
        $errors[] = 'Il y a une erreur dans les coordonnées saisies';
    }
    echo "votre reservation à bien été validée";


	// if (isset($date, $hour, $nb_pers))
	// {
	// 	echo "choisissez la table souhaitée";
	// }
	// else{
	// 	echo "Nous n'avons plus de table disponible à cette date";
	// }



	// if ($table !== 1) 
	// {
	// 	echo "Votre réservation est validé, vous allez recevoir une email de confirmation d'ici quelques minutes";

	// }
	// else{
	// 	echo "Aucune table n'est disponible";
	// }


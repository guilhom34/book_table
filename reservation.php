<?php
require_once ('connect.php');



// Déclaration des variables


$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$jour = isset($_POST['jour']) ? $_POST['jour'] : NULL;
$heure = $_POST['heure'];
$nb_pers = $_POST['nb_pers'];
$table = isset($_POST['table']) ? $_POST['table'] : NULL;;

var_dump($_POST);

$tableResto = $db->prepare('SELECT * FROM tables');

var_dump($_tableResto);
        
// choisir sa date et heure de reservation


$insertReservation = $db->prepare('INSERT INTO reservation(nom, prenom, email, telephone, heure, jour, nb_pers, tables) VALUES(:nom, :prenom, :email, :telephone, :heure, :jour, :nb_pers,:table)'); 

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

    } 
    else 
    {
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


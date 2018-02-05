<?php 
require_once ('connect.php');


$pseudo = $_POST['pseudo'];
$mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);


if(isset($_POST['pseudo']) && isset($_POST['mot_de_passe']))
{
	
	$req = $db->prepare('SELECT id_utilisateur FROM utilisateur WHERE pseudo = :pseudo AND mot_de_passe = :mot_de_passe');

	$req->execute(array(

    'pseudo' => $pseudo,

    'mot_de_passe' => $mot_de_passe));

    $resultat = $req->fetch();



    if (!$req)

		{

		    echo 'L\'identifiant ou le mot de passe sont incorrects!';

		}

		else

		{

		    session_start();

		    $_SESSION['id'] = $resultat['id'];

		    $_SESSION['pseudo'] = $pseudo;

		    echo 'Bienvenue' . ' ' . $pseudo . ' ';

		}
}
<?php
$pdo = new PDO('mysql:host=localhost;dbname=restaurant','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
//--------- BDD
//$mysqli = new mysqli("localhost", "root", "root", "restaurant");
//if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la base de donnée : ' . $mysqli->connect_error);
// $mysqli->set_charset("utf8");
 
//--------- SESSION
session_start();
 
//--------- CHEMIN
define("RACINE_RESTAURANT","/restaurant/");
 
//--------- VARIABLES
$contenu = '';
 
//--------- AUTRES INCLUSIONS
require_once("fonction.inc.php");

?>

<?php

// On admet que $db est un objet PDO.

$request = $db->query('SELECT id_utilisateur, pseudo, nom, prenom, mot_de_passe, email, date_de_naissance FROM restaurant');

    

while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) // Chaque entrée sera récupérée et placée dans un array.

{

  // On passe les données (stockées dans un tableau) concernant le personnage au constructeur de la classe.

  // On admet que le constructeur de la classe appelle chaque setter pour assigner les valeurs qu'on lui a données aux attributs correspondants.

  $user = new Utilisateur($donnees);

        

  echo $user->nom();
}

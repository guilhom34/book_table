<?php
//--------- BDD
$mysqli = new mysqli("localhost", "root", "root", "site");
if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la base de donnée : ' . $mysqli->connect_error);
// $mysqli->set_charset("utf8");
 
//--------- SESSION
session_start();
 
//--------- CHEMIN
define("RACINE_SITE","/site/");
 
//--------- VARIABLES
$contenu = '';
 
//--------- AUTRES INCLUSIONS
require_once("fonction.inc.php");
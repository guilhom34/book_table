<?php
require_once("inc/init.inc.php");

// si l'utilisateur demande une deconnexion 
if(isset($_GET['action']) && $_GET['action'] == 'deconnexion')
{
	session_destroy();
	// unset($_SESSION['membre']);
}

// si l'utilisateur est déjà connecté, on le redirige sur profil.php
if(utilisateur_est_connecte())
{
	header("location:profil.php");
}


$pseudo = "";

if(isset($_POST['pseudo']) && isset($_POST['mdp']))
{
	$pseudo = trim($_POST['pseudo']);
	$mdp = trim($_POST['mdp']);
	
	$controle_pseudo = $pdo->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");
	$controle_pseudo->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
	$controle_pseudo->execute();
	
	if($controle_pseudo->rowCount() > 0)
	{
		$utilisateur = $controle_pseudo->fetch(PDO::FETCH_ASSOC);
		// echo '<pre>'; var_dump($utilisateur); echo '</pre>';
		
		// si le pseudo est bon alors on vérifie le mdp
		if(password_verify($mdp, $utilisateur['mdp']))
		{
			// dans le cas ou le pseudo et le mdp sont corrects alors on les conserve dans la SESSION (démarrée sur le fichier init.inc.php)
			$_SESSION['membre'] = array();
			
			foreach($utilisateur AS $indice => $valeur)
			{
				if($indice != 'mdp')
				{
					$_SESSION['membre'][$indice] = $valeur;
				}
			}
			
			// si la connexion est ok alors on redirige sur la page profil
			header("location:profil.php");
			
			/*
			$_SESSION['membre']['id_membre'] = $utilisateur['id_membre'];
			$_SESSION['membre']['pseudo'] = $utilisateur['pseudo'];
			$_SESSION['membre']['nom'] = $utilisateur['nom'];
			$_SESSION['membre']['prenom'] = $utilisateur['prenom'];
			$_SESSION['membre']['email'] = $utilisateur['email'];
			$_SESSION['membre']['sexe'] = $utilisateur['sexe'];
			$_SESSION['membre']['ville'] = $utilisateur['ville'];
			$_SESSION['membre']['code_postal'] = $utilisateur['code_postal'];
			$_SESSION['membre']['adresse'] = $utilisateur['adresse'];
			$_SESSION['membre']['statut'] = $utilisateur['statut'];
			*/
			
			
		}
		else {
			$msg .= "<div class='erreur alert alert-danger'>Attention, erreur sur le pseudo ou le mot de passe <br>Veuillez recommencer </div>"; 
		}
		
	}
	else {
		$msg .= "<div class='erreur alert alert-danger'>Attention, erreur sur le pseudo ou le mot de passe <br>Veuillez recommencer </div>"; 
	}
}


// if(password_verify($mdp, $objet['mdp']))


require_once("inc/header.inc.php");
require_once("inc/nav.inc.php");
echo '<pre>'; var_dump($_SESSION); echo '</pre>';
?>



    <div class="container">
	<?php echo $msg; ?>
      <div class="starter-template">
        <h1><span class="glyphicon glyphicon-user mon_icone"></span> Connexion</h1>
      </div>
	  
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			
			<form method="POST" action="">
				<div class="form-group">
					<label for="pseudo">Pseudo</label>
					<input type="text" class="form-control" id="pseudo" placeholder="Votre pseudo ..." name="pseudo" value="<?php echo $pseudo; ?>">
				</div>
				<div class="form-group">
					<label for="mdp">Mot de passe</label>
					<input type="text" class="form-control" id="mdp" placeholder="Votre mot de passe ..." name="mdp" value="">
				</div>
				<hr>
				<button type="submit" name="connexion" id="connexion" class='col-sm-12 btn btn-info'><span class="glyphicon glyphicon-pencil"></span> Connexion</button>
			</form>
		</div>
	</div>

    </div><!-- /.container -->

<?php
require_once("inc/footer.inc.php");

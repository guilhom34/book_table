<?php
require_once("../inc/init.inc.php");

// controle du statut d'administrateur pour l'acces à cete page:
if(!utilisateur_est_connecte_et_admin())
{
	header("location:" . URL . "index.php");
	exit(); // dans le cas d'une redirection, le script suivant peut être exécuté, avec exit() on évite ce comportement.
}


//*****************************************************
//*****************************************************
//------- SUPPRIMER UN PRODUIT
//*****************************************************
//*****************************************************
if(isset($_GET['action']) && $_GET['action'] == 'supprimer')
{
	if(!empty($_GET['id_reservation']))
	{
		// on récupère les informations du produit à supprimer car nous avons besoin de son src pour supprimer la photo correspondante.
		$suppr_reservation = $pdo->prepare("SELECT * FROM reservation WHERE id_reservation = :id_reservation");
		$suppr_reservation->bindValue(":id_reservation", $_GET['id_reservation'], PDO::PARAM_STR);
		$suppr_reservation->execute();
		
		$info_suppr_reservation = $suppr_reservation->fetch(PDO::FETCH_ASSOC);
		
		// chemin de la photo à supprimer
		$suppr_reservation_chemin = $_SERVER["DOCUMENT_ROOT"] . '/PHP/site/' . $info_suppr_reservation['photo'];

		if(!empty($info_suppr_reservation['photo']) && file_exists($suppr_reservation_chemin))
		{
			// si nous avons bien un chemin et si le fichier existe alors on le supprime:
			unlink($suppr_reservation_chemin);
		}
		// suppression du produit dans la BDD
		$suppression = $pdo->prepare("DELETE FROM reservation WHERE id_reservation = :id_reservation");
		$suppression->bindValue(":id_reservation", $_GET['id_reservation'], PDO::PARAM_STR);
		$suppression->execute();
		//echo '<h1>' . $suppr_produit_chemin . '</h1>';
	}
	
}






//*****************************************************
//*****************************************************
//------- AJOUTER UN PRODUIT && MODIFIER UN PRODUIT
//*****************************************************
//*****************************************************

// création des variable du formulaire par defaut vide:
$id_reservation = "";
$id_table = '';

$erreur = false;

if(isset($_POST['id_reservation']) && isset($_POST['table']))
{
	$id_reservation = $_POST['id_reservation'];
	$id_table = $_POST['id_table'];
	
	// controle sur la reference car c'est un champs index unique en BDD
	$verif_id_table = $pdo->prepare("SELECT * FROM reservation WHERE id_reservation = :id_reservation");
	$verif_id_table->bindValue(":reservation", $id_table, PDO::PARAM_STR);
	$verif_id_table->execute();
	
	if($verif_id_table->rowCount() > 0 && isset($_GET['action']) && $_GET['action'] == 'ajouter table')
	{
		$msg .= "<div class='erreur alert alert-danger'>Attention, la table existe déja<br>Veuillez vérifier votre saisie</div>"; 
		$erreur = true;
	}
	
	// création d'une variable vide pour le src des images dans le cas où l'utilisateur ne charge pas une image
	$photo_table_bdd = '';
	
	if(isset($_POST['photo_actuelle']))
	{
		$photo_table_bdd = $_POST['photo_actuelle'];
	}
	
	if(!empty($_FILES['photo']['name']) && !$erreur)
	{		
		
		// on vérifie si l'extension est valide (voir dans le fichier fonction)
		if(verif_photo())
		{
			// on concatène la référence (unique) pour ne pas écraser une autre photo
			$nom_photo = $reference . $_FILES['photo']['name'];
			
			// on prépare le src que l'on va enregistrer en bdd
			$photo_bdd = "photo/" . $num_photo;
			$photo_dossier = $_SERVER["DOCUMENT_ROOT"] . '/PHP/site/photo/' . $nom_photo;
			// $msg .= $photo_dossier;
			
			copy($_FILES['photo']['tmp_name'], $photo_dossier);
			// copy() permet de copier un élément depuis un emplacement (1er argument) vers un autre emplacement (2eme argument)

			
		}
		else {
			$msg .= "<div class='erreur alert alert-danger'>Attention, la photo n\'a pas une extension valide<br>Extensions autorisées: jpg / jpeg / png / gif / svg</div>"; 
			$erreur = true;
		}		
	}	
	
	// vérification s'il y a eu une erreur au préalable
	if(!$erreur)
	{
		if(isset($_GET['action']) && $_GET['action'] == 'ajouter')
		{
		
			$enregistrement_reservation = $pdo->prepare("INSERT INTO reservation (reservation, photo) VALUES (:id_reservation, '$photo_bdd')");
		
		}
		elseif(isset($_GET['action']) && $_GET['action'] == 'modifier')
		{
			$enregistrement_reservation = $pdo->prepare("UPDATE reservation SET id_reservation = :id_reservation, photo = '$photo_bdd' WHERE id_reservation = :id_reservation");
			$enregistrement_produit->bindValue(":id_reservation", $_POST['id_reservation'], PDO::PARAM_STR);
		}
		
		$enregistrement_reservation->bindValue(":reservation", $reservation, PDO::PARAM_STR);
		
		// lancement de la requete INSERT
		$enregistrement_reservation->execute();
		
		// on modifie $_GET['action']
		$_GET['action'] = 'afficher';
	}
	
	
}
//*****************************************************
//*****************************************************
//------- FIN AJOUTER UN PRODUIT
//*****************************************************
//*****************************************************

require_once("../inc/header.inc.php");
require_once("../inc/nav.inc.php");
// echo '<pre>'; var_dump($_POST); echo '</pre>';
// echo '<pre>'; var_dump($_FILES); echo '</pre>';
?>



    <div class="container">
	<?php echo $msg; ?>
      <div class="starter-template">
        <h1><span class="glyphicon glyphicon-th-list mon_icone"></span> Gestion table</h1>
      </div>
	  
	  <div class="row">
		<div class="col-sm-12" style="text-align: center;">
			<hr>
			<a href="?action=ajouter" class="btn btn-info">Ajouter un tables</a>
			<a href="?action=afficher" class="btn btn-primary">Afficher les tables</a>
			<hr>
		</div>
		
		<?php if(isset($_GET['action']) && ($_GET['action'] == 'ajouter' || $_GET['action'] == 'modifier')) {
			
			// on test si l'indice id_produit existe dans GET, si c'est le cas, on est en modification
			if(!empty($_GET['id_reservation']))
			{
				$recup_reservation = $pdo->prepare("SELECT * FROM reservation WHERE id_reservation = :id_reservation");
				$recup_reservation->bindValue(':id_reservation', $_GET['id_reservation'], PDO::PARAM_STR);
				$recup_reservation->execute();
				
				$article_actuel = $recup_reservation->fetch(PDO::FETCH_ASSOC);
				
				$id_reservation = $article_actuel['id_reservation'];
				$photo_src = $article_actuel['photo'];				
			}
			
		?>
		
		<div class="col-sm-6 col-sm-offset-3">
			<!-- mettre en place un formulaire enregistrement de produit 
			- reference (type="text")
			- categorie (select)
			- titre (type="text")
			- description (textarea)
			- couleur (select)
			- taille (select)
			- sexe (select)
			- photo (input type="file")
			- prix (type="text")
			- stock (type="text")			
			-->		
			<form method="POST" action="" enctype="multipart/form-data">
			
				<input type="hidden" class="" id="id_reservation" name="id_reservation" value="<?php echo $id_reservation; ?>">
			
				<div class="form-group">
					<label for="table">Référence</label>
					<input type="text" class="tablebis" id="" placeholder="La reservation ..." name="table" value="<?php echo $id_reservation; ?>">
				</div>
				
				</div>
				
				<?php if(isset($article_actuel)) {
				echo '<div>';
				echo '<b>Photo actuelle:</b><br>';
				
				echo '<img src="' . URL . $photo_src . '" style="max-width: 100%;" />';
				
				echo '<input type="hidden" class="form-control" id="photo_actuelle" name="photo_actuelle" value="' . $photo_src .'">';
			
				echo '</div>';
				}
				?>
				<div class="form-group">
					<label for="photo">Photo</label>
					<input type="file" class="form-control" id="photo" name="photo">
				</div>
				<hr>
				<button type="submit" name="enregistrer" id="enregistrer" class='col-sm-12 btn btn-warning'><span class="glyphicon glyphicon-pencil"></span> <?php echo ucfirst($_GET['action']);  ?></button>			
			</form>
		</div><!-- fin formulaire ajout -->
		<?php } // fermeture de la condition si action == 'ajouter' ?>
		
		
		<?php if(isset($_GET['action']) && $_GET['action'] == 'afficher') {
		
			// récupération de tous les produits en bdd
			// affichage dans un tableau html
			// l'image doit etre visible (donc dans un img src)
			
			// récupération des produits:
			$liste_table = $pdo->query("SELECT * FROM tables");
			
			echo '<table border="1" class="table_r">';
			
			echo '<tr>'; 
			echo '<th>id_reservation</th>';
			echo '<th>Photo</th>';	
			echo '</tr>';
			
			while($id_table = $liste_table->fetch(PDO::FETCH_ASSOC))
			{
				echo '<tr>';
				
				foreach($id_table AS $indice => $valeur)
				{
					if($indice == 'photo')
					{
						echo '<td><img src="' . URL . $valeur . '" width="100" /></td>';
					}
					elseif($indice == 'numero')
					{
						echo '<td>' . substr($valeur, 0, 35) . '...</td>';
					}
					else {
						echo '<td>' . $valeur . '</td>';
					}
				}
				
				echo '	<td>
							<a href="?action=modifier&id_table=' . $id_table['id_tables'] . '" class="btn btn-warning"><span class="glyphicon glyphicon-refresh"></span></a>
							
							<a href="?action=supprimer&id_table=' . $produit['id_produit'] . '" class="btn btn-danger" onclick="return(confirm(\' Etes vous sur ? \'));" ><span class="glyphicon glyphicon-trash"></span></a>
						</td>';
				echo '</tr>';
			}
			
			
			echo '</table>';
			
		
		
		}
		?>
		
		
	  </div><!-- div class="row "-->	  

    </div><!-- /.container -->
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

<?php
require_once("../inc/footer.inc.php");
<?php
include('inc/header.inc.php');
include('inc/nav.inc.php');
?>

		<section>
			<div class="container">
				<h1>Nous contacter</h1>
				<?php
					$message = ''; // on prépare une variable vide afin de ne pas avoir d'erreur lors de l'appel de cette variable dans l'html au niveau du fieldset
					if(isset($_POST['pseudo']) && isset($_POST['mot_de_passe']))
					{
						$pseudo = trim($_POST['pseudo']);
						$mot_de_passe = trim($_POST['mot_de_passe']);
						
						if(empty($pseudo) || !filter_var($mot_de_passe, FILTER_VALIDATE_EMAIL))
						{
							// si l'on rentre dans cette condition, alors soit le pseudo est vide, soit l'email n'a pas un format valide.
							
							$message = '<p style="padding: 10px; color: white; background-color: red; text-align: center;">
								Attention, le pseudo est obligatoire et le mail doit avoir un format valide<br>
								Veuillez recommencer.
							</p>';			
						}
						else { // si on rentre dans le else alors le pseudo n'est pas vide et le mail a un format correct.
						
							// dans ce cas nous allons enregistrer ces informations sur un fichier généré par php
							
							// fopen()
							$fichier = fopen("liste.txt", "a");
							// fopen en mode "a" permet de créer un fichier ou de l'ouvrir s'il existe déjà.
							
							// on écrit les informations dans le fichier:
							fwrite($fichier, $pseudo . ' - ' . $mot_de_passe . "\n");
							// \n permet le retour à la ligne dans un fichier en revanche il doit obligatoirement être écrit entre "" pour être reconnu
							
							$fichier = fclose($fichier); // fclose permet de fermer le fichier et de libérer de l'espace mémoire.
							
						}
					}
?>
	<body>
	<?php echo $message; ?>
		<fieldset>
			<form method="post" action="" enctype="multipart/form-data">
			
				<label for="pseudo">Pseudo</label>
				<input type="text" name="pseudo" id="pseudo" /><br><br>
				
				<label for="mot_de_passe">Mot de passe</label>
				<input type="text" name="mot_de_passe" id="mot_de_passe" /><br><br>
				
				<input type="submit" class="validation" name="valider" id="valider" value="Valider" />
			</form>
		</fieldset>

		<div class map>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.538281310946!2d3.871064209144207!3d43.67857158488434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6a8e31f0a5d23%3A0x911f7d8f6c729654!2sSaint+Joseph+Pierre+Rouge!5e0!3m2!1sfr!2sfr!4v1517684634256" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>


	<?php
include('inc/footer.inc.php');

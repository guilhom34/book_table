<?php
include('inc/header.inc.php');
include('inc/nav.inc.php');
?>

		<section>
			<div class="container">
				<h1>Nous contacter</h1>
				<?php
					$message = ''; // on prépare une variable vide afin de ne pas avoir d'erreur lors de l'appel de cette variable dans l'html au niveau du fieldset
					if(isset($_POST['pseudo']) && isset($_POST['email']))
					{
						$pseudo = trim($_POST['pseudo']);
						$email = trim($_POST['email']);
						
						if(empty($pseudo) || !filter_var($email, FILTER_VALIDATE_EMAIL))
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
							fwrite($fichier, $pseudo . ' - ' . $email . "\n");
							// \n permet le retour à la ligne dans un fichier en revanche il doit obligatoirement être écrit entre "" pour être reconnu
							
							$fichier = fclose($fichier); // fclose permet de fermer le fichier et de libérer de l'espace mémoire.
							
						}
					}
?>
	<body>
	<?php echo $message; ?>
		<fieldset>
			<form class= "container" class= "form_group" method="post" action="reservation.php">
	 
			<div  class="col-xs-11 col-sm-10 col-lg-8">
			
				    <label for="nom" name="nom" aria-describedby="basic-addon1">Nom</label>
				    <input type="text" class="form-control" required>

				    <label for="prenom" name="prenom" aria-describedby="basic-addon1">Prénom</label>
				    <input type="text" class="form-control" required>

				    <label for="telephone" name="telephone" aria-describedby="basic-addon1">Téléphone</label>
				    <input type="text" class="form-control" required>

				    <label for="email" name="email" aria-describedby="basic-addon1">Adresse e-mail</label>
				    <input type="email" class="form-control" placeholder="Votre Email" required>

				    <label for="message" name="message" aria-describedby="basic-addon1">Votre message</label>
				    <textarea type="message" class="form-control" placeholder="Votre Message" required></textarea>
					
				
				<!--<label for="email">Email</label>
				<input type="text" name="email" id="email" /><br><br> -->
				<div class="valid">
				<input type="submit" class="validation" name="valider" id="valider" value="Valider" />
			</div>
			</form>
		</fieldset>
		<hr />
		<!--fieldset>
			<h3 style="background-color: #333; color: white; font-family: calibri; padding: 10px; text-align: center;">Personnes inscrites</h3>
			
			<?php
			// maintenant que l'on a pu enregistrer des informations dans un fichier extérieur, nous allons récupérer le contenu pour l'afficher dans la page.
			
			// file() la fonction file fait tout le travail pour nous ! cette fonction récupère le contenu d'un fichier et place chaque ligne dans un indice différent d'un tableau array.
			
			// file_exists() nous permet de vérifier si le fichier existe avant de la traiter.
			// renvoi true ou false
			
			//if(file_exists("liste.txt"))
			{
				//$liste = file('liste.txt');
				//echo '<pre>'; print_r($liste); echo '</pre>';
				
				//echo '<ul>';
				
				//foreach($liste AS $val)
				{
				//	echo '<li>' . $val . '</li>';
				}
				
				//echo '</ul>';
				
			}
			
			?>//

			
		</fieldset> -->

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

		<!-- Script Javascript de mise en place de la carte -->
		<script type="text/javascript">
		
			/* Fonction d'initialisation de la carte */
			function initialiserCarte() {
				/* Test pour savoir si le navigateur supporte l'API de géolocalisation (W3C) */
				if (!navigator.geolocation) {
					/* Message d'alerte */
					alert("Votre navigateur ne gère pas la géolocalisation");
					/* Valeur de retour */
					return false
				}
				/* Définition de la position de centrage de la carte (centrée sur la ville de Rennes) */
				/* NB : Cf. http://code-postal.fr.mapawi.com/france/1/arrondissement-de-rennes/3/84/rennes/35000/8412/ */
				var centreGoogleMap = new google.maps.LatLng(48.0833, -1.6833);
				/* Définition des options de la carte */
				var optionsGoogleMap = {
					/* Facteur de zoom */
					zoom : 8,
					/* Point de centrage */
					center : centreGoogleMap,
					/* Mode d'affichage de la carte (vue carte routière )*/
					/* NB : google.maps.mapTypeId.ROADMAP   -> Affichage en mode Plan */
					/*      google.maps.mapTypeId.SATELLITE -> Affichage en mode Satellite */
					/*      google.maps.mapTypeId.HYBRID    -> Affichage en mode Mixte (Plan/Satellite) */
					/*      google.maps.mapTypeId.TERRAIN   -> Affichage en mode Relief */
					mapTypeId : google.maps.MapTypeId.ROADMAP
				}
				/* Mise en place de la carte dans la division maCarte */
				var maCarte = new google.maps.Map(document.getElementById("maCarte"), optionsGoogleMap);
			}
		</script>
	<!-- Début section body du script HTML -->

		<!-- Titre du traitement -->
		<h1>Geolocalisation de notre site sur google map</h1>
        <p id="demo">Cliquer ici pour obtenir la position.</p>

		<!-- Début script JavaScript -->
		<script type="text/javascript">
		</script>

		<button onclick="getLocation()">Testez google map</button>

<div id="mapholder"></div>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;
    var img_url ="https://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&zoom=14&size=400x300&key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU";
    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
//To use this code on your website, get a free API key from Google.
//Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
</script>

<div class map>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.538281310946!2d3.871064209144207!3d43.67857158488434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6a8e31f0a5d23%3A0x911f7d8f6c729654!2sSaint+Joseph+Pierre+Rouge!5e0!3m2!1sfr!2sfr!4v1517684634256" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

</body>
</html>

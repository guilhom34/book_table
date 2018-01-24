<?php
include('inc/header.inc.php');
include('inc/nav.inc.php');
?>

		<section>
			<div class="conteneur">
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
			<form method="post" action="" enctype="multipart/form-data">
			
				<label for="pseudo">Pseudo</label>
				<input type="text" name="pseudo" id="pseudo" /><br><br>
				
				<label for="email">Email</label>
				<input type="text" name="email" id="email" /><br><br>
				
				<input type="submit" class="validation" name="valider" id="valider" value="Valider" />
			</form>
		</fieldset>
		<hr />
		<fieldset>
			<h3 style="background-color: #333; color: white; font-family: calibri; padding: 10px; text-align: center;">Personnes inscrites</h3>
			
			<?php
			// maintenant que l'on a pu enregistrer des informations dans un fichier extérieur, nous allons récupérer le contenu pour l'afficher dans la page.
			
			// file() la fonction file fait tout le travail pour nous ! cette fonction récupère le contenu d'un fichier et place chaque ligne dans un indice différent d'un tableau array.
			
			// file_exists() nous permet de vérifier si le fichier existe avant de la traiter.
			// renvoi true ou false
			
			if(file_exists("liste.txt"))
			{
				$liste = file('liste.txt');
				echo '<pre>'; print_r($liste); echo '</pre>';
				
				echo '<ul>';
				
				foreach($liste AS $val)
				{
					echo '<li>' . $val . '</li>';
				}
				
				echo '</ul>';
				
			}
			
			?>

			
		</fieldset>
		
	</body>
</html>

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
<body onload="initialiserCarte()">

		<!-- Titre du traitement -->
		<h1>Geolocalisation de notre site sur google map</h1>
        <p id="demo">Cliquer ici pour obtenir la position.</p>

		<!-- Début script JavaScript -->
		<script type="text/javascript">
		</script>

		<button onclick="getLocation()">Testez le!</button>

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
    var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
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

		<!-- Définition de la division dans laquelle la carte sera affichée -->
		<div id="maCarte" style="width:100%; height:100%"></div>

		<!-- Message à destinatation des internautes ayant un navigateur sans Javascript -->
		<noscript>
			<p>
				Remarque importante :
			</p>
			<p>
				Pour utiliser une carte de type Google Map il faut que JavaScript soit activé dans votre navigateur.
			</p>
		</noscript>

		<!-- Affichage du code source -->
		<br />
		<br />
		<br />

			</div>
		</section>
		
<?php
include('inc/footer.inc.php');

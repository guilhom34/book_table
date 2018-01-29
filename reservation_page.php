<?php
include('inc/header.inc.php');
include('inc/nav.inc.php');
?>

	<div class= "container ">
		<form class="col-11 col-sm-10 col-lg-6">
			<div class="form-group">
				    <label for="nom">Nom</label>
				    <input type="text">

				    <label for="prenom">Prénom</label>
				    <input type="text">

				    <label for="telephone">Téléphone</label>
				    <input type="numbers" class="form-control">

				    <label for="email">Adresse e-mail</label>
				    <input type="email" class="form-control" placeholder="Votre Email">

			<div class="input-append date form_datetime">
			    <input size="16" type="text" value="" readonly>
			    <span class="add-on"><i class="icon-th"></i></span>
			</div>
				
			</div>
			
			
			 
			
				<button type="submit" class="btn btn-default g-recaptcha"
						data-sitekey="6LewlTkUAAAAAHohIMjGmJ4BKJhzXIHy6qY5rj4i"
						data-callback="YourOnSubmitFn">Submit
				</button>
			</div>
		</form>
		<div>
			
  					<img class="card-img" src="images/tables_reservation.png" alt="Card image">
  					<div class="card-img-overlay">
  					</div>

		</div>

	</div>
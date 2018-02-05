<?php
include('inc/header.inc.php');
include('inc/nav.inc.php');
?>

	<div class= "container">
		<form class= "form_group" method="post" action="reservation.php">
	 
			<div class="col-xs-11 col-sm-10 col-lg-8">
			
				    <label for="nom" name="nom" aria-describedby="basic-addon1">Nom</label>
				    <input type="text" class="form-control" required>

				    <label for="prenom" name="prenom" aria-describedby="basic-addon1">Prénom</label>
				    <input type="text" class="form-control" required>

				    <label for="telephone" name="telephone" aria-describedby="basic-addon1">Téléphone</label>
				    <input type="text" class="form-control" required>

				    <label for="email" name="email" aria-describedby="basic-addon1">Adresse e-mail</label>
				    <input type="email" class="form-control" placeholder="Votre Email" required>
					
			</div>

			<div class="col-xs-11 col-sm-10 col-lg-4 calendrier">


				<label class="glyphicon glyphicon-calendar" for="jour">Date
				</label>
				<input type="text" name="jour" id="datepicker">

				<label>Heure</label>
			
				<select  id="heure" name="heure">
					
					
					<option value="11:30:00">11:30</option>
					<option value="12:00:00">12:00</option>
					<option value="12:30:00">12:30</option>
					<option value="13:00:00">13:00</option>
					<option value="13:30:00">13:30</option>
					<option value="14:00:00">14:00</option>
	
					<option value="19:00:00">19:00</option>
					<option value="19:30:00">19:30</option>
					<option value="20:00:00">20:00</option>
					<option value="20:30:00">20:30</option>
					<option value="21:00:00">21:00</option>
					<option value="21:30:00">21:30</option>
					<option value="22:00:00">22:00</option>
					
				</select><br>
	                
	            <label for="nb_pers">Nombre de personnes</label>
	    		<select name="nb_pers" id="nb_pers">
	            			
	            		
            		<option value="1">1</option>
            		<option value="2">2</option>
            		<option value="3">3</option>
            		<option value="4">4</option>
            		<option value="5">5</option>
            		<option value="6">6</option>
            		
            		
            	</select>

			</div>
		
		<!--plan de reservation du aside avec les tables-->
			<div class="card-img col-xs-11 col-sm-11 col-lg-8" >
  					<img  src="images/plan_restaurant.png" alt="Card image">
  			</div>
  			
	  		<section class="col-xs-11 col-sm-10 col-lg-4">
						<img class="card-img" src="images/coupole.png" alt="card image">
				
				<div class="deux-personnes ">
					<label>
				    	<input type="radio" name="table" id="table_1 optionsRadios2" value="table_1">
				    	<img src="images/table_1.png" alt="table 1" aria-label="...">
				  	</label>
				  	<label>
				    	<input type="radio" name="table" id="table_2 optionsRadios2" value="table_2">
				    	<img src="images/table_2.png" alt="table 2" aria-label="...">
				  	</label>
				  	<label>
				    	<input type="radio" name="table" id="table_5 optionsRadios2" value="table_5">
				    	<img src="images/table_5.png" alt="table 5" aria-label="...">
				  	</label>
				  	<label>
				    	<input type="radio" name="table" id="table_7 optionsRadios2" value="table_7">
				    	<img src="images/table_7.png" alt="table 7" aria-label="...">
				  	</label>
				  	<label>
				    	<input type="radio" name="table" id="table_9 optionsRadios2" value="table_9">
				    	<img src="images/table_9.png" alt="table 9" aria-label="...">
				  	</label>
				</div>
					
				
				<div class="six-personnes ">
					<label>
				    	<input type="radio" name="table" id="table_4" value="table_4">
				    	<img src="images/table_4.png" alt="table 4" aria-label="...">
				  	</label>
				  	<label>
				    	<input type="radio" name="table" id="table_6" value="table_6">
				    	<img src="images/table_6.png" alt="table 6" aria-label="...">
				  	</label>
				  	
				</div>

				
				<div class="quatre-personnes ">
					<label>
				    	<input type="radio" name="table" id="table_3" value="table_3">
				    	<img src="images/table_3.png" alt="table 3" aria-label="...">
				  	</label>
				  	<label>
				    	<input type="radio" name="table" id="table_8" value="table_8">
				    	<img src="images/table_8.png" alt="table 8" aria-label="...">
				  	</label>
				  	<label>
				    	<input type="radio" name="table" id="table_10" value="table_10">
				    	<img src="images/table_10.png" alt="table 10" aria-label="...">
				  	</label>
				  	<label>
				    	<input type="radio" name="table" id="table_11" value="table_11">
				    	<img src="images/table_11.png" alt="table 11" aria-label="...">
				  	</label>
				  	<label>
				    	<input type="radio" name="table" id="table_12" value="table_12">
				    	<img src="images/table_12.png" alt="table 12" aria-label="...">
				  	</label>
				  	
				</div>

					<div class="barre">

						<img class="pull-right" src="images/barre.png" alt="barre">
					</div>
					
				</section>
					<button type="submit" class="btn btn-default">
					Valider ma réservation</button> 
			</form>
	</div>
	

<?php
include('inc/footer.inc.php');
    
        



	

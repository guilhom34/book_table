<?php
include('inc/header.inc.php');
include('inc/nav.inc.php');
?>

	<div class= "container">
	
		<form class="col-11 col-sm-10 col-lg-8">
			<div class="form-group">
				    <label for="nom" aria-describedby="basic-addon1">Nom</label>
				    <input type="text">

				    <label for="prenom" aria-describedby="basic-addon1">Prénom</label>
				    <input type="text">

				    <label for="telephone" aria-describedby="basic-addon1">Téléphone</label>
				    <input type="numbers" class="form-control">

				    <label for="email" aria-describedby="basic-addon1">Adresse e-mail</label>
				    <input type="email" class="form-control" placeholder="Votre Email">
						
			</div>
			 
			
			<!-- 	<button type="submit" class="btn btn-default g-recaptcha"
						data-sitekey="6LewlTkUAAAAAHohIMjGmJ4BKJhzXIHy6qY5rj4i"
						data-callback="YourOnSubmitFn">Réserver
				</button> -->
			
		</form>
	

			<div class="col-11 col-sm-10 col-lg-4">
			
				<label class="glyphicon glyphicon-calendar" for="Date">Date</label>
				<input type="text" name="Date" id="datepicker">
			
				
			
				<label>Heure</label>
			
				<select id="time" name="time">
					<option value=""></option>
					
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
	                
	            <label for="number">Nombre de personnes</label>
	    		<select name="number" id="number">
	            			
	            		
            		<option value="1">1</option>
            		<option value="2">2</option>
            		<option value="3">3</option>
            		<option value="4">4</option>
            		<option value="5">5</option>
            		<option value="6">6</option>
            		<option value="7">7</option>
            		<option value="8">8</option>
            		<option value="9">9</option>
            		<option value="10">10</option>
            		<option value="11">11</option>
            		<option value="12">12</option>
            		
            	</select>

			</div>
	</div>			
		<div class="container">
			<section class="col-sm-10 col-lg-12 ">
				<div id="showroom" class="ui-widget-content ui-state-default">
				<h4 class="ui-widget-header"> Showroom</h4>

	    		</div>
	    	</section>	
        
	
    
        



	

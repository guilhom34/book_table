<?php
include('inc/header.inc.php');
include('inc/nav.inc.php');
?>

	<div class= "container">
	
		<form class="col-11 col-sm-10 col-lg-7">
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
			 
			
				<button type="submit" class="btn btn-default g-recaptcha"
						data-sitekey="6LewlTkUAAAAAHohIMjGmJ4BKJhzXIHy6qY5rj4i"
						data-callback="YourOnSubmitFn">Réserver
				</button>
			
		</form>
	</div>

		<div class="col-11 col-sm-10 col-lg-4">
			<label class="glyphicon glyphicon-calendar" for="Date">Date</label>
			<input type="text" name="Date" id="datepicker">
		
			
		
			<label>Heure</label>
		
			<select id="time" name="time" class="btn-group btn btn-default">
				<option value=""></option>
				<option value="00:00:00">00:00</option>
				<option value="00:30:00">00:30</option>
				<option value="01:00:00">01:00</option>
				<option value="01:30:00">01:30</option>
				<option value="02:00:00">02:00</option>
				<option value="02:30:00">02:30</option>
				<option value="03:00:00">03:00</option>
				<option value="03:30:00">03:30</option>
				<option value="04:00:00">04:00</option>
				<option value="04:30:00">04:30</option>
				<option value="05:00:00">05:00</option>
				<option value="05:30:00">05:30</option>
				<option value="06:00:00">06:00</option>
				<option value="06:30:00">06:30</option>
				<option value="07:00:00">07:00</option>
				<option value="07:30:00">07:30</option>
				<option value="08:00:00">08:00</option>
				<option value="08:30:00">08:30</option>
				<option value="09:00:00">09:00</option>
				<option value="09:30:00">09:30</option>
				<option value="10:00:00">10:00</option>
				<option value="10:30:00">10:30</option>
				<option value="11:00:00">11:00</option>
				<option value="11:30:00">11:30</option>
				<option value="12:00:00">12:00</option>
				<option value="12:30:00">12:30</option>
				<option value="13:00:00">13:00</option>
				<option value="13:30:00">13:30</option>
				<option value="14:00:00">14:00</option>
				<option value="14:30:00">14:30</option>
				<option value="15:00:00">15:00</option>
				<option value="15:30:00">15:30</option>
				<option value="16:00:00">16:00</option>
				<option value="16:30:00">16:30</option>
				<option value="17:00:00">17:00</option>
				<option value="17:30:00">17:30</option>
				<option value="18:00:00">18:00</option>
				<option value="18:30:00">18:30</option>
				<option value="19:00:00">19:00</option>
				<option value="19:30:00">19:30</option>
				<option value="20:00:00">20:00</option>
				<option value="20:30:00">20:30</option>
				<option value="21:00:00">21:00</option>
				<option value="21:30:00">21:30</option>
				<option value="22:00:00">22:00</option>
				<option value="22:30:00">22:30</option>
				<option value="23:00:00">23:00</option>
				<option value="23:30:00">23:30</option>
			</select><br>
                
            <label for="number">Nombre de personnes</label>
    		<select name="number" id="number">
            			
            		</option>
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
            		<option value="13">13</option>
            		<option value="14">14</option>
            		<option value="15">15</option>
            		<option value="16">16</option>
            		<option value="17">17</option>
            		<option value="18">18</option>
            		<option value="19">19</option>
            		<option value="20">20</option>
            		<option value="21">21</option>
            		<option value="22">22</option>
            		<option value="23">23</option>
            		<option value="24">24</option>
            		<option value="25">25</option>
            		<option value="26">26</option>
            		<option value="27">27</option>
            		<option value="28">28</option>
            		<option value="29">29</option>
            		<option value="30">30</option>
            		<option value="31">31</option>
            		<option value="32">32</option>
            		<option value="33">33</option>
            		<option value="34">34</option>
            		<option value="35">35</option>
            		<option value="36">36</option>
            		<option value="37">37</option>
            		<option value="38">38</option>
            		<option value="39">39</option>
            		<option value="40">40</option>
            		<option value="41">41</option>
            		<option value="42">42</option>
            		<option value="43">43</option>
            		<option value="44">44</option>
            		<option value="45">45</option>
            		<option value="46">46</option>
            		<option value="47">47</option>
            		<option value="48">48</option>
            		<option value="49">49</option>
            		<option value="50">50</option>
            	</select>
            </div>
        


	

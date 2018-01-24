<?php

include('inc/header.inc.php');
include('inc/nav.inc.php');


?>
<main role="main">

      <section class= "container">

        <div class= "carousel slide">

         <ol class="carousel-indicators">

          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>

        </ol>

          <div class="carousel-inner" role="listbox">
            <div class="slide active">
              <img src="images/cuisine.jpg" alt="Image de la cuisine">
            </div>

            <div class="slide active">
              <img src="images/cuisine.jpg" alt="Image de la cuisine">
            </div>

            <div class="slide active">
              <img src="images/cuisine.jpg" alt="Image de la cuisine">
            </div>

            <div class="slide active">
              <img src="images/cuisine.jpg" alt="Image de la cuisine">
            </div>

        </div>

          <section class="news">
            
            <!-- requete ajax avec les actualités du restaurant -->
          </section>

          <section class="goldBook">
            <!-- requete ajax avec les commentaire du livre d'or -->
          </section>
      </section>

      <script src="js/bootstrap.min.js"></script>

      <?php
          include('inc/footer.inc.php');

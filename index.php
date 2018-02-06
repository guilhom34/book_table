<?php

include('inc/header.inc.php');
include('inc/nav.inc.php');


?>
          
    <div class="container">

        <div id= "myCarousel" class= "carousel slide col-lg-12 col-md-8 col-xs-11" data-ride="carousel">

              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="images/restaurant.jpg" alt="Image de la cuisine">
                </div>

                <div class="item">
                  <img src="images/cuisine.jpg" alt="Image de la cuisine">
                </div>

                <div class="item">
                  <img src="images/service_cuisine.jpg" alt="Image de la cuisine">
                </div>

                <div class="item">
                  <img src="images/preparation_assiete.jpg" alt="Image de la cuisine">
                </div>

              </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
          </div>
        
         <div class="row row-offcanvas row-offcanvas-right">

               
              <div class="col-xs-10 col-lg-6">
                <h2>Informations</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="news.php" role="button">Voir plus &raquo;</a></p>
              </div>
                <div class="col-xs-10 col-lg-6">
                  <h2>Livre d'or</h2>
                  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                  <p><a class="btn btn-default" href="goldenBook.php" role="button">Voir plus &raquo;</a></p>
                </div>
            </div>
                <div class="jumbotron container">
                  <h2>Inscription newsletter</h2>
                  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                  <input type="button" name="Soumettre">
                </div>
            
        </div>
        
        


      <?php
          include('inc/footer.inc.php');

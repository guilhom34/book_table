<?php
include('inc/header.inc.php');
include('inc/nav.inc.php');
?>



    <section>
      <div class="container">

<button type="button" class="btn" data-toggle="modal" data-target="#menu_decouverte" data-whatever="23">Menu découverte 23€</button>
<button type="button" class="btn" data-toggle="modal" data-target="#menu_delice" data-whatever="32">Menu délice 32€</button>
<button type="button" class="btn" data-toggle="modal" data-target="#menu_gourmet" data-whatever="45">Menu gourmet 45€</button>

<div class="modal fade" id="menu_decouverte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu découverte</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="glyphicon glyphicon-home mon_icone">
        </button>
      </div>
      <div class="modal-body">
        <form>
            <label for="message-text" class="col-form-label">Menu découverte 23€</label>
            <img src="images/menu_decouverte.jpg" id="menu_decouverte">
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
      </div>
    </div>
  </div>

  <div class="modal fade" id="menu_delice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu délice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="glyphicon glyphicon-home mon_icone">
        </button>
      </div>
      <div class="modal-body">
        <form>
            <label for="message-text" class="col-form-label">Menu délice 32€</label>
            <img src="images/menu_delice.jpg" id="menu_delice">
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
      </div>
    </div>
  </div>

      <div class="modal fade" id="menu_gourmet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu gourmet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="glyphicon glyphicon-home mon_icone">
        </button>
      </div>
      <div class="modal-body">
        <form>
            <label for="message-text" class="col-form-label">Menu gourmet 45€</label>
            <img src="images/menu_gourmet.jpg" id="menu_gourmet">
          </div>
        </form>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
      </div>
    </div>
  </div>

        <h1>Menu</h1>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in venenatis nisi. Aenean vitae tincidunt augue. Proin ante urna, cursus eget ante id, ullamcorper placerat nisi. Quisque in sapien ac turpis accumsan imperdiet. Fusce laoreet pharetra felis, ac efficitur nisi molestie porttitor. Pellentesque vitae justo neque. Donec congue nulla arcu, eu sodales lorem ullamcorper suscipit. Integer gravida suscipit neque quis fringilla. Etiam facilisis justo vitae lacus viverra posuere eget quis ante. Nulla accumsan urna bibendum vestibulum pretium. Donec aliquet velit a nisl eleifend faucibus.
      </div>
    </section>
    <section id="galerie">
      <figure class="pic-1">
        <img src="images/plat_souris_agneau.jpg" alt="image 1" />
        <figcaption>souris d'agnau</figcaption>
      </figure>
      <figure class="pic-2">
        <img src="images/salade_gourmet.jpg" alt="image 2" />
        <figcaption>salade gourmet</figcaption>
      </figure>
      <figure class="pic-3">
        <img src="images/dessert_chocolat.jpg" alt="image 3" />
        <figcaption>dessert chocolat</figcaption>
      </figure>
    </section>

    
<?php
include('inc/footer.inc.php');

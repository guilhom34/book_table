<?php
include('inc/header.inc.php');
include('inc/nav.inc.php');
?>



		<section>
			<div class="container">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu 23€</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form>
            <label for="message-text" class="col-form-label">Le gourmet</label>
            <img src="images/menu_gourmet.jpg" id="menu_gourmet">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>


				<h1>Menu</h1>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in venenatis nisi. Aenean vitae tincidunt augue. Proin ante urna, cursus eget ante id, ullamcorper placerat nisi. Quisque in sapien ac turpis accumsan imperdiet. Fusce laoreet pharetra felis, ac efficitur nisi molestie porttitor. Pellentesque vitae justo neque. Donec congue nulla arcu, eu sodales lorem ullamcorper suscipit. Integer gravida suscipit neque quis fringilla. Etiam facilisis justo vitae lacus viverra posuere eget quis ante. Nulla accumsan urna bibendum vestibulum pretium. Donec aliquet velit a nisl eleifend faucibus.
			</div>
		</section>

		
<?php
include('inc/footer.inc.php');

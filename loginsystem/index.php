<?php
    include_once 'header.php';
 ?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Home</h2>
		<?php
         if (isset($_SESSION['u_id'])) {
         	echo "you are logged in!";
            }
		?>
	</div>
</section>


<div class="all">
	<link rel="stylesheet" type="text/css" href="/slider.css">
	       	<input checked type="radio" name="respond" id="desktop">
	       	  <article id="slider">
	       	  	<input checked type="radio" name="slider" id="switch1">
	       	  	<input type="radio" name="slider" id="switch2">
	       	  	<input type="radio" name="slider" id="switch3">
	       	  	<input type="radio" name="slider" id="switch4">
	       	  	<input type="radio" name="slider" id="switch5">

	       	  	<div id="slides">
	       	  		<div id="overflow">
	       	  			<div class="image">
	       	  				<article><img src="1.jpg"></article>
	       	  				<article><img src="2.jpg"></article>
	       	  				<article><img src="3.jpg"></article>
	       	  				<article><img src="4.jpg"></article>
	       	  				<article><img src="5.jpg"></article>
	       	  			</div>
	       	  		</div>
	       	  	</div>
	       	  	<div id="controls">
	       	  		<label for="switch1"></label>
	       	  		<label for="switch2"></label>
	       	  		<label for="switch3"></label>
	       	  		<label for="switch4"></label>
	       	  		<label for="switch5"></label>
	       	  	</div>
	       	  	<div id="active">
	       	  		<label for="switch1"></label>
	       	  		<label for="switch2"></label>
	       	  		<label for="switch3"></label>
	       	  		<label for="switch4"></label>
	       	  		<label for="switch5"></label>
	       	  	</div>
	          </article>
	</div>

<div class="visitus" style="text-align: center; margin: 0 auto; margin-top: 10px; font-size: 35px;">
    <a>We are on the street Kabanbay Batyr 72(the entrance is on the front of the house)</a>
</div>

  <div id="googleMap" style="width: 800px; margin: 0 auto; height:400px;"></div>

  <script>
  function myMap() {
  var mapProp= {
      center:new google.maps.LatLng(49.945809, 82.649663),
      zoom:17,
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?AIzaSyDsedByNwPzMLSrWc27NIur47Sg3hNMmdo=YOUR_KEY&callback=myMap"></script>

<?php
    include_once 'footer.php';
 ?>

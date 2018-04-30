<?php
	include ('shared.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content=".">
  <meta name="keywords" content=" BFF, Asian, Restaurants, Restaurant, Chinese Food, Chinese Restaurant, Asian Food, Bar, Sports Bar, Arlington, Texas, Arlington Texas.">


  <link rel="icon" href="img/BFF-Logo.png">
  <title>BFF Asian Grill and Sports Bar</title>

  <link rel="stylesheet" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>
<body>
	<?php echo $nav ?>

  <!-- Slideshow container -->
  <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="img/homeBanner.jpeg" alt="">
      <div class="text">
        <h1>FRESH & HEALTHY INGREDIENTS</h1>
        <h3>We're proud to say that every dish is prepared with care. We strive to be the best Asian dining experience</h3>
        <a href="about.html"><button>OUR PHILOSOPHY</button></a>
      </div>
    </div>
    <div class="mySlides fade">
      <video width="100%" autoplay muted loop>
      <source src="video\Sushi - 11291.mp4" type="video/mp4">
      </video>
    </div>

    <div class="mySlides fade">
      <img src="img/hero3.jpg" style="width:100%">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <main class="feature-container">
	    <h1>RESTAURANT HAPPENINGS</h1>
	    <div class="feature-links">

	      <div class="feature">
					<h3>MENU</h3>
	        <a href=""><img src="img/hero1.jpg" alt=""></a>
	      </div>

	      <div class="feature">
					<h3>BEER LIST</h3>
	        <a href=""><img src="img/hero3.jpg" alt=""></a>
	      </div>

	      <div class="feature">
					<h3>EVENTS</h3>
	        <a href=""><img src="img/hero4.jpg" alt=""></a>
	      </div>

	    </div>
  </main>

  <div class="container">
    <div class="wrapper">
      <div class="column">
        <h1>AMAZING MEALS & GREAT ENTERTAINMENT</h1>
        <h4>We hope to see you soon!</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At soluta, maxime et est dolores dolore modi cumque laboriosam nam culpa aut, ipsam molestiae voluptates ipsa delectus repudiandae recusandae, aperiam beatae ratione! Iure repudiandae voluptatum at, quis incidunt veniam beatae perspiciatis saepe placeat amet modi labore accusantium sequi facilis excepturi animi cum sint cumque, adipisci ab fugiat maxime velit asperiores inventore! Vel explicabo earum porro voluptatibus natus recusandae, animi nulla voluptate aut quod est enim harum cum, debitis tempore dignissimos fuga.</p>
      </div>
    </div>
  </div>

  <?php echo $footer ?>

  <script src="js/main.js"></script>
	<script type="text/javascript">
	function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
	}
	</script>
	<script src="js/main.js" charset="utf-8"></script>
</body>
</html>

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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>
<body>
	<?php echo $nav ?>

  <!-- Slideshow container -->
  <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="img/homeBanner.jpeg" alt="">
      <div class="text">
        <h1>FRESH &amp; HEALTHY INGREDIENTS</h1>
        <h3>We're proud to say that every dish is prepared with care. We strive to be the best Asian dining experience</h3>
        <a href="menu.php"><button>OUR MENU</button></a>
      </div>
    </div>
    <div class="mySlides fade">
      <video width="100%" autoplay muted loop>
      <source src="video\beer.mp4" type="video/mp4">
      </video>
    </div>

    <div class="mySlides fade">
      <video width="100%" autoplay muted loop>
        <source src="video\plate delivery.mp4" type="video/mp4">
      </video>
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

  <main class="container">
    <div class="wrapper text-center">
	    <h1>RESTAURANT HAPPENINGS</h1>
	    <div class="feature-links">

	      <div class="feature">
					<h3>MENU</h3>
	        <a href="menu.php"><img src="img/hero1.jpg" alt=""></a>
	      </div>

	      <div class="feature">
					<h3>BEER LIST</h3>
	        <a href="beer.php"><img src="img/hero3.jpg" alt=""></a>
	      </div>

	      <div class="feature">
					<h3>GIFT CARD</h3>
	        <a href="giftcard.php"><img src="img/gift-card-25.png" alt=""></a>
	      </div>

      </div>
    </div>
  </main>

  <div class="container">
    <div class="wrapper">
      <div class="column">
        <h1>AMAZING MEALS &amp; GREAT ENTERTAINMENT</h1>
        <h4>We hope to see you soon!</h4>
        <p>All of our locations near Arlington, Texas serve a great variety of custom cocktails, as well as a large selection of craft beers on tap. We actually have over 100 beers on tap at our Six Flags and Mansfield locations, so you’re sure you find what you like.<br/>

 					We have drink specials every day with great rotating food specials to match our evolving selection of beers on tap. Whether you’re looking for a place to watch one or every game with a cold brew or looking for a girls’ night out over sushi, make sure to visit us. If you have any questions, give us a call and one of our associates will answer all your questions.<br />

					When we first started BFF, our excitement revolved around creating a place that would elevate Vietnamese Cuisine but still create a place that caters to everyone for every occasion. We just decided to stick to some very basic principles. SIMPLE, HEALTHY, and FRESH. <br/>

					What came forth is a place with an eclectic menu with deep roots, an extensive drink variety, and a large accommodating space that would work for the individual coming in for a quick bite and drink or the large celebrating party. Welcome to a place with the best place for fresh food, friends, family, and fun.

				</p>
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

<?php
	include ('shared.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="BFF Asian Grill and Bar now has two locations around the Arlington and Mansfield area. Whether you're looking for a local watering hole or a place to have a meeting with your business associates for lunch, make sure to drop by and see us.">
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
    <div class="wrapper center text-center">
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
        <h3>We hope to see you soon!</h3>
        <p>All of our locations near Arlington, Texas serve a great variety of custom cocktails, as well as a large selection of craft beers on tap. We actually have over 100 beers on tap at our Six Flags and Mansfield locations, so you’re sure you find what you like.</p>
<br />
 				<p>We have drink specials every day with great rotating food specials to match our evolving selection of beers on tap. Whether you’re looking for a place to watch one or every game with a cold brew or looking for a girls’ night out over sushi, make sure to visit us. If you have any questions, give us a call and one of our associates will answer all your questions.

				</p>
      </div>
    </div>
  </div>

<div class="wrapper center">
  <div class="Review">
    <div class="Review-details">
      <img src="https://randomuser.me/api/portraits/med/men/29.jpg">
      <div class="Review-meta">
        <p class="Review-author">Zachary Richardson</p>
        <p class="Review-date">3 days ago</p>
        <div class="Review-rating">
          <span class="Review-star Review-star--active">&#9733;</span>
          <span class="Review-star Review-star--active">&#9733;</span>
          <span class="Review-star Review-star--active">&#9733;</span>
          <span class="Review-star Review-star--active">&#9733;</span>
          <span class="Review-star Review-star--active">&#9733;</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wrapper center">
  <div class="Review-body">
    <p>Been coming to this place since it opened.  The food is fantastic. Fresh. It has color and life. I highly recommend the most unique Orange Chicken I have ever tasted. The bar is STOCKED.  The service is impeccable and always friendly.  My one and only beef is that this is NOT a place to have a conversation when it's busy and it does get busy on certain nights.  Other than that, come and enjoy.</p>
  </div>
</div>

<div class="wrapper center">
  <div class="Review">
    <div class="Review-details">
      <img src="https://randomuser.me/api/portraits/med/women/29.jpg">
      <div class="Review-meta">
        <p class="Review-author">Morgan Wallace</p>
        <p class="Review-date">13 days ago</p>
        <div class="Review-rating">
          <span class="Review-star Review-star--active">&#9733;</span>
          <span class="Review-star Review-star--active">&#9733;</span>
          <span class="Review-star Review-star--active">&#9733;</span>
          <span class="Review-star Review-star--active">&#9733;</span>
          <span class="Review-star">&#9733;</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wrapper center">
  <div class="Review-body">
    <p>Definitely coming back!
Love the ceiling/feel, good wait staff, solid food & drinks!
Got the Calamari Appetizer - spicy, delicious, legit, must try.
Got Philadelphia, Sumo & Amazing Rolls between me & the husband = super tasty & filling.
Good drinks - coming back to try more items on the menu! (Which is also very well laid out)</p>
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
  
  <script>
  var slideIndex = 1;
  showSlides(slideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1;}
    if (n < 1) {slideIndex = slides.length;}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }
  </script>
</body>
</html>

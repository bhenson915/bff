<?php
	include ('shared.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="icon" href="img/BFF-Logo.png">
  <title>BFF Asian Grill and Sports Bar</title>

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php echo $nav ?>

<div class="container">
	<div class="wrapper">
		<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Appetizers</button>
		  <button class="tablinks" onclick="openCity(event, 'Paris')">Sushi</button>
		  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Entrees</button>
		</div>

		<div id="London" class="tabcontent">
		<div class="banner">
			<img src="img/menu/BFF-Pot-Sticker-1024x749.jpg" alt="5 Spice Chicken dish from BFF Asian Grill and Sports Bar" class="banner-img">
		</div>
		  <h1>APPETIZERS</h1>
		  <p>
				<h3>1A. CALAMARI (Best Seller) 10.95</h3>

				Fresh caught calamari lightly fried, garnished with jalapeños, red onions, and green onions. Served with lime, salt and pepper

				<h3>2A. SALT & PEPPER SHRIMP (Best Seller) 11.95</h3>

				Fresh caught shrimp fried and garnished with jalapeños, red onions, and green onions.  Served with lime, salt and pepper

				<h3>3A. COCONUT SHRIMP 11.95</h3>

				Fresh caught shrimp fried, garnished with coconut, red onions, green onions, and jalapeños. Served with sweet and sour sauce

				<h3>4A. CRAB RANGOON 8.95</h3>

				Deep fried dumplings stuffed with a special combination of cream cheese, yellow onions,  and crab meat. Served with sweet and sour sauce

				<h3>5A. SALTED FRIED TOFU 9.95</h3>

				Homemade tofu seasoned with our special spice blend, deep fried with red onions, green onions, and jalapeños. Served with lime, salt and pepper

				<h3>6A. POT STICKERS (Best Seller) 8.95</h3>

				Marinated chicken, cabbage with a combination of 11 ingredients, wrapped with wonton paper. Served with pot sticker sauce.

				<h3>7A. CORN FRITTERS 7.95</h3>

				A combination of golden corn kernels and herbs mixed in a special batter that is lightly fried into fritters. Served with sweet and sour sauce

				<h3>8A. SAMPLER (Best Seller) 12.95</h3>

				Includes Crab Rangoon, Corn Fritters, Egg Roll, and Spring Roll. Served with fish sauce and sweet and sour sauce.

				<h3>9A. FRIED GREEN BEANS 6.95</h3>

				Served with our spicy mayo</p>
		</div>

		<div id="Paris" class="tabcontent">
		  <h1>ROLLS</h1>
		  <p>
				<h3>12A. VIETNAMESE FRIED EGG ROLLS 3.95</h3>

				Fresh egg roll skin stuffed with ground pork, shrimp, chicken, and veggies. Served with <h3>13A. FRESH SPRING ROLLS 3.95
					</h3>SH SPRING ROLLS 3.95</h3>
				Shrimp, cha lua (pork), vermicelli, lettuce, bean sprouts wrapped with rice paper. S<h3>14A. LEMON GRASS BEEF SPRING ROLLS 5.95
					</h3>GRASS BEEF SPRING ROLLS 5.95</h3>
				Marinated lemon grass beef, vermicelli, lettuce, bean sprouts, cucumbers, crunchy wontons, and roasted peanuts wrapped with rice pap<h3>15A. GRILLED PORK SPRING ROLLS 4.95
					</h3>>15A. GRILLED PORK SPRING ROLLS 4.95</h3>
				Grilled pork, vermicelli, lettuce, bean sprouts, cucumbers, crunchy wontons, and roasted peanuts wrapped with <h3>16A. GRILLED CHICKEN SPRING ROLLS 4.95
					</h3>		<h3>16A. GRILLED CHICKEN SPRING ROLLS 4.95</h3>
				Grilled chicken, vermicelli, lettuce, bean sprouts, cucumbers, crunchy wontons, and roasted peanuts wrapp<h3>17A. GRILLED SHRIMP SPRING ROLLS 5.95
					</h3>sauce

				<h3>17A. GRILLED SHRIMP SPRING ROLLS 5.95</h3>
				Grilled shrimp, vermicelli, lettuce, bean sprouts, cucumbers, crunchy wontons, and roasted peanu<h3>18A. SALMON SPRING ROLLS 5.95
					</h3> with tuna fish sauce.

				<h3>18A. SALMON SPRING ROLLS 5.95</h3>
				Grilled salmon, vermicelli, lettuce, bean sprouts, cucumbers, and crunchy wontons wrapped with rice paper. Served with tuna fish sauce</p>
		</div>

		<div id="Tokyo" class="tabcontent">
		  <h1>PHO NOODLES</h3>
		  <p>

<h3>BEEF PHO 10.95
	</h3>
<h3>8. TAI
	</h3>
				Eye round steak.

<h3>9. TAI GAU
	</h3>
				Eye round steak and fatty brisket.

<h3>10. TAI CHIN
	</h3>
				Eye round steak and lean brisket.

<h3>11. TAI NAM
	</h3>
				Eye round steak and flank.

<h3>12. TAI GAN
	</h3>
				Eye round steak and tendon.

<h3>13. TAI BO VIEN
	</h3>
				Eye round steak and beef meat ball.

<h3>14. TAI NAM GAU
	</h3>
				Eye round steak, flank and fatty brisket.

<h3>15. TAI NAM GAN
	</h3>
				Eye round steak, flank and tendon.

<h3>16. TAI NAM GAU GAN
	</h3>
				Eye round steak, flank, fatty brisket and tendon.

<h3>17. DAC BIET  AKA PHO COMBINATION
	</h3>
				(Tai Nam Gau Gan Sach) Eye round steak, flank, fatty brisket, tendon and tripe.

<h3>18. TAI VE DON
	</h3>
				Eye round steak and crunchy flank.
<h3>
	</h3><h3>19. NAM GAU
	</h3>
				Flank and fatty brisket.

<h3>20. NAM GAN
	</h3>
				Flank and tendon.

<h3>21. NAM GAU GAN
	</h3>
				Flank, fatty brisket and tendon.

<h3>22. NAM GAU GAN SACH
	</h3>
				Flank, fatty brisket, tendon and tripe.

<h3>23.CHIN
	</h3>
				Brisket.

<h3>24. CHIN BO VIEN
	</h3>
				Brisket and beef meat ball.

<h3>25. CHIN NAM
	</h3>
				Brisket and flank.

<h3>26. CHIN GAN
	</h3>
				Brisket and tendon.

<h3>27. CHIN GAU GAN
	</h3>
				Brisket, fatty brisket and tendon.

<h3>28. PHO BO VIEN
	</h3>
				Beef meat ball.

<h3>29. PHO KHONG THIT 6.95
	</h3>
				Beef meat ball.

<h2>EXTRAS
</h2>
				Meatballs 3.95

				Bowl of Noodles 1.95

				Extra Meat per Cut, Your Choice 3.95

<h2>SPECIALTY PHO
</h2>
<h3>CH<h3>CHICKEN PHO 10.95
	</h3>/h3>				A delicate broth with herbs, onion, ginger and chicken. Served with rice noodles with bean sprouts, basil, jalapeños and lime on the sid<h3>30. PHO GA TRANG
						</h3>ANG
	</h3>
				White chicken<h3>31. PHO GA DEN
					</h3>HO GA DEN
	</h3>
				Da<h3>32.PHO GA CLASSIC
					</h3>.PHO GA CLASSIC
	</h3>
				White chicken bre<h3>SEAFOOD PHO 11.95
					</h3><h3>33. PHO TOM
	</h3>11.95
	</h3><h3>33. PHO<h3>34. PHO COMBINATION SEAFOOD
		</h3>

<h3>34. PHO COMBINATION SEAFOOD
	</h3>
				Calamari, shrimp, imitat<h3>35.PHO BO KHO 10.95
					</h3>

<h2>BEEF STEW
	</h2><h3>35.PHO BO KHO 10.95
	</h3>
	<h3>36. BANH MI BO KHO 10.95
		</h3>h rice noodles.

<h3>36. BANH MI BO KHO 10.95
	<h3>37.COM BO KHO 10.95
		</h3>ed with a French baguette.

<h3>37<h3>38. BUN BO KHO 10.95
	</h3>				Beef stew served with rice.

<h3>38.<h3>39.MI BO KHO 10.95
	</h3>>
				Beef stew served with vermicelli.

<h3>39.MI BO KHO 10.95
	</h3>
				Beef stew served with egg noodles.</p>
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

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
</body>
</html>

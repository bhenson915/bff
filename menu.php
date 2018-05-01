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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">

</head>
<body>
	<?php echo $nav ?>

<div class="container">
	<div class="wrapper">
	<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Appetizers</button>
		  <button class="tablinks" onclick="openCity(event, 'Paris')">Rolls</button>
		  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Pho Noodles</button>
		  <button class="tablinks" onclick="openCity(event, 'Moscow')">Vermicelli</button>
		  <button class="tablinks" onclick="openCity(event, 'Seoul')">Rice Plates</button>
		  <button class="tablinks" onclick="openCity(event, 'Beijing')">Specialty</button>
		  <button class="tablinks" onclick="openCity(event, 'Jerusalem')">Sushi</button>
		  <button class="tablinks" onclick="openCity(event, 'Dublin')">Banh Mi</button>
		  <button class="tablinks" onclick="openCity(event, 'Athens')">Salad Entrees</button>
		  <button class="tablinks" onclick="openCity(event, 'Berlin')">Kids Menu</button>
		</div>


		<div id="London" class="tabcontent">

		  <div class="h1-background"><h1>APPETIZERS</h1></div>
		  <div class="hero">
		  	<img src="img\menu\BFF-Pot-Sticker-1024x749.jpg" alt="">
		  </div>
		  <p>
				<h3>1A. CALAMARI <span class="best">(Best Seller)</span> 10.95</h3>

				Fresh caught calamari lightly fried, garnished with jalapeños, red onions, and green onions. Served with lime, salt and pepper

				<h3>2A. SALT &amp; PEPPER SHRIMP <span class="best">(Best Seller)</span> 11.95</h3>

				Fresh caught shrimp fried and garnished with jalapeños, red onions, and green onions.  Served with lime, salt and pepper

				<h3>3A. COCONUT SHRIMP 11.95</h3>

				Fresh caught shrimp fried, garnished with coconut, red onions, green onions, and jalapeños. Served with sweet and sour sauce

				<h3>4A. CRAB RANGOON 8.95</h3>

				Deep fried dumplings stuffed with a special combination of cream cheese, yellow onions,  and crab meat. Served with sweet and sour sauce

				<h3>5A. SALTED FRIED TOFU 9.95</h3>

				Homemade tofu seasoned with our special spice blend, deep fried with red onions, green onions, and jalapeños. Served with lime, salt and pepper

				<h3>6A. POT STICKERS <span class="best">(Best Seller)</span> 8.95</h3>

				Marinated chicken, cabbage with a combination of 11 ingredients, wrapped with wonton paper. Served with pot sticker sauce.

				<h3>7A. CORN FRITTERS 7.95</h3>

				A combination of golden corn kernels and herbs mixed in a special batter that is lightly fried into fritters. Served with sweet and sour sauce

				<h3>8A. SAMPLER <span class="best">(Best Seller)</span> 12.95</h3>

				Includes Crab Rangoon, Corn Fritters, Egg Roll, and Spring Roll. Served with fish sauce and sweet and sour sauce.

				<h3>9A. FRIED GREEN BEANS 6.95</h3>

				Served with our spicy mayo.


				<div id="appetizer-background"></div>


				<div class="h1-background"><h1>WINGS</h1></div>
				<div id="wings-prices"></div>


				<h3>YOUR CHOICE OF FLAVORS</h3>

				Vietnamese-Style, Garlic Parmesan, Garlic Butter, Honey BBQ, Ranch, Teriyaki, Buffalo, Lemon-Pepper, and Jose’s Spicy Sauce
				<div id="wings-background"></div>

			</p>

		</div>

		<div id="Paris" class="tabcontent">
		  <div class="h1-background"><h1>ROLLS</h1></div>
		  <div class="hero">
			<img src="img\menu\BFF-Rolls-1024x682.jpg" alt="">
		</div>
		  <p>
				<h3>12A. VIETNAMESE FRIED EGG ROLLS 3.95</h3>

				Fresh egg roll skin stuffed with ground pork, shrimp, chicken, and veggies. Served with tuna fish sauce.

				<h3>13A. FRESH SPRING ROLLS 3.95</h3>

				Shrimp, cha lua (pork), vermicelli, lettuce, bean sprouts wrapped with rice paper. Served with peanut sauce.

				<h3>14A. LEMON GRASS BEEF SPRING ROLLS 5.95</h3>

				Marinated lemon grass beef, vermicelli, lettuce, bean sprouts, cucumbers, crunchy wontons, and roasted peanuts wrapped with rice paper. Served with tuna fish sauce.

				<h3>15A. GRILLED PORK SPRING ROLLS 4.95</h3>

				Grilled pork, vermicelli, lettuce, bean sprouts, cucumbers, crunchy wontons, and roasted peanuts wrapped with rice paper. Served with tuna fish sauce.

				<h3>16A. GRILLED CHICKEN SPRING ROLLS 4.95</h3>

				Grilled chicken, vermicelli, lettuce, bean sprouts, cucumbers, crunchy wontons, and roasted peanuts wrapped with rice paper. Served with tuna fish sauce.

				<h3>17A. GRILLED SHRIMP SPRING ROLLS 5.95</h3>

				Grilled shrimp, vermicelli, lettuce, bean sprouts, cucumbers, crunchy wontons, and roasted peanuts wrapped with rice paper. Served with tuna fish sauce.

				<h3>18A. SALMON SPRING ROLLS 5.95</h3>

				Grilled salmon, vermicelli, lettuce, bean sprouts, cucumbers, and crunchy wontons wrapped with rice paper. Served with tuna fish sauce.

		<div id="springrolls-img"></div>

			</p>
		</div>

		<div id="Tokyo" class="tabcontent">
		  <div class="h1-background"><h1>PHO NOODLES</h1></div>
		  <div class="hero">
			  <img src="img\menu\BFF-Chicken-Pho-1024x683.jpg" alt="">
		  </div>
		  <p>

				<h2>BEEF PHO 10.95</h2>

				<h3>8. TAI</h3>

				Eye round steak.

				<h3>9. TAI GAU</h3>

				Eye round steak and fatty brisket.

				<h3>10. TAI CHIN</h3>

				Eye round steak and lean brisket.

				<h3>11. TAI NAM</h3>

				Eye round steak and flank.

				<h3>12. TAI GAN</h3>

				Eye round steak and tendon.

				<h3>13. TAI BO VIEN</h3>

				Eye round steak and beef meat ball.

				<h3>14. TAI NAM GAU</h3>

				Eye round steak, flank and fatty brisket.

				<h3>15. TAI NAM GAN</h3>

				Eye round steak, flank and tendon.

				<h3>16. TAI NAM GAU GAN</h3>

				Eye round steak, flank, fatty brisket and tendon.

				<h3>17. DAC BIET  AKA PHO COMBINATION</h3>

				<span class="vietnamese">(Tai Nam Gau Gan Sach)</span> Eye round steak, flank, fatty brisket, tendon and tripe.

				<h3>18. TAI VE DON</h3>

				Eye round steak and crunchy flank.

				<h3>19. NAM GAU</h3>

				Flank and fatty brisket.

				<h3>20. NAM GAN</h3>

				Flank and tendon.

				<h3>21. NAM GAU GAN</h3>

				Flank, fatty brisket and tendon.

				<h3>22. NAM GAU GAN SACH</h3>

				Flank, fatty brisket, tendon and tripe.

				<h3>23. CHIN</h3>

				Brisket.

				<h3>24. CHIN BO VIEN</h3>

				Brisket and beef meat ball.

				<h3>25. CHIN NAM</h3>

				Brisket and flank.

				<h3>26. CHIN GAN</h3>

				Brisket and tendon.

				<h3>27. CHIN GAU GAN</h3>

				Brisket, fatty brisket and tendon.

				<h3>28. PHO BO VIEN</h3>

				Beef meat ball.

				<h3>29. PHO KHONG THIT 6.95</h3>

				Without meat.

				<h2>EXTRAS</h2>

				Meatballs 3.95 <br/>

				Bowl of Noodles 1.95<br/>

				Extra Meat per Cut, Your Choice 3.95

				<div class="h1-background"><h1>SPECIALTY PHO NOODLES</h1></div>

				<h2>CHICKEN PHO 10.95</h2>

				A delicate broth with herbs, onion, ginger and chicken. Served with rice noodles with bean sprouts, basil, jalapeños and lime on the side.

		<div id="chicken-pho">

				<h3>30. PHO GA TRANG</h3>

				White chicken breast.

				<h3>31. PHO GA DEN</h3>

				Dark thigh meat.

				<h3>32. PHO GA CLASSIC</h3>

				White chicken breast with thigh meat.

		</div>

				<h2>SEAFOOD PHO 11.95</h2>

				<h3>33. PHO TOM</h3>

				Pho with shrimp.

				<h3>34. PHO COMBINATION SEAFOOD</h3>

				Calamari, shrimp, imitation crab and fish balls.

				<h2>BEEF STEW 10.95</h2>

				<h3>35. PHO BO KHO</h3>

				Beef stew served with fresh rice noodles.

				<h3>36. BANH MI BO KHO</h3>

				Beef stew served with a French baguette.

				<h3>37. COM BO KHO</h3>

				Beef stew served with rice.

				<h3>38. BUN BO KHO</h3>

				Beef stew served with vermicelli.

				<h3>39. MI BO KHO</h3>

				Beef stew served with egg noodles.

			</p>
		</div>

		<div id="Moscow" class="tabcontent">

		<div class="h1-background"><h1>VERMICELLI</h1></div>
		<div class="hero">
			<img src="img\menu\BFF-Vermicelli-1024x683.jpg" alt="">
		</div>

			<p>
				<h2>COOL NOODLES</h2>

				Vermicelli is served with your choice of meat over a bed of vermicelli, lettuce, bean sprouts, pickled daikon, peanuts and carrots with tuna fish sauce (nuoc mam)  or soy sauce.

				<h3>1V. GRILLED CHICKEN 10.95</h3>

				<span class="vietnamese">(Bun Ga Nuong)</span>

				<h3>2V. GRILLED CHICKEN &amp; EGG ROLL 11.95</h3>

				<span class="vietnamese">(Bun Ga Nuong Cha Gio)</span>

				<h3>3V. GRILLED SALMON 13.95</h3>

				<span class="vietnamese">(Bun Ca Hoi)</span>

				<h3>4V. GRILLED SHRIMP 11.95</h3>

				<span class="vietnamese">(Bun Tom Nuong)</span>

				<h3>5V .GRILLED BBQ PORK 10.95</h3>

				<span class="vietnamese">(Bun Thit Nuong)</span>

				<h3>6V. GRILLED BBQ PORK &amp; EGG ROLL 10.95</h3>

				<span class="vietnamese">(Bun Thit Nuong Cha Gio)</span>

				<h3>7V. LEMON GRASS BEEF 11.95</h3>

				<span class="vietnamese">(Bun Bo Nuong Xa)</span>

				<h3>8V.LEMON GRASS &amp; EGG ROLL 12.95</h3>

				<span class="vietnamese">(Bun Bo Nuong Xa Cha Gio)</span>

				<h3>9V. EGG ROLL 9.95</h3>

				<span class="vietnamese">(Bun Cha Gio)</span>

				<h3>10V. THE HOUSE NOODLE 13.95</h3>

				This combination vermicelli comes with grilled shrimp, chicken, pork and egg rolls in addition to the standard vegetable toppings.

		<div id="vermicelli"></div>





			</p>
		</div>

		<div id="Seoul" class="tabcontent">

			<div class="h1-background"><h1>RICE PLATES</h1></div>
			<div class="hero">
				<img src="img\menu\BFF-Combination-Fried-Rice-1024x751.jpg" alt="">
			</div>
				<p>
					If you’re not in the mood for our delicious soup entrees, try one of our fabulous rice plates. You can choose white or brown rice served with tomatoes, cucumbers, kimchi, pickled daikon, and carrots. Don’t forget to order a fried egg with your plate!

					<h3>1R. GRILLED CHICKEN 9.95</h3>

					<h3>2R. GRILLED PORK 9.95</h3>

					<h3>3R. GRILLED SHRIMP 11.95</h3>

					<h3>4R. GRILLED PORK CHOP 9.95</h3>

					<h3>5R. LEMONGRASS BEEF 11.95</h3>

					<h3>6R. THE HOUSE RICE PLATE 13.95</h3>

					Grilled pork chop, shrimp, chicken and fried egg.

					<h3>7R. KOREAN BBQ BEEF 14.95</h3>

					<h3>8R. KOREAN BBQ CHICKEN 11.95</h3>

					<h2>TERIYAKI RICE PLATES</h2>

					Served with steamed vegetables. Glazed with teriyaki sauce.

					<h3>9R. TERIYAKI CHICKEN 10.95</h3>

					<h3>10R. TERIYAKI   SHRIMP 11.95</h3>

					<h3>11R. TERIYAKI SALMON 13.95</h3>

					<h3>12R. TERIYAKI CHICKEN AND SHRIMP 12.95</h3>

					<h2>STIR-FRIED RICE PLATES</h2>

					An assortment of stir-fried broccoli, baby bokchoy, baby corn, cauliflower, carrots, yellow onions, and mushroms with special house sauce. Your choice of white or brown rice.

					<h3>13R. SEAFOOD RICE PLATE 12.95</h3>

					<span class="vietnamese">(Com  Xao Do Bien)</span> Shrimp, calamari, fish ball and imitation crab.

					<h3>14R. SHRIMP RICE PLATE 12.95</h3>

					<span class="vietnamese">(Com Xao Tom)</span>

					<h3>15R. CHICKEN RICE PLATE 11.95</h3>

					<span class="vietnamese">(Com  Xao Ga)</span>

					<h3>16R. BEEF RICE PLATE 11.95</h3>

					<span class="vietnamese">(Com Xao Bo)</span>

					<h2>STIR FRIED NOODLE PLATES</h2>

					An assortment of stir-fried broccoli, baby bokchoy, baby corn, cauliflower, carrots, yellow onions, and mushroms with special house sauce. Your choice of egg noodles or lomein.

					<h3>17N. SEAFOOD NOODLE PLATE 12.95</h3>

					<span class="vietnamese">(Mi Xao Do Bien)</span> Choice of egg noodles or lomein with shrimp, calamari, fish balls and imitation crab.

					<h3>18N. CHICKEN NOODLE PLATE 11.95</h3>

					<span class="vietnamese">(Mi Xao Ga)</span>

					<h3>19N. BEEF  NOODLE  PLATE 11.95</h3>

					<span class="vietnamese">(Mi Xao Bo)</span>

					<h3>20N. SHRIMP NOODLE PLATE 12.95</h3>

					<h2>FRIED RICE</h2>

					All fried rice comes with peas, carrots, eggs and garlic.

				<div id="rice-plate">

					<h3>1F.  BEEF FRIED RICE 9.95</h3>

					<h3>2F.  CRAWFISH FRIED RICE 10.95</h3>

					<h3>3F.  SHRIMP FRIED RICE 10.95</h3>

					<h3>4F.  CHICKEN FRIED RICE 9.95</h3>

					<h3>5F.  COMBINATION FRIED RICE 10.95</h3>

					Chicken, beef and shrimp.

					<h3>6F.  PORK FRIED RICE 9.95</h3>

					<h3>7F.  VIETNAMESE-STYLE FRIED RICE 10.95</h3>

					<span class="vietnamese">(Com Chien Duong Chau)</span> Pork, shrimp and Chinese sausage.

				</div>

					<h2>SIDES</h2>

					<div class="row">
						<div class="column">
							Fried Egg 1.95<br/>

							Extra Egg roll 1.95<br/>

							Stir Fried  Vegetables 5.95<br/>

							Bowl of White Rice 1.95<br/>

							Bowl of Brown Rice 2.95<br/>

							Bowl of Fried Rice 3.95
						<div>
						<div class="column">
							Bowl of Flavored Yellow Rice 2.95<br/>

							Extra Meat (Chicken or Pork) 3.95<br/>

							Extra Shrimp 4.95<br/>

							French  Baguette 1.95<br/>

							Steamed Vegetables 3.95<br/>

							Side of Lemongrass Beef 4.95
						</div>
					</div>
				</div>
			</div>
				</p>
		</div>

		<div id="Beijing" class="tabcontent">

			<div class="h1-background"><h1>SPECIALTY</h1></div>
			<div class="hero">
				<img src="img\menu\five-spice.jpg" alt="">
			</div>
				<p>
					<h3>1SP. THE CHUNKY BEEF STEAK 13.95</h3>

					Tender chunks of beef steak, marinated with Japanese sesame oil, soy sauce, hoisin sauce and garnished with red onions and garlic. Served with jasmine rice.

					<h3>2SP. KUNGPOW CHICKEN 12.95</h3>

					Spicy stir-fried chicken with dried Thai-chili, broccoli, yellow onions and lettuce. Served with the white rice.

					<h3>3SP. ORANGE CHICKEN 12.95</h3>

					Fried chicken with orange chili sauce, yellow onions, dried Thai chili and lettuce. Served with steam rice.

					<h3>4SP. SEAFOOD BIRD NEST NOODLE 13.95</h3>

					(Mi Xao Don) Crunchy bird nest noodles topped with the stir-fried shrimp, calamari, imitaton crab, fish balls, baby bokchoy, napa cabbage, baby corn, cauliflower, carrots, mushrooms and broccoli in our house sauce.

					<h3>5SP. CHICKEN BIRD NEST NOODLE 12.95</h3>

					Crunchy bird nest noodles topped with the chicken, baby bokchoy, napa cabbage, baby corn, cauliflower, carrots, mushrooms and broccoli in our house sauce.

					<h3>6SP. BEEF BIRD NEST NOODLE 12.95</h3>

					Crunchy bird nest noodles topped with the beef, baby bokchoy, napa cabbage, baby corn, cauliflower, carrots, mushrooms and broccoli in our house sauce.

					<h3>7SP. FIVE SPICE ROASTED CHICKEN 12.95</h3>

					Seasoned and roasted half cornish hen chicken. Served with cucumbers, tomatoes and flavored yellow rice.

	<div id="fivechicken"></div>


					<h2>PAD THAI</h2>

					All of our Pad Thai dishes come with bean sprouts, eggs, basil, peanuts and Pad Thai sauce.

					<h3>1PT. CHICKEN 9.95</h3>

					<h3>2PT. BEEF 10.95</h3>

					<h3>3PT. SHRIMp 10.95</h3>

					<h3>4PT. TOFU 9.95</h3>

					<h2>VEGETARIAN OPTIONS</h2>

					<h3>HT1. BUDDHA’S MONDAY 9.95</h3>

					<span class="vietnamese">(Bun Dau Hu)</span> Vermicelli, lettuce, cucumbers, bean sprouts, cilantro and peanuts served with soy sauce.

					Your Choice of Fried Tofu, Lemon Grass Tofu or Grilled Tofu.

					<h3>HT2. BUDDHA’S TUESDAY RICE 9.95</h3>

					Lettuce, tomatoes, cucumber, kimchi, pickled daikon and carrots served with soy sauce.

					Your Choice of Fried Tofu, Lemon Grass Tofu or Grilled Tofu

					<h3>HT3. BUDDHA’S SANDWICH 5.95</h3>

					Served with house mayonnaise, cucumber, pickled daikon, carrots, cilantro, jalapeños and soy sauce.

					Your Choice of Fried Tofu, Lemon Grass Tofu or Grilled Tofu

					<h3>HT4. BUDDHA’S FAVORITE MEAL* 10.95</h3>

					<span class="vietnamese">(Mi Xao Chay)</span> Choice of egg noodles or lomein stir–fried with tofu, broccoli, baby corn, mushrooms, carrots and napa cabbage in our mushroom sauce.

					<h3>HT5. BUDDHA’S SATURDAY RICE* 9.95</h3>

					Fried rice with tofu, peas, carrots, eggs and garlic.

					<h3>HT6. BUDDHA’S DELIGHT* 10.95</h3>

					Stir fried broccoli, baby corn, mushrooms, carrots, tofu and cabbage in our mushroom sauce served with steamed rice.
				</p>
		</div>

		<div id="Jerusalem" class="tabcontent">

			<div class="h1-background"><h1>SUSHI &amp; NIGIRI</h1></div>
			<div class="hero">
				<img src="img\menu\dragon.jpg" alt="">
			</div>

			All of our crab meat is imitation crab meat.

				<p>
					<h2>APPETIZERS &amp; SALADS</h2>

					<h3>1J. EDAMAME 4.00</h3>

					Salted soy beans.

					<h3>2J. MISO SOUP 3.00</h3>

					<h3>3J. SEAWEED SALAD 5.00</h3>

					<h3>4J. SQUID SALAD 5.00</h3>

					<h3>5J. CUCUMBER SALAD 4.00</h3>

					Sliced cucumbers, sesames seeds, tossed with ginger dressing and topped with pickled daikon.

					<h3>6J. SWEET POTATO TEMPURA 5.00</h3>

					Thinly sliced sweet potato battered and fried.

					<h3>7J. NACHO SPICY 6.00</h3>

					Spicy crab meat, spicy tuna, avocado, eel sauce and spicy mayo.

					<h2>SPECIALTY SUSHI ROLLS</h2>

					<span class="bold">6-8 pieces *cooked  **raw &amp; cooked  ***raw</span>

					<h3>8J. B.F.F. ROLL** 12.00</h3>

					Tempura shrimp, crab mix, cucumbers and cream cheese topped with seared tuna. Served with special miso mayo and sriracha.

					<h3>9J. SUMO ROLL** 9.00</h3>

					Tuna, salmon, crab meat, avocado and cream cheese topped with spicy mayo.

					<h3>10J. RAINBOW ROLL** 12.00</h3>

					California roll complimented with tuna, shrimp, salmon and yellow tail topped with spicy mayo.

					<h3>11J. VNR ROLL* 12.00</h3>

					Tempura shrimp, crab mix, cream cheese, cucumbers and avocado wrapped in soy paper with spicy wasabi mayo and spicy mayo.

					<h3>12J. DRAGON ROLL* 13.00</h3>

					Tempura shrimp, cream cheese and cucumbers inside, topped with avocado, eel and glazed with eel sauce.

					<h3>13J. AMAZING ROLL* <span class="best">(Best Seller)</span> 12.00</h3>

					Tempura shrimp, crab mix, and cream cheese inside, topped with crab, wasabi mayo, spicy mayo and eel sauce.

					<h3>14J. CRUNCHY SALMON ROLL*** 9.00</h3>

					Salmon, avocado, and cream cheese, deep-fried, topped with spicy mayo, then deep-fried.

					<h3>15J. COWBOY ROLL** 12.00</h3>

					Spicy tuna and avocado inside topped with crab and our sweet sauce.

					<h3>16J. SNOW WHITE** 12.00</h3>

					Spicy crab mix and asparagus topped with white tuna and jalapeños.

					<h3>17J. THE HUNTSMAN** 12.00</h3>

					Spicy crab mix and asparagus topped with tuna and fried jalapeños.

					<h3>18J. AVALANCHE ROLL* 12.00</h3>

					Crunchy California roll topped with fried shrimp, crawfish, spicy mayo and eel sauce.

					<h3>19J. BAKED ALASKAN ROLL** 12.00</h3>

					California roll topped with baked salmon, spicy mayo and eel sauce.

					<h3>20J. RUSSIAN ROLL** 12.00</h3>

					California Roll topped with white tuna and wasabi mayo.

					<h3>21J. EBI-EBI* 12.00</h3>

					Shrimp tempura, crab meat, cucumber, topped with ebi shrimp, avocado and spicy mayo.

					<h3>22J. ALASKAN ROLL** 11.00</h3>

					Crab, cucumber, topped with salmon and avocado.

					<h3>23J. MANGO TANGO** 13.00</h3>

					Mango, spicy tuna, cucumber, topped with yellow tail and ponzu sauce.

					<h3>24J. VIETNAMESE SUMMER ROLL** 13.00</h3>

					Salmon, tuna, crab, greenleaves, mango, asparagus and cilantro wrapped in rice paper. Served with our special sauce.

					<h3>25J. FUTOMAKI ROLL* 7.00</h3>

					Tamago, asparagus, yellow daikon, and cucumber.

					<h3>26J. TUNA TOWER** 20.00</h3>

					A tower of rice, crab, avocado, cucumber, spicy tuna and masago served with spicy mayo, wasabi mayo and eel sauce.

		<div id="sushi"></div>


					<h2>CLASSICS</h2>

					<h3>27J. CALIFORNIA ROLL* 7.00</h3>

					Crab mix, avocado and cucumber.

					<h3>28J. SPIDER ROLL* 9.00</h3>

					Tempura soft shell crab, cucumbers, avocado and eel sauce.

					<h3>29J. SHRIMP TEMPURA ROLL* 11.00</h3>

					Tempura shrimp, cucumber, avocado and eel sauce.

					<h3>30J. VEGETABLE TEMPURA ROLL* 6.00</h3>

					Fresh seasonal tempura vegetables.

					<h3>31J. PHILADELPHIA ROLL** 8.00</h3>

					Smoked salmon, cucumber and cream cheese.

					<h3>32J. LOUISIANA ROLL* 11.00</h3>

					Tempura crawfish, cream cheese and asparagus topped with spicy mayonnaise and togarashi.

					<h3>33J. CALAMARI ROLL* 10.00</h3>

					Tempura calamari, cream cheese and cucumber topped with eel sauce.

					<h3>34J. SPICY TUNA ROLL*** 8.00</h3>

					Spicy tuna and cucumber.

					<h3>35J. SPICY SALMON ROLL*** 8.00</h3>

					Spicy salmon and cucumber.

					<h3>36J. ASPARAGUS ROLL 6.00</h3>

					<h3>37J. VEGETABLE ROLL 6.00</h3>

					<h2>NIGIRI / SHASHIMI / ROLL</h2>

					<h3>38J. AVOCADO 5/-/6</h3>

					<h3>39J. CUCUMBER 3/-/4</h3>

					<h3>40J. TUNA 5/5/7</h3>

					<h3>41J. WHITE TUNA 5/5/7</h3>

					<h3>42J. SMOKED SALMON 5/5/7</h3>

					<h3>43J. CRAB STICK 3/-/5</h3>

					<h3>44J. YELLOW TAIL 5/5/7</h3>

					<h3>45J. OCTOPUS 5/4/7</h3>

					<h3>46J. SALMON 5/5/7</h3>

					<h3>47J. SHRIMP 5/5/7</h3>

					<h3>48J. MASAGO 5/-/7</h3>

					<h3>49J. EEL 5/5/7</h3>

					<h2>SUSHI DINNERS</h2>

					<h3>50J. 17.00</h3>

					California roll, 5 pieces of assorted sushi <span class="bold">(chef’s choice)</span>

					<h3>51J. 24.00</h3>

					California roll, 8 pieces of assorted sushi <span class="bold">(chef’s choice)</span>

					<h3>52J. 30.00</h3>

					California roll, 12 pieces of assorted sushi <span class="bold">(chef’s choice)</span>

					<h3>53J. CHIRASHI DON 22.00</h3>

					Assorted pieces of sashimi on a bed of sushi rice

			<div id="sushi-dinner"></div>

					<h2>LOVE BOAT</h2>

					<h3>54J. DATE 50.00</h3>

					Squid salad, seaweed salad, 2 tuna, 2 white tuna, 2 octopus, 2 salmon, tamago sashimi, 2 yellow tail, 2 smoked salmon, 2 shrimp, 2 eel, 2 masago nigiri, and tuna roll. Served with 2 bowls of miso soup

					<h3>55J. DOUBLE DATE 100.00</h3>

					Squid salad, seaweed salad, 4 tuna, 4 white tuna, 4 octopus, 4 salmon, tamago sashimi, 4 yellow tail, 4 smoked salmon, 4 shrimp, 4 eel, 4 masago nigiri, tuna roll, and salmon roll. Served with 2 bowls of miso soup and 2 salads.

				</p>
		</div>


		<div id="Dublin" class="tabcontent">

			<div class="h1-background"><h1>BANH MI</h1></div>
			<div class="hero">
				<img src="img\menu\BFF-Banh-Mi-1024x514.jpg" alt="">
			</div>

			Our Banh Mi  or French bread grilled sandwiches, are served with pickled daikon, carrots, cucumbers, cilantro, jalapeños, house mayonnaise, peanuts and tuna fish sauce or soy sauce on the side. <span class="bold">Add French Fries to your order for 1.95</span>

				<p>

					<h3>1B. GRILLED LEMON GRASS BEEF 6.95</h3>

					<h3>2B. GRILLED CHICKEN 5.95</h3>

					<h3>3B. GRILLED PORK 5.95</h3>

					<h3>4B. GRILLED SALMON 7.95</h3>

					<h3>5B. GRILLED SHRIMP 7.95</h3>

					<h3>6B. PORK MEATBALL 5.95</h3>

					Vietnamese-style pork meatballs, house mayonnaise, cucumbers, pickled daikon, carrots, cilantro, peanuts and jalapeños. Served with soy sauce.

					<h3>7B. RIB-EYE CHEESESTEAK 7.95</h3>

					Our cheesesteak is served with American cheese, onions, green bell peppers and premium rib-eye steak chopped and grilled to perfection.


	<div id="banh-mi"></div>
				</p>
		</div>

		<div id="Athens" class="tabcontent">

			<div class="h1-background"><h1>SALAD ENTREES</h1></div>
			<div class="hero">
				<img src="img\menu\BFF-Salad-1024x647.jpg" alt="">
			</div>
				<p>
					Our salad entrées come with a mix of iceberg and romaine lettuce, grape tomatoes, carrots, green bell peppers, eggs, avocado and homemade pickled jalapeños with French bread.<br/>

					<i>Dressing Options: Bleu Cheese, Ranch, Italian, Thousand Island, Special Caesar Dressing, Lite Raspberry Vinegar, Country French Dressing and Fresh Ginger.</i>

					<h3>1H. GRILLED CHICKEN SALAD 10.95</h3>

					<h3>2H. GRILLED PORK SALAD 10.95</h3>

					<h3>3H. GRILLED BEEF SALAD 10.95</h3>

					<h3>4H. GRILLED SHRIMP SALAD 12.95</h3>

					<h3>5H. GRILLED CHICKEN TERIYAKI SALAD 10.95</h3>

					<h3>6H. GRILLED SHRIMP TERIYAKI SALAD 12.95</h3>

					<h3>7H. GRILLED SALMON TERIYAKI SALAD 13.95</h3>


				<div id="salad"></div>

				</p>
		</div>

		<div id="Berlin" class="tabcontent">

			<div class="h1-background"><h1>KIDS MENU</h1></div>
				<p>
					Each meal comes with your choice of soft drink. For ages 10 and under only please.

					<h2>PHO</h2>

					<h3>1K.</h3>

					Your choice between eye round, brisket, or chicken.

					<h2>FRIED RICE</h2>

					Served with peas and carrots

					<h3>2K. SHRIMP FRIED RICE</h3>

					<h3>3K. CHICKEN FRIED RICE</h3>

					<h3>4K. PORK FRIED RICE</h3>

					<h2>RICE PLATES</h2>

					Served with cucumbers, tomatoes, and jasmine rice with your choice of fish sauce or soy sauce

					<h3>5K. GRILLED PORK</h3>

					<h3>6K. GRILLED CHICKEN</h3>

					<h2>FINGER FOODS</h2>

					Served with French Fries.

					<h3>7K. TRADITIONAL CHICKEN NUGGETS</h3>

					<h3>8K. CHICKEN TENDERS</h3>
				</p>

		</div>

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

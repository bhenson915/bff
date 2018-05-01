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

    <div class="container">
        <div class="wrapper center text-center">
            <h1>Select a gift card amount</h1>
            <div class="row gift-card-container">
                <div class="col">
                    <img src="img/gift-card-25.png" alt="">
                    <p>A great choice for a gift for family, friends, or acquaintances.</p>
                    <button onclick="location.href='cart.php'">Add to cart</button>
                </div>
                <div class="col">
                    <img src="img/gift-card-50.png" alt="">
                    <p>A great choice for a gift for family, friends, or acquaintances.</p>
                    <button onclick="location.href='cart.php'">Add to cart</button>
                </div>
                <div class="col">
                    <img src="img/gift-card-75.png" alt="">
                    <p>A great choice for a gift for family, friends, or acquaintances.</p>
                    <button onclick="location.href='cart.php'">Add to cart</button>
                </div>
                <div class="col">
                    <img src="img/gift-card-100.png" alt="">
                    <p>A great choice for a gift for family, friends, or acquaintances.</p>
                    <button onclick="location.href='cart.php'">Add to cart</button>
                </div>
            </div>
        </div>
    </div>

  <?php echo $footer ?>

  <script src="js/main.js"></script>
</body>
</html>

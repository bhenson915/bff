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


</head>
<body>
	<?php echo $nav ?>

  <div class="container">
    <div class="wrapper">
      <h1>Contact Us</h1>
      <p>We'd love to hear from you! Please send us your feedback using the form below. A BFF Guest Care representative will contact you within 2-3 business days.</p>
    </div>
  </div>


  

  <div class="container">
    <div class="wrapper">
      <h3>Feedback</h3>
      <form action="post.php" method="post">
      <div class="row">
        <div class="col">
          <input type="text" name="firstName" id="firstName" placeholder="First Name">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="text" name="lastName" id="lastName" placeholder="Last Name">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="email" name="email" id="email" placeholder="Email">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <textarea name="comments" id="comments" cols="30" rows="5" placeholder="Comments"></textarea>
        </div>
      </div>
       <input class="button" type="submit" name="SubmitThis" value="Submit">
      </form>
    </div>
  </div>
  

  <?php echo $footer ?>

  <script src="js/main.js"></script>
</body>
</html>

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
      <h1>Contact Us</h1>
      <p>We'd love to hear from you! Please send us your feedback using the form below. A BFF Guest Care representative will contact you within 2-3 business days.</p>
    </div>
  </div>


  

  <div class="container">
    <div class="wrapper">
      <h3>Feedback</h3>
      <form action="post.php">
      <div class="row">
        <div class="col-8">
          <label for="itemDetail">Comments * (400 Max Characters)</label>
          <textarea name="itemDetail" id="itemDetail" cols="30" rows="5"></textarea>
        </div>
      </div>
      <hr>
      <h3>Store Location & Details</h3>
        <input type="checkbox" name="Arlington[]" value="Arlington"/> Arlington
        <input type="checkbox" name="Arlington[]" value="Mansfield"/> Mansfield

        <div class="row">
          <div class="col-6">
            <label for="date-input">Purchase Date</label>
            <input type="date" name="purchaseDate" placeholder="mm/dd/yy">
          </div>
        </div>
      </form>
    </div>
  </div>
  

  <?php echo $footer ?>

  <script src="js/main.js"></script>
</body>
</html>

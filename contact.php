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

  <h3>Form</h3>
  * required fields
  <form action= "post3.php" method="post">
    Author * : <input type="text" name="author"><br/>
    Email : <input type="text" name="email"><br/>
    Title * : <input type="text" name="title"><br/>
    Background Color: 
    <input type="radio" name="background[]" value="yellow"> Yellow
    <input type="radio" name="background[]" value ="green"> Green
    <br/>
    City:
      <select name="city">
        <option value="Arlington">Arlington</option>
        <option value="Fort Worth">Fort Worth</option>
        <option value="Dallas">Dallas</option>
        <option value="Mansfield">Mansfield</option>
      </select><br>
    Tag: 
    <input type="checkbox" name="tag[]" value="General Interests"> General Interests
    <input type="checkbox" name="tag[]" value="Local Schools"> Local Schools
    <input type="checkbox" name="tag[]" value="Safety"> Safety
    <br/>

    Comment * : <br/><textarea name="comment" rows="5" cols="40"></textarea><br>
    <input type="Submit" name="SubmitThis" value="Preview">
    </form>

  <?php echo $footer ?>

  <script src="js/main.js"></script>
</body>
</html>

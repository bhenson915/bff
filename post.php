<?php
//--------------------------
// Form Processing Script
//		This script is written to work with the form in post_form_3.php.
//--------------------------


//==========================
// Data validation
//==========================

// check to see if there is a form submission or not
if (array_key_exists("SubmitThis", $_POST)) {

	// data validation
	//  - check required fields

	//== Modify the required and expected arrays below to fit your form ========
	$required = array('firstName', 'lastName', 'email');
	$expected = array('firstName', 'lastName', 'email', 'comments');
	$missing = array();

	// use foreach loop to run through each item in the expected array
	foreach($expected as $thisField) {
		// setup a variable to store user input for this field name
		$thisUserInput = $_POST[$thisField];

		// check if this field is a required field
		if (in_array($thisField, $required)) {
			// check if user input of this field is empty, if yes, add this field to the missing array
			if (empty($thisUserInput)) {
				array_push($missing, $thisField);
			} else {
				${$thisField} = $thisUserInput;
			}
		} else {
			${$thisField} = $thisUserInput;
		}
	}


	// after running through all expected fields, check the $missing array. if there is no required field missing, the $missing array will be empty.
	if (empty($missing)){
		// process author name and email
		if (!empty($email)) {
			$author = "<a href='mailto:$email'>$author</a>";
        }
        
		$output = 
                "
                <div class='wrapper center'>
                    <table>
                        <tr>
                            <th>
                                <b>First Name</b>: 
                            </th>
                            <td>
                                $firstName
                            </td>
                        <tr>
                        <tr>
                            <th>
                                <b>Last Name</b>:
                            </th>
                            <td>
                                $lastName
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <b>Email</b>:
                            </th>
                            <td>
                                <a href='mailto:$email'>$email</a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <b>Comment</b>:
                            </th>
                            <td>
                                $comments
                            </td>
                        </tr>
                    </table>
                </div>
			
			";
	
	} else {
		// empty($missing) is false --> $missing array is not empty -- prepare a message for the user

		$missingFieldList = implode(", ",$missing);
		$output = "The following fields are missing from your post, please go back and fill them in.  Thank you. <br>
						<b>Missing fields: $missingFieldList </b>
					";

	}


} else {
	$output = "Please post your message use <a href='post_form_3.php'>this form</a>.";
}



?>



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

  <div class="container text-align-center">
    <div class="wrapper">
      <h1>Thank you for your feedback!</h1>
      <p>We've received your message and will respond within 2-3 business days</p>
    </div>
  </div>
  
  <?php echo $output ?>

   <div class="container text-align-center">
    <div class="wrapper">
        <p>You've worked hard giving us feedback, check out our beer list. You've earned it...</p>
        <a href="beer.php"><button>Beer</button></a>
    </div>
  </div>

  <?php echo $footer ?>

  <script src="js/main.js"></script>
</body>
</html>

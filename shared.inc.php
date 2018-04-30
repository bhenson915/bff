<?php
$form = "
  <form action='' method='post'>\n
    Name: <input type='text' name='userName' size='10'>\n
    <input type='submit' name='submitName' value='Submit'>\n
  </form>\n\n";

$logoutForm = "
  <form action='' method='post'> <input type='submit' name='logout' value='Log out'></form>";

  if (isset($_POST["userName"]) && !empty($_POST["userName"])){
		
		// submission found, set up a cookie variable accordingly.  
		setcookie("user", $_POST["userName"], time() + 14400);
		// Cookies will only be available beginning next page load.  (So $_COOKIE['user'], which we just set up in the line above, is not avaible "now".) To use this cookie item "now" (this page load), we need to also assign the same value to the same $_COOKIE array item as below.
		$_COOKIE['user'] = $_POST["userName"];
	
	// otherwise (no UserName is submitted), check to see if the logout button is clicked.
	} else if (isset($_POST["logout"])){
		
		// if yes, clean up the cookie
		setcookie("user", "", time() - 3600);
		$_COOKIE['user'] = "";
	}

	//echo "<p>Cookie: {$_COOKIE['user']}</P>"; // for debugging purposes.  This will allow you to see what's stored in $_COOKIE['user'].

	// after set up or clean up the cookies, check the resulting cookie item again to compose appropriate greeting message.
	if (isset($_COOKIE["user"]) && !empty($_COOKIE["user"])){
		// there is a user name stored in the cookie.  Use it to compose a greeting
		$message = "Welcome, {$_COOKIE['user']}! $logoutForm";
	} else {
		// no user name in the cookie, output the log in form then.
		$message = $form;
	}



$nav = "
<div class='nav-wrapper center'>
  <div class='nav-top'>
    <div class='cta-gift-cards'>
      <a href='giftcard.php'><i class='fas fa-credit-card fa-lg fa-fw'></i> Purchase gift cards >></a>
    </div>
    <div class='contact-links'>
        <a href='giftcards.php'><i class='fab fa-facebook-square fa-lg fa-fw'></i></a>
        <a href='giftcards.php'><i class='fab fa-twitter-square fa-lg fa-fw'></i></a>
        <a href='giftcards.php'><i class='fab fa-instagram fa-lg fa-fw'></i></a>
        
        <a href='tel: 817-385-0760'>|  (817) 385-0760</a>
    </div>
  </div>
</div>

<nav class='navigation'>
  <ul class='nav-list'>
    <li class='link'><a href='index.php'>HOME</a></li>
    <li class='link'><a href='menu.php'>OUR MENU</a></li>
    <li class='link'><a href='beer.php'>BEER LIST</a></li>
  </ul>
  <a href='index.php'><img class='logo' src='img/BFF-Logo.png' alt='BFF Asian Bar and Grill logo'></a>
  <ul class='nav-list'>
    <li class='link'><a href='franchise.php'>FRANCHISE</a></li>
    <li class='link'><a href='locations.php'>LOCATIONS</a></li>
    <li class='link'><a href='contact.php'>CONTACT</a></li>
  </ul>
</nav>";

$footer = "<footer>
    <div class='container'>
      <div class='wrapper'>
      <div class='footer-content'>
        <div class='footer-links-container'>
          <div class='footer-links'>
            <ul>
            <li>
            <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.152196079861!2d-97.07648964960279!3d32.76169589198099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e876b81187443%3A0x8e2cd83655d422a7!2sBFF+Asian+Grill+and+Bar!5e0!3m2!1sen!2sus!4v1525100716240' width='400' height='300' frameborder='0' style='border:0' allowfullscreen></iframe>
              </li>
            </ul>
          </div>
          <div class='footer-links'>
            <ul>
              <li><strong>FOLLOW US</strong></li>
              <li class='contact-links'>
                <a href='https://www.facebook.com/BFFnewlocation/'><i class='fab fa-facebook-square'></i></a>
                <a href='https://www.instagram.com/explore/locations/465609885/bff-asian-grill-sports-bar-n-arlington/'><i class='fab fa-instagram'></i></a>
              </li>
            </ul>
          </div>
          <div class='footer-links'>
            <ul>
              <li><strong>POPULAR LINKS</strong></li>
              <li class='contact-links'><a href='beer.php'>Drink Specials</li>
              <li class='contact-links'><a href='menu.php'>Menu</li>
              <li class='contact-links'><a href='locations.php'>Locations</li>
            </ul>
          </div>
          <div class='footer-links'>
            <ul>
              <li><strong>LOCATION</strong></li>
              <li>
              2150 E. Lamar Blvd. #100<br>
              Arlington, TX 76006<br>
              <a href='tel:817.385.0760'>(817)385-0760</a></li>

            </ul>

          </div>
        </div>

      </div>
      </div>
    </div>
  </footer>";

?>

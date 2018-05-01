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

        <main>
        <div class="container">
            <div class="wrapper center">
                <!-- Checkout Progress Bar-->

                <div class="checkout-card">
                    <h1 class="text-center">Checkout Form</h1>

                    <!-- Checkout Form Begins -->
                    <div class="row checkout-card-wrapper-box">


                        <div class="orderSummary">
                            <h4>Order Summary</h4>
                            <p class="title">Gift Cards <span class="price">$150.99</span></p>
                            <hr>
                                <p class="title">Shipping Cost<span class="price">$10.00</span></p>
                                <p class="title">Sales Tax<span class="price">$10.06</span></p>
                            <hr>
                            <p class="mar-text">Total Price <span class="price"><b>$171.05</b></span></p>
                        </div>


                        <form action="/action_page.php" class="checkoutForm">

                            <div class="formMain">
                                <div class="billing">
                                    <h3>Billing Address</h3>

                                    <div class="billing-flex">
                                        <input class="billing-flexRight" type="text" id="fname" name="firstname" placeholder="First Name">
                                        <input type="text" id="fname" name="firstname" placeholder="Last Name">
                                    </div>

                                    <input type="text" id="email" name="email" placeholder="Email">
                                    <input type="text" id="adr" name="address" placeholder="Street Address">
                                    <input type="text" id="unit" name="address" placeholder="Unit Number">
                                    <input type="text" id="city" name="city" placeholder="City">

                                    <div class="billing-flex">
                                        <input class="billing-flexRight" type="text" id="state" name="state" placeholder="State">
                                        <input type="text" id="zip" name="zip" placeholder="Zip Code">
                                    </div>
                                </div>

                                <div class="payment">
                                    <h3>Payment</h3>
                                    <label>Accepted Cards</label>
                                    <div class="icon-container">
                                        <i class="mar-text fab fa-cc-visa"></i>
                                        <i class="fab fa-cc-amex"></i>
                                        <i class="fab fa-cc-mastercard"></i>
                                        <i class="fab fa-cc-discover"></i>
                                    </div>

                                    <input type="text" id="cname" name="cardname" placeholder="Name on Card">

                                    <input type="text" id="ccnum" name="cardnumber" placeholder="Credit Card Number">
                                    <div class="billing-flex">
                                        <input class="billing-flexRight" type="text" id="expmonth" name="expmonth" placeholder="Exp Month">

                                        <input class="paymentExpYear" type="text" id="expyear" name="expyear" placeholder="Exp Year">
                                    </div>
                                    <input type="text" id="cvv" name="cvv" placeholder="CVV">
                                    <label>
                                      <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                                    </label>
                                </div>

                            </div>

                            <div class="formFooter">

                                <button >Submit</button>
                            </div>
                        </form>


                    </div>
                    <!-- End of checkout-card-wrapper container -->
                </div>
                <!-- End of checkout-card container -->
            </div>
            <!-- End of Wrapper -->
        </div>

    </main>

    <?php echo $footer ?>

  <script src="js/main.js"></script>
</body>
</html>

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
    <div class="wrapper">
    <h1>Shopping Cart</h1>

<div class="shopping-cart">

<div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
</div>

<div class="product">
    <div class="product-image">
    <img src="img/gift-card-25.png">
    </div>
    <div class="product-details">
    <div class="product-title">$25 Gift Card</div>
    <p class="product-description">A great choice for a gift for family, friends, or acquaintances.</p>
    </div>
    <div class="product-price">25.00</div>
    <div class="product-quantity">
    <input type="number" value="2" min="1">
    </div>
    <div class="product-removal">
    <button class="remove-product">
        Remove
    </button>
    </div>
    <div class="product-line-price">50.00</div>
</div>

<div class="product">
    <div class="product-image">
    <img src="img/gift-card-100.png">
    </div>
    <div class="product-details">
    <div class="product-title">$100 Gift Card</div>
    <p class="product-description">A great choice for a gift for family, friends, or acquaintances.</p>
    </div>
    <div class="product-price">100.00</div>
    <div class="product-quantity">
    <input type="number" value="1" min="1">
    </div>
    <div class="product-removal">
    <button class="remove-product">
        Remove
    </button>
    </div>
    <div class="product-line-price">100.00</div>
</div>

<div class="totals">
    <div class="totals-item">
    <label>Subtotal</label>
    <div class="totals-value" id="cart-subtotal">150.00</div>
    </div>
    <div class="totals-item">
    <label>Tax (5%)</label>
    <div class="totals-value" id="cart-tax">7.50</div>
    </div>
    <div class="totals-item">
    <label>Shipping</label>
    <div class="totals-value" id="cart-shipping">5.00</div>
    </div>
    <div class="totals-item totals-item-total">
    <label>Grand Total</label>
    <div class="totals-value" id="cart-total">162.50</div>
    </div>
</div>
    
    <button onclick="location.href='checkout.php'" class="checkout">Checkout</button>

</div>
    </div>
</div>
   

  <?php echo $footer ?>

  <script src="js/main.js"></script>
  <script>
  /* Set rates + misc */
    var taxRate = 0.05;
    var shippingRate = 15.00; 
    var fadeTime = 300;


    /* Assign actions */
    $('.product-quantity input').change( function() {
    updateQuantity(this);
    });

    $('.product-removal button').click( function() {
    removeItem(this);
    });


    /* Recalculate cart */
    function recalculateCart()
    {
    var subtotal = 0;
    
    /* Sum up row totals */
    $('.product').each(function () {
        subtotal += parseFloat($(this).children('.product-line-price').text());
    });
    
    /* Calculate totals */
    var tax = subtotal * taxRate;
    var shipping = (subtotal > 0 ? shippingRate : 0);
    var total = subtotal + tax + shipping;
    
    /* Update totals display */
    $('.totals-value').fadeOut(fadeTime, function() {
        $('#cart-subtotal').html(subtotal.toFixed(2));
        $('#cart-tax').html(tax.toFixed(2));
        $('#cart-shipping').html(shipping.toFixed(2));
        $('#cart-total').html(total.toFixed(2));
        if(total == 0){
        $('.checkout').fadeOut(fadeTime);
        }else{
        $('.checkout').fadeIn(fadeTime);
        }
        $('.totals-value').fadeIn(fadeTime);
    });
    }


    /* Update quantity */
    function updateQuantity(quantityInput)
    {
    /* Calculate line price */
    var productRow = $(quantityInput).parent().parent();
    var price = parseFloat(productRow.children('.product-price').text());
    var quantity = $(quantityInput).val();
    var linePrice = price * quantity;
    
    /* Update line price display and recalc cart totals */
    productRow.children('.product-line-price').each(function () {
        $(this).fadeOut(fadeTime, function() {
        $(this).text(linePrice.toFixed(2));
        recalculateCart();
        $(this).fadeIn(fadeTime);
        });
    });  
    }


    /* Remove item from cart */
    function removeItem(removeButton)
    {
    /* Remove row from DOM and recalc cart total */
    var productRow = $(removeButton).parent().parent();
    productRow.slideUp(fadeTime, function() {
        productRow.remove();
        recalculateCart();
    });
    }
    </script>
	
</body>
</html>

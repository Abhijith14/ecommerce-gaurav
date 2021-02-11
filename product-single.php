<?php

session_start();

$user = false;

if (isset($_SESSION['auth']))
{
   $user = $_SESSION['user'];
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Style + | Fashion Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		
   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">Style +</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
            
              <?php
              
                if($user)
                {
              ?>
               <li class="nav-item"><a href="#" class="nav-link" style="cursor: context-menu;">Hey @<?php echo $user; ?></a></li>
               <li class="nav-item cta cta-colored">
            <a href="logout.php" style="background-color: orange; color: white;" class="nav-link">
                Logout
            </a>
          <?php } else { ?>
            <li class="nav-item cta cta-colored">
              <a href="login.php" style="background-color: orange; color: white;" class="nav-link">
                Login
              </a>
            <?php } ?>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Fashion</a></span> <span class="mr-2"><a href="index.php">Product</a></span> <span>Product Info</span></p>
            <h1 class="mb-0 bread">Product Description</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/menu-2.jpg" class="image-popup"><img src="images/product-1.jpg" class="img-fluid" alt="Shipping"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>Young Man Wearing Dress</h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
							</p>
						</div>
    				<p class="price"><span>&#x20B9;1200.00</span></p>
    				<p>Get the perfect finish to your laid-back looks with this polo t-shirt from Stop. Made from good quality fabric, this t-shirt is light in weight. Crafted with unique design this short sleeves t-shirt comes with a solid pattern and a perfect fit that makes it all the more appealing.</p>
    				<p>Set a new standard by wearing this sports T-Shirt from the house of Wrangler. It has short sleeves, which make it look smart while the slub pattern will add a touch of simplicity to your personality. Besides, a fine quality fabric has been used in its tailoring to assure you of sheer comfort and a luxury feel.
						</p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="" id="" class="form-control">
	                  	<option value="">Small</option>
	                    <option value="">Medium</option>
	                    <option value="">Large</option>
	                    <option value="">Extra Large</option>
	                  </select>
	                </div>
		            </div>
							</div>
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
	          	</div>
	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;">80 piece available</p>
	          	</div>
          	</div>
          	<p><a href="Checkout.php" class="btn btn-black py-3 px-5">Proceed to Checkout</a></p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Ralated Products</h2>
            <p>"How can you live the high life if you do not wear the high heels?" —Sonia Rykiel</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
        <div class="row">
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="product">
              <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Shopping">
                <span class="status">30%</span>
                <div class="overlay"></div>
              </a>
              <div class="text py-3 px-3">
                <h3><a href="product-single.php">Floral Jackquard Pullover</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span class="mr-2 price-dc">&#x20B9;1200.00</span><span class="price-sale">&#x20B9;840.00</span></p>
                  </div>
                  <div class="rating">
                    <p class="text-right">
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                    </p>
                  </div>
                </div>
                <p class="bottom-area d-flex px-3">
                  
                  <a href="product-single.php" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="product">
              <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/product-2.jpg" alt="Shopping">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 px-3">
                <h3><a href="product-single.php">Floral Jackquard Pullover</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span>&#x20B9;1200.00</span></p>
                  </div>
                  <div class="rating">
                    <p class="text-right">
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                    </p>
                  </div>
                </div>
                <p class="bottom-area d-flex px-3">
                  
                  <a href="product-single.php" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="product">
              <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/product-3.jpg" alt="Shopping">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 px-3">
                <h3><a href="product-single.php">Floral Jackquard Pullover</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span>&#x20B9;1200.00</span></p>
                  </div>
                  <div class="rating">
                    <p class="text-right">
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                    </p>
                  </div>
                </div>
                <p class="bottom-area d-flex px-3">
                  
                  <a href="product-single.php" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="product">
              <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/product-4.jpg" alt="Shopping">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 px-3">
                <h3><a href="product-single.php">Floral Jackquard Pullover</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span>&#x20B9;1200.00</span></p>
                  </div>
                  <div class="rating">
                    <p class="text-right">
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                      <a href="#"><span class="ion-ios-star-outline"></span></a>
                    </p>
                  </div>
                </div>
                <p class="bottom-area d-flex px-3">
                  
                  <a href="product-single.php" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
        <div class="row">
          <div class="mouse">
            <a href="#" class="mouse-icon">
              <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
            </a>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Style +</h2>
              <p>"How can you live the high life if you do not wear the high heels?" —Sonia Rykiel</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
          </div>
          <div class="col-md-4">
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Question?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+1 234 5678 90</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@styleplus.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>
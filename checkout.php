<?php

session_start();

$user = false;

if (isset($_SESSION['auth']))
{
   $user = $_SESSION['user'];
}
else
{
	header('location:login.php');
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Fashion</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 ftco-animate">
						<form action="#" class="billing-form">
							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">First Name</label>
	                  <input type="text" class="form-control" placeholder="Enter First Name">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" placeholder="Enter Last Name">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">Country</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="" id="" class="form-control">
		                  	<option selected disabled>Select a Country</option>
		                  	<option value="Afganistan">Afghanistan</option>
						   <option value="Albania">Albania</option>
						   <option value="Algeria">Algeria</option>
						   <option value="American Samoa">American Samoa</option>
						   <option value="Andorra">Andorra</option>
						   <option value="Angola">Angola</option>
						   <option value="Anguilla">Anguilla</option>
						   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
						   <option value="Argentina">Argentina</option>
						   <option value="Armenia">Armenia</option>
						   <option value="Aruba">Aruba</option>
						   <option value="Australia">Australia</option>
						   <option value="Austria">Austria</option>
						   <option value="Azerbaijan">Azerbaijan</option>
						   <option value="Bahamas">Bahamas</option>
						   <option value="Bahrain">Bahrain</option>
						   <option value="Bangladesh">Bangladesh</option>
						   <option value="Barbados">Barbados</option>
						   <option value="Belarus">Belarus</option>
						   <option value="Belgium">Belgium</option>
						   <option value="Belize">Belize</option>
						   <option value="Benin">Benin</option>
						   <option value="Bermuda">Bermuda</option>
						   <option value="Bhutan">Bhutan</option>
						   <option value="Bolivia">Bolivia</option>
						   <option value="Bonaire">Bonaire</option>
						   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
						   <option value="Botswana">Botswana</option>
						   <option value="Brazil">Brazil</option>
						   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
						   <option value="Brunei">Brunei</option>
						   <option value="Bulgaria">Bulgaria</option>
						   <option value="Burkina Faso">Burkina Faso</option>
						   <option value="Burundi">Burundi</option>
						   <option value="Cambodia">Cambodia</option>
						   <option value="Cameroon">Cameroon</option>
						   <option value="Canada">Canada</option>
						   <option value="Canary Islands">Canary Islands</option>
						   <option value="Cape Verde">Cape Verde</option>
						   <option value="Cayman Islands">Cayman Islands</option>
						   <option value="Central African Republic">Central African Republic</option>
						   <option value="Chad">Chad</option>
						   <option value="Channel Islands">Channel Islands</option>
						   <option value="Chile">Chile</option>
						   <option value="China">China</option>
						   <option value="Christmas Island">Christmas Island</option>
						   <option value="Cocos Island">Cocos Island</option>
						   <option value="Colombia">Colombia</option>
						   <option value="Comoros">Comoros</option>
						   <option value="Congo">Congo</option>
						   <option value="Cook Islands">Cook Islands</option>
						   <option value="Costa Rica">Costa Rica</option>
						   <option value="Cote DIvoire">Cote DIvoire</option>
						   <option value="Croatia">Croatia</option>
						   <option value="Cuba">Cuba</option>
						   <option value="Curaco">Curacao</option>
						   <option value="Cyprus">Cyprus</option>
						   <option value="Czech Republic">Czech Republic</option>
						   <option value="Denmark">Denmark</option>
						   <option value="Djibouti">Djibouti</option>
						   <option value="Dominica">Dominica</option>
						   <option value="Dominican Republic">Dominican Republic</option>
						   <option value="East Timor">East Timor</option>
						   <option value="Ecuador">Ecuador</option>
						   <option value="Egypt">Egypt</option>
						   <option value="El Salvador">El Salvador</option>
						   <option value="Equatorial Guinea">Equatorial Guinea</option>
						   <option value="Eritrea">Eritrea</option>
						   <option value="Estonia">Estonia</option>
						   <option value="Ethiopia">Ethiopia</option>
						   <option value="Falkland Islands">Falkland Islands</option>
						   <option value="Faroe Islands">Faroe Islands</option>
						   <option value="Fiji">Fiji</option>
						   <option value="Finland">Finland</option>
						   <option value="France">France</option>
						   <option value="French Guiana">French Guiana</option>
						   <option value="French Polynesia">French Polynesia</option>
						   <option value="French Southern Ter">French Southern Ter</option>
						   <option value="Gabon">Gabon</option>
						   <option value="Gambia">Gambia</option>
						   <option value="Georgia">Georgia</option>
						   <option value="Germany">Germany</option>
						   <option value="Ghana">Ghana</option>
						   <option value="Gibraltar">Gibraltar</option>
						   <option value="Great Britain">Great Britain</option>
						   <option value="Greece">Greece</option>
						   <option value="Greenland">Greenland</option>
						   <option value="Grenada">Grenada</option>
						   <option value="Guadeloupe">Guadeloupe</option>
						   <option value="Guam">Guam</option>
						   <option value="Guatemala">Guatemala</option>
						   <option value="Guinea">Guinea</option>
						   <option value="Guyana">Guyana</option>
						   <option value="Haiti">Haiti</option>
						   <option value="Hawaii">Hawaii</option>
						   <option value="Honduras">Honduras</option>
						   <option value="Hong Kong">Hong Kong</option>
						   <option value="Hungary">Hungary</option>
						   <option value="Iceland">Iceland</option>
						   <option value="Indonesia">Indonesia</option>
						   <option value="India">India</option>
						   <option value="Iran">Iran</option>
						   <option value="Iraq">Iraq</option>
						   <option value="Ireland">Ireland</option>
						   <option value="Isle of Man">Isle of Man</option>
						   <option value="Israel">Israel</option>
						   <option value="Italy">Italy</option>
						   <option value="Jamaica">Jamaica</option>
						   <option value="Japan">Japan</option>
						   <option value="Jordan">Jordan</option>
						   <option value="Kazakhstan">Kazakhstan</option>
						   <option value="Kenya">Kenya</option>
						   <option value="Kiribati">Kiribati</option>
						   <option value="Korea North">Korea North</option>
						   <option value="Korea Sout">Korea South</option>
						   <option value="Kuwait">Kuwait</option>
						   <option value="Kyrgyzstan">Kyrgyzstan</option>
						   <option value="Laos">Laos</option>
						   <option value="Latvia">Latvia</option>
						   <option value="Lebanon">Lebanon</option>
						   <option value="Lesotho">Lesotho</option>
						   <option value="Liberia">Liberia</option>
						   <option value="Libya">Libya</option>
						   <option value="Liechtenstein">Liechtenstein</option>
						   <option value="Lithuania">Lithuania</option>
						   <option value="Luxembourg">Luxembourg</option>
						   <option value="Macau">Macau</option>
						   <option value="Macedonia">Macedonia</option>
						   <option value="Madagascar">Madagascar</option>
						   <option value="Malaysia">Malaysia</option>
						   <option value="Malawi">Malawi</option>
						   <option value="Maldives">Maldives</option>
						   <option value="Mali">Mali</option>
						   <option value="Malta">Malta</option>
						   <option value="Marshall Islands">Marshall Islands</option>
						   <option value="Martinique">Martinique</option>
						   <option value="Mauritania">Mauritania</option>
						   <option value="Mauritius">Mauritius</option>
						   <option value="Mayotte">Mayotte</option>
						   <option value="Mexico">Mexico</option>
						   <option value="Midway Islands">Midway Islands</option>
						   <option value="Moldova">Moldova</option>
						   <option value="Monaco">Monaco</option>
						   <option value="Mongolia">Mongolia</option>
						   <option value="Montserrat">Montserrat</option>
						   <option value="Morocco">Morocco</option>
						   <option value="Mozambique">Mozambique</option>
						   <option value="Myanmar">Myanmar</option>
						   <option value="Nambia">Nambia</option>
						   <option value="Nauru">Nauru</option>
						   <option value="Nepal">Nepal</option>
						   <option value="Netherland Antilles">Netherland Antilles</option>
						   <option value="Netherlands">Netherlands (Holland, Europe)</option>
						   <option value="Nevis">Nevis</option>
						   <option value="New Caledonia">New Caledonia</option>
						   <option value="New Zealand">New Zealand</option>
						   <option value="Nicaragua">Nicaragua</option>
						   <option value="Niger">Niger</option>
						   <option value="Nigeria">Nigeria</option>
						   <option value="Niue">Niue</option>
						   <option value="Norfolk Island">Norfolk Island</option>
						   <option value="Norway">Norway</option>
						   <option value="Oman">Oman</option>
						   <option value="Pakistan">Pakistan</option>
						   <option value="Palau Island">Palau Island</option>
						   <option value="Palestine">Palestine</option>
						   <option value="Panama">Panama</option>
						   <option value="Papua New Guinea">Papua New Guinea</option>
						   <option value="Paraguay">Paraguay</option>
						   <option value="Peru">Peru</option>
						   <option value="Phillipines">Philippines</option>
						   <option value="Pitcairn Island">Pitcairn Island</option>
						   <option value="Poland">Poland</option>
						   <option value="Portugal">Portugal</option>
						   <option value="Puerto Rico">Puerto Rico</option>
						   <option value="Qatar">Qatar</option>
						   <option value="Republic of Montenegro">Republic of Montenegro</option>
						   <option value="Republic of Serbia">Republic of Serbia</option>
						   <option value="Reunion">Reunion</option>
						   <option value="Romania">Romania</option>
						   <option value="Russia">Russia</option>
						   <option value="Rwanda">Rwanda</option>
						   <option value="St Barthelemy">St Barthelemy</option>
						   <option value="St Eustatius">St Eustatius</option>
						   <option value="St Helena">St Helena</option>
						   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
						   <option value="St Lucia">St Lucia</option>
						   <option value="St Maarten">St Maarten</option>
						   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
						   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
						   <option value="Saipan">Saipan</option>
						   <option value="Samoa">Samoa</option>
						   <option value="Samoa American">Samoa American</option>
						   <option value="San Marino">San Marino</option>
						   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
						   <option value="Saudi Arabia">Saudi Arabia</option>
						   <option value="Senegal">Senegal</option>
						   <option value="Seychelles">Seychelles</option>
						   <option value="Sierra Leone">Sierra Leone</option>
						   <option value="Singapore">Singapore</option>
						   <option value="Slovakia">Slovakia</option>
						   <option value="Slovenia">Slovenia</option>
						   <option value="Solomon Islands">Solomon Islands</option>
						   <option value="Somalia">Somalia</option>
						   <option value="South Africa">South Africa</option>
						   <option value="Spain">Spain</option>
						   <option value="Sri Lanka">Sri Lanka</option>
						   <option value="Sudan">Sudan</option>
						   <option value="Suriname">Suriname</option>
						   <option value="Swaziland">Swaziland</option>
						   <option value="Sweden">Sweden</option>
						   <option value="Switzerland">Switzerland</option>
						   <option value="Syria">Syria</option>
						   <option value="Tahiti">Tahiti</option>
						   <option value="Taiwan">Taiwan</option>
						   <option value="Tajikistan">Tajikistan</option>
						   <option value="Tanzania">Tanzania</option>
						   <option value="Thailand">Thailand</option>
						   <option value="Togo">Togo</option>
						   <option value="Tokelau">Tokelau</option>
						   <option value="Tonga">Tonga</option>
						   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
						   <option value="Tunisia">Tunisia</option>
						   <option value="Turkey">Turkey</option>
						   <option value="Turkmenistan">Turkmenistan</option>
						   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
						   <option value="Tuvalu">Tuvalu</option>
						   <option value="Uganda">Uganda</option>
						   <option value="United Kingdom">United Kingdom</option>
						   <option value="Ukraine">Ukraine</option>
						   <option value="United Arab Erimates">United Arab Emirates</option>
						   <option value="United States of America">United States of America</option>
						   <option value="Uraguay">Uruguay</option>
						   <option value="Uzbekistan">Uzbekistan</option>
						   <option value="Vanuatu">Vanuatu</option>
						   <option value="Vatican City State">Vatican City State</option>
						   <option value="Venezuela">Venezuela</option>
						   <option value="Vietnam">Vietnam</option>
						   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
						   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
						   <option value="Wake Island">Wake Island</option>
						   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
						   <option value="Yemen">Yemen</option>
						   <option value="Zaire">Zaire</option>
						   <option value="Zambia">Zambia</option>
						   <option value="Zimbabwe">Zimbabwe</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" class="form-control" placeholder="House number and street name">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" placeholder="Enter Town / City">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" placeholder="Enter Postcode">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" class="form-control" placeholder="Mobile Number">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" class="form-control" placeholder="Email Address">
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
										<div class="radio">
										 
										  <label><input type="radio" name="optradio">&nbsp;Confirm this address as Default</label>
										</div>
									</div>
                </div>
	            </div>
	          </form><!-- END -->



	          <div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-6 d-flex">
	          		<div class="cart-detail cart-total bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Bill Total</h3>
	          			<p class="d-flex">
		    						<span>Subtotal</span>
		    						<span>&#x20B9;1200.00</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Delivery</span>
		    						<span>&#x20B9;0.00</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Discount</span>
		    						<span>&#x20B9;360.00</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Total</span>
		    						<span>&#x20B9;840.00</span>
		    					</p>
								</div>
	          	</div>
	          	<div class="col-md-6">
	          		<div class="cart-detail bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Cash on Delivery</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
											</div>
										</div>
									</div>
									<p><a href="#"class="btn btn-primary py-3 px-4" onclick="alert('Your Order has been placed. Thank you for Shopping. &#128516;');">Place an order</a></p>
								</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

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
    
  </body>
</html>
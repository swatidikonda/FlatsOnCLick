<!DOCTYPE html>
<html lang="en">
<head>
<title>FlatsOnClick</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="myHOME - real estate template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>
<body>

<div class="super_container">
	<div class="super_overlay"></div>
	
	<!-- Header -->

	<header class="header">
		
	
		<!-- Header Content -->
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">Flats<span>OnClick</span></a></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
				 <li><div ><a href="#">Customer Login</a></div></li>
				 <li><div ><a href="#">Featured Properties</a></div></li>
				 <li><div ><a href="#">The Best Deals</a></div></li>
				 
				</ul>
			</nav>
			
			<div class="submit ml-auto"><a href="#"> LogOut</a></div>
			<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
		</div>

	</header>

	<!-- Menu -->
	<div class="menu text-right">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_log_reg">
			<div class="log_reg d-flex flex-row align-items-center justify-content-end">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					
				</ul>
			</div>
			<nav class="menu_nav">
				<ul>
					<li><a href="index.html">LogOut</a></li>
					<li><a href="about.html">Customer Login</a></li>
				
				</ul>
			</nav>
		</div>
	</div>


	<!-- Home -->
     <div class="container-fluid">
	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			 <div class="owl-carousel owl-theme home_slider">
			 	
			 	<!-- Slide -->
			 	<div class="slide">
			 		<div class="background_image" style="background-image:url(images/owen-cl-123303-unsplash.jpg)"></div>
			 		<div class="home_container">
			 			<div class="container">
			 				<div class="row">
			 					<div class="col">
			 						
			 					</div>
			 				</div>
			 			</div>
			 		</div>
			 	</div>

			 	<!-- Slide -->
			 	<div class="slide">
			 		<div class="background_image" style="background-image:url(images/index.jpg)"></div>
			 		<div class="home_container">
			 			<div class="container">
			 				<div class="row">
			 					<div class="col">
			 						
			 						</div>
			 					</div>
			 				</div>
			 			</div>
			 		</div>
			 	</div>

			 	<!-- Slide -->
			 	<div class="slide">
			 		<div class="background_image" style="background-image:url(images/jon-flobrant-193461-unsplash.jpg)"></div>
			 		<div class="home_container">
			 			<div class="container">
			 				<div class="row">
			 					<div class="col">
			 						
			 						</div>
			 					</div>
			 				</div>
			 			</div>
			 		</div>
			 	</div>

			 </div>

			 <!-- Home Slider Navigation -->
			 <div class="home_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
			 
		</div>
	</div>
   </div>
	<!-- Search -->

	<div class="search">
	<div class="container-fluid">
		<div class="row">
		 <div class="col">
			<div class="search_container">
				<div class="search_form_container">
					<form action="#" class="search_form" id="search_form">
					<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
					 <div class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
			<div class="container">
				<div class="advanced_search">
					<h3>Search Properties for</h3>
					<div class="search_select">
						<select class="s_select form-control">
							<option value="1">Choose Locations</option>
							<option value="2">Property Type</option>
							<option value="4">Bedrooms</option>
						</select>
						<select class="s_select form-control">
							<option value="1">Property Type</option>
							<option value="2">Choose Locations</option>
							<option value="4">Bedrooms</option>
						</select>
						<select class="s_select form-control">
							<option value="1">Bedrooms</option>
							<option value="2">Property Type</option>
							<option value="4">Choose Locations</option>
						</select>
						<select class="s_select form-control">
							<option value="1">Bathrooms</option>
							<option value="2">Property Type</option>
							<option value="4">Bedrooms</option>
						</select>
					</div>
					  
					   <div class="slidecontainer">
					   <div class="range_item">
							<h5>Price Range</h5>
                       </div> 		 
                       <input type="range" min="1" max="1000000000" value="100000" class="slider" id="myRange">
                       <p>Price Range: <span id="demo"></span></p>
					   </div>
					   
					   <div class="slidecontainer">
					   <div class="range_item">
							<h5>property Area</h5>
                       </div> 		 
                       <input type="range" min="1" max="1000000000" value="100000" class="slider" id="myRange1">
                       <p>Price Range: <span id="demo1"></span></p>
					   </div>
					          <style>
						           .slidecontainer {
                                     width: 100%;
                                          }

									.slider {
									-webkit-appearance: none;
									width: 100%;
									height: 10px;
									border-radius: 5px;
									background: #d3d3d3;
									outline: none;
									opacity: 0.7;
									-webkit-transition: .2s;
									transition: opacity .2s;
									}

								.slider:hover {
								opacity: 1;
								}

								.slider::-webkit-slider-thumb {
								-webkit-appearance: none;
								appearance: none;
								width: 23px;
								height: 24px;
								border: 0;
								background:#adc867;
								cursor: pointer;
								}

								.slider::-moz-range-thumb {
								width: 23px;
								height: 24px;
								border: 0;
								background:#f5204b;
								cursor: pointer;
								}
					  </style> 
					 <script type="text/javascript">  

					 var slider = document.getElementById("myRange");
                      var output = document.getElementById("demo");
                     output.innerHTML = slider.value;

                       slider.oninput = function() {
                      output.innerHTML = this.value;
					  }
					  var slider1 = document.getElementById("myRange1");
                      var output1 = document.getElementById("demo1");
                     output1.innerHTML = slider1.value;

                       slider1.oninput = function() {
                      output1.innerHTML = this.value;
                      }
                     
					 </script>
					 
					</div>
					<button type="submit" value="submit" class="btn submit_btn slider_button">Search Property</button>
				</div>
            </div>									
  
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Featured -->

	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">the best deals</div>
						<div class="section_title"><h1>Featured Properties</h1></div>
					</div>
				</div>
			</div>
			<div class="row featured_row">
				
				<!-- Featured Item -->
				<div class="col-lg-4">
					<div class="listing">
						<div class="listing_image">
							<div class="listing_image_container">
								<img src="images/listing_1.jpg" alt="">
							</div>
							<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
							
								<div class="tag tag_sale"><a href="listings.html">Lodha Amara</a></div>
							</div>
							<div class="tag_price listing_price">₹ 76.9 Lac </div>
						</div>
						<div class="listing_content">
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<img src="images/icon_1.png" alt="">
								<a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
							</div>
							
						</div>
					</div>
				</div>

				<!-- Featured Item -->
				<div class="col-lg-4">
					<div class="listing">
						<div class="listing_image">
							<div class="listing_image_container">
								<img src="images/listing_2.jpg" alt="">
							</div>
							<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
							
								<div class="tag tag_rent"><a href="listings.html">Samraat Apna Ghar</a></div>
							</div>
							<div class="tag_price listing_price">₹ 26.9 Lac</div>
						</div>
						<div class="listing_content">
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<img src="images/icon_1.png" alt="">
								<a href="single.html">4812 Haul Road Saint Paul, MN 55102</a>
							</div>
							
						</div>
					</div>
				</div>

				<!-- Featured Item -->
				<div class="col-lg-4">
					<div class="listing">
						<div class="listing_image">
							<div class="listing_image_container">
								<img src="images/listing_3.jpg" alt="">
							</div>
							<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
								
								<div class="tag tag_sale"><a href="listings.html">The Baya Victoria</a></div>
							</div>
							<div class="tag_price listing_price">₹ 28.9 Lac</div>
						</div>
						<div class="listing_content">
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<img src="images/icon_1.png" alt="">
								<a href="single.html">4067 Wolf Pen Road Mountain View, CA 94041</a>
							</div>
							
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Map Section -->

	<div class="map_section container_reset">
		<div class="container">
			<div class="row row-xl-eq-height">

				<!-- Map -->
				<div class="col-xl-7 order-xl-1 order-2">
					<div class="map">
						<div id="google_map" class="google_map">
							<div class="map_container">
								<div id="map"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Content -->
				<div class="col-xl-5 order-xl-2 order-1">
					<div class="map_section_content">
						<div class="map_overlay">
							<svg fill="#55407d" width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
								<path d="M100,0 a-200,150 0 0 0 -100,100 h100 v-100 z" />
							</svg>
						</div>
						<div class="section_title_container">
							<div class="section_subtitle">the best deals</div>
							<div class="section_title"><h1>Choose a location</h1></div>
						</div>
						<div class="locations_list d-flex flex-column align-items-start justify-content-start">
							<label class="location_contaner" data-lat="25.794923" data-lng="-80.133661"> 
								<input type="radio" name="location_radio">
								<span></span>
								Downtown Miami
							</label>
							<label class="location_contaner" data-lat="41.872883" data-lng="-87.660943">
								<input type="radio" name="location_radio">
								<span></span>
								Chicago
							</label>
							<label class="location_contaner" data-lat="40.779528" data-lng="-73.960561">
								<input type="radio" name="location_radio" checked>
								<span></span>
								Manhattan - New York
							</label>
							<label class="location_contaner" data-lat="34.082539" data-lng="-118.380126">
								<input type="radio" name="location_radio">
								<span></span>
								West Hollywood
							</label>
							<label class="location_contaner" data-lat="38.910263" data-lng="-77.020496">
								<input type="radio" name="location_radio">
								<span></span>
								Washington
							</label>
							<label class="location_contaner" data-lat="39.296713" data-lng="-76.634918">
								<input type="radio" name="location_radio">
								<span></span>
								Maryland
							</label>
							<label class="location_contaner" data-lat="37.806964" data-lng="-122.411291">
								<input type="radio" name="location_radio">
								<span></span>
								San Francisco
							</label>
							<label class="location_contaner" data-lat="33.627738" data-lng="-117.909449">
								<input type="radio" name="location_radio">
								<span></span>
								Orange County
							</label>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Hot -->

	<div class="hot">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">the best deals</div>
						<div class="section_title"><h1>Today's Hot Deal</h1></div>
					</div>
				</div>
			</div>
			<div class="row hot_row row-eq-height">
				
				<!-- Hot Deal Image -->
				<div class="col-lg-6">
					<div class="hot_image">
						<div class="background_image" style="background-image:url(images/hot.jpg)"></div>
						<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
							<div class="tag tag_house"><a href="listings.html">house</a></div>
							<div class="tag tag_sale"><a href="listings.html">for sale</a></div>
						</div>
					</div>
				</div>

				<!-- Hot Deal Content -->
				<div class="col-lg-6">
					<div class="hot_content">
						<div class="hot_deal">
							<div class="tag_price">₹ 562 346</div>
							<div class="hot_title"><a href="#">Villa for sale</a></div>
							<div class="prop_location d-flex flex-row align-items-start justify-content-start">
								<img src="images/icon_1.png" alt="">
								<span>280 Doe Meadow Drive Landover, MD 20785</span>
							</div>
							<div class="prop_text">
								<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
							</div>
							<div class="prop_agent d-flex flex-row align-items-center justify-content-start">
								<div class="prop_agent_image"><img src="images/agent_1.jpg" alt=""></div>
								<div class="prop_agent_name"><a href="#">Maria Smith,</a> Agent</div>
							</div>
						</div>
						
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials container_reset">
		<div class="container">
			<div class="row row-eq-height">
				
				<!-- Testimonials Image -->
				<div class="col-xl-6">
					<div class="testimonials_image">
						<div class="background_image" style="background-image:url(images/testimonials.jpg)"></div>
						<div class="testimonials_image_overlay"></div>
					</div>
				</div>

				<!-- Testimonials Content -->
				<div class="col-xl-6">
					<div class="testimonials_content">
						<div class="section_title_container">
							<div class="section_subtitle">the best deals</div>
							<div class="section_title"><h1>Clients testimonials</h1></div>
						</div>

						<!-- Testimonials Slider -->
						<div class="testimonials_slider_container">
							<div class="owl-carousel owl-theme test_slider">
								
								<!-- Slide -->
								<div class="test_slide">
									<div class="test_quote">"They helped us find our home"</div>
									<div class="test_text">
										<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
									</div>
									<div class="test_author"><a href="#">Cristinne Smith</a>, Client</div>
								</div>

								<!-- Slide -->
								<div class="test_slide">
									<div class="test_quote">"They helped us find our home"</div>
									<div class="test_text">
										<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
									</div>
									<div class="test_author"><a href="#">Cristinne Smith</a>, Client</div>
								</div>

								<!-- Slide -->
								<div class="test_slide">
									<div class="test_quote">"They helped us find our home"</div>
									<div class="test_text">
										<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
									</div>
									<div class="test_author"><a href="#">Cristinne Smith</a>, Client</div>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					
					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_about">
							<div class="footer_logo"><a href="#">my<span>home</span></a></div>
							<div class="footer_text">
								<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
							</div>
							<div class="social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="footer_submit"><a href="#">submit listing</a></div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_column">
							<div class="footer_title">Information</div>
							<div class="footer_info">
								<ul>
									<!-- Phone -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/phone-call.svg" alt=""></div>
										<span>+546 990221 123</span>
									</li>
									<!-- Address -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/placeholder.svg" alt=""></div>
										<span>Main Str, no 23, New York</span>
									</li>
									<!-- Email -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/envelope.svg" alt=""></div>
										<span>hosting@contact.com</span>
									</li>
								</ul>
							</div>
							<div class="footer_links usefull_links">
								<div class="footer_title">Usefull Links</div>
								<ul>
									<li><a href="#">Testimonials</a></li>
									<li><a href="#">Listings</a></li>
									<li><a href="#">Featured Properties</a></li>
									<li><a href="#">Contact Agents</a></li>
									<li><a href="#">About us</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_links">
							<div class="footer_title">Properties Types</div>
							<ul>
								<li><a href="#">Properties for rent</a></li>
								<li><a href="#">Properties for sale</a></li>
								<li><a href="#">Commercial</a></li>
								<li><a href="#">Homes</a></li>
								<li><a href="#">Villas</a></li>
								<li><a href="#">Office</a></li>
								<li><a href="#">Residential</a></li>
								<li><a href="#">Appartments</a></li>
								<li><a href="#">Off plan</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_title">Featured Property</div>
						<div class="listing_small">
							<div class="listing_small_image">
								<div>
									<img src="images/listing_1.jpg" alt="">
								</div>
								<div class="listing_small_tags d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="listing_small_tag tag_house"><a href="listings.html">house</a></div>
									<div class="listing_small_tag tag_sale"><a href="listings.html">for sale</a></div>
								</div>
								<div class="listing_small_price">$ 562 346</div>
							</div>
							<div class="listing_small_content">
								<div class="listing_small_location d-flex flex-row align-items-start justify-content-start">
									<img src="images/icon_1.png" alt="">
									<a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
								</div>
								<div class="listing_small_info">
									<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_3.png" alt="">
											<span>2</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_4.png" alt="">
											<span>5</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_5.png" alt="">
											<span>2</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
							<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							<nav class="footer_nav order-md-2 order-1 ml-md-auto">
								<ul class="d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About us</a></li>
									<li><a href="listings.html">Listings</a></li>
									<li><a href="blog.html">News</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/custom.js"></script>
</body>
</html>
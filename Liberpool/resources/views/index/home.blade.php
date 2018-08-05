<?php

session_start();
if(!$_SESSION['test1']){
 header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>LiberPool | Home</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="css/bootstrap.css"> 
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.css"> 


<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> 
<!-- //js -->
</head>
<body>
<!-- header -->
<div class="header">
	<div class="agile-top-header">
	<div class="banner-agile-top">
		<div class="number">
			<h3><i class="fa fa-phone" aria-hidden="true"></i> +67 933 123 5530</h3>
		</div>
				<div class="top-icons">
				<ul>
					<li><a href="https://www.facebook.com/igiurquia"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/igiurquia"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="https://www.linkedin.com/in/luigi-anthony-urquia/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
	</div>
		<div class="logo">
			<h1><a href="index.html">Liber<span>Pool</span></a></h1>
		</div>
		<!-- navigation -->
		<div class="top-left">
			<div class="top-nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
								
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						 <nav class="linkEffects linkHoverEffect_2">
							<ul>
								<li><a href="#" data-link-alt="Home" class="active"><span>Home</span></a></li> 
								<li><a href="#about" data-link-alt="about" class="scroll"><span>About</span></a></li> 
								<li><a href="#services" data-link-alt="services" class="scroll"><span>Services</span></a></li> 
								<li><a href="#gallery" data-link-alt="Book Now" class="scroll"><span>Book Now</span></a></li> 
								<li><a href="#testimonials" data-link-alt="testimonials" class="scroll"><span>Testimonials</span></a></li> 
								<li><a href="#contact" data-link-alt="Contact Us" class="scroll"><span>Contact Us</span></a></li> 
								<li><a href="../login-reg/logout_session.php" data-link-alt="Logout" class="scroll"><span>Logout</span></a></li> 
							</ul>
						</nav>
						
					</div>
				</nav>
				<div class="search">
						<form action="#" method="post">
							<input type="search" placeholder="Search..." name="Search" required="">
							<input type="submit" value="">
						</form>
					</div>
					<div class="clearfix"> </div>	
				</div>

			</div>
			<div class="clearfix"> </div>	
			<!-- //navigation -->
		</div>
	</div>
	<!--Slider-->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<div class="slider-info">
							<h3>Welcome to LiberPool</h3>
						    <p>LiberPool is a pool booking web application that provides convinience through online booking.</p>
							<div class="readmore-w3">
								<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-info1">
							<h3>Welcome to LiberPool</h3>
							<p>LiberPool lessens cancellation of trips by letting its users pre-plan their trips.</p>
							<div class="readmore-w3">
								<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-info2">
							<h3>Welcome to LiberPool</h3>
							<p>Get going and have the greatest vacation as much as you can!</p>
							<div class="readmore-w3">
								<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
							</div>
						</div>
					</li>
				</ul>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Our Dream for Our Users</h4>
										<img src="images/popup.jpg" alt=" " class="img-responsive"/>
										<p>LiberPool is one of the most simple and easy-to-use pool booking web application out there. It provides convenience by having a user friendly and pleasing to the eye features
										that lets the user book their preferred pool with ease. So, Get going and have fun with you friends or relatives because LiberPool is here as your companion.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- //Modal1 -->
			</div>
			<div class="clearfix"></div>
</div>		

		
<!-- //header -->
<!-- /about -->
<div class="w3-aglile-about" id="about">
	<div class="w3-agile-about-grids">
		<div class="w3-aglie-about-grid1">
			<div class="col-md-6 w3-about-text-grid">
				<h3>About us</h3>
				<p>Have you ever experienced cancellations of outings due to the lack of prior planning? Worry no more. LiberPool is a pool booking application that helps people who want to book for a pool without going to the actual place. </p>
					<p>The team's idea is to give the user in advance the ability to plan their trip by giving sufficient information regarding the pool that they are going to book. The team is looking forward for the further improvement of this application and it is only made possible with your help.
				 </p>
			</div>
			<div class="col-md-6 w3-aglie-about-img-grid1">
		
			</div>
			<div class="clearfix"></div>
		</div>
		
</div>
<!-- /about -->
<!-- /services -->
<div class="services" id="services">
	<div class="container">
	<div class="services-agile-head">
		<h3>Services</h3>
	</div>
		<div class="w3-agile-grids">
			<div class="col-md-6 w3-agile-services-left">
				<div class="w3-services-text">
				<ul class="services-head">
					<li><h3>We</h3></li>
					<li> <h5>are here</h5> </li>
					<li><h5>for you</h5></li>
				</ul>
					<p>LiberPool is an online booking application made specifically for vacationers, group of friends, etc. who want to 
					book as early as possible their preffered pool to ensure that the preferred trip will not go to drain. As far as LiberPool's continous service goes, here are some services that LiberPool provides to its users:</p>
				</div>
				<div class="col-md-4 services-icon1">
					<i class="fa fa-h-square" aria-hidden="true"></i>
					<h4>Helping users</h4>
				</div>
				<div class="col-md-4 services-icon1">
					<i class="fa fa-briefcase" aria-hidden="true"></i>
					<h4>Online Booking</h4>
				</div>
				<div class="col-md-4 services-icon1">
						<i class="fa fa-plane" aria-hidden="true"></i>
					<h4>Prevents cancellation of trips</h4>
				</div>
		
			</div>
			<div class="col-md-6 w3-agile-services-right">
				<img src="images/ab1.jpg" alt="services">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //services-->
<!-- Gallery -->
<div id="gallery" class="gallery">
	<div class="container">
		<div class="agileits-gal-title">
			<h3>Book Now</h3>
		</div> 
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Rooms</span></li>
					<li class="resp-tab-item"><span>Small Pools</span></li>
					<li class="resp-tab-item"><span>Medium Pools</span></li>
					<li class="resp-tab-item"><span>Large Pools</span></li>				
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						<div class="col-md-6 portfolio-grids">
								<div class="gallery-text-agile agile-offer1">
								<h3>Double Room<span>5,500Php/per night</span></h3>
								<p>Fresh local baby whiting fillets in a sesame and parsley crumb s/w chips salad lemon and tartare... This is a lunch that will leave you asking for mor...</p>
								<ul>
								<li>Adults: 3</li>
								<li>Facilites: Closet with hangers, Digital Personal Safe, HD flat-screen TV (including Satellite TV), Telephone</li>
								<li>Size: 30m²</li>
								<li>Bed Type: two bed</li>
								<li>Categories: Double, Single</li>
								</ul>
								</div>
								</div>
								<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img1">
									<div class="offer-gallery-img1">
									</div>
									
								</div>
							<div class="clearfix"></div>
							<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img2">
								<div class="offer-gallery-img2">
									</div>
								</div>
								<div class="col-md-6 portfolio-grids">
								<div class="gallery-text-agile agile-offer1">
								<h3>single Room<span>$4,500Php/per night</span></h3>
								<p>Fresh local baby whiting fillets in a sesame and parsley crumb s/w chips salad lemon and tartare... This is a lunch that will leave you asking for mor...</p>
								<ul>
								<li>Adults: 2</li>
								<li>Facilites: Closet with hangers, Digital Personal Safe, HD flat-screen TV (including Satellite TV), Telephone</li>
								<li>Size: 30m²</li>
								<li>Bed Type: One bed</li>
								<li>Categories: Double, Single</li>
								</ul>
								</div>
								</div>
								<div class="clearfix"></div>
						</div>
					<div class="tab-2 resp-tab-content">
						<div class="col-md-6 portfolio-grids">
								<div class="gallery-text-agile agile-offer1">
								<h3>Bells Mini Resort and Apartments<span>2,500Php</span></h3>
								<p>Schedule: 6AM-7PM (Weekdays) / 6AM-6PM Day - 6PM-6AM Night (Weekends) Located at: 1109 Cabuco St. Caridad, Cavite City, Cavite City, 4100 Cavite </p>
								</div>
								<div class="gallery-text-agile agile-offer2">
								<h3>Fort Max Resort<span>2,000Php</span></h3>
								<p>Schedule: 6AM-7PM (Weekdays) / 6AM-6PM Day - 6PM-6AM Night (Weekends) Located at: Amsterdam, Parañaque, 1709 Metro Manila</p>
								
								</div>
								<div class="gallery-text-agile agile-offer3">
								<h3>Aqua Sphere<span>2,000Php</span></h3>
								<p>Schedule: 6AM-7PM (Weekdays) / 6AM-6PM Day - 6PM-6AM Night (Weekends) Located at: 1879 M. H. Del Pilar St, Malate, Manila, 1004 Metro Manila</p>

								</div>
								</div>
								<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img3">
									<div class="offer-gallery-img3">
									</div>
								</div>
							<div class="clearfix"></div>
						</div>
						<div class="tab-3 resp-tab-content">
						<div class="col-md-6 portfolio-grids">
								<div class="gallery-text-agile agile-offer1">
								<h3>Aqua Pools<span>5,500Php</span></h3>
								<p>Schedule: 6AM-7PM (Weekdays) / 6AM-6PM Day - 6PM-6AM Night (Weekends) Located at: J & M Mendoza Building, Dona Soledad Avenue, Parañaque, 1700 Metro Manila
								</p>
								</div>
								<div class="gallery-text-agile agile-offer2">
								<h3>Azure Wave Pool<span>5,000Php</span></h3>
								<p>Schedule: 6AM-7PM (Weekdays) / 6AM-6PM Day - 6PM-6AM Night (Weekends) Located at: 1700, 1732 W Service Rd, Parañaque, 1700 Kalakhang Maynila</p>
								
								</div>
								<div class="gallery-text-agile agile-offer3">
								<h3>Aniro Garden Resort<span>5,350Php</span></h3>
								<p>Schedule: 6AM-7PM (Weekdays) / 6AM-6PM Day - 6PM-6AM Night (Weekends) Located at: J.P Rizal, Las Pinas, 1740 Metro Manila</p>

								</div>
								</div>
								<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img4">
									<div class="offer-gallery-img4">
									</div>
								</div>
							<div class="clearfix"></div>
					</div>
					<div class="tab-4 resp-tab-content">
						<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img5">
									<div class="offer-gallery-img5">
									</div>
								</div>
								<div class="col-md-6 portfolio-grids">
									<div class="gallery-text-agile agile-offer1">
									<h3>Moonriver Resort<span>8,399Php</span></h3>
									<p>Schedule: 6AM-7PM (Weekdays) / 6AM-6PM Day - 6PM-6AM Night (Weekends) Located at: Palanas Street, Anabu 1-A, Imus, 4103 Cavite</p>
									</div>
									<div class="gallery-text-agile agile-offer2">
										<h3>Bosay<span>$8,999Php</span></h3>
										<p>Schedule: 6AM-7PM (Weekdays) / 6AM-6PM Day - 6PM-6AM Night (Weekends) Located at: Marigman Rd. Ext. Brgy. San Roque Antipolo City, Antipolo, Rizal</p>
								
									</div>
									<div class="gallery-text-agile agile-offer3">
										<h3>Emiart Private Resort<span>6,500Php</span></h3>
										<p>Schedule: 6AM-7PM (Weekdays) / 6AM-6PM Day - 6PM-6AM Night (Weekends) Located at: 94 Pasig St, 35 Zone 3, Caloocan, 1400 Metro Manila</p>

									</div>
								</div>
						<div class="clearfix"> </div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img1 ">
						
						</div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img2">
						
						</div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img3">
						
						</div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img4">
						
						</div>
						<div class="clearfix"> </div>
			     </div>
	</div>

</div>
						
</div>
</div>
</div>
<!-- //Gallery -->

<!-- Testimonials -->
	<div id="review" class="jarallax reviews agile-1" >
				<div class="w3-agile-test-monials" id="testimonials">
					<div class="client-review-head">
						<h3>What Our User Says</h3>
						<div class="sreen-gallery-cursual">
						       <div id="owl-demo" class="owl-carousel">
					                 <div class="item-owl">
					                		<div class="test-review wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
											   <p><img src="images/left-quotes.png" alt=""> LiberPool is one of the most easy and simple booking application that I have every used. This is a must use!<img src="images/right-quotes.png" alt=""></p>
						                	  <img src="images/test2.jpg" class="img-responsive" alt=""/>
											  <h5>Luigi Anthony d'Simplie</h5>
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
										 <p> <img src="images/left-quotes.png" alt="">Now I do not have to worry anymore about us not being able to get to plan our trip. No more cancellation of trips thanks a lot to LiberPool! 5/5 Stars for me.<img src="images/right-quotes.png" alt=""></p>
						                	<img src="images/test1.jpg" class="img-responsive" alt=""/>
											 <h5>Aaron the Generous</h5>
					                	</div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
										     <p><img src="images/left-quotes.png" alt=""> I thank the team that created this application! It not just help me on booking with the pool that I want but it also helps me and my friends be more motivated when it comes to going to trips since booking now doesn't need us to go to the actual place anymore! Great job for this! <img src="images/right-quotes.png" alt=""></p>
						                	<img src="images/test3.jpg" class="img-responsive" alt=""/>
											 <h5>Boss Louis</h5>
					                	</div>
					                </div>
				              </div>
						<!--//screen-gallery-->
					</div>
				</div>
				<div class="clearfix"> </div>
		</div>
</div>
<!-- //Testimonials -->


<!-- js files -->
	<!-- For-Banner -->
		 <script src="js/responsiveslides.min.js"></script>
		 <script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  $("#slider").responsiveSlides({
				auto: true,
				manualControls: '#slider3-pager',
			  });
			});
		  </script>
	<!-- //For-Banner -->
		<!-- contact form -->
<div class="contact-form" id="contact-form">
	<div class="container">
		<div class="contact-agileits-title"> 
			<h3>Contact Us</h3> 
		</div>	
		<div class="clearfix"></div>
		       <!--get in touch start here-->
			<div class="get-touch" id="contact1">
					<div class="get-touch-main">
						<div class="get-touch-bottom">
							<form action="#" method="post">
							<input type="text" placeholder="First Name" name="First Name" required="">
							<input type="text" class="no-mar" placeholder="Last Name" required="">
							<input type="text" placeholder="Phone Number" name="phone" required="">
							<input type="email" class="no-mar" placeholder="Email" name="Email" required="">
							<textarea placeholder="Message" name="Message" required="" ></textarea>
							<input type="submit" value="Submit">
							</form>
						</div>
					</div>
			</div>
<!--get in touch end here-->
	</div>
</div>

	<!-- contact -->
<div class="contact" id="contact">
		<div class="map">
			<iframe src="https://www.google.com/maps?q=3 Humabon, Makati, 1232 Kalakhang Maynila, Philippines&output=embed"></iframe>
		
			<div class="container">
				<div class="agileinfo_map_color">
					<div class="agileinfo_map_color_grid">
						<div class="col-md-6 contact-up">
							<div class="agileinfo_map_color_grid_left">
								<h4>Contact us</h4>
							<p>3 Humabon Street, Asia Pacific College <span>Makati City, Philippines</span></p>
							<p>+00 1111 222</p>
							<p>+12 322 3333</p>
								
							</div>
						</div>
						<div class="col-md-6 contact-up1">
							<div class="agileinfo_map_color_grid_left">
								<h4>Mail us</h4>
								<p><a href="mailto:example@mail.com"> mail@example.com</a></p>
								<h4>catch on</h4>
								<ul class="map-top-icon">
								<li><i class="fa fa-facebook" aria-hidden="true"></i></li>
								<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
								<li><i class="fa fa-google-plus" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		
</div>
<!-- //contact -->
<!--footer-->
<div class="footer-w3">
	<p>&copy; 2018 LiberPool. All rights reserved | Design by: BackMen</a></p>
</div>
<!--//footer-->
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});		
		</script>
		<!-- //script for portfolio -->
	<!-- //For-Gallery-js -->
<!-- for-Testimonials -->
			<!-- required-js-files-->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			<!--//required-js-files-->
		<!-- //for-Testimonials -->
<!-- Calendar -->
			<link rel="stylesheet" href="css/jquery-ui.css" />
			<script src="js/jquery-ui.js"></script>
			  <script>
					  $(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
					  });
			  </script>
		<!-- //Calendar -->
		 <!-- start-smoth-scrolling -->
				<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
		<!-- start-smoth-scrolling -->
		<!-- smooth scrolling-bottom-to-top -->
				<script type="text/javascript">
					$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/								
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				<script src="js/SmoothScroll.min.js"></script>



</body>
</html>
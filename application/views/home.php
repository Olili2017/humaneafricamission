<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
    <head>
        <title>Human Africa Mission</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="<?php echo base_url(); ?>assets/css/iconeffects.css" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />	
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swipebox.css">
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
        <!--/web-font-->
            <link href='//fonts.googleapis.com/css?family=Italianno' rel='stylesheet' type='text/css'>
            <link href='//fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <!--/script-->
        <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){		
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                        });
                    });
        </script>
        <!-- swipe box js -->
            <script src="<?php echo base_url(); ?>assets/js/jquery.swipebox.min.js"></script> 
                <script type="text/javascript">
                    jQuery(function($) {
                        $(".swipebox").swipebox();
                    });
            </script>
        <!-- //swipe box js -->
        <!--animate-->
        <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
            <script>
                new WOW().init();
            </script>

    </head>
<body>
    <div class="banner" id="home">
		<div class="header-bottom wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">
		     <div class="container">
			  <div class="fixed-header">
			      <!--logo-->
			       <div class="logo">
                      <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo" height="80" /></a>
                      <!--a href="<?php echo base_url(); ?>"><h1>H<span>umane</span></h1></a>
					  <p>Africa mission</p-->
				   </div>
					<!--//logo-->
					<div class="top-menu">
							<span class="menu"> </span>
							<nav class="link-effect-4" id="link-effect-4">
                              <ul>
								 <li class="active"><a data-hover="Home" href="#home" class="scroll">Home</a></li>
								<li><a data-hover="About" href="#about" class="scroll">About</a></li>
								<li><a data-hover="services" href="#services" class="scroll">services</a></li>
								<li><a data-hover="Team" href="#team" class="scroll">Team</a></li>
							    <li><a data-hover="Donations" href="#reservation" class="scroll">Donations</a></li>
							    <li><a data-hover="Gallery" href="#gallery" class="scroll">Gallery</a></li>
								<li><a data-hover="Contact" href="#contact" class="scroll">Contact</a></li>

								</ul>
							</nav>
							</div>
							<!-- script-for-menu -->
								<script>
									$("span.menu").click(function(){
										$(".top-menu ul").slideToggle("slow" , function(){
										});
									});
								</script>
								<!-- script-for-menu -->

				 <div class="clearfix"></div>
					<script>
				$(document).ready(function() {
					 var navoffeset=$(".header-bottom").offset().top;
					 $(window).scroll(function(){
						var scrollpos=$(window).scrollTop(); 
						if(scrollpos >=navoffeset){
							$(".header-bottom").addClass("fixed");
						}else{
							$(".header-bottom").removeClass("fixed");
						}
					 });
					 
				});
				</script>
			 </div>
		</div>
	</div>
    <div class="banner-slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider4">
					    <li>
						   <div class="banner-info">
							      <h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Welcome</h3>
								  <p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">TO HUMANE AFRICA MISSION</p>
								     <div class="arrows wow slideInDown"  data-wow-duration="1s" data-wow-delay=".2s"><img src="<?php echo base_url(); ?>assets/images/border.png" alt="border"/></div>
								 <span class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">READY TO BE OPENED</span>
							  </div>
						</li>
						<li>
						   <div class="banner-info">
							    <h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Humanity with Humility</h3>
								 <p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">THIS IS HOME</p>
								  <div class="arrows wow slideInDown"  data-wow-duration="1s" data-wow-delay=".2s"><img src="<?php echo base_url(); ?>assets/images/border.png" alt="border"/></div>
								 <span class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">READY TO BE OPENED</span>
							  </div>
						</li>
						<li>
						   <div class="banner-info">
							      <h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Scroll Down</h3>
								  <p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">TAKE A TOUR</p>
								   <div class="arrows wow slideInDown"  data-wow-duration="1s" data-wow-delay=".2s"><img src="<?php echo base_url(); ?>assets/images/border.png" alt="border"/></div>
								   <span class="wow slideInUpslideInLeft"  data-wow-duration="1s" data-wow-delay=".3s">READY TO BE OPENED</span>
						   </div>
					  </li>
					</ul>
			  </div>
		<!--banner Slider starts Here-->
	  	<script src="<?php echo base_url(); ?>assets/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
	      <!--banner Slider starts Here-->
		 </div>

		 <div class="down"><a class="scroll" href="#services"><img src="<?php echo base_url(); ?>assets/images/down.png" alt=""></a></div>
	</div>

	</div>
<!--/products-->
		  <div class="about" id="about">
		     <div class="container">
			 <!--/about-section-->
			   <div class="about-section">
				<div class="col-md-7 ab-left">
				  <div class="grid">
			        <div class="h-f wow slideInLeft"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
					<img src="<?php echo base_url(); ?>assets/images/main1.jpg" alt="img25"/>
						<figcaption>
							<h4>humane <span>africa</span></h4>
							<p>When Jazz starts to chase cars, the whole world stands still.</p>
							
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="h-f wow slideInLeft"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
						<img src="<?php echo base_url(); ?>assets/images/main2.jpg" alt="img25"/>
						<figcaption>
							<h4>humane <span>africa</span></h4>
							<p>When Jazz starts to chase cars, the whole world stands still.</p>
							
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="clearfix"> </div>
				 </div>
			   </div>
			   <div class="col-md-5 ab-text">
			             <h3 class="tittle wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Welcome</h3>
						  <div class="arrows-two wow slideInDown"  data-wow-duration="1s" data-wow-delay=".5s"><img src="<?php echo base_url(); ?>assets/images/border.png" alt="border"/></div>
						  <p class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Humane Africa Mission is a non-political, non-descriminating charity organisation formed to address community health, livelihood and environmental challenges to deal with present environmental socio-economic problems in different parts of Uganda.</p>
						  <div class="start wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">
						     <a href="#services" class="hvr-bounce-to-bottom scroll">Get Started</a>
						  </div>

					</div>
					<div class="clearfix"> </div>
			 </div>
			  <!--//about-section-->
			  <!--/about-section2-->
			   <div class="about-section">
			        <div class="col-md-5 ab-text two">
			             <h3 class="tittle wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">About</h3>
						 <div class="arrows-two wow slideInDown"  data-wow-duration="1s" data-wow-delay=".5s"><img src="<?php echo base_url(); ?>assets/images/border.png" alt="border"/></div>
						 <h2>Mission</h2>
						 <p class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">H.A.M is working to assist the needy and neglected people at grassroot level and find access to sustain in the society with due dignity. Therefore H.A.M will take all necessary initiatives to empower community people to help them solve their own socio-economic problems towards poverty aleviation.</p>
						 <h2>Vision</h2>
						  <p class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">A healthy, productive and environment clean society free from poverty, socially and economically self reliant. </p>
						 <div class="start wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">
						     <a href="index.php/about/" class="hvr-bounce-to-bottom">Read more</a>
						  </div>

					</div>
						<div class="col-md-7 ab-left">
				  <div class="grid">
			        <div class="h-f  wow slideInRight"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
					<img src="<?php echo base_url(); ?>assets/images/s4.jpg" alt="img25"/>
						<figcaption>
							<h4>humane <span>africa</span></h4>
							<p>When Jazz starts to chase cars, the whole world stands still.</p>
							
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="h-f  wow slideInRight"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
						<img src="<?php echo base_url(); ?>assets/images/s3.jpg" alt="img25"/>
						<figcaption>
							<h4>humane <span>africa</span></h4>
							<p>When Jazz starts to chase cars, the whole world stands still.</p>
						
						</figcaption>			
					</figure>
				 </div>
				 <div class="clearfix"> </div>
				 </div>
			   </div>
					<div class="clearfix"> </div>
			 </div>
			  <!--//about-section2-->
			</div>
	     </div>
<!--//products-->
<!-- service-type-grid -->
	<div class="service" id="services">
		<div class="container">
		    <h3 class="tittle">What we do</h3>
			<div class="arrows-serve"><img src="<?php echo base_url(); ?>assets/images/border.png" alt="border"></div>
				<div class="inst-grids">
					<div class="col-md-3 services-gd text-center wow slideInLeft"  data-wow-duration="1s" data-wow-delay=".3s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="index.php/health/" class="hi-icon"><img src="<?php echo base_url(); ?>assets/images/health.png" alt=" " /></a>
						</div>
						<h4>Humane Health</h4>
						 <p>Health education and counselling of persons affected by HIV/AIDs.<br>Training to VHTs on phychosocial support and counselling. </p>
					</div>
					<div class="col-md-3 services-gd text-center wow slideInDown"  data-wow-duration="1s" data-wow-delay=".2s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="index.php/education/" class="hi-icon"><img src="<?php echo base_url(); ?>assets/images/serve2.png" alt=" " /></a>
						</div>
						<h4>Humane education</h4>
						 <p>Technical and vocational skills to the youth in northern Uganda to create more jobs.</p>
					</div>
					<div class="col-md-3 services-gd text-center wow slideInUp"  data-wow-duration="1s" data-wow-delay=".2s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="#" class="hi-icon"><img src="<?php echo base_url(); ?>assets/images/environment.png" alt=" " /></a>
						</div>
						<h4>Environment</h4>
						 <p>Preservation of the environment through encouraging the communities to plant more trees and.</p>
					</div>
					<div class="col-md-3 services-gd text-center wow slideInRight"  data-wow-duration="1s" data-wow-delay=".3s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="index.php/livelihood/" class="hi-icon"><img src="<?php echo base_url(); ?>assets/images/serve4.png" alt=" " /></a>
						</div>
						<h4>Livelihood</h4>
						 <p>We help people find better and more productive means of survival through providing reliable seedlings and pesticides</p>
					</div>
					<div class="clearfix"> </div>		
				</div>

		</div>
	</div>
<!-- //service-type-grid -->
 <!--start-services-->
	<div class="team-section" id="team">
	 	  <div class="container">
		  <h3 class="tittle">Vissionaries</h3>
		  <div class="arrows-serve"><img src="<?php echo base_url(); ?>assets/images/border.png" alt="border"></div>
	 		<div class="box2">
	 		   <div class="col-md-3 s-1 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s">
			   <a href="#">
	 		   	<div class="view view-fifth">
                    <img src="<?php echo base_url(); ?>assets/images/MissingDisplayPic.png" alt="chef">
                    <div class="mask">
                        <h4>Felix Omodi</h4>
                        <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
                         <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
                     </div>
                   
				    </div>
				  </a>
			<h3>Executive director</h3>
				</div>
		<div class="col-md-3 s-2 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s">
		<a href="#">
	 		   	<div class="view view-fifth">
                      <img src="<?php echo base_url(); ?>assets/images/MissingDisplayPic.png" alt="chef">
                       <div class="mask">
                        <h4>Denis Omodi Alyela</h4>
                        <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
                         <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
                     </div>
               
				    </div>
				  </a>
				<h3>Director</h3>
				</div>
			  <div class="col-md-3 s-3 wow slideInRight" data-wow-duration="1s" data-wow-delay=".3s">
			  <a href="#">
	 		   	<div class="view view-fifth">
                     <img src="<?php echo base_url(); ?>assets/images/MissingDisplayPic.png" alt="chef">
                    <div class="mask">
                        <h4>Mr.jazz</h4>
                        <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
                         <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
                     </div>
                  
				    </div>
				  </a>
					<h3>Projects Cordinator</h3>
				</div>
				<div class="col-md-3 s-4 wow slideInRight" data-wow-duration="1s" data-wow-delay=".3s">
				 <a href="#">
	 		   	 <div class="view view-fifth">
                      <img src="<?php echo base_url(); ?>assets/images/MissingDisplayPic.png" alt="chef">
                    <div class="mask">
                        <h4>Rosie Wilson</h4>
                        <p>A wonderful serenity has taken possession of my entire soul,  I enjoy with my whole heart.</p>
                         <p class="p2">A wonderful serenity has taken possession of my entire soul, I enjoy with my whole heart.</p>
                     </div>
                   
				    </div>
				  </a>
					<h3>Administrator</h3>
				</div>
				<div class="clearfix"></div>
		     </div>
	 	    </div>
	 	</div>
	<!--end-team-->

<!--start-banner-bottom-->
   <!--/reviews-->
	<div id="review" class="reviews">
			   <div class="col-md-6 test-left-img">
			   </div>
				<div class="col-md-6 test-monials">
					<h3 class="tittle">Testimonials</h3>
					<div class="arrows-serve test"><img src="<?php echo base_url(); ?>assets/images/border.png" alt="border"></div>
				<!--//screen-gallery-->
						<div class="sreen-gallery-cursual">
							 <!-- required-js-files-->
							<link href="<?php echo base_url(); ?>assets/css/owl.carousel.css" rel="stylesheet">
							    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
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
						       <div id="owl-demo" class="owl-carousel">
					                 <div class="item-owl">
					                		<div class="test-review">
											   <p class="wow fadeInUp"  data-wow-duration=".8s" data-wow-delay=".4s"><img src="<?php echo base_url(); ?>assets/images/left-quotes.png" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <img src="<?php echo base_url(); ?>assets/images/right-quotes.png" alt=""></p>
						                	  <img src="<?php echo base_url(); ?>assets/images/scovia.jpg" class="img-responsive" alt=""/>
											  <h5 class="wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Scovia Achan</h5>
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review">
										 <p class="wow fadeInUp"  data-wow-duration=".8s" data-wow-delay=".4s"> <img src="<?php echo base_url(); ?>assets/images/left-quotes.png" alt="">Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<img src="<?php echo base_url(); ?>assets/images/right-quotes.png" alt=""></p>
						                	<img src="<?php echo base_url(); ?>assets/images/t2.jpg" class="img-responsive" alt=""/>
											 <h5 class="wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Sarah Achieng</h5>
					                	</div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review">
										     <p class="wow fadeInUp"  data-wow-duration=".8s" data-wow-delay=".4s"><img src="<?php echo base_url(); ?>assets/images/left-quotes.png" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <img src="<?php echo base_url(); ?>assets/images/right-quotes.png" alt=""></p>
						                	<img src="<?php echo base_url(); ?>assets/images/olili.jpg" class="img-responsive" alt=""/>
											 <h5 class="wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Daniel Olili</h5>
					                	</div>
					                </div>
				              </div>
						<!--//screen-gallery-->
					</div>
				</div>
				<div class="clearfix"> </div>
		</div>
<!--//reviews-->
<!-- [@donations] -->

<!--Gallery-->
<div class="gallery" id="gallery">
	<div class="container">
		<h3 class="tittle">Gallery</h3>
		<div class="arrows-serve"><img src="<?php echo base_url(); ?>assets/images/border.png" alt="border"></div>
				<div class="gallery-grids">
					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="<?php echo base_url(); ?>assets/images/pa3.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url(); ?>assets/images/pa3.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>humane africa</h4>
										<span class="separator"></span>
										<p>Humanity with hunility.. bringing back hope where it has been lost</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
						<a href="<?php echo base_url(); ?>assets/images/pa1.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url(); ?>assets/images/pa1.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>humane africa</h4>
										<span class="separator"></span>
										<p>The young and pure at heart all given a smile to brighten their lives</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="<?php echo base_url(); ?>assets/images/pa4.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url(); ?>assets/images/pa4.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>humane africa</h4>
										<span class="separator"></span>
										<p>Humanity with hunility.. bringing back hope where it has been lost</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
						<a href="<?php echo base_url(); ?>assets/images/pa7.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url(); ?>assets/images/pa7.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>humane africa</h4>
										<span class="separator"></span>
										<p>Humanity with hunility.. bringing back hope where it has been lost</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="<?php echo base_url(); ?>assets/images/pa9.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url(); ?>assets/images/pa9.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>humane africa</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
						<a href="<?php echo base_url(); ?>assets/images/pa8.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url(); ?>assets/images/pa8.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>humane africa</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="<?php echo base_url(); ?>assets/images/pa5.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url(); ?>assets/images/pa5.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>humane africa</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
						<a href="<?php echo base_url(); ?>assets/images/pa6.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url(); ?>assets/images/pa6.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>humane africa</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
<!-- //gallery -->

  <!--bottom-->
	    <div class="bottom">
		<div class="container">
		       <div class="bottom-top">
			    <h3 class=" wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">We Are On the move</h3>
				<span>RURAL VISITS</span>
				   <p class="wow slideInDown" data-wow-duration="1s" data-wow-delay=".5s">Our visits  to various rural districts of Uganda have started. Firstly, Lira district where we have so far reached out to nearly 90 families. Especially those with noding disease cases.</p>
				   <div class="start wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">
						     <a href="#" class="hvr-bounce-to-bottom">Read More</a>
						  </div>
			   </div>
		</div>
	</div>

	 <!--/contact-->
	 <div class="section-contact" id="contact">
	    <div class="container">
           <div class="contact-main">
				    <div class="col-md-6 contact-grid wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">
					<h3 class="tittle wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Contact Us</h3>
						<div class="arrows-three"><img src="<?php echo base_url(); ?>assets/images/border.png" alt="border"></div>
							<p class="wel-text wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".4s">Give us feedback to help us serve you better.</p>
						    <form id="filldetails" method="get" action="index.php/home/contact_send/" >
					  <div class="field name-box">
							<input type="text" id="name" placeholder="Who Are You?" required=""/>
							<label for="name">Name</label>
							<span class="ss-icon">check</span>
					  </div>
					  
					  <div class="field email-box">
							<input type="text" id="email" placeholder="example@email.com" required=""/>
							<label for="email">Email</label>
							<span class="ss-icon">check</span>
					  </div>
					  
					  <div class="field phonenum-box">
							<input type="text" id="phone" placeholder="Phone Number" required=""/>
							<label for="phone">Phone</label>
							<span class="ss-icon">check</span>
					  </div>

					  <div class="field msg-box">
							<textarea id="message" rows="4" placeholder="Your message goes here..." required=""></textarea>
							<label for="message">Message</label>
							<span class="ss-icon">check</span>
					  </div>
						<div class="send wow shake"  data-wow-duration="1s" data-wow-delay=".3s">
											<input type="submit" value="Send" >
										</div>
					 
			  </form>

					   </div>
					<div class="col-md-6 contact-in wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
						<h4 class="info">Our Info </h4>
						<p class="para1">Humane Africa Mission is a non-political, non-descriminating charity organisation formed to address community health, livelihood and environmental challenges to deal with present environmental socio-economic problems in different parts of Uganda.</p>
						<div class="con-top">
							<h4>LIRA</h4>
								<ul>
								<li>Plot 15 Ogwal Ojumgu Rd,</li>  
								<li>Lira District Uganda</li> 
								<li>P.O.BOX 835</li>
								<li>Tel: +256393 224 833/+256772 514 733</li>
								<li><a href="mailto:info@humaneafricamission.org">info@humaneafricamission.org</a></li>
							  </ul>
						</div>
						<div class="con-top two">						
						</div>
					</div>
					
						<div class="clearfix"> </div>
			      </div>
				   <!--map-->
				    <div class="map wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".5s">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6166.180490069679!2d32.90164423741886!3d2.2499316892494883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1770b09fcc01830f%3A0xddfcd30f83eb2797!2sLira!5e0!3m2!1sen!2sug!4v1537440067729"></iframe>
					</div>
				<!--//map-->
			 </div>
		</div>
		<!--//contact-->

    <!--footer-->
		<div class="footer text-center">
						<div class="container">
							<!--logo2-->
								   <div class="logo2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
								   		<a href="index.php"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo" height="100" /></a>
									  <p>Humanity with Humility</p>
								   </div>
					<!--//logo2-->
								<a href="#contact" class="flag_tag2 scroll">Where to find us?</a>
									<ul class="social wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
										<li><a href="#" class="tw"></a></li>
										<li><a href="#" class="fb"> </a></li>
										<li><a href="#" class="in"> </a></li>
										<li><a href="#" class="dott"></a></li>
										 <div class="clearfix"></div>
									</ul>
									<p class="copy-right wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">&copy; 2018 Humane Africa Mission. All rights reserved | Design by <a href="mailto:pidscrypt@gmail.com">PidScrypt Uganda</a></p>

					 </div>
	     </div>
		<!--start-smooth-scrolling-->
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
								<!--end-smooth-scrolling-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>
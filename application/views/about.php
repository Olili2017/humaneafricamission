<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
    <head>
        <title>About us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="<?php echo base_url();  ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="<?php echo base_url();  ?>assets/css/iconeffects.css" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url();  ?>assets/css/style.css" rel='stylesheet' type='text/css' />	
        <link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/swipebox.css">
        <script src="<?php echo base_url();  ?>assets/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();  ?>assets/js/move-top.js"></script>
        <script type="text/javascript" src="<?php echo base_url();  ?>assets/js/easing.js"></script>
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
            <script src="<?php echo base_url();  ?>assets/js/jquery.swipebox.min.js"></script> 
                <script type="text/javascript">
                    jQuery(function($) {
                        $(".swipebox").swipebox();
                    });
            </script>
        <!-- //swipe box js -->
        <!--animate-->
        <link href="<?php echo base_url();  ?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="<?php echo base_url();  ?>assets/js/wow.min.js"></script>
            <script>
                new WOW().init();
            </script>

    </head>
<body>
    <div class="banner two" id="home">
		<div class="header-bottom wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">
		     <div class="container">
			  <div class="fixed-header">
			      <!--logo-->
			       <div class="logo">
                      <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo" height="80" /></a>
					  <!--p>Africa mission</p-->
				   </div>
					<!--//logo-->
					<div class="top-menu">
							<span class="menu"> </span>
							<nav class="link-effect-4" id="link-effect-4">
                              <ul>
								 <li class="active"><a data-hover="Home" href="<?php echo base_url(); ?>">Home</a></li>
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
    
    </div>
<!--blog-section-->
      <div class="blog-section">
		<div class="container">
		  <h3 class="single">About us</h3>
		   <div class="blog-top">
			   <div class="blog-single">
					<div class="single-img">
					 <a href="#">
					  <img src="../assets/images/bottom.jpg" alt="">
					</a>
                        <h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Info about us that is not out there.</h3>
					   <p class="post wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Posted on Sept 8, 2018 by <a href="#">Admin</a></p>
					   <p Class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
					   		<h4>VISION</h4>
								A healthy, productive and environment clean society free from poverty, socially and economically self-reliant.
								<br /><br />
							<h4>MISSION</h4>
								H.A.M is working to assist the needy and neglected people at grass root level and find access to sustain in the society with due dignity. Therefore HAM will take necessary actions/measures towards empowerment and self-determinations of community people enabling them to solve their own socio-economic problems towards poverty alleviation.
								<br /><br />
							<h4>GOAL</h4>
							To improve the health and quality of life of people affected by both man-made and natural disaster through strengthening health systems and enhancing environmental protection to improve livelihood
												
					   </p>				                     
				</div>
				
		   </div>
		   <!-- [@comment_section] -->
	  </div>
	</div>



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
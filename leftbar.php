<?php
session_start();
$_SESSION = array();

include("simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Gistler</title>

<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/pricing.css" rel="stylesheet">
<!-- !important THIS STYLE CSS ON BOTTOM OF STYLEs LIST-->
<link href="assets/css/style.css" rel="stylesheet">
<!-- !important THIS STYLE CSS ON BOTTOM OF STYLEs LIST-->
<link href="assets/css/font-awesome.min.css" rel="stylesheet"> 
<link href="assets/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<link href="css/magicsuggest3.css" rel="stylesheet">
   <script src="js/magicsuggest6.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<link rel="stylesheet"  href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
   <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
  <link rel="stylesheet"  href="src/css/lightslider.css"/>
  
  <script src="src/js/lightslider.js"></script> 
    <script>
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:false,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
			
			$('#image-gallery2').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery2').removeClass('cS-hidden');
                }  
            });
			
			$('#image-gallery3').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery3').removeClass('cS-hidden');
                }  
            });
			
		});
    </script>
    <script src="js/star-rating.js" type="text/javascript"></script>
 
	<script>
		(function($){
			$(window).load(function(){
				
				$.mCustomScrollbar.defaults.scrollButtons.enable=true; //enable scrolling buttons by default
				$.mCustomScrollbar.defaults.axis="yx"; //enable 2 axis scrollbars by default
				
				$("#content-l").mCustomScrollbar();
				
				$(".all-themes-switch a").click(function(e){
					e.preventDefault();
					var $this=$(this),
						rel=$this.attr("rel"),
						el=$(".content");
					switch(rel){
						case "toggle-content":
							el.toggleClass("expanded-content");
							break;
					}
				});
				
			});
		})(jQuery);
	</script>
</head>
<body data-spy="scroll" data-target=".scroller-spy" data-twttr-rendered="true">

<!--START MAIN-WRAPPER--> 
<div class="main-wrapper">
<!--START MAIN-WRAPPER--> 
<script>
	function hidepopup(){
		document.getElementById('light').style.display='none';
		document.getElementById('fade').style.display='none';
	}
	
	function showpopup(){
		document.getElementById('light').style.display='block';
		document.getElementById('fade').style.display='block';
	}
	$(document).ready(function(){
		$(".show-number").click(function(){
			$(".show-number").text("+123456789");
		});
	});
</script>

<div id="light" class="white_content mortpopup proppop" style="display:none;"> <!--<a href = "javascript:void(0)" onclick="hidepopup();"><img src="images/icon-cross.png"></a>-->
	
	<div class="halfdvleft">
		<div class="rightsidebar nomarginleft">
			<div class="profiledv">
				<div class="profileimg">
					<a href="agent_detail.php"><img src="images/user-profile.png" ></a>
				</div>
				<div class="cleardv"></div>
				<div class="profiletitle">
					<a href="agent_detail.php"><h2>YELENA MIRKINA</h2></a>
					<h3>Senior Property Consultant</h3>
				</div>
				<div class="estateimg">
					<a href="property-detail.php"><img src="images/estatelogo.png" ></a>
				</div>
				
				<div class="estatenum">
					<span class="leftnum">BRN# 12345</span>
					<span class="rightnum">ORN# 12345</span>
					<div class="clear10"></div>
				</div>
				<div class="clear10"></div>
				<div class="estatebtn">
					<a class="show-number">SHOW PHONE NUMBER</a>
					<div class="clear10"></div>
					<a href="http://www.google.com/">GO TO THE WEBSITE</a>
				</div>
			</div>
		</div>
	</div>
	<div class="halfdvright">
		<script>
            // When the document is ready
            $(document).ready(function () {
                //validation rules
                //by default it will append a <label class="error> element to the invalid input
                //and will add a "error" class to the input
                $("#form-inquiry").validate({
                    rules: {
                        "name": {
                            required: true
                        },  
                        "phone": {
                            required: true,
							number: true
                        },  
                        "email": {
							required: true,
							email: true
							//equalTo: "#email"
						},  
                        "message": {
                            required: true
                        },  
                        "captcha": {
                            required: true,
							equalTo: "#ccaptcha"
                        }
						
                    }
                });
            });
        </script>
		<div class="rightsidebar nomarginleft">
			<div class="inquiryform" id="floatform">
				<h3>Make an Inquiry</h3>
				<div class="formarea">
					<form method="get" action="" id="form-inquiry">
						<p>Your Name</p>
						<input type="text" name="name" id="name" value="" class="formtxt" placeholder="Type your name">
						<p>Your Phone</p>
						<input type="text" name="phone" id="phone" value="" class="formtxt" placeholder="Type your phone">
						<p>Your Email</p>
						<input type="text" name="email" id="email" value="" class="formtxt" placeholder="Type your name">
						<p>Your Message</p>
						<textarea name="message" id="message" class="formtxtarea" placeholder="Type your message"></textarea>
						
						<?php
						echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code" style=" width:70%; ">';

						?>
						<input type="hidden" name="ccaptcha" id="ccaptcha" value="<?php echo $_SESSION['captcha_code']; ?>">
						<div class="clear10"></div>
						
						<p>Please enter the 4 letters as they appear in the image on the left.</p>
						<input type="text" name="captcha" id="captcha" value="" class="formtxt" placeholder="">
						<input type="submit" name="submit" value="SUBMIT" class="btn-inquiry">
						<p class="termstxt">By clicking on 'Submit' I agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></p>
						<div class="clear10"></div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	
</div>
<div id="fade" class="black_overlay" style="display:none;" onclick="hidepopup();"></div>


<!-- TOP SECTION-->
<section class="section-2 mainnav" id="header-section">



 <!-- ################-->
 <!-- START TOP MENU -->
 <!-- ################-->

	
  
  <div class="bg-wraper parallax-point-event">
	<br/>
	<div class="container">
		<div class="row-fluid" >
		<!-- FEATURE ITEM-->
		<script>
		$(document).scroll(function() {
			if($(this).scrollTop() > 240){
				 $("#fixedscroll").addClass("bottomfixed");
			}
			else{
				$("#fixedscroll").removeClass("bottomfixed");
			}
			
		});
		</script>
			
			
			<ul class="floatingside listside2 list-bottom" id="fixedscroll" style="top:50px;">
				
				<li><a href="#"><img src="images/icon-update.png"></a>
					<ul class="mainlength3">
						<li>
							<div class="sectionslide">
								<p><a href="#">Get Updates</a></p>
							</div>
						</li>
					</ul>
				</li>
				<li><a href="#"><img src="images/blockview.png"></a>
					<ul class="mainlength3">
						<li>
							<div class="sectionslide">
								<p><a href="#">Grid View</a></p>
							</div>
						</li>
					</ul>
				</li>
				<li><a href="#"><img src="images/list_view.png"></a>
					<ul class="mainlength3">
						<li>
							<div class="sectionslide">
								<p><a href="#">List View</a></p>
							</div>
						</li>
					</ul>
				</li>
				<li><a href="#"><img src="images/gist_button.png"></a>
					<ul class="mainlength3">
						<li>
							<div class="sectionslide">
								<p><a href="#">Gist it</a></p>
							</div>
						</li>
					</ul>
				</li>
				<li><a href="#"><img src="images/icon-file.png"></a>
					<ul class="reportproblem">
						<li>
							<div class="fileattach">
								<h3>Report a problem</h3>
								<h4>What's the issue?</h4>
								<p><input type="radio" name="problem" id="option1"> <label for="option1">Incorrect information/photos</label></p>
								<p><input type="radio" name="problem" checked id="option2"> <label for="option2">Home should be for sale/rent</label></p>
								<p><input type="radio" name="problem" id="option3"> <label for="option3">Fraudulent listing or spam</label></p>
								<div class="clear10"></div>
								<p><big>Gistler Account</big></p>
								<p>In order to report a review, you must have a registered account on Gistler.</p>
								<div class="clear10"></div>
								<p><input type="radio" name="account" id="option4"> <label for="option4">I need to create a Gistler account.</label></p>
								<p><input type="radio" name="account" id="option5"> <label for="option5">I already have a Gistler account.</label></p>
								<div class="clear10"></div>
								<p><input type="checkbox" name="certify" id="option6"> <label for="option6">I promise this review is honest and respectful. I understand Gistler's Terms and Conditions</label></p>
								<input type="submit" value="Submit" class="reportbtn">
								<div class="clear10"></div>
								<p>Don't see your issue here? <br/>Visit our Help Center</p>
							</div>
						</li>
					</ul>
				</li>
				<li><a href="map.php"><img src="images/side-icon1.png"></a>
					<ul class="mainlength3">
						<li>
							<div class="sectionslide">
								<p><a href="map.php">Map View</a></p>
							</div>
						</li>
					</ul>
				</li>
				<li><a href="#"><img src="images/side-icon2.png"></a>
					<ul class="mainlength3">
						<li>
							<div class="sectionslide">
								<p><a href="#">Save your search</a></p>
							</div>
						</li>
					</ul>
				</li>
				<li>
					<a href="#"><img src="images/side-icon3.png"></a>
					<ul class="mainlength3">
						<li>
							<div class="sectionslide">
								<p><a href="#">Favourite</a></p>
							</div>
						</li>
					</ul>
				</li>
				<li><a href="#"><img src="images/side-icon4.png"></a>
					<ul class="mainlength">
							<li>
								<div class="sectionslide">
									<div class="bullets"></div>
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
								<div class="sectionslide">
									<div class="bullets"></div>
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
								<div class="sectionslide">
									<div class="bullets"></div>
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
								<div class="sectionslide">
									<div class="bullets"></div>
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
								<div class="sectionslide">
									<div class="bullets"></div>
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
								<div class="sectionslide">
									<div class="bullets"></div>
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
								<div class="sectionslide">
									<div class="bullets"></div>
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
								<div class="sectionslide">
									<div class="bullets"></div>
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
							</li>
						</ul>
				</li>
				<li><a href="#"><img src="images/side-icon5.png"></a>
					<ul class="mainlength3">
						<li>
							<div class="sectionslide">
								<p><a href="listing.php">View last search</a></p>
							</div>
						</li>
					</ul>
				</li>
				<li><a href="#"><img src="images/side-icon6.png"></a>
					<ul class="mainlength3">
						<li>
							<div class="sectionslide">
								<p><a href="listing.php">View last compare</a></p>
							</div>
						</li>
					</ul>
				</li>
				<li><a href="#"><img src="images/side-icon7.png"></a>
					<ul class="sociallist">
							<li>
								<div class="sectionslide">
									<a href="http://www.facebook.com/share.php?u=http://adweblab.com/gistler/listing.php&title=Dubai Marina Central Bay" target="popup" onclick="window.open('http://www.facebook.com/share.php?u=http://adweblab.com/gistler/listing.php&title=Dubai Marina Central Bay','name','width=600,height=400')"><img src="images/facebook2.png"></a>
											<a href="http://twitter.com/intent/tweet?status=Dubai Marina Central Bay+http://adweblab.com/gistler/listing.php" target="popup" onclick="window.open('http://twitter.com/intent/tweet?status=Dubai Marina Central Bay+http://adweblab.com/gistler/listing.php','name','width=600,height=400')" ><img src="images/twitter2.png"></a>
											<a href="http://www.linkedin.com/shareArticle?mini=true&url=http://adweblab.com/gistler/listing.php&title=Dubai Marina Central Bay&source=http://adweblab.com/gistler/"  target="popup" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=http://adweblab.com/gistler/listing.php&title=Dubai Marina Central Bay&source=http://adweblab.com/gistler/','name','width=600,height=400')"><img src="images/linkedin2.png"></a><br>
											<a href="https://plus.google.com/share?url=http://adweblab.com/gistler/listing.php" onclick="window.open('https://plus.google.com/share?url=http://adweblab.com/gistler/listing.php','name','width=600,height=400')" target="popup"><img src="images/googleplus2.png"></a>
											<a href="http://whatsapp.com/" target="popup"><img src="images/whatsapp.png"></a>
											<a href="mailto:test@gmail.com"><img src="images/envelop.png"></a>
									
								</div>
								
							</li>
						</ul>
				</li>
				<li><a href="#"><img src="images/side-icon8.png"></a>
					<ul class="mainlength2 listprint">
						<li>
							<div class="sectionslide">
								<div class="bullets"></div>
								<p><a href="javascript:;" onclick="javascript:window.print();">Full Detail Page</a></p>
							</div>
							<div class="sectionslide">
								<div class="bullets"></div>
								<p><a href="print_template.php">1 Page Summary</a></p>
							</div>
						</li>
					</ul>
				</li>
				
			</ul>
			
			
			<div style="height:97vh;"></div>
			
				
		
		<!-- FEATURE ITEM-->
		
		<!-- FEATURE ITEM-->
		</div><!--/ ROW-FLUID-->
		
	
	
	
	</div><!--/CONTAINER-->
</div><!-- / BG WRAPER-->
  
  
			<!-- END HEADER headertop NAV -->


			
</section><!--/ TOP SECTION-->

 

<!-- /SERVICE SECTION-->			

	
	<!-- /FEATURE section-->
	
	<!-- /SLOGAN section-->
	
	

<!-- /TEAM SECTION-->			




  

<!-- ###################### FOOTER #######################
    ================================================== -->


<!-- END: FOOTER -->
</div>
<!-- END: MAIN-WRAPPER-->
<!-- Le javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

 
<script src="assets/js/google-code-prettify/prettify.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-transition.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-alert.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-modal.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-dropdown.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-scrollspy.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-tab.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-tooltip.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-popover.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-button.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-collapse.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-carousel.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-typeahead.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-affix.js" type="text/javascript"></script> 
<script src="assets/js/application.js" type="text/javascript"></script> 

<script src="assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="assets/js/tweetable.jquery.js" type="text/javascript"></script>
<script src="assets/js/jquery.timeago.js" type="text/javascript"></script>

<script src="assets/js/jquery.fitvids.min.js" type="text/javascript"></script>

<!-- PARALLAX PLUGIN -->
<script type="text/javascript" src="assets/js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="assets/js/jquery.inview.js"></script>
<script type="text/javascript" src="assets/js/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>
<!-- PARALLAX PLUGIN -->

<!-- gMap PLUGIN -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="assets/js/jquery.gmap.js"></script>
<!-- gMap PLUGIN -->
<script src="assets/js/custom.js" type="text/javascript"></script>

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#nav').localScroll(1000);
	jQuery('#nav2').localScroll(1000);
	jQuery('#nav6').localScroll(1000);
	jQuery('#nav3').localScroll(1000);
	jQuery('#nav4').localScroll(1000);
	jQuery('#nav5').localScroll(1000);
	
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	jQuery('#header-section').parallax("50%", 0.1);
	jQuery('#features-section').parallax("50%", 0.1);
	jQuery('#slogan-section-2').parallax("50%", 0.1);
	jQuery('#team-section').parallax("50%", 0.1);
	jQuery('.bg').parallax("50%", 0.3);
	jQuery('#portfolio-section').parallax("50%", 0.3);
	jQuery('#price-section').parallax("50%", 0.3);
	jQuery('#contact-section').parallax("50%", 0.1);
	jQuery('#slogan-section-1').parallax("50%", 0.3);
	
})
</script>
<script>
jQuery('#features-section .parallax-point-event').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.effect-box-1').addClass("active");
			jQuery('.effect-box-2').addClass("active");
			jQuery('.effect-box-3').addClass("active");
			jQuery('.effect-box-4').addClass("active");
			
        }else{
            jQuery('.effect-box-1').removeClass("active");
			jQuery('.effect-box-2').removeClass("active");
			jQuery('.effect-box-3').removeClass("active");
			jQuery('.effect-box-4').removeClass("active");
		
			//jQuery('.effect-box').unbind('inview');
        }
    });
</script>

<script>
jQuery('#slogan-section-1').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.large-slogan').addClass("active");
		 }else{
            jQuery('.large-slogan').removeClass("active"); 	
        }
    });
</script>
<script>
jQuery('#slogan-section-2 .parallax-point-event').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.browser-shot-1').addClass("active");
			jQuery('.browser-shot-2').addClass("active");
			jQuery('.browser-shot-3').addClass("active");
			
        }else{
            jQuery('.browser-shot-1').removeClass("active"); 
			jQuery('.browser-shot-2').removeClass("active");
			jQuery('.browser-shot-3').removeClass("active");
			
        }
    });
</script>

<script>
jQuery('#slogan-section-3').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.goprice').addClass("active");
		}else{
            jQuery('.goprice').removeClass("active"); 	
        }
    });
</script>

<script>
jQuery('#header-section').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.gobottom').addClass("active"); 
			jQuery('.hero-unit h1 span').addClass("active");
			
        }else{
            jQuery('.gobottom').removeClass("active");  
			jQuery('.hero-unit h1 span').removeClass("active"); 
			
			
        }
    });
</script>


<script>
		var hero = jQuery('#header-section .hero-unit');
		jQuery(window).scroll(function () {
				if (jQuery(this).scrollTop() > 550) {
					hero.addClass("hide");	
				} else {
					hero.removeClass("hide");	
				}
			});
		</script>
		
	<script>
		var navbar = jQuery('#navbartop');
		var navbartop = jQuery('#topnavbar');
			$(document).scroll(function() {
				if($(this).scrollTop() > 200){
					navbar.addClass("navbar-scroll");
					navbartop.removeClass("navbar-static-top");
					navbartop.addClass("navbar-fixed-top");
				}
				else{
					navbar.addClass("navbar-scroll");
					navbartop.removeClass("navbar-static-top");
					navbartop.addClass("navbar-fixed-top");
				}
			});
		</script>
		
		<script>
        // Basic FitVids Test
			$(".container").fitVids();  
		</script>
		
		<script type="text/javascript">
		
				jQuery(document).ready(function(){
				jQuery('#map').gMap({ address: 'Folsom Ave, San Francisco, CA',
							   panControl: true,
						   zoomControl: true,
							   zoomControlOptions: {
					style: google.maps.ZoomControlStyle.SMALL
							   },
						   mapTypeControl: true,
						   scaleControl: true,
						   streetViewControl: false,
						   overviewMapControl: true,
							   scrollwheel: true,
							   icon: {
						image: "http://www.google.com/mapfiles/marker.png",
						shadow: "http://www.google.com/mapfiles/shadow50.png",
						iconsize: [20, 34],
						shadowsize: [37, 34],
						iconanchor: [9, 34],
						shadowanchor: [19, 34]
					},
						zoom:15,
							   markers: [
							{ 'address' : 'Folsom Ave, San Francisco, CA'}
						]
							   
							   
							   }); 
				});
</script>

<script type="text/javascript">
		jQuery(function(){
			jQuery('#tweets').tweetable({
				username: 'wrapbootstrap', 
				time: true,
				rotate: false,
				speed: 4000, 
				limit: 1,
				replies: false,
				position: 'append',
				failed: "Sorry, twitter is currently unavailable for this user.",
				html5: true,
				onComplete:function(jQueryul){
					jQuery('time').timeago();
				}
			});
		});
		</script>
		<script>
			jQuery('.carousel').carousel()
		</script>
</body>
</html>
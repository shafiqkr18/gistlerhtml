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
<link href="css/magicsuggest3.css" rel="stylesheet">
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="js/magicsuggest4.js"></script>

 
	<link rel="stylesheet"  href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/star-rating2.css" media="all" rel="stylesheet" type="text/css"/>
   
    <script src="js/star-rating.js" type="text/javascript"></script>
	
	
	
	
<script src="assets/js/jquery.js" type="text/javascript"></script>
<script>
$.noConflict();
</script>
	
<script src="assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="assets/js/jquery.scrollTo-1.4.2-min.js"></script>

<script src="assets/js/custom.js" type="text/javascript"></script>
	
	
</head>
<body data-spy="scroll" data-target=".scroller-spy" data-twttr-rendered="true">




<!--START MAIN-WRAPPER--> 
<div class="main-wrapper">
<!--START MAIN-WRAPPER--> 

<!-- TOP SECTION-->
<section class="section-2 mainnav" id="header-section">

 <!-- ################-->
 <!-- START TOP MENU -->
 <!-- ################-->
 <?php
  include('header7.php');
  ?>
	
  
  <div class="bg-wraper parallax-point-event">
	
	<div class="container">
		<div class="row-fluid" >
		<!-- FEATURE ITEM-->
		<script>
		$(document).scroll(function() {
			if($(this).scrollTop() > 320){
				 $("#fixedscroll").addClass("bottomfixed");
			}
			else{
				$("#fixedscroll").removeClass("bottomfixed");
			}
			
		});
		
			$(document).ready(function(){
				$(".show-number").click(function(){
					$(this).text("+123456789");
				});
				
				$(".show-fax").click(function(){
					$(this).text("+987654321");
				});
				
				$(".showlist").click(function(){
					$(this).toggleClass("active");
				});
			});
		</script>
			
			
			
			
			
						
			<ul class="floatingside listside2 list-bottom" id="fixedscroll">
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
				<li><a href="homeservices_map.php"><img src="images/side-icon1.png"></a>
					<ul class="mainlength3">
						<li>
							<div class="sectionslide">
								<p><a href="homeservices_map.php">Map View</a></p>
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
			
			
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					<div class="clear10"></div>
					<div class="profileimg">
						<a href="agentservices_profile.php"><img src="images/services.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agentservices_profile.php"><h2>Company Name</h2></a>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop nopadtop">
						<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
					</div>
					<div class="clear"></div>
					
					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="http://www.google.com/">GO TO THE WEBSITE</a>
						
					</div>
					<div class="estatenum">
						<span class="leftnum">LICENSE# 20202020</span>
						
					</div>
					<div class="clear"></div>
					
					<div class="profilefooter">
						<a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
						<a href="http://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
						<a href="http://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
						<a href="http://linkedin.com" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
					</div>
				</div>
				
			</div>
			
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					<div class="clear10"></div>
					<div class="profileimg">
						<a href="agentservices_profile.php"><img src="images/services.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agentservices_profile.php"><h2>Company Name</h2></a>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop nopadtop">
						<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
					</div>
					<div class="clear"></div>
					
					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="http://www.google.com/">GO TO THE WEBSITE</a>
						
					</div>
					<div class="estatenum">
						<span class="leftnum">LICENSE# 20202020</span>
						
					</div>
					<div class="clear"></div>
					
					<div class="profilefooter">
						<a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
						<a href="http://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
						<a href="http://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
						<a href="http://linkedin.com" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
					</div>
				</div>
				
			</div>
			
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					<div class="clear10"></div>
					<div class="profileimg">
						<a href="agentservices_profile.php"><img src="images/services.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agentservices_profile.php"><h2>Company Name</h2></a>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop nopadtop">
						<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
					</div>
					<div class="clear"></div>
					
					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="http://www.google.com/">GO TO THE WEBSITE</a>
						
					</div>
					<div class="estatenum">
						<span class="leftnum">LICENSE# 20202020</span>
						
					</div>
					<div class="clear"></div>
					
					<div class="profilefooter">
						<a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
						<a href="http://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
						<a href="http://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
						<a href="http://linkedin.com" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
					</div>
				</div>
				
			</div>
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					<div class="clear10"></div>
					<div class="profileimg">
						<a href="agentservices_profile.php"><img src="images/services.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agentservices_profile.php"><h2>Company Name</h2></a>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop nopadtop">
						<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
					</div>
					<div class="clear"></div>
					
					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="http://www.google.com/">GO TO THE WEBSITE</a>
						
					</div>
					<div class="estatenum">
						<span class="leftnum">LICENSE# 20202020</span>
						
					</div>
					<div class="clear"></div>
					
					<div class="profilefooter">
						<a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
						<a href="http://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
						<a href="http://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
						<a href="http://linkedin.com" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
					</div>
				</div>
				
			</div>
			
			<div class="clear"></div>
				
			
			
			
			
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					<div class="clear10"></div>
					<div class="profileimg">
						<a href="agentservices_profile.php"><img src="images/services.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agentservices_profile.php"><h2>Company Name</h2></a>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop nopadtop">
						<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
					</div>
					<div class="clear"></div>
					
					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="http://www.google.com/">GO TO THE WEBSITE</a>
						
					</div>
					<div class="estatenum">
						<span class="leftnum">LICENSE# 20202020</span>
						
					</div>
					<div class="clear"></div>
					
					<div class="profilefooter">
						<a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
						<a href="http://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
						<a href="http://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
						<a href="http://linkedin.com" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
					</div>
				</div>
				
			</div>
			
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					<div class="clear10"></div>
					<div class="profileimg">
						<a href="agentservices_profile.php"><img src="images/services.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agentservices_profile.php"><h2>Company Name</h2></a>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop nopadtop">
						<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
					</div>
					<div class="clear"></div>
					
					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="http://www.google.com/">GO TO THE WEBSITE</a>
						
					</div>
					<div class="estatenum">
						<span class="leftnum">LICENSE# 20202020</span>
						
					</div>
					<div class="clear"></div>
					
					<div class="profilefooter">
						<a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
						<a href="http://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
						<a href="http://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
						<a href="http://linkedin.com" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
					</div>
				</div>
				
			</div>
			
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					<div class="clear10"></div>
					<div class="profileimg">
						<a href="agentservices_profile.php"><img src="images/services.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agentservices_profile.php"><h2>Company Name</h2></a>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop nopadtop">
						<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
					</div>
					<div class="clear"></div>
					
					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="http://www.google.com/">GO TO THE WEBSITE</a>
						
					</div>
					<div class="estatenum">
						<span class="leftnum">LICENSE# 20202020</span>
						
					</div>
					<div class="clear"></div>
					
					<div class="profilefooter">
						<a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
						<a href="http://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
						<a href="http://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
						<a href="http://linkedin.com" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
					</div>
				</div>
				
			</div>
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					<div class="clear10"></div>
					<div class="profileimg">
						<a href="agentservices_profile.php"><img src="images/services.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agentservices_profile.php"><h2>Company Name</h2></a>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop nopadtop">
						<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
					</div>
					<div class="clear"></div>
					
					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="http://www.google.com/">GO TO THE WEBSITE</a>
						
					</div>
					<div class="estatenum">
						<span class="leftnum">LICENSE# 20202020</span>
						
					</div>
					<div class="clear"></div>
					
					<div class="profilefooter">
						<a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
						<a href="http://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
						<a href="http://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
						<a href="http://linkedin.com" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
					</div>
				</div>
				
			</div>
			
			<div class="clear10"></div>
			<div class="clear10"></div>
			<div class="clear10"></div>
			<div class="clear10"></div>
		
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
<?php
include('footer.php');
?>

<!-- END: FOOTER -->
</div>
</body>
</html>
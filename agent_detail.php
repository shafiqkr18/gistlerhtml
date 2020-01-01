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


			<?php
			if(isset($_POST['submitrate'])){
			?>
			<script>
				function hidepopup2(){
					document.getElementById('light2').style.display='none';
					document.getElementById('fade2').style.display='none';
				}
			</script>
			<div id="light2" class="white_content"> <a href = "javascript:void(0)" onclick="hidepopup2();">X</a>
				<h3>Thank You</h3>
				<p>You will be contacted by the bank soon</p>
			</div>
			<div id="fade2" class="black_overlay" onclick="hidepopup2();"></div>
			<?php
			}
			?>

<div id="light" class="white_content mortpopup" style="display:none;"> 
	<a href = "javascript:void(0)" onclick="hidepopup();"><img src="images/crossbtn.png"></a>
	
	<form method="post" action="">
	<div class="ratingpophead">
		<h4>WRITE A REVIEW</h4>
		<h5>How likely are you to recommend John Smith</h5>
		<input id="input-21e" value="4.5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
	</div>
	<div class="clear10"></div>
	<div class="propertyfeature" >
		<div class="ratingdvs2 ratingpop">
								
				<p> Local Knowledge</p> <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
				<div class="clear"></div>
				<p> Process Experties</p> <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
				<div class="clear"></div>
				<p> Responsiveness</p><input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
				<div class="clear"></div>
				<p> Negotiation Skills</p><input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
				<div class="clear"></div>
		
			
		</div>
	</div>
	
	<div class="clear10"></div>
	<div class="clear10"></div>
	
	<div class="width30">
		<p>Service Provided</p>
		
	</div>
	<div class="width70">
		<select class="popsel2">
			<option>Sort Field</option>
			<option>Type 1</option>
			<option>Type 2</option>
		</select>
	</div>
	<div class="clear10"></div>
	<div class="clear10"></div>
	<div class="width30">
		<p>Description</p>
		
		<p> 
		<input type="checkbox" name="test" id="selectboxpop" class="checkboxslid">
		<label for="selectboxpop">&nbsp; Show this review</label> 
		</p>
	</div>
	<div class="width70">
		<textarea class="poparea" name="message nomargin" placeholder="Type your message"></textarea>
		
	</div>
	<div class="clear10"></div>
	
	<div class="popupbottom">
		<h5>Gistler Account</h5>
		<p>We require accounts to prevent fraud (no private info will be shared).</p>
		<div class="clear10"></div>
		<p><input type="radio" name="test2" value="0" id="selectboxpop4" class="checkboxslid">
			<label for="selectboxpop4">&nbsp; We require accounts to prevent fraud (no private info will be shared).</label></p>
		<p><input type="radio" name="test2" checked value="1" id="selectboxpop3" class="checkboxslid">
			<label for="selectboxpop3">&nbsp; I need to create a Gistler account.</label></p>
		<p>
			<input type="checkbox" name="test" id="selectboxpop2" class="checkboxslid">
			<label for="selectboxpop2">&nbsp; I promise this review is honest and respectful. I understand</label> 
			
		</p>
		<div class="clear"></div>
		<p><a href="#">Gistler's Review Guidelines</a></p>
	</div>
	<input type="submit" name="submitrate" value="Submit" class="btnratingsub">
	</form>
	
</div>
<div id="fade" class="black_overlay" onclick="hidepopup()" style="display:none;"></div>
<!--START MAIN-WRAPPER--> 
<div class="main-wrapper">
<!--START MAIN-WRAPPER--> 

<!-- TOP SECTION-->
<section class="section-2 mainnav" id="header-section">

 <!-- ################-->
 <!-- START TOP MENU -->
 <!-- ################-->
 <?php
  include('header3.php');
  ?>
	
  
  <div class="bg-wraper parallax-point-event">
	<br/>
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
		</script>
		<script>
			function hidepopup(){
				document.getElementById('light').style.display='none';
				document.getElementById('fade').style.display='none';
			}
			
			function showpopup(){
				document.getElementById('light').style.display='block';
				document.getElementById('fade').style.display='block';
			}
			
			$(document).ready(function() {
				
				
				
				// Configure/customize these variables.
				var showChar = 400;  // How many characters are shown by default
				var ellipsestext = "...";
				var moretext = "More Details";
				var lesstext = "Less Details";
				

				$('.more').each(function() {
					var content = $(this).html();
			 
					if(content.length > showChar) {
			 
						var c = content.substr(0, showChar);
						var h = content.substr(showChar, content.length - showChar);
			 
						var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<button href="" class="btnreadmore morelink nodisplay" id="readmorebtn">' + moretext + '</button></span>';
			 
						$(this).html(html);
					}
			 
				});
				
				$(".morelink").click(function(){
					if($(this).hasClass("less")) {
						$(this).removeClass("less");
						$(this).html(moretext);
					} else {
						$(this).addClass("less");
						$(this).html(lesstext);
					}
					$(this).parent().prev().toggle();
					$(this).prev().toggle();
					return false;
				});
			});
		
			$(document).ready(function(){
				$(".show-number").click(function(){
					$(this).text("+123456789");
				});
				
				$(".show-fax").click(function(){
					$(this).text("+987654321");
				});
				
			});
		</script>		
			
			
			
			
						
			<?php
			include('list-sidebar.php');
			?>
			<div class="row-fluid" >
				<div class="span9 setwidth">
					<div class="clear10"></div>
					<div class="row">
						<div class="agencydv">
							<div class="span4 leftimgdv">
								<img src="images/agency.png">
								<h4>WENDY HELMS</h4>
								<h5>Sr. Property Consultant</h5>
							</div>
							<div class="span8 rightcotent">
								<h2>Real Estate Company Name</h2>
								
								<p class="more">Lorem ipsum dolor sit amet, eos cu vide veniam, ut pro ferri essent insolens. Mea te corrumpit referrentur, ut pro erant iisque, sint iudicabit repudiandae ea vim. Ne est fabulas scaevola dissentiunt, nihil ornatus ea vel. 
								 instructior disputationi, an usu soluta tractatos splendide, sea liber referrentur efficiantur at. Libris facilisis appellantur vel ut, mundi inermis deleniti sea no. Vix menandri indoctum praesent ut, vim ei viris accusata. 
								
								<br/><br/>
								Eam no bonorum instructior disputationi, an usu soluta tractatos splendide, sea liber referrentur efficiantur at. Libris facilisis appellantur vel ut, mundi inermis deleniti sea no. Vix menandri indoctum praesent ut, vim ei viris accusata.
								</p>
								<p><a href="#">SPECIALITIES</a> &nbsp; - &nbsp; Lorem ipsum dolor sit amet, eos cu vide veniam, ut pro ferri.</p>
								
								<br/><div class="clear10"></div>
								<div class="agencyprofile">
									<span><a href="agents_map.php"><i class="tooltips-top"><img src="images/icon-green.png" height="20"><span><p>Recently Sold</p></span></i></a>26 </span>
									<span><a href="agents_map.php"><i class="tooltips-top"><img src="images/icon-blue.png" height="20"><span><p>Recently Sold</p></span></i></a>17 </span>
									<span><a href="agents_map.php"><i class="tooltips-top"><img src="images/icon-red.png" height="20" ><span><p>Recently Sold</p></span></i></a>05 </span>
									<span><a href="agents_map.php"><i class="tooltips-top"><img src="images/icon-orange.png" height="20"><span><p>Recently Sold</p></span></i></a>08 </span> &nbsp; 
									
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
									<a href="javascript:;" onclick="document.getElementById('readmorebtn').click();">Read More</a> <a href="#">View All Our Properties</a>
								</div>
								<div class="clear10"></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear10"></div>
					<div class="propertyfeature" >
						<h3>Areas Specialities</h3>
						<ul class="specialities">
							<li>- Jumeirah Beach Residence (100)</li>
							<li>- Dubai Marina (100)</li>
							<li>- Jumeirah Lake Towers (100)</li>
						</ul>
					</div>
					
					<div class="propertyfeature reviewsdv">
						<button class="ratingbtn" onclick="showpopup()">Rate Agent</button>
						<h3>Ratings & Reviews</h3>
					</div>
					
					<div class="propertyfeature">
						<div class="ratingdvs">
							<input id="input-21e" value="4.5" type="number" readonly class="rating" min=0 max=5 step=0.5 data-size="xs" ><h3>   Will Recommend</h3> 
							
							
							<span class="hovermenu flag right"><i class="icons-report tooltips-top"><span><p>Report</p></span></i>
								<ul class="reportproblem agentreport">
									<li>
										<div class="fileattach">
											<h3>Report a problem</h3>
											<h4>What's the issue?</h4>
											<p><input type="radio" name="problem1" id="sec1option1"> <label for="sec1option1">Incorrect information/photos</label></p>
											<p><input type="radio" name="problem1" checked id="sec1option2"> <label for="sec1option2">Home should be for sale/rent</label></p>
											<p><input type="radio" name="problem1" id="sec1option3"> <label for="sec1option3">Fraudulent listing or spam</label></p>
											<div class="clear10"></div>
											<p><big>Gistler Account</big></p>
											<p>In order to report a review, you must have a registered account on Gistler.</p>
											<div class="clear10"></div>
											<p><input type="radio" name="account1" id="sec1option4"> <label for="sec1option4">I need to create a Gistler account.</label></p>
											<p><input type="radio" name="account1" id="sec1option5"> <label for="sec1option5">I already have a Gistler account.</label></p>
											<div class="clear10"></div>
											<p><input type="checkbox" name="certify" id="sec1option6"> <label for="sec1option6">I promise this review is honest and respectful. I understand Gistler's Terms and Conditions</label></p>
											<input type="submit" value="Submit" class="reportbtn">
											<div class="clear10"></div>
											<p>Don't see your issue here? <br/>Visit our Help Center</p>
										</div>
									</li>
								</ul>
							</span>
							
							<div class="clear"></div>
							<p><strong>28-10-2015 / Name</strong></p>
						</div>
						<div class="clear"></div>
						<div class="ratingdvs2">
							<div class="span4">
								<input id="input-21e" value="4.5" type="number" readonly class="rating" min=0 max=5 step=0.5 data-size="xs" ><p> Local Knowledge</p>
								<div class="clear"></div>
								<input id="input-21e" value="4.5" type="number" readonly class="rating" min=0 max=5 step=0.5 data-size="xs" ><p> Process Experties</p>
								<div class="clear"></div>
								<input id="input-21e" value="4.5" type="number" readonly class="rating" min=0 max=5 step=0.5 data-size="xs" ><p> Responsiveness</p>
								<div class="clear"></div>
								<input id="input-21e" value="4.5" type="number" readonly class="rating" min=0 max=5 step=0.5 data-size="xs" ><p> Negotiation Skills</p>
								<div class="clear"></div>
							</div>
							<div class="span8">
								<p>Lorem ipsum dolor sit amet, eos cu vide veniam, ut pro ferri essent insolens. Mea te corrumpit referrentur, ut pro erant iisque, sint iudicabit repudiandae ea vim. Ne est fabulas scaevola dissentiunt, nihil ornatus ea vel. Lorem ipsum dolor sit amet, eos cu vide veniam, ut pro ferri essent insolens. Mea te corrumpit referrentur, ut pro erant iisque, sint iudicabit repudiandae ea vim. Ne est fabulas scaevola dissentiunt, nihil ornatus ea vel.  Ne est fabulas scaevola dissentiunt, nihil ornatus ea vel. </p>
								<div class="clear"></div>
								<div class="agencyprofile">
									<span><img src="images/icon-heart4.png"> 240</span>
									<span><img src="images/icon-eye3.png"> 300</span>
								</div>
							</div>
						</div>
						
					</div>
					
					<div class="clear"></div>
					
					<div class="propertyfeature">
						<div class="ratingdvs">
							<input id="input-21e" value="4.5" type="number" readonly class="rating" min=0 max=5 step=0.5 data-size="xs" ><h3>   Will Recommend</h3> 
							
							<span class="hovermenu flag right"><i class="icons-report tooltips-top"><span><p>Report</p></span></i>
								<ul class="reportproblem agentreport">
									<li>
										<div class="fileattach">
											<h3>Report a problem</h3>
											<h4>What's the issue?</h4>
											<p><input type="radio" name="problem1" id="sec2option1"> <label for="sec2option1">Incorrect information/photos</label></p>
											<p><input type="radio" name="problem1" checked id="sec2option2"> <label for="sec2option2">Home should be for sale/rent</label></p>
											<p><input type="radio" name="problem1" id="sec2option3"> <label for="sec2option3">Fraudulent listing or spam</label></p>
											<div class="clear10"></div>
											<p><big>Gistler Account</big></p>
											<p>In order to report a review, you must have a registered account on Gistler.</p>
											<div class="clear10"></div>
											<p><input type="radio" name="account1" id="sec2option4"> <label for="sec2option4">I need to create a Gistler account.</label></p>
											<p><input type="radio" name="account1" id="sec2option5"> <label for="sec2option5">I already have a Gistler account.</label></p>
											<div class="clear10"></div>
											<p><input type="checkbox" name="certify" id="sec2option6"> <label for="sec2option6">I promise this review is honest and respectful. I understand Gistler's Terms and Conditions</label></p>
											<input type="submit" value="Submit" class="reportbtn">
											<div class="clear10"></div>
											<p>Don't see your issue here? <br/>Visit our Help Center</p>
										</div>
									</li>
								</ul>
							</span>
							
							<div class="clear"></div>
							<p><strong>28-10-2015 / Name</strong></p>
						</div>
						<div class="clear"></div>
						<div class="ratingdvs2">
							<div class="span4">
								<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" ><p> Local Knowledge</p>
								<div class="clear"></div>
								<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" ><p> Process Experties</p>
								<div class="clear"></div>
								<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" ><p> Responsiveness</p>
								<div class="clear"></div>
								<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" ><p> Negotiation Skills</p>
								<div class="clear"></div>
							</div>
							<div class="span8">
								<p>Lorem ipsum dolor sit amet, eos cu vide veniam, ut pro ferri essent insolens. Mea te corrumpit referrentur, ut pro erant iisque, sint iudicabit repudiandae ea vim. Ne est fabulas scaevola dissentiunt, nihil ornatus ea vel. Lorem ipsum dolor sit amet, eos cu vide veniam, ut pro ferri essent insolens. Mea te corrumpit referrentur, ut pro erant iisque, sint iudicabit repudiandae ea vim. Ne est fabulas scaevola dissentiunt, nihil ornatus ea vel.  Ne est fabulas scaevola dissentiunt, nihil ornatus ea vel. </p>
								<div class="clear"></div>
								<div class="agencyprofile">
									<span><img src="images/icon-heart4.png"> 240</span>
									<span><img src="images/icon-eye3.png"> 300</span>
								</div>
							</div>
						</div>
						
					</div>
					<div class="clear10"></div><div class="clear10"></div>
					
				</div>
				<div class="span3 rightsidebar">
					<div class="span12 rightsidebar agencydvs agencydetail">
						<div class="profiledv">
							
							
							<div class="hexagon" onclick="window.location.href='http://www.google.com/'">
								<p>GO TO<br/>THE WEBSITE</p>
								<img src="images/com-logo.png">
							</div>
							<div class="profiletitle">
								<div class="clear"></div>
								<h2>Company Name</h2>
								<div class="clear10"></div>
							</div>
							
							

							<div class="estatebtn">
								<a href="mailto:test@gmail.com">SEND EMAIL</a>
								<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
								<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
								<a href="http://www.google.com/">GO TO THE WEBSITE</a>
							</div>
							<div class="estatenum">
								<span class="leftnum">BRN# 12345</span>
								<span class="rightnum">ORN# 12345</span>
								<div class="clear"></div>
							</div>
							<div class="profilefooter">
								<a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
								<a href="http://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
								<a href="http://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
								<a href="http://linkedin.com" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="clear10"></div>
			
			
				
		
		<!-- FEATURE ITEM-->
		
		<!-- FEATURE ITEM-->
		</div><!--/ ROW-FLUID-->
		
	
	
	
	</div><!--/CONTAINER-->
</div><!-- / BG WRAPER-->
  
  
			<!-- END HEADER headertop NAV -->

<div class="bg-wraper parallax-point-event">
	<div class="container">
		<div class="row-fluid posrelative">
			<div class="span12 readmorefooter2">
				
				<a href="agents_map.php" id="veiwmoredata"><img id="rotatearrow" src="images/viewprop.png"> </a>
			</div>
		</div>
	</div>
</div>
			
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
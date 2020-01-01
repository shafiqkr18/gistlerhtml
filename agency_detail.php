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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
 
	<link rel="stylesheet"  href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/star-rating2.css" media="all" rel="stylesheet" type="text/css"/>
   
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
		
		$(document).ready(function() {
		// Configure/customize these variables.
			var showChar = 420;  // How many characters are shown by default
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
				
				$(".showlist").click(function(){
					$(this).toggleClass("active");
				});
			});
		</script>
			
		
			
			
			
						
			<?php
			include('list-sidebar.php');
			?>
			<div class="row-fluid" >
				<div class="span9">
					<div class="clear10"></div>
					<div class="row">
						<div class="agencydv">
							<div class="span4 leftimgdv">
								<img src="images/agency.png">
								<h4>WENDY HELMS</h4>
								<h5>CEO</h5>
							</div>
							<div class="span8 rightcotent">
								<h2>Real Estate Company Name</h2>
								
								<p class="more">Lorem ipsum dolor sit amet, eos cu vide veniam, ut pro ferri essent insolens. Mea te corrumpit referrentur, ut pro erant iisque, sint iudicabit repudiandae ea vim. Ne est fabulas scaevola dissentiunt, nihil ornatus ea vel. 
								<br/><br/>
								Eam no bonorum instructior disputationi, an usu soluta tractatos splendide, sea liber referrentur efficiantur at. Libris facilisis appellantur vel ut, mundi inermis deleniti sea no. Vix menandri indoctum praesent ut, vim ei viris accusata. 
								
								<br/><br/>
								Eam no bonorum instructior disputationi, an usu soluta tractatos splendide, sea liber referrentur efficiantur at. Libris facilisis appellantur vel ut, mundi inermis deleniti sea no. Vix menandri indoctum praesent ut, vim ei viris accusata.
								</p>
								<br/><div class="clear10"></div>
								<div class="agencyprofile">
									<span><a href="agents_map.php"><i class="tooltips-top"><img src="images/icon-green.png" height="20"><span><p>Recently Sold</p></span></i></a>26 </span>
									<span><a href="agents_map.php"><i class="tooltips-top"><img src="images/icon-blue.png" height="20"><span><p>Recently Sold</p></span></i></a>17 </span>
									<span><a href="agents_map.php"><i class="tooltips-top"><img src="images/icon-red.png" height="20" ><span><p>Recently Sold</p></span></i></a>05 </span>
									<span><a href="agents_map.php"><i class="tooltips-top"><img src="images/icon-orange.png" height="20"><span><p>Recently Sold</p></span></i></a>08 </span> &nbsp; 
									<span><i class="tooltips-top"><img src="images/icon-group.png"><span><p>Group</p></span></i> 08 </span>
									
									<a href="javascript:;" onclick="document.getElementById('readmorebtn').click();">Read More</a> <a href="agencies.php">View All Our Properties</a>
								</div>
								<div class="clear10"></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear10"></div>
					<div class="row" >
						<div class="span4 rightsidebar agencydvs">
							<div class="profiledv">
								<span class="packageoffer">
									<img src="images/package-gold.png">
								</span>
								<div class="profileimg topmargin">
									<a href="#"><img src="images/user-profile.png"></a>
								</div>
								<div class="profiletitle">
									<a href="#"><h2>YELENA MIRKINA</h2></a>
									<h3>Senior Property Consultant</h3>
								</div>
								<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
								<div class="profileprop">
									<span><i class="tooltips-top"><img src="images/icon-green.png" height="20"><span><p>Recently Sold</p></span></i>26 </span>
									<span><i class="tooltips-top"><img src="images/icon-blue.png" height="20"><span><p>Recently Sold</p></span></i>17 </span>
									<span><i class="tooltips-top"><img src="images/icon-red.png" height="20" ><span><p>Recently Sold</p></span></i>05 </span>
									<span><i class="tooltips-top"><img src="images/icon-orange.png" height="20"><span><p>Recently Sold</p></span></i>08 </span>
								</div>
								<div class="clear10"></div>
								<center><img src="images/icon1.png"> &nbsp; <img src="images/icon2.png"> &nbsp; <img src="images/icon3.png"></center>
								<div class="estatebtn">
									<a href="mailto:test@gmail.com">SEND EMAIL</a>
									<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
									<a href="javascript:;" class="showlist">AREA SPECIALITY
										<ul>
											<li>1 - JBR <span class="right"><img src="images/icon-green.png">26 <img src="images/icon-blue.png">17</span></li>
											<li>2 - Dubai Marina <span class="right"><img src="images/icon-green.png">26 <img src="images/icon-blue.png">17</span></li>
											<li>3 - JLT <span class="right"><img src="images/icon-green.png">26 <img src="images/icon-blue.png">17</span></li>
										</ul>
									</a>
								</div>
								<div class="clear10"></div>
								
								<div class="profilefooter">
									<div class="experience">
										EXPERIENCE: <span>15</span>
									</div>
									<div class="brnnumber">
										BRN# 12345
									</div>
									<div class="clear"></div>
								</div>
							</div>
							
						</div>
						<div class="span4 rightsidebar agencydvs">
							<div class="profiledv">
								<span class="packageoffer">
									<img src="images/package-silver.png">
								</span>
								<div class="profileimg topmargin">
									<a href="#"><img src="images/user-profile.png"></a>
								</div>
								<div class="profiletitle">
									<a href="#"><h2>YELENA MIRKINA</h2></a>
									<h3>Senior Property Consultant</h3>
								</div>
								<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
								<div class="profileprop">
									<span><i class="tooltips-top"><img src="images/icon-green.png" height="20"><span><p>Recently Sold</p></span></i>26 </span>
									<span><i class="tooltips-top"><img src="images/icon-blue.png" height="20"><span><p>Recently Sold</p></span></i>17 </span>
									<span><i class="tooltips-top"><img src="images/icon-red.png" height="20" ><span><p>Recently Sold</p></span></i>05 </span>
									<span><i class="tooltips-top"><img src="images/icon-orange.png" height="20"><span><p>Recently Sold</p></span></i>08 </span>
								</div>
								<div class="clear10"></div>
								<center><img src="images/icon1.png"> &nbsp; <img src="images/icon2.png"> &nbsp; <img src="images/icon3.png"></center>
								<div class="estatebtn">
									<a href="mailto:test@gmail.com">SEND EMAIL</a>
									<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
									<a href="javascript:;" class="showlist">AREA SPECIALITY
										<ul>
											<li>1 - JBR <span class="right"><img src="images/icon-green.png">26 <img src="images/icon-blue.png">17</span></li>
											<li>2 - Dubai Marina <span class="right"><img src="images/icon-green.png">26 <img src="images/icon-blue.png">17</span></li>
											<li>3 - JLT <span class="right"><img src="images/icon-green.png">26 <img src="images/icon-blue.png">17</span></li>
										</ul>
									</a>
								</div>
								<div class="clear10"></div>
								
								<div class="profilefooter">
									<div class="experience">
										EXPERIENCE: <span>15</span>
									</div>
									<div class="brnnumber">
										BRN# 12345
									</div>
									<div class="clear"></div>
								</div>
							</div>
							
						</div>
						<div class="span4 rightsidebar agencydvs">
							<div class="profiledv">
								<span class="packageoffer">
									<img src="images/package-bronze.png">
								</span>
								<div class="profileimg topmargin">
									<a href="#"><img src="images/user-profile.png"></a>
								</div>
								<div class="profiletitle">
									<a href="#"><h2>YELENA MIRKINA</h2></a>
									<h3>Senior Property Consultant</h3>
								</div>
								<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
								<div class="profileprop">
									<span><i class="tooltips-top"><img src="images/icon-green.png" height="20"><span><p>Recently Sold</p></span></i>26 </span>
									<span><i class="tooltips-top"><img src="images/icon-blue.png" height="20"><span><p>Recently Sold</p></span></i>17 </span>
									<span><i class="tooltips-top"><img src="images/icon-red.png" height="20" ><span><p>Recently Sold</p></span></i>05 </span>
									<span><i class="tooltips-top"><img src="images/icon-orange.png" height="20"><span><p>Recently Sold</p></span></i>08 </span>
								</div>
								<div class="clear10"></div>
								<center><img src="images/icon1.png"> &nbsp; <img src="images/icon2.png"> &nbsp; <img src="images/icon3.png"></center>
								<div class="estatebtn">
									<a href="mailto:test@gmail.com">SEND EMAIL</a>
									<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
									<a href="javascript:;" class="showlist">AREA SPECIALITY
										<ul>
											<li>1 - JBR <span class="right"><img src="images/icon-green.png">26 <img src="images/icon-blue.png">17</span></li>
											<li>2 - Dubai Marina <span class="right"><img src="images/icon-green.png">26 <img src="images/icon-blue.png">17</span></li>
											<li>3 - JLT <span class="right"><img src="images/icon-green.png">26 <img src="images/icon-blue.png">17</span></li>
										</ul>
									</a>
								</div>
								<div class="clear10"></div>
								
								<div class="profilefooter">
									<div class="experience">
										EXPERIENCE: <span>15</span>
									</div>
									<div class="brnnumber">
										BRN# 12345
									</div>
									<div class="clear"></div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row" >
						<div class="span4 rightsidebar agencydvs">
							<div class="profiledv">
								
								<div class="profileimg topmargin">
									<a href="#"><img src="images/user-profile.png"></a>
								</div>
								<div class="profiletitle">
									<a href="#"><h2>YELENA MIRKINA</h2></a>
									<h3>Senior Property Consultant</h3>
								</div>
								<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
								<div class="profileprop">
									<span><i class="tooltips-top"><img src="images/icon-green.png" height="20"><span><p>Recently Sold</p></span></i>26 </span>
									<span><i class="tooltips-top"><img src="images/icon-blue.png" height="20"><span><p>Recently Sold</p></span></i>17 </span>
									<span><i class="tooltips-top"><img src="images/icon-red.png" height="20" ><span><p>Recently Sold</p></span></i>05 </span>
									<span><i class="tooltips-top"><img src="images/icon-orange.png" height="20"><span><p>Recently Sold</p></span></i>08 </span>
								</div>
								<div class="clear10"></div>
								<center><img src="images/icon1.png"> &nbsp; <img src="images/icon2.png"> &nbsp; <img src="images/icon3.png"></center>
								<div class="estatebtn">
									<a href="mailto:test@gmail.com">SEND EMAIL</a>
									<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
									<a href="javascript:;" class="disable">AREA SPECIALITY</a>
								</div>
								<div class="clear10"></div>
								
								<div class="profilefooter">
									<div class="experience">
										EXPERIENCE: <span>15</span>
									</div>
									<div class="brnnumber">
										BRN# 12345
									</div>
									<div class="clear"></div>
								</div>
							</div>
							
						</div>
						<div class="span4 rightsidebar agencydvs">
							<div class="profiledv">
								
								<div class="profileimg topmargin">
									<a href="#"><img src="images/user-profile.png"></a>
								</div>
								<div class="profiletitle">
									<a href="#"><h2>YELENA MIRKINA</h2></a>
									<h3>Senior Property Consultant</h3>
								</div>
								<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
								<div class="profileprop">
									<span><i class="tooltips-top"><img src="images/icon-green.png" height="20"><span><p>Recently Sold</p></span></i>26 </span>
									<span><i class="tooltips-top"><img src="images/icon-blue.png" height="20"><span><p>Recently Sold</p></span></i>17 </span>
									<span><i class="tooltips-top"><img src="images/icon-red.png" height="20" ><span><p>Recently Sold</p></span></i>05 </span>
									<span><i class="tooltips-top"><img src="images/icon-orange.png" height="20"><span><p>Recently Sold</p></span></i>08 </span>
								</div>
								<div class="clear10"></div>
								<center><img src="images/icon1.png"> &nbsp; <img src="images/icon2.png"> &nbsp; <img src="images/icon3.png"></center>
								<div class="estatebtn">
									<a href="mailto:test@gmail.com">SEND EMAIL</a>
									<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
									<a href="javascript:;" class="disable">AREA SPECIALITY</a>
								</div>
								<div class="clear10"></div>
								
								<div class="profilefooter">
									<div class="experience">
										EXPERIENCE: <span>15</span>
									</div>
									<div class="brnnumber">
										BRN# 12345
									</div>
									<div class="clear"></div>
								</div>
							</div>
							
						</div>
						<div class="span4 rightsidebar agencydvs">
							<div class="profiledv">
								
								<div class="profileimg topmargin">
									<a href="#"><img src="images/user-profile.png"></a>
								</div>
								<div class="profiletitle">
									<a href="#"><h2>YELENA MIRKINA</h2></a>
									<h3>Senior Property Consultant</h3>
								</div>
								<input id="input-21e" value="4.5" readonly type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
								<div class="profileprop">
									<span><i class="tooltips-top"><img src="images/icon-green.png" height="20"><span><p>Recently Sold</p></span></i>26 </span>
									<span><i class="tooltips-top"><img src="images/icon-blue.png" height="20"><span><p>Recently Sold</p></span></i>17 </span>
									<span><i class="tooltips-top"><img src="images/icon-red.png" height="20" ><span><p>Recently Sold</p></span></i>05 </span>
									<span><i class="tooltips-top"><img src="images/icon-orange.png" height="20"><span><p>Recently Sold</p></span></i>08 </span>
								</div>
								<div class="clear10"></div>
								<center><img src="images/icon1.png"> &nbsp; <img src="images/icon2.png"> &nbsp; <img src="images/icon3.png"></center>
								<div class="estatebtn">
									<a href="mailto:test@gmail.com">SEND EMAIL</a>
									<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
									<a href="javascript:;" class="disable">AREA SPECIALITY</a>
								</div>
								<div class="clear10"></div>
								
								<div class="profilefooter">
									<div class="experience">
										EXPERIENCE: <span>15</span>
									</div>
									<div class="brnnumber">
										BRN# 12345
									</div>
									<div class="clear"></div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
				<div class="span3 rightsidebar">
					<div class="span12 rightsidebar agencydvs agencydetail">
						<div class="profiledv">
							
							
							<div class="hexagon" onclick="window.location.href='#'">
								<p>GO TO <br/>THE WEBSITE</p>
								<img src="images/com-logo.png">
							</div>
							<div class="profiletitle">
								<div class="clear10"></div>
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
								<span class="leftnum">ORN# 20202020</span>
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
				
				<a href="agency_map.php" id="veiwmoredata"><img id="rotatearrow" src="images/viewprop.png"> </a>
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
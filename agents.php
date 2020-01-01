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
  <script src="js/magicsuggest7.js"></script>
	<link rel="stylesheet"  href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/star-rating2.css" media="all" rel="stylesheet" type="text/css"/>
   
    <script src="js/star-rating.js" type="text/javascript"></script>

	<script>
		$(document).ready(function(){
				$(".show-number").click(function(){
					$(this).text("+123456789");
				});
				
				
				$(".showlist").click(function(){
					$(this).toggleClass("active");
				});
			});
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
  include('header6.php');
  ?>
	
  
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
			
			
			
			
			
						
			<?php
			include('list-sidebar.php');
			?>
			
			
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					<span class="packageoffer">
						<img src="images/package-gold.png">
					</span>
					<div class="profileimg topmargin">
						<a href="agent_detail.php"><img src="images/user-profile.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agent_detail.php"><h2>YELENA MIRKINA</h2></a>
						<h3>Senior Property Consultant</h3>
					</div>
					<div class="grayline"></div>
					<input id="input-21e" value="4.5" type="number" readonly class="rating" min=0 max=5 step=0.5 data-size="xs" >
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
			
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					<span class="packageoffer">
						<img src="images/package-silver.png">
					</span>
					<div class="profileimg topmargin">
						<a href="agent_detail.php"><img src="images/user-profile.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agent_detail.php"><h2>YELENA MIRKINA</h2></a>
						<h3>Senior Property Consultant</h3>
					</div>
					<div class="grayline"></div>
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
			
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					<span class="packageoffer">
						<img src="images/package-bronze.png">
					</span>
					<div class="profileimg topmargin">
						<a href="agent_detail.php"><img src="images/user-profile.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agent_detail.php"><h2>YELENA MIRKINA</h2></a>
						<h3>Senior Property Consultant</h3>
					</div><div class="grayline"></div>
					<input id="input-21e" value="4.5" type="number" readonly class="rating" min=0 max=5 step=0.5 data-size="xs" >
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
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					<span class="packageoffer">
						<img src="images/package-gold.png">
					</span>
					<div class="profileimg topmargin">
						<a href="agent_detail.php"><img src="images/user-profile.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agent_detail.php"><h2>YELENA MIRKINA</h2></a>
						<h3>Senior Property Consultant</h3>
					</div><div class="grayline"></div>
					<input id="input-21e" value="4.5" type="number" readonly class="rating" min=0 max=5 step=0.5 data-size="xs" >
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
			
			<div class="clear"></div>
				
			
			
			
			
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					
					<div class="profileimg ">
						<a href="agent_detail.php"><img src="images/user-profile.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agent_detail.php"><h2>YELENA MIRKINA</h2></a>
						<h3>Senior Property Consultant</h3>
					</div><div class="grayline"></div>
					<input id="input-21e" value="4.5" type="number" readonly class="rating" min=0 max=5 step=0.5 data-size="xs" >
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
			
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					
					<div class="profileimg ">
						<a href="agent_detail.php"><img src="images/user-profile.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agent_detail.php"><h2>YELENA MIRKINA</h2></a>
						<h3>Senior Property Consultant</h3>
					</div><div class="grayline"></div>
					<input id="input-21e" value="4.5" type="number" readonly class="rating" min=0 max=5 step=0.5 data-size="xs" >
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
			
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					
					<div class="profileimg ">
						<a href="agent_detail.php"><img src="images/user-profile.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agent_detail.php"><h2>YELENA MIRKINA</h2></a>
						<h3>Senior Property Consultant</h3>
					</div><div class="grayline"></div>
					<input id="input-21e" value="4.5" type="number" readonly class="rating" min=0 max=5 step=0.5 data-size="xs" >
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
			
			<div class="span3 rightsidebar agencydvs">
				<div class="profiledv">
					
					<div class="profileimg ">
						<a href="agent_detail.php"><img src="images/user-profile.png"></a>
					</div>
					<div class="profiletitle">
						<a href="agent_detail.php"><h2>YELENA MIRKINA</h2></a>
						<h3>Senior Property Consultant</h3>
					</div><div class="grayline"></div>
					<input id="input-21e" value="4.5" type="number" readonly class="rating" min=0 max=5 step=0.5 data-size="xs" >
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
<!-- END: MAIN-WRAPPER-->
<!-- Le javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

 


</body>
</html>
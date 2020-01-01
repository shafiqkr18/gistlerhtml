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
  
  
 
	

	
<script src="assets/js/jquery.js" type="text/javascript"></script>
<script>
$.noConflict();
</script>
	
<script src="assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="assets/js/jquery.scrollTo-1.4.2-min.js"></script>


<script src="assets/js/custom.js" type="text/javascript"></script>
	
	
</head>
<body data-spy="scroll" data-target=".scroller-spy" data-twttr-rendered="true" id="top">

<!--START MAIN-WRAPPER--> 
<div class="main-wrapper">
<!--START MAIN-WRAPPER--> 

<!-- TOP SECTION-->
<section class="section-2 mainnav" id="header-section">

 <!-- ################-->
 <!-- START TOP MENU -->
 <!-- ################-->
 <?php
  include('header5.php');
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
			});
		</script>
			
			
			
			
			
						
			<?php
			include('list-sidebar.php');
			?>
			
			
			
			<div class="span3 rightsidebar agencydvs firstchild">
				<div class="profiledv">
					
					
					<div class="hexagon" onclick="window.location.href='agent_detail.php'">
						<p>View<br/>Company Profile</p>
						<img src="images/com-logo.png">
					</div>
					<div class="profiletitle">
						<h2>Company Name</h2>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop">
						<span><i class="tooltips-top"><img src="images/icon-green.png" height="20" onclick="changpointers(1);"><span><p>Recently Sold</p></span></i>26 </span>
						<span><i class="tooltips-top"><img src="images/icon-blue.png" height="20" onclick="changpointers(2);"><span><p>Recently Sold</p></span></i>17 </span>
						<span><i class="tooltips-top"><img src="images/icon-red.png" height="20" onclick="changpointers(3);"><span><p>Recently Sold</p></span></i>05 </span>
						<span><i class="tooltips-top"><img src="images/icon-orange.png" height="20" onclick="changpointers(4);"><span><p>Recently Sold</p></span></i>08 </span>
					</div>

					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="#">GO TO THE WEBSITE</a>
						<a href="agency_map.php">VIEW ALL PROPERTIES</a>
					</div>
					<div class="estatenum">
						<span class="leftnum">ORN# 20202020</span>
						
					</div>
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
					
					
					<div class="hexagon" onclick="window.location.href='agent_detail.php'">
						<p>View<br/>Company Profile</p>
						<img src="images/com-logo.png">
					</div>
					<div class="profiletitle">
						<h2>Company Name</h2>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop">
						<span><i class="tooltips-top"><img src="images/icon-green.png" height="20" onclick="changpointers(1);"><span><p>Recently Sold</p></span></i>26 </span>
						<span><i class="tooltips-top"><img src="images/icon-blue.png" height="20" onclick="changpointers(2);"><span><p>Recently Sold</p></span></i>17 </span>
						<span><i class="tooltips-top"><img src="images/icon-red.png" height="20" onclick="changpointers(3);"><span><p>Recently Sold</p></span></i>05 </span>
						<span><i class="tooltips-top"><img src="images/icon-orange.png" height="20" onclick="changpointers(4);"><span><p>Recently Sold</p></span></i>08 </span>
					</div>

					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="#">GO TO THE WEBSITE</a>
						<a href="agency_map.php">VIEW ALL PROPERTIES</a>
					</div>
					<div class="estatenum">
						<span class="leftnum">ORN# 20202020</span>
						
					</div>
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
					
					
					<div class="hexagon" onclick="window.location.href='agent_detail.php'">
						<p>View<br/>Company Profile</p>
						<img src="images/com-logo.png">
					</div>
					<div class="profiletitle">
						<h2>Company Name</h2>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop">
						<span><i class="tooltips-top"><img src="images/icon-green.png" height="20" onclick="changpointers(1);"><span><p>Recently Sold</p></span></i>26 </span>
						<span><i class="tooltips-top"><img src="images/icon-blue.png" height="20" onclick="changpointers(2);"><span><p>Recently Sold</p></span></i>17 </span>
						<span><i class="tooltips-top"><img src="images/icon-red.png" height="20" onclick="changpointers(3);"><span><p>Recently Sold</p></span></i>05 </span>
						<span><i class="tooltips-top"><img src="images/icon-orange.png" height="20" onclick="changpointers(4);"><span><p>Recently Sold</p></span></i>08 </span>
					</div>

					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="#">GO TO THE WEBSITE</a>
						<a href="agency_map.php">VIEW ALL PROPERTIES</a>
					</div>
					<div class="estatenum">
						<span class="leftnum">ORN# 20202020</span>
						
					</div>
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
					
					
					<div class="hexagon" onclick="window.location.href='agent_detail.php'">
						<p>View<br/>Company Profile</p>
						<img src="images/com-logo.png">
					</div>
					<div class="profiletitle">
						<h2>Company Name</h2>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop">
						<span><i class="tooltips-top"><img src="images/icon-green.png" height="20" onclick="changpointers(1);"><span><p>Recently Sold</p></span></i>26 </span>
						<span><i class="tooltips-top"><img src="images/icon-blue.png" height="20" onclick="changpointers(2);"><span><p>Recently Sold</p></span></i>17 </span>
						<span><i class="tooltips-top"><img src="images/icon-red.png" height="20" onclick="changpointers(3);"><span><p>Recently Sold</p></span></i>05 </span>
						<span><i class="tooltips-top"><img src="images/icon-orange.png" height="20" onclick="changpointers(4);"><span><p>Recently Sold</p></span></i>08 </span>
					</div>

					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="#">GO TO THE WEBSITE</a>
						<a href="agency_map.php">VIEW ALL PROPERTIES</a>
					</div>
					<div class="estatenum">
						<span class="leftnum">ORN# 20202020</span>
						
					</div>
					<div class="profilefooter">
						<a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
						<a href="http://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
						<a href="http://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
						<a href="http://linkedin.com" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
					</div>
				</div>
				
			</div>
			
			<div class="clear"></div>
				
			
			
			
			
			
			<div class="span3 rightsidebar agencydvs firstchild">
				<div class="profiledv">
					
					
					<div class="hexagon" onclick="window.location.href='agent_detail.php'">
						<p>View<br/>Company Profile</p>
						<img src="images/com-logo.png">
					</div>
					<div class="profiletitle">
						<h2>Company Name</h2>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop">
						<span><i class="tooltips-top"><img src="images/icon-green.png" height="20" onclick="changpointers(1);"><span><p>Recently Sold</p></span></i>26 </span>
						<span><i class="tooltips-top"><img src="images/icon-blue.png" height="20" onclick="changpointers(2);"><span><p>Recently Sold</p></span></i>17 </span>
						<span><i class="tooltips-top"><img src="images/icon-red.png" height="20" onclick="changpointers(3);"><span><p>Recently Sold</p></span></i>05 </span>
						<span><i class="tooltips-top"><img src="images/icon-orange.png" height="20" onclick="changpointers(4);"><span><p>Recently Sold</p></span></i>08 </span>
					</div>

					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="#">GO TO THE WEBSITE</a>
						<a href="agency_map.php">VIEW ALL PROPERTIES</a>
					</div>
					<div class="estatenum">
						<span class="leftnum">ORN# 20202020</span>
						
					</div>
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
					
					
					<div class="hexagon" onclick="window.location.href='agent_detail.php'">
						<p>View<br/>Company Profile</p>
						<img src="images/com-logo.png">
					</div>
					<div class="profiletitle">
						<h2>Company Name</h2>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop">
						<span><i class="tooltips-top"><img src="images/icon-green.png" height="20" onclick="changpointers(1);"><span><p>Recently Sold</p></span></i>26 </span>
						<span><i class="tooltips-top"><img src="images/icon-blue.png" height="20" onclick="changpointers(2);"><span><p>Recently Sold</p></span></i>17 </span>
						<span><i class="tooltips-top"><img src="images/icon-red.png" height="20" onclick="changpointers(3);"><span><p>Recently Sold</p></span></i>05 </span>
						<span><i class="tooltips-top"><img src="images/icon-orange.png" height="20" onclick="changpointers(4);"><span><p>Recently Sold</p></span></i>08 </span>
					</div>

					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="#">GO TO THE WEBSITE</a>
						<a href="agency_map.php">VIEW ALL PROPERTIES</a>
					</div>
					<div class="estatenum">
						<span class="leftnum">ORN# 20202020</span>
						
					</div>
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
					
					
					<div class="hexagon" onclick="window.location.href='agent_detail.php'">
						<p>View<br/>Company Profile</p>
						<img src="images/com-logo.png">
					</div>
					<div class="profiletitle">
						<h2>Company Name</h2>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop">
						<span><i class="tooltips-top"><img src="images/icon-green.png" height="20" onclick="changpointers(1);"><span><p>Recently Sold</p></span></i>26 </span>
						<span><i class="tooltips-top"><img src="images/icon-blue.png" height="20" onclick="changpointers(2);"><span><p>Recently Sold</p></span></i>17 </span>
						<span><i class="tooltips-top"><img src="images/icon-red.png" height="20" onclick="changpointers(3);"><span><p>Recently Sold</p></span></i>05 </span>
						<span><i class="tooltips-top"><img src="images/icon-orange.png" height="20" onclick="changpointers(4);"><span><p>Recently Sold</p></span></i>08 </span>
					</div>

					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="#">GO TO THE WEBSITE</a>
						<a href="agency_map.php">VIEW ALL PROPERTIES</a>
					</div>
					<div class="estatenum">
						<span class="leftnum">ORN# 20202020</span>
						
					</div>
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
					
					
					<div class="hexagon" onclick="window.location.href='agent_detail.php'">
						<p>View<br/>Company Profile</p>
						<img src="images/com-logo.png">
					</div>
					<div class="profiletitle">
						<h2>Company Name</h2>
						<h3>Community: Dubai, Downtown Burj Dubai</h3>
					</div>
					
					<div class="profileprop">
						<span><i class="tooltips-top"><img src="images/icon-green.png" height="20" onclick="changpointers(1);"><span><p>Recently Sold</p></span></i>26 </span>
						<span><i class="tooltips-top"><img src="images/icon-blue.png" height="20" onclick="changpointers(2);"><span><p>Recently Sold</p></span></i>17 </span>
						<span><i class="tooltips-top"><img src="images/icon-red.png" height="20" onclick="changpointers(3);"><span><p>Recently Sold</p></span></i>05 </span>
						<span><i class="tooltips-top"><img src="images/icon-orange.png" height="20" onclick="changpointers(4);"><span><p>Recently Sold</p></span></i>08 </span>
					</div>

					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a href="javascript:;" class="show-number">SHOW PHONE NUMBER</a>
						<a href="javascript:;" class="show-fax">SHOW FAX NUMBER</a>
						<a href="#">GO TO THE WEBSITE</a>
						<a href="agency_map.php">VIEW ALL PROPERTIES</a>
					</div>
					<div class="estatenum">
						<span class="leftnum">ORN# 20202020</span>
						
					</div>
					<div class="profilefooter">
						<a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
						<a href="http://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
						<a href="http://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
						<a href="http://linkedin.com" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
					</div>
				</div>
				
			</div>
			
			<div class="clear"></div>
			
			
				
		
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
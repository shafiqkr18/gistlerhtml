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
<!--[if IE]>
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css"></link>
<![endif]-->
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<link href="css/magicsuggest3.css" rel="stylesheet">
   <script src="js/magicsuggest6.js"></script>
	
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
	<style>
	.propertytabs{margin-top:45px;}
	</style>
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
			<div class="row-fluid overflowhidden" >
				<div class="span12">
					<div class="clear10"></div>
					<div class="row">
						<div class="agencydv2">
							<div class="span3 leftimgdv">
								<ul id="image-gallery3" class="gallery list-unstyled cS-hidden">
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/sliderimg1.png" />
										 </li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/sliderimg1.png" />
										 </li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/sliderimg1.png" />
										 </li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/sliderimg1.png" />
										 </li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/sliderimg1.png" />
										 </li>
									
								</ul>
							</div>
							<div class="span7 rightcotent">
								
								<h2>Selling Price:  AED 247,000</h2>
								<h4>Community Dubai, Downtown Burj Dubai</h4>
								<div class="clear"></div>
								<div class="linebreaker"></div>
								<p>Lorem ipsum dolor sit amet, eos cu vide veniam, ut pro ferri essent insolens. Mea te corrumpit referrentur, ut pro erant iisque, sint iudicabit repudiandae ea vim. Ne est fabulas scaevola dissentiunt, nihil ornatus ea vel. Libris facilisis appellantur vel ut, mundi inermis deleniti sea no. Vix menandri indoctum praesent ut, vim ei viris accusata. </p>
								<div class="clear"></div>
								<div class="agencyprofile">
									<span><img src="images/icon-bed3.png">5 </span>
									<span><img src="images/icon-bath3.png">5.5 </span>
									<span>4,000 sqft </span>
									
								</div>
							</div>
							
							<div class="clear"></div>
						</div>
						
						
						<ul class="comparisonlist">
							  <li class="starter2">&nbsp;
								<div class="rangetxt">AED 100K</div>
							  </li>
							  <li class="circlesmall2">2
								<div class="windowbottom">AED100-120<span></span></div>
							  </li>
							  <li class="circle3">5
								<div class="windowtop">AED100-120<span></span></div>
							  </li>
							  
							  <li class="circlesmall2">1
								<div class="windowbottom">AED100-120<span></span></div>
							  </li>
							  <li class="circle2">7
								<div class="windowtop">AED100-120<span></span></div>
							  </li>
							  <li class="circlegapbig">&nbsp;</li>
							  <li class="circlesmall2">3
								<div class="windowtop2">AED100-120<span></span></div>
							  </li>
							   <li class="circlegapsmall">&nbsp;</li>
							  <li class="circlesmall2">1
								<div class="windowbottom">AED100-120<span></span></div>
							  </li>
							  <li class="circlegapnormal">&nbsp;</li>
							  <li class="circlesmallgreen">&nbsp;
								<div class="windowbottomgreen">Your Home<span></span></div>
							  </li>
							  <li class="circle2">7
								<div class="windowtop">AED100-120<span></span></div>
							  </li>
							  <li class="circlegapsmall">&nbsp;</li>
							  <li class="circlesmall2">2
								<div class="windowbottom">AED100-120<span></span></div>
							  </li>
							  <li class="circle3">5
								<div class="windowtop">AED100-120<span></span></div>
							  </li>
							  <li class="circlesmall2">2
								<div class="windowbottom">AED100-120<span></span></div>
							  </li>
							  <li class="starter rightalign endrow">&nbsp;
								<div class="rangetxt">AED 100K</div>
							  </li>
							</ul>  
						
						
					</div>
					<div class="clear10"></div>
					<div class="clear10"></div>
					<div class="clear10"></div>
					
					
					
					
					
					
					<div class="propertyfeature2 nobordertop" >
					
					
					<script>
$(document).ready(function(){
    $("#listtab").click(function(){
        if($('#listtab img').attr('src') == 'images/listview.png') {
			$("#btnshuffle").attr("src","images/map-view.png");
			document.getElementById('avgproperty').style.cssText = 'display:block;';
			
		} else {
			$("#btnshuffle").attr("src","images/listview.png");
			document.getElementById('avgproperty').style.cssText = '';
			document.getElementById('tab2-2').click();
		}
		$("#content-l").toggleClass("nodisplay2");
		document.getElementById('tab9-2').click();
		
    });
});
</script>			
							
							
							
							
							
							<div class="propertytabs nodisplay2" id="content-l">
								<div class="tabs">
							   
							   
								   <div class="tab mapdvs">
									   <input type="radio" id="tab9-2" name="tab-group-9">
									   <label for="tab9-2" class="plab2 nodisplay">ALL</label>
									   
									   <div class="content mapdv">
											
											
											<div class="span6 rentclass">
												
												<div class="propertiesdvs2">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														<b>For Sale - AED 230,000</b><br/>
														537 W Belmont Ave APT 2, Chicago, IL 60657<br/>
														<span>
														<img src="images/icon-bed3.png"> 3 &nbsp; 
														<img src="images/icon-bath3.png"> 2.5 &nbsp; 2,000 sqft
														</span>
														1 fewer bed  &nbsp; &nbsp; &nbsp;  1 fewer baths
														</a>
													</p>
													
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs2">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														<b>For Sale - AED 230,000</b><br/>
														537 W Belmont Ave APT 2, Chicago, IL 60657<br/>
														<span>
														<img src="images/icon-bed3.png"> 3 &nbsp; 
														<img src="images/icon-bath3.png"> 2.5 &nbsp; 2,000 sqft
														</span>
														1 fewer bed  &nbsp; &nbsp; &nbsp;  1 fewer baths
														</a>
													</p>
													
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs2">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														<b>For Sale - AED 230,000</b><br/>
														537 W Belmont Ave APT 2, Chicago, IL 60657<br/>
														<span>
														<img src="images/icon-bed3.png"> 3 &nbsp; 
														<img src="images/icon-bath3.png"> 2.5 &nbsp; 2,000 sqft
														</span>
														1 fewer bed  &nbsp; &nbsp; &nbsp;  1 fewer baths
														</a>
													</p>
													
													<div class="cleardv"></div>
												</div>
												
												
												<div class="propertiesdvs2">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														<b>For Sale - AED 230,000</b><br/>
														537 W Belmont Ave APT 2, Chicago, IL 60657<br/>
														<span>
														<img src="images/icon-bed3.png"> 3 &nbsp; 
														<img src="images/icon-bath3.png"> 2.5 &nbsp; 2,000 sqft
														</span>
														1 fewer bed  &nbsp; &nbsp; &nbsp;  1 fewer baths
														</a>
													</p>
													
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs2">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														<b>For Sale - AED 230,000</b><br/>
														537 W Belmont Ave APT 2, Chicago, IL 60657<br/>
														<span>
														<img src="images/icon-bed3.png"> 3 &nbsp; 
														<img src="images/icon-bath3.png"> 2.5 &nbsp; 2,000 sqft
														</span>
														1 fewer bed  &nbsp; &nbsp; &nbsp;  1 fewer baths
														</a>
													</p>
													
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs2">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														<b>For Sale - AED 230,000</b><br/>
														537 W Belmont Ave APT 2, Chicago, IL 60657<br/>
														<span>
														<img src="images/icon-bed3.png"> 3 &nbsp; 
														<img src="images/icon-bath3.png"> 2.5 &nbsp; 2,000 sqft
														</span>
														1 fewer bed  &nbsp; &nbsp; &nbsp;  1 fewer baths
														</a>
													</p>
													
													<div class="cleardv"></div>
												</div>
												
											</div>
											<div class="span6 saleclass">
												
												<div class="propertiesdvs2">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														<b>For Sale - AED 230,000</b><br/>
														537 W Belmont Ave APT 2, Chicago, IL 60657<br/>
														<span>
														<img src="images/icon-bed3.png"> 3 &nbsp; 
														<img src="images/icon-bath3.png"> 2.5 &nbsp; 2,000 sqft
														</span>
														1 fewer bed  &nbsp; &nbsp; &nbsp;  1 fewer baths
														</a>
													</p>
													
													<div class="cleardv"></div>
												</div>
												<div class="propertiesdvs2">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														<b>For Sale - AED 230,000</b><br/>
														537 W Belmont Ave APT 2, Chicago, IL 60657<br/>
														<span>
														<img src="images/icon-bed3.png"> 3 &nbsp; 
														<img src="images/icon-bath3.png"> 2.5 &nbsp; 2,000 sqft
														</span>
														1 fewer bed  &nbsp; &nbsp; &nbsp;  1 fewer baths
														</a>
													</p>
													
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs2">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														<b>For Sale - AED 230,000</b><br/>
														537 W Belmont Ave APT 2, Chicago, IL 60657<br/>
														<span>
														<img src="images/icon-bed3.png"> 3 &nbsp; 
														<img src="images/icon-bath3.png"> 2.5 &nbsp; 2,000 sqft
														</span>
														1 fewer bed  &nbsp; &nbsp; &nbsp;  1 fewer baths
														</a>
													</p>
													
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs2">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														<b>For Sale - AED 230,000</b><br/>
														537 W Belmont Ave APT 2, Chicago, IL 60657<br/>
														<span>
														<img src="images/icon-bed3.png"> 3 &nbsp; 
														<img src="images/icon-bath3.png"> 2.5 &nbsp; 2,000 sqft
														</span>
														1 fewer bed  &nbsp; &nbsp; &nbsp;  1 fewer baths
														</a>
													</p>
													
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs2">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														<b>For Sale - AED 230,000</b><br/>
														537 W Belmont Ave APT 2, Chicago, IL 60657<br/>
														<span>
														<img src="images/icon-bed3.png"> 3 &nbsp; 
														<img src="images/icon-bath3.png"> 2.5 &nbsp; 2,000 sqft
														</span>
														1 fewer bed  &nbsp; &nbsp; &nbsp;  1 fewer baths
														</a>
													</p>
													
													<div class="cleardv"></div>
												</div>
												<div class="propertiesdvs2">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														<b>For Sale - AED 230,000</b><br/>
														537 W Belmont Ave APT 2, Chicago, IL 60657<br/>
														<span>
														<img src="images/icon-bed3.png"> 3 &nbsp; 
														<img src="images/icon-bath3.png"> 2.5 &nbsp; 2,000 sqft
														</span>
														1 fewer bed  &nbsp; &nbsp; &nbsp;  1 fewer baths
														</a>
													</p>
													
													<div class="cleardv"></div>
												</div>
											</div>
											
											
											<div class="clear"></div>
									   </div> 
									   <div class="clear"></div>
								   </div>
								  
								   
								  
								  
									<div class="clear"></div>
										
								</div>
							
							
								<div class="cleardv"></div>
							
							
								<div class="cleardv"></div>
							</div>
							
							
							
							<div class="tabs">
							   
							   <div class="tab mapdvs">
								   
								   <label for="tab2-1" id="listtab" class="plab3"><img id="btnshuffle" src="images/listview.png"></label>
								   <div class="clear"></div>
								   <div class="content mapdv">
										
										
										<div class="clear"></div>
								   </div>
									<div class="clear"></div>
							   </div>
								
							   <div class="tab mapdvs">
								   <input type="radio" id="tab2-2" name="tab-group-2" checked>
								   <label for="tab2-2" onclick="document.getElementById('tab9-2').click();" class="plab2 nodisplay">ALL</label>
								   
								   <div class="content mapdv">
										<div class="clear10"></div>
										<iframe src="all-properties.php" width="100%" height="450" frameborder="0" scrolling="no" style="border:0" allowfullscreen></iframe>
										
										<div class="clear"></div>
								   </div> 
								   <div class="clear"></div>
							   </div>
							   
							   
							   
							   <div class="tab mapdvs"  id="avgproperty">
								   <input type="radio" id="tab2-5" name="tab-group-2">
								   <label for="tab2-5" onclick="document.getElementById('tab9-5').click();" class="plab2 noborder nodisplay">AVG. PROPERTY VALUE</label>
								   
								   <div class="content mapdv">
										<div class="clear10"></div>
										<iframe src="all-properties.php" width="100%" height="450" frameborder="0" scrolling="no" style="border:0" allowfullscreen></iframe>
										
										<div class="clear"></div>
								   </div> 
								   <div class="clear"></div>
							   </div>
								<div class="clear"></div>
									
							</div>
						</div>
						
						<div class="clear10"></div>
						<div class="clear10"></div>
						<div class="clear10"></div>
					
					
					
				</div>
				
			</div>
			
			
			
				
		
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
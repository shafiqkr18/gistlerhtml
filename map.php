<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Gistler</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<link rel="stylesheet" href="css/jquery.mCustomScrollbar2.css">
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
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link href="css/magicsuggest3.css" rel="stylesheet">
  <script src="js/magicsuggest6.js"></script>
  
  <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" /> 
	<style>
	body{}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			

		});
	</script>
  
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <link rel="stylesheet"  href="src/css/lightslider.css"/>
 
  <script src="src/js/lightslider.js"></script>
    <script>
    	 $(document).ready(function() {
			
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
			$('#image-gallery4').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery4').removeClass('cS-hidden');
                }  
            });
			$('#image-gallery5').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery5').removeClass('cS-hidden');
                }  
            });
			$('#image-gallery6').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery6').removeClass('cS-hidden');
                }  
            });
			$('#image-gallery8').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery8').removeClass('cS-hidden');
                }  
            });
			$('#image-gallery7').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery7').removeClass('cS-hidden');
                }  
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
<section class="headertop needhead mapdiv" id="header-section">

 <!-- ################-->
 <!-- START TOP MENU -->
 <!-- ################-->
 
  
 
  <?php
  include('header2.php');
  ?>
  
  
    <script>
		function hidepopup(){
			document.getElementById('light').style.display='none';
			document.getElementById('fade').style.display='none';
		}
		
		function showpopup(){
			document.getElementById('light').style.display='block';
			document.getElementById('fade').style.display='block';
		}
	</script>
	<div id="light" class="white_content propertymap" style="display:none;"> <a href = "javascript:void(0)" onclick="hidepopup();"><img src="images/iframecross.png"></a>
		<h3>Quick Map</h3>
		<iframe src="listing_map.php" frameborder="0" allowfullscreen="" scrolling="no" class="mapiframe"></iframe>
		
		<div class="iframedvright">
			<a href="http://www.facebook.com/" target="_blank"><img src="images/facebook2.png"></a>
			<a href="http://www.twitter.com/" target="_blank"><img src="images/twitter2.png"></a>
			<a href="http://www.linkedin.com/" target="_blank"><img src="images/linkedin2.png"></a>															
			<a href="http://www.plus.google.com/" target="_blank"><img src="images/googleplus2.png"></a>
			<a href="http://www.whatsapp.com" target="_blank"><img src="images/whatsapp.png"></a>
			<a href="mailto:test@gmail.com" target="_blank"><img src="images/envelop.png"></a>
			<a href="javascript:;" onclick="javascript:window.print();" ><img src="images/print_btn.png"></a>
		</div>
	</div>
	<div id="fade" class="black_overlay" style="display:none;" onclick="hidepopup();"></div>
  
  
  <script>
		$(document).scroll(function() {
			if($(this).scrollTop() > 320){
				 $("#fixedscroll").addClass("bottomfixed");
			}
			else{
				$("#fixedscroll").removeClass("bottomfixed");
			}
			
		});
		
		function myFunction() {
			
			document.getElementById("formsubmitbtn").click(); // Click on the checkbox
		}
		
		
		
		</script>
  <ul class="floatingside listside2 list-bottom" id="fixedscroll">
				<li><a href="listing.php"><img src="images/gist_button.png"></a>
					<ul class="mainlength3">
						<li>
							<div class="sectionslide">
								<p><a href="listing.php">Gist it</a></p>
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
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
								<div class="sectionslide">
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
								<div class="sectionslide">
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
								<div class="sectionslide">
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
								<div class="sectionslide">
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
								<div class="sectionslide">
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
								<div class="sectionslide">
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
								<div class="sectionslide">
									<p><a href="property-detail.php">1 BR, Giovanni Boutique Suites, SPorts City Studio</a></p>
									<p><small>SPorts CIty, Dubai, United Arab Emirates</small></p>
									<p><small>Monday, 26th November, 2015 - 18;45;15</small></p>
								</div>
							</li>
						</ul>
				</li>
				
				
			</ul>
  
			<!-- END HEADER headertop NAV -->

  <script>
		$(document).ready(function(){
				
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
		
	</script>
	<script>
						$(document).ready(function(){
							/*
							$("#togglemap1").click(function(){
								$("#mapdv1").toggleClass("displayblock");
							});
							$("#togglemap2").click(function(){
								$("#mapdv2").toggleClass("displayblock");
							});
							$("#togglemap3").click(function(){
								$("#mapdv3").toggleClass("displayblock");
							});
							$("#togglemap4").click(function(){
								$("#mapdv4").toggleClass("displayblock");
							});
							$("#togglemap5").click(function(){
								$("#mapdv5").toggleClass("displayblock");
							});
							$("#togglemap6").click(function(){
								$("#mapdv6").toggleClass("displayblock");
							});*/
							
							$("#form_reset").click(function(){
								document.getElementById('selectedproptery').value = '';
								$('#reg-form').trigger("reset");
								myFunction();
								$("#form_reset").removeClass("btnactive");
							});
							
							$('.closelist').on("click", function () {
								$(this).parents('li').fadeOut('slow', function(){
								  $(this).remove();
								  
								  // alert( $('.background-blackout').length );
								  //console.log( $('.background-blackout').length );
								});
							
								 
							});
						});
						
						function getslideid(str){
							document.getElementById('slideremove').value = str;
							$(this).delay(500).queue(function() {

								 myFunction();
								$("#form_reset").addClass("btnactive");

								 $(this).dequeue();

							  });
							
						}
						
						function get_select(str){
							document.getElementById('selectedproptery').value = str;
							myFunction();
							$("#form_reset").addClass("btnactive");
						}
						</script>
						<a  class="btn-refresh resetmap" id="form_reset">&nbsp;</a>
		<div id="map_load">
			
			<div class="sliderlisting " id="content-l">
			  <ul style="margin:0px;">
				<li>
				<div class="sliderdv bgshade">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox11" onclick="get_select(1);" class="checkboxslid"><label for="selectbox11">Select</label> &nbsp; <a class="togglebutton" href="#" onclick="showpopup();" id="togglemap1"><img src="images/icon-map.png"> Map</a>
						</span>
						<span class="rightcontent">
							<a href="property-detail.php">Details</a> &nbsp; &nbsp; <a href="#" onclick="getslideid(1);" class="closelist"><img src="images/icon-cross.png"></a>
						</span>
						<div class="clear"></div>
					</div>
					<div class="sliderbottomdv">
						
						<div class="divwidth45 propdetail">
							<h5>AED 249,900</h5>
							<p>
								Dubai Marina<br/>
								Bay Central 1
							</p>
							
						</div>
						
						<div class="divwidth18 propdetail2">
							<p class="txtcenter">
								3<br/><br/>
								
								<img src="images/icon-bed.png">
								
							</p>
						</div>
						
						<div class="divwidth18 propdetail2">
							<p class="txtcenter">
								2.5<br/><br/>
								
								<img src="images/icon-bathroom.png">
								
							</p>
						</div>
						
						<div class="divwidth22 propdetail2">
							<p class="txtcenter">
								2,200<br/><br/>
								
								sq ft
								
							</p>
						</div>
						
						<div class="clear"></div>
					</div>
					<div class="sliderimg">
						<ul id="image-gallery6" class="gallery list-unstyled cS-hidden">
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
					
				</div>
				</li>
			  <li>
				<div class="sliderdv bgshade">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox12" onclick="get_select(2);" class="checkboxslid"><label for="selectbox12">Select</label> &nbsp; <a class="togglebutton" href="#" onclick="showpopup();" id="togglemap2"><img src="images/icon-map.png"> Map</a>
						</span>
						<span class="rightcontent">
							<a href="property-detail.php">Details</a> &nbsp; &nbsp; <a href="#" class="closelist"><img src="images/icon-cross.png"></a>
						</span>
						<div class="clear"></div>
					</div>
					<div class="sliderbottomdv">
						
						<div class="divwidth45 propdetail">
							<h5>AED 249,900</h5>
							<p>
								Dubai Marina<br/>
								Bay Central 2
							</p>
							
						</div>
						
						<div class="divwidth18 propdetail2">
							<p class="txtcenter">
								3<br/><br/>
								
								<img src="images/icon-bed.png">
								
							</p>
						</div>
						
						<div class="divwidth18 propdetail2">
							<p class="txtcenter">
								2.5<br/><br/>
								
								<img src="images/icon-bathroom.png">
								
							</p>
						</div>
						
						<div class="divwidth22 propdetail2">
							<p class="txtcenter">
								2,200<br/><br/>
								
								sq ft
								
							</p>
						</div>
						
						<div class="clear"></div>
					</div>
					<div class="sliderimg">
						<ul id="image-gallery5" class="gallery list-unstyled cS-hidden">
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
					
				</div>
				</li>
				
				
				<li>
				<div class="sliderdv bgshade">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox13" class="checkboxslid"><label for="selectbox13">Select</label> &nbsp; <a class="togglebutton" href="#" onclick="showpopup();" id="togglemap3"><img src="images/icon-map.png"> Map</a>
						</span>
						<span class="rightcontent">
							<a href="property-detail.php">Details</a> &nbsp; &nbsp; <a href="#" class="closelist"><img src="images/icon-cross.png"></a>
						</span>
						<div class="clear"></div>
					</div>
					<div class="sliderbottomdv">
						
						<div class="divwidth45 propdetail">
							<h5>AED 249,900</h5>
							<p>
								Dubai Marina<br/>
								Bay Central 3
							</p>
							
						</div>
						
						<div class="divwidth18 propdetail2">
							<p class="txtcenter">
								3<br/><br/>
								
								<img src="images/icon-bed.png">
								
							</p>
						</div>
						
						<div class="divwidth18 propdetail2">
							<p class="txtcenter">
								2.5<br/><br/>
								
								<img src="images/icon-bathroom.png">
								
							</p>
						</div>
						
						<div class="divwidth22 propdetail2">
							<p class="txtcenter">
								2,200<br/><br/>
								
								sq ft
								
							</p>
						</div>
						
						<div class="clear"></div>
					</div>
					
					<div class="sliderimg">
						<ul id="image-gallery4" class="gallery list-unstyled cS-hidden">
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
					
				</div>
				
				</li>
				<li>
				<div class="sliderdv bgshade">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox14" class="checkboxslid"><label for="selectbox14">Select</label> &nbsp; <a class="togglebutton" href="#" onclick="showpopup();" id="togglemap4"><img src="images/icon-map.png"> Map</a>
						</span>
						<span class="rightcontent">
							<a href="property-detail.php">Details</a> &nbsp; &nbsp; <a href="#" class="closelist"><img src="images/icon-cross.png"></a>
						</span>
						<div class="clear"></div>
					</div>
					<div class="sliderbottomdv">
						
						<div class="divwidth45 propdetail">
							<h5>AED 249,900</h5>
							<p>
								Dubai Marina<br/>
								Bay Central 4
							</p>
							
						</div>
						
						<div class="divwidth18 propdetail2">
							<p class="txtcenter">
								3<br/><br/>
								
								<img src="images/icon-bed.png">
								
							</p>
						</div>
						
						<div class="divwidth18 propdetail2">
							<p class="txtcenter">
								2.5<br/><br/>
								
								<img src="images/icon-bathroom.png">
								
							</p>
						</div>
						
						<div class="divwidth22 propdetail2">
							<p class="txtcenter">
								2,200<br/><br/>
								
								sq ft
								
							</p>
						</div>
						
						<div class="clear"></div>
					</div>
					<div class="sliderimg">
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
					
				</div>
				</li>
				
				<li>
				<div class="sliderdv bgshade">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox15" class="checkboxslid"><label for="selectbox15">Select</label> &nbsp; <a class="togglebutton" href="#" onclick="showpopup();" id="togglemap5"><img src="images/icon-map.png"> Map</a>
						</span>
						<span class="rightcontent">
							<a href="property-detail.php">Details</a> &nbsp; &nbsp; <a href="#" class="closelist"><img src="images/icon-cross.png"></a>
						</span>
						<div class="clear"></div>
					</div>
					<div class="sliderbottomdv">
						
						<div class="divwidth45 propdetail">
							<h5>AED 249,900</h5>
							<p>
								Dubai Marina<br/>
								Bay Central 5
							</p>
							
						</div>
						
						<div class="divwidth18 propdetail2">
							<p class="txtcenter">
								3<br/><br/>
								
								<img src="images/icon-bed.png">
								
							</p>
						</div>
						
						<div class="divwidth18 propdetail2">
							<p class="txtcenter">
								2.5<br/><br/>
								
								<img src="images/icon-bathroom.png">
								
							</p>
						</div>
						
						<div class="divwidth22 propdetail2">
							<p class="txtcenter">
								2,200<br/><br/>
								
								sq ft
								
							</p>
						</div>
						
						<div class="clear"></div>
					</div>
					<div class="sliderimg">
						<ul id="image-gallery2" class="gallery list-unstyled cS-hidden">
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
					
				</div>
				</li>
			</ul>
				<div class="cleardv"></div>
			</div>
					
			<iframe src="map_filtration.php" height="95%" width="100%" scrolling="no" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	
			
</section><!--/ TOP SECTION-->




	<!-- /FEATURE section-->
	
	
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
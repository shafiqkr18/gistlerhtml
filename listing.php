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
<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- Le fav and touch icons -->
<link href="css/magicsuggest2.css" rel="stylesheet">
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="js/magicsuggest2.js"></script>
  
	
  <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" /> 
	
	
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
<section class="section-2 mainnav" id="header-section">
	<div class="preload">
		<img src="images/black-heart.png">
		<img src="images/black-share.png">
		<img src="images/black-report.png">
	</div>
 <!-- ################-->
 <!-- START TOP MENU -->
 <!-- ################-->
 <?php
  include('header3.php');
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
		<iframe src="listing_map.php" frameborder="0" scrolling="no" class="mapiframe"></iframe>
		
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
  
  <div class="bg-wraper parallax-point-event">
	<br/>
	<div class="container">
		<div class="row-fluid">
		<!-- FEATURE ITEM-->
		<?php
		include('list-sidebar.php')
		?>
			
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
			<script>
			$(document).ready(function()
				{	
					$(document).on('submit', '#reg-form', function()
					{
						var data = $(this).serialize();
						
						
						$.ajax({
						
						type : 'POST',
						url  : 'listing_filter.php',
						beforeSend: function(){
							$(".se-pre-con").fadeIn("slow");
					    },
						data : data,
						success :  function(data)
								   {						
										
									$(".result").fadeIn(1000).show(function()
									{
										$(".result").html(data);
										
									});
										$(".se-pre-con").fadeOut("slow");
										
								   }
						});
						
						return false;
					});
					
					
				});
				
				
			</script>
			<?php
			include('sidepanel.php');
			?>
			<!-- END FEATURE ITEM-->
			
						<script>
						$(document).ready(function(){
							/*$("#togglemap1").click(function(){
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
								$('#reg-form').trigger("reset");
								var pricearray = ["filterprice1", "filterprice2", "filterprice3", "filterprice4", "filterprice5", "filterprice6", "filterprice7", "filterprice8", "filterprice9", "filterprice10", "filterprice11", "filterprice12", "filterprice13", "filterprice14", "filterprice15", "filterprice16", "filterprice17", "filterprice18", "filterprice19", "filterprice20", "filterprice21", "filterprice22", "filterprice23", "filterprice24"];
								
								for (i = 0; i <= 23; i++){ 
									document.getElementById(pricearray[i]).style.cssText = 'display:block;';
								}
								
								myFunction();
								$("#form_reset").removeClass("btnactive");
							});
							
							
							
							$("#veiwmoredata").click(function(){
								$(".readmoreclass").fadeIn()
							});
							
							
							$("#veiwmoredata").click(function(){
								
								
								var myMarginTop = $("#footerhide").css("marginTop");
								if(myMarginTop == '-62px'){
									$('#footerhide').animate({marginTop:0},300).attr('class', 'footerhide1');
									$('#rotatearrow').attr("src", 'images/hide-button.jpg');
								}
								else{
									$('#footerhide').animate({marginTop:-62},300).attr('class', 'footerhide1');
									$('#rotatearrow').attr("src", 'images/readmorebtn.png');
								}
							});
							
	
							
							$('.closelist').on("click", function () {
								$(this).parents('li').fadeOut('slow', function(){
								  $(this).remove();
								  
								  // alert( $('.background-blackout').length );
								  //console.log( $('.background-blackout').length );
								});
								$('#content-slider').css({
									//'width' : $('#content-slider').width()  - 210
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
						
						$(document).ready(function(){                       //run when the DOM is ready
						  $(".icons-heart").click(function() {  //use a class, since your ID gets mangled
							$(this).toggleClass("active");      //add the class to the clicked element
						  });
						});
						
						function get_select(str){
							document.getElementById('selectedproptery').value = str;
							myFunction();
							$("#form_reset").addClass("btnactive");
						}
						
						</script>
						
			<div class="span10 listsliderdv listingpage">
				
				<div class="se-pre-con" style="display:none;"></div>
				
				<div id="div1" class="result">
				<ul id="content-slider" class="content-slider">
					<li>
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox11" onclick="get_select(1);" class="checkboxslid"><label for="selectbox11">Select</label> &nbsp; <a class="togglebutton" href="#" onclick="showpopup();" id="togglemap1"><img src="images/icon-map.png"> Map</a>
								</span>
								<span class="rightcontent">
									<a href="property-detail.php">Details</a> &nbsp; &nbsp; <a onclick="getslideid(1);" class="closelist"><img src="images/icon-cross.png"></a>
								</span>
								<div class="clear"></div>
							</div>
							<div class="sliderbottomdv">
								
								<div class="divwidth45 propdetail">
									<h5>AED 249,900</h5>
									<p>
										Dubai Marina<br/>
										Bay Central
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
							<div class="maptopdv" id="mapdv1">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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
						
						<div class="slideicons">
							<a href="#"><i class="icons-heart tooltips-top"><span><p>Like</p></span></i></a>    
							<span class="hovermenu"><i class="icons-share tooltips-top"><span><p>Share</p></span></i></i>
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
							</span>
							<span class="hovermenu"><i class="icons-report tooltips-top"><span><p>Report</p></span></i>
								<ul class="reportproblem">
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
							<!--
							<img src="images/icon-heart.png"> <img src="images/icon-share.png"> <img src="images/icon-report.png">-->
						</div>
						<div class="sliderdetails bgblue">
							<ul>
								<li>Dubai</li>
								<li>Dubai Lagoon</li>
								<li>Sale</li>
								<li>Apartment</li>
								<li>3,400,00</li>
								<li>2</li>
								<li>2</li>
								<li>1,447</li>
								<li>Community</li>
								<li>Balcony</li>
								<li>Friendly Rock Real Estate</li>
								<li>Holly Estates Developers</li>
								<li>DIP Studio with City View</li>
								<li class="readmoreclass">Luxurious 2 B/R+maids, Loft type apartment on the top floor with magnificent view of Dubai Marina.</li>
							</ul>
						</div>
						
						
					</li>
					<li>
						
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox2" onclick="get_select(2);" class="checkboxslid"><label for="selectbox2">Select</label> &nbsp; <a class="togglebutton" href="#" onclick="showpopup();" id="togglemap1"><img src="images/icon-map.png"> Map</a>
								</span>
								<span class="rightcontent">
									<a href="property-detail.php">Details</a> &nbsp; &nbsp; <a href="#" onclick="getslideid(2);" class="closelist"><img src="images/icon-cross.png"></a>
								</span>
								<div class="clear"></div>
							</div>
							<div class="sliderbottomdv">
								
								<div class="divwidth45 propdetail">
									<h5>AED 249,900</h5>
									<p>
										Dubai Marina<br/>
										Bay Central
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
							<div class="maptopdv" id="mapdv2">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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
						
						<div class="slideicons">
							<a href="#"><i class="icons-heart tooltips-top"><span><p>Like</p></span></i></a>    
							<span class="hovermenu"><i class="icons-share tooltips-top"><span><p>Share</p></span></i></i>
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
							</span>
							<span class="hovermenu"><i class="icons-report tooltips-top"><span><p>Report</p></span></i>
								<ul class="reportproblem">
									<li>
										<div class="fileattach">
											<h3>Report a problem</h3>
											<h4>What's the issue?</h4>
											<p><input type="radio" name="problem2" id="sec2option1"> <label for="sec2option1">Incorrect information/photos</label></p>
											<p><input type="radio" name="problem2" checked id="sec2option2"> <label for="sec2option2">Home should be for sale/rent</label></p>
											<p><input type="radio" name="problem2" id="sec2option3"> <label for="sec2option3">Fraudulent listing or spam</label></p>
											<div class="clear10"></div>
											<p><big>Gistler Account</big></p>
											<p>In order to report a review, you must have a registered account on Gistler.</p>
											<div class="clear10"></div>
											<p><input type="radio" name="account2" id="sec2option4"> <label for="sec2option4">I need to create a Gistler account.</label></p>
											<p><input type="radio" name="account2" id="sec2option5"> <label for="sec2option5">I already have a Gistler account.</label></p>
											<div class="clear10"></div>
											<p><input type="checkbox" name="certify" id="sec2option6"> <label for="sec2option6">I promise this review is honest and respectful. I understand Gistler's Terms and Conditions</label></p>
											<input type="submit" value="Submit" class="reportbtn">
											<div class="clear10"></div>
											<p>Don't see your issue here? <br/>Visit our Help Center</p>
										</div>
									</li>
								</ul>
							</span>
						</div>
						<div class="sliderdetails">
							<ul>
								<li>Abu Dhabi</li>
								<li>Dubai Investment Park</li>
								<li>Sale</li>
								<li>Apartment</li>
								<li>3,400,00</li>
								<li>2</li>
								<li>2</li>
								<li>1,447</li>
								<li>Cityscape</li>
								<li>Balcony</li>
								<li>Lychee Island RE</li>
								<li>Mesa Azul Development Firm</li>
								<li>JLT Studio + Balcony</li>
								<li class="readmoreclass">Great Investment - One bedroom apartment in most popular building in prime location in Dubai Marina.</li>
							</ul>
						</div>
						
						
					</li>
					<li>
						
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox3" onclick="get_select(3);" class="checkboxslid"><label for="selectbox3">Select</label> &nbsp; <a class="togglebutton" href="#" onclick="showpopup();" id="togglemap1"><img src="images/icon-map.png"> Map</a>
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
										Bay Central
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
							<div class="maptopdv" id="mapdv3">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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
						
						<div class="slideicons">
							<a href="#"><i class="icons-heart tooltips-top"><span><p>Like</p></span></i></a>    
							<span class="hovermenu"><i class="icons-share tooltips-top"><span><p>Share</p></span></i></i>
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
							</span>
							<span class="hovermenu"><i class="icons-report tooltips-top"><span><p>Report</p></span></i>
								<ul class="reportproblem">
									<li>
										<div class="fileattach">
											<h3>Report a problem</h3>
											<h4>What's the issue?</h4>
											<p><input type="radio" name="problem3" id="sec3option1"> <label for="sec3option1">Incorrect information/photos</label></p>
											<p><input type="radio" name="problem3" checked id="sec3option2"> <label for="sec3option2">Home should be for sale/rent</label></p>
											<p><input type="radio" name="problem3" id="sec3option3"> <label for="sec3option3">Fraudulent listing or spam</label></p>
											<div class="clear10"></div>
											<p><big>Gistler Account</big></p>
											<p>In order to report a review, you must have a registered account on Gistler.</p>
											<div class="clear10"></div>
											<p><input type="radio" name="account3" id="sec3option4"> <label for="sec3option4">I need to create a Gistler account.</label></p>
											<p><input type="radio" name="account3" id="sec3option5"> <label for="sec3option5">I already have a Gistler account.</label></p>
											<div class="clear10"></div>
											<p><input type="checkbox" name="certify" id="sec3option6"> <label for="sec3option6">I promise this review is honest and respectful. I understand Gistler's Terms and Conditions</label></p>
											<input type="submit" value="Submit" class="reportbtn">
											<div class="clear10"></div>
											<p>Don't see your issue here? <br/>Visit our Help Center</p>
										</div>
									</li>
								</ul>
							</span>
						</div>
						<div class="sliderdetails">
							<ul>
								<li>Dubai</li>
								<li>Studio City</li>
								<li>Sale</li>
								<li>Apartment</li>
								<li>3,400,00</li>
								<li>2</li>
								<li>2</li>
								<li>1,447</li>
								<li>Skyscrapers</li>
								<li>Balcony</li>
								<li>Wandering Hills</li>
								<li>Rambutan Bay Developers</li>
								<li>1BR in JLT with Lake View</li>
								<li class="readmoreclass">Luxurious 2 B/R+maids, Loft type apartment on the top floor with magnificent view of Dubai Marina.</li>
							</ul>
						</div>
						
						
					</li>
					<li>
						
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox4" onclick="get_select(4);" class="checkboxslid"><label for="selectbox4">Select</label> &nbsp; <a class="togglebutton" href="#" onclick="showpopup();" id="togglemap1"><img src="images/icon-map.png"> Map</a>
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
										Bay Central
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
							<div class="maptopdv" id="mapdv4">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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
						
						<div class="slideicons">
							<a href="#"><i class="icons-heart tooltips-top"><span><p>Like</p></span></i></a>    
							<span class="hovermenu"><i class="icons-share tooltips-top"><span><p>Share</p></span></i></i>
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
							</span>
							<span class="hovermenu"><i class="icons-report tooltips-top"><span><p>Report</p></span></i>
								<ul class="reportproblem">
									<li>
										<div class="fileattach">
											<h3>Report a problem</h3>
											<h4>What's the issue?</h4>
											<p><input type="radio" name="problem4" id="sec4option1"> <label for="sec4option1">Incorrect information/photos</label></p>
											<p><input type="radio" name="problem4" checked id="sec4option2"> <label for="sec4option2">Home should be for sale/rent</label></p>
											<p><input type="radio" name="problem4" id="sec4option3"> <label for="sec4option3">Fraudulent listing or spam</label></p>
											<div class="clear10"></div>
											<p><big>Gistler Account</big></p>
											<p>In order to report a review, you must have a registered account on Gistler.</p>
											<div class="clear10"></div>
											<p><input type="radio" name="account4" id="sec4option4"> <label for="sec4option4">I need to create a Gistler account.</label></p>
											<p><input type="radio" name="account4" id="sec4option5"> <label for="sec4option5">I already have a Gistler account.</label></p>
											<div class="clear10"></div>
											<p><input type="checkbox" name="certify" id="sec4option6"> <label for="sec4option6">I promise this review is honest and respectful. I understand Gistler's Terms and Conditions</label></p>
											<input type="submit" value="Submit" class="reportbtn">
											<div class="clear10"></div>
											<p>Don't see your issue here? <br/>Visit our Help Center</p>
										</div>
									</li>
								</ul>
							</span>
						</div>
						<div class="sliderdetails">
							<ul>
								<li>Abu Dhabi</li>
								<li>Dubai Lagoon</li>
								<li>Sale</li>
								<li>Apartment</li>
								<li>3,400,00</li>
								<li>2</li>
								<li>2</li>
								<li>1,447</li>
								<li>Swimming pool</li>
								<li>Balcony</li>
								<li>Vista Baja Real Estate</li>
								<li>Rancho Conejo Developers</li>
								<li>JLT 1BR with City View</li>
								<li class="readmoreclass">Luxurious 2 B/R+maids, Loft type apartment on the top floor with magnificent view of Dubai Marina.</li>
							</ul>
						</div>
						
						
					</li>
					<li>
						
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox5" class="checkboxslid"><label for="selectbox5">Select</label> &nbsp; <a class="togglebutton" href="#" onclick="showpopup();" id="togglemap1"><img src="images/icon-map.png"> Map</a>
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
										Bay Central
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
							<div class="maptopdv" id="mapdv5">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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
						
						<div class="slideicons">
							<a href="#"><i class="icons-heart tooltips-top"><span><p>Like</p></span></i></a>    
							<span class="hovermenu"><i class="icons-share tooltips-top"><span><p>Share</p></span></i></i>
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
							</span>
							<span class="hovermenu"><i class="icons-report tooltips-top"><span><p>Report</p></span></i>
								<ul class="reportproblem">
									<li>
										<div class="fileattach">
											<h3>Report a problem</h3>
											<h4>What's the issue?</h4>
											<p><input type="radio" name="problem5" id="sec5option1"> <label for="sec5option1">Incorrect information/photos</label></p>
											<p><input type="radio" name="problem5" checked id="sec5option2"> <label for="sec5option2">Home should be for sale/rent</label></p>
											<p><input type="radio" name="problem5" id="sec5option3"> <label for="sec5option3">Fraudulent listing or spam</label></p>
											<div class="clear10"></div>
											<p><big>Gistler Account</big></p>
											<p>In order to report a review, you must have a registered account on Gistler.</p>
											<div class="clear10"></div>
											<p><input type="radio" name="account5" id="sec5option4"> <label for="sec5option4">I need to create a Gistler account.</label></p>
											<p><input type="radio" name="account5" id="sec5option5"> <label for="sec5option5">I already have a Gistler account.</label></p>
											<div class="clear10"></div>
											<p><input type="checkbox" name="certify" id="sec5option6"> <label for="sec5option6">I promise this review is honest and respectful. I understand Gistler's Terms and Conditions</label></p>
											<input type="submit" value="Submit" class="reportbtn">
											<div class="clear10"></div>
											<p>Don't see your issue here? <br/>Visit our Help Center</p>
										</div>
									</li>
								</ul>
							</span>
						</div>
						<div class="sliderdetails">
							<ul>
								<li>Dubai</li>
								<li>Dubai Investment Park</li>
								<li>Sale</li>
								<li>Apartment</li>
								<li>3,400,00</li>
								<li>2</li>
								<li>2</li>
								<li>1,447</li>
								<li>Sea</li>
								<li>Balcony</li>
								<li>Friendly Rock Real Estate</li>
								<li>Holly Estates Developers</li>
								<li>DIP Studio with City View</li>
								<li class="readmoreclass">Great Investment - One bedroom apartment in most popular building in prime location in Dubai Marina.</li>
							</ul>
						</div>
						
						
					</li>
					<li>
						
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox6" class="checkboxslid"><label for="selectbox6">Select</label> &nbsp; <a class="togglebutton" href="#" onclick="showpopup();" id="togglemap1"><img src="images/icon-map.png"> Map</a>
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
										Bay Central
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
							<div class="maptopdv" id="mapdv6">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="sliderimg">
								<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
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
						
						<div class="slideicons">
							<a href="#"><i class="icons-heart tooltips-top"><span><p>Like</p></span></i></a>    
							<span class="hovermenu"><i class="icons-share tooltips-top"><span><p>Share</p></span></i></i>
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
							</span>
							<span class="hovermenu"><i class="icons-report tooltips-top"><span><p>Report</p></span></i>
						</div>
						<div class="sliderdetails">
							<ul>
								<li>Abu Dhabi</li>
								<li>Studio City</li>
								<li>Sale</li>
								<li>Apartment</li>
								<li>3,400,00</li>
								<li>2</li>
								<li>2</li>
								<li>1,447</li>
								<li>Fountain</li>
								<li>Balcony</li>
								<li>Lychee Island RE</li>
								<li>Mesa Azul Development</li>
								<li>JLT Studio + Balcony</li>
								<li class="readmoreclass">Luxurious 2 B/R+maids, Loft type apartment on the top floor with magnificent view of Dubai Marina.</li>
							</ul>
						</div>
						
						
					</li>
					<li>
						
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox6" class="checkboxslid"><label for="selectbox6">Select</label> &nbsp; <a class="togglebutton fancybox fancybox.iframe" href="listing_map.php" id="togglemap6"><img src="images/icon-map.png"> Map</a>
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
										Bay Central
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
							<div class="maptopdv" id="mapdv6">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="sliderimg">
								<ul id="image-gallery7" class="gallery list-unstyled cS-hidden">
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
						
						<div class="slideicons">
							<a href="#"><i class="icons-heart tooltips-top"><span><p>Like</p></span></i></a>    
							<span class="hovermenu"><i class="icons-share tooltips-top"><span><p>Share</p></span></i></i>
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
							</span>
							<a href="#"><i class="icons-report"></i></a>
						</div>
						<div class="sliderdetails">
							<ul>
								<li>Abu Dhabi</li>
								<li>Dubai Lagoon</li>
								<li>Sale</li>
								<li>Apartment</li>
								<li>3,400,00</li>
								<li>2</li>
								<li>2</li>
								<li>1,447</li>
								<li>Community</li>
								<li>Balcony</li>
								<li>Wandering Hills</li>
								<li>Rambutan Bay Developers</li>
								<li>1BR in JLT with Lake View</li>
								<li class="readmoreclass">Luxurious 2 B/R+maids, Loft type apartment on the top floor with magnificent view of Dubai Marina.</li>
							</ul>
						</div>
						
						
					</li>
					<li>
						
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox6" checked class="checkboxslid"><label for="selectbox6">Select</label> &nbsp; <a class="togglebutton fancybox fancybox.iframe" href="listing_map.php" id="togglemap6"><img src="images/icon-map.png"> Map</a>
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
										Bay Central
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
							<div class="maptopdv" id="mapdv6">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="sliderimg">
								<ul id="image-gallery8" class="gallery list-unstyled cS-hidden">
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
						
						<div class="slideicons">
							<a href="#"><i class="icons-heart"></i></a>    
							<span class="hovermenu"><i class="icons-share"></i>
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
							</span>
							<a href="#"><i class="icons-report"></i></a>
						</div>
						<div class="sliderdetails">
							<ul>
								<li>Dubai</li>
								<li>Dubai Investment Park</li>
								<li>Sale</li>
								<li>Apartment</li>
								<li>3,400,00</li>
								<li>2</li>
								<li>2</li>
								<li>1,447</li>
								<li>Cityscape</li>
								<li>Balcony</li>
								<li>Vista Baja Real Estate</li>
								<li>Rancho Conejo Developers</li>
								<li>JLT 1BR with City View</li>
								<li class="readmoreclass">Great Investment - One bedroom apartment in most popular building in prime location in Dubai Marina.</li>
							</ul>
						</div>
						
						
					</li>
				</ul>
				</div>
				
				
				<div class="clear"></div>
			</div>
			
			<div class="clear"></div>
				
				
				
		
		<!-- FEATURE ITEM-->
		
		<!-- FEATURE ITEM-->
		</div><!--/ ROW-FLUID-->
		
	
	
	
	</div><!--/CONTAINER-->
</div><!-- / BG WRAPER-->
  
  
			<!-- END HEADER headertop NAV -->


			
</section><!--/ TOP SECTION-->
 

<!-- ###################### FOOTER #######################
    ================================================== -->
<?php
include('footer2.php');
?>

<!-- END: FOOTER -->
</div>
</body>
</html>
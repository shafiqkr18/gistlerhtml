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
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  
	<link href="css/ion.rangeSlider.css" rel="stylesheet" type="text/css">
<link href="css/ion.rangeSlider.skinNice.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/ion.rangeSlider.min.js"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
		<script>
            // When the document is ready
            $(document).ready(function () {
                //validation rules
                //by default it will append a <label class="error> element to the invalid input
                //and will add a "error" class to the input
                
				$("#form-mortgage").validate({
                    rules: {
                        "min-salary": {
                            required: true,
							number: true
                        },  
                        "down-payment": {
                            required: true,
							number: true
                        },  
                        "payment": {
							required: true,
							number: true
						},  
                        "loan-amount": {
                            required: true,
							number: true
                        },  
                        "yourname": {
                            required: true
                        },  
                        "yournumber": {
                            required: true
                        },  
                        "youremail": {
                            required: true,
							email: true
                        },  
                        "message": {
                            required: true
                        }
						
                    }
                });
            });
        </script>
		
                
<!-- plus a jQuery UI theme, here I use "flick" -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css">
  
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


			<?php
			if(isset($_POST['btnsubmit'])){
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

<div id="light" class="white_content mortpopup" style="display:none;"> <a href = "javascript:void(0)" onclick="hidepopup();"><img src="images/icon-cross.png"></a>
	
	<div class="headerleftimg">
		<img src="images/dubaibank.png">
	</div>
	<div class="headerrightdetail">
		<h4>BANK NAME</h4>
		<h5>NMLS #66247</h5>
		<a href="#">Visit Website</a>
	</div>
	<div class="clear10"></div>
	<form method="post" id="form-mortgage" action="">
	<ul class="mortlistp">
		<li><h2>Loan Details <a class="right">Advertising Disclosure</a></h2> </li>
		<li><p>Loan Type    
			<select class="right popsel">
				<option>All Type</option>
				<option>Type 1</option>
				<option>Type 2</option>
			</select>
		</p></li>
		
		<li><p>Minimum Salary    <input type="text" name="min-salary" id="min-salary" value="15000" class="form-control right poptxt numeric"></p></li>
		<li><p>Down Payment    <input type="text" name="down-payment" value="35" id="down-payment" class="form-control right poptxt"></p></li>
		<li><p>Payment (principal & interest)    <input type="text" name="payment" id="payment" value="632" class="form-control right poptxt"></p></li>
		<li><p>Loan amount    <input type="text" name="loan-amount" id="loan-amount" value="130400" class="form-control right poptxt"></p></li>
		<li><p class="formpara">Quote ID    <span class="right">GQ-LJDYQHMT </span></p> <a class="tooltips-bottom " ><img src="images/question.png"><span><p>Lorem ipsum dolor sit amet, ne mutat delicata vim. Nec solum mazim invenire ea, sit mutat vituperatoribus ea.</p></span></a></li>
		<li><p class="formpara">Date submitted    <span class="right">11/10/2015 at 1:34 PM </span> </p> <a class="tooltips-bottom " ><img src="images/question.png"><span><p>Lorem ipsum dolor sit amet, ne mutat delicata vim. Nec solum mazim invenire ea, sit mutat vituperatoribus ea.</p></span></a></li>
	</ul>
	<div class="clear10"></div>
	
	<div class="width50">
		<p>Your Name</p>
		<input type="text" placeholder="Type your name" name="yourname" id="yourname" class="poptxt2">
		
		<p>Your Phone</p>
		<input type="text" placeholder="Type your number" name="yournumber" id="yournumber" class="poptxt2">
		
		<p>Your Email</p>
		<input type="text" placeholder="Type your email" name="youremail" id="youremail" class="poptxt2">
	</div>
	<div class="width50">
		<textarea class="poparea" name="message" id="message" placeholder="Type your message"></textarea>
		<input type="submit" class="btngist btnapply btnpopup" name="btnsubmit" value="Submit">
		<div class="clear10"></div>
		<p> &nbsp;&nbsp;
		<input type="checkbox" name="test" id="selectboxpop" class="checkboxslid">
		<label for="selectboxpop">&nbsp; Apply to selected banks</label> 
		</p>
	</div>
	</form>
	<div class="clear10"></div>
	
	<div class="terms">
		<p>By clicking "Contact Lender" (1) I authorize Zillow to send the information I entered above to Sebonic Financial and (2) I authorize Sebonic Financial to deliver or cause to be delivered to me at that phone number, tele marketing calls which may use an automatic telephone dialing system, an artificial or prerecorded voice or text message</p>
	</div>
	
</div>
<div id="fade" class="black_overlay" onclick="hidepopup();" style="display:none;"></div>
<!--START MAIN-WRAPPER--> 
<div class="main-wrapper">
<!--START MAIN-WRAPPER--> 

<!-- TOP SECTION-->
<section class="section-2 mainnav mortgagepage" id="header-section">
	<div class="preload">
		<img src="images/black-heart.png">
		<img src="images/black-share.png">
		<img src="images/black-report.png">
	</div>
 <!-- ################-->
 <!-- START TOP MENU -->
 <!-- ################-->
 <?php
  include('header4.php');
  ?>
	
  
  <div class="bg-wraper parallax-point-event">
	<br/>
	<div class="container">
		<div class="row-fluid">
		<!-- FEATURE ITEM-->
		
		
		
  <ul class="floatingside listside2 list-bottom mortgage" id="fixedscroll">
				<li><a href="#"><img src="images/side-icon5.png"></a>
					<ul class="mainlength3">
						<li>
							<div class="sectionslide">
								<p><a href="listing.php">View last search</a></p>
							</div>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="#"><img src="images/side-icon6.png"></a>
					<ul class="mainlength3">
						<li>
							<div class="sectionslide">
								<p><a href="#">Favourite</a></p>
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
						url  : 'mortgage_filter.php',
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
			include('sidepanel2.php');
			?>
			<!-- END FEATURE ITEM-->
			
						<script>
						$(document).ready(function(){
							$("#form_reset").click(function(){
								$('#reg-form').trigger("reset");
								
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
						
						</script>
			
			<div class="span10 listsliderdv">
				
				<div id="div1" class="result">
				<ul id="content-slider" class="content-slider mortgage">
					<li>
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox11" class="checkboxslid"><label for="selectbox11">Select</label> 
								</span>
								<span class="rightcontent">
									<a onclick="getslideid(1);" class="closelist"><img src="images/icon-cross.png"></a>
								</span>
								<div class="clear"></div>
							</div>
							
							<div class="maptopdv" id="mapdv1">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="sliderimg">
								<img src="images/bank1.png">
							</div>
							
						</div>
						
						<div class="sliderdetails ">
							<ul>
								<li>Bank Name</li>
								<li>AED 15,000</li>
								<li>35%</li>
								<li>AED 7,750</li>
								<li>5.99%</li>
								<li class="applybutton"><button onclick="showpopup()" class="btngist btnapply" type="button">Apply</button></li>
							</ul>
							
						</div>
						
						
					</li>
					<li>
						
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox2"  class="checkboxslid"><label for="selectbox2">Select</label>
								</span>
								<span class="rightcontent">
									<a href="#" onclick="getslideid(2);" class="closelist"><img src="images/icon-cross.png"></a>
								</span>
								<div class="clear"></div>
							</div>
							
							<div class="maptopdv" id="mapdv2">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="sliderimg">
								<img src="images/bank2.png">
							</div>
							
						</div>
						
						<div class="sliderdetails">
							<ul>
								<li>Bank Name</li>
								<li>AED 15,000</li>
								<li>35%</li>
								<li>AED 7,750</li>
								<li>5.99%</li>
								<li class="applybutton"><button onclick="showpopup()" class="btngist btnapply" type="button">Apply</button></li>
							</ul>
							
						</div>
						
						
					</li>
					<li>
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox11" class="checkboxslid"><label for="selectbox11">Select</label> 
								</span>
								<span class="rightcontent">
									<a onclick="getslideid(1);" class="closelist"><img src="images/icon-cross.png"></a>
								</span>
								<div class="clear"></div>
							</div>
							
							<div class="maptopdv" id="mapdv1">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="sliderimg">
								<img src="images/bank1.png">
							</div>
							
						</div>
						
						<div class="sliderdetails ">
							<ul>
								<li>Bank Name</li>
								<li>AED 15,000</li>
								<li>35%</li>
								<li>AED 7,750</li>
								<li>5.99%</li>
								<li class="applybutton"><button onclick="showpopup()" class="btngist btnapply" type="button">Apply</button></li>
							</ul>
						</div>
						
						
					</li>
					<li>
						
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox2"  class="checkboxslid"><label for="selectbox2">Select</label>
								</span>
								<span class="rightcontent">
									<a href="#" onclick="getslideid(2);" class="closelist"><img src="images/icon-cross.png"></a>
								</span>
								<div class="clear"></div>
							</div>
							
							<div class="maptopdv" id="mapdv2">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="sliderimg">
								<img src="images/bank2.png">
							</div>
							
						</div>
						
						<div class="sliderdetails">
							<ul>
								<li>Bank Name</li>
								<li>AED 15,000</li>
								<li>35%</li>
								<li>AED 7,750</li>
								<li>5.99%</li>
								<li class="applybutton"><button onclick="showpopup()" class="btngist btnapply" type="button">Apply</button></li>
							</ul>
						</div>
						
						
					</li>
					<li>
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox11" class="checkboxslid"><label for="selectbox11">Select</label> 
								</span>
								<span class="rightcontent">
									<a onclick="getslideid(1);" class="closelist"><img src="images/icon-cross.png"></a>
								</span>
								<div class="clear"></div>
							</div>
							
							<div class="maptopdv" id="mapdv1">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="sliderimg">
								<img src="images/bank1.png">
							</div>
							
						</div>
						
						<div class="sliderdetails ">
							<ul>
								<li>Bank Name</li>
								<li>AED 15,000</li>
								<li>35%</li>
								<li>AED 7,750</li>
								<li>5.99%</li>
								<li class="applybutton"><button onclick="showpopup()" class="btngist btnapply" type="button">Apply</button></li>
							</ul>
						</div>
						
						
					</li>
					<li>
						
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox2"  class="checkboxslid"><label for="selectbox2">Select</label>
								</span>
								<span class="rightcontent">
									<a href="#" onclick="getslideid(2);" class="closelist"><img src="images/icon-cross.png"></a>
								</span>
								<div class="clear"></div>
							</div>
							
							<div class="maptopdv" id="mapdv2">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="sliderimg">
								<img src="images/bank2.png">
							</div>
							
						</div>
						
						<div class="sliderdetails">
							<ul>
								<li>Bank Name</li>
								<li>AED 15,000</li>
								<li>35%</li>
								<li>AED 7,750</li>
								<li>5.99%</li>
								<li class="applybutton"><button onclick="showpopup()" class="btngist btnapply" type="button">Apply</button></li>
							</ul>
						</div>
						
						
					</li>
					<li>
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox11" class="checkboxslid"><label for="selectbox11">Select</label> 
								</span>
								<span class="rightcontent">
									<a onclick="getslideid(1);" class="closelist"><img src="images/icon-cross.png"></a>
								</span>
								<div class="clear"></div>
							</div>
							
							<div class="maptopdv" id="mapdv1">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="sliderimg">
								<img src="images/bank1.png">
							</div>
							
						</div>
						
						<div class="sliderdetails ">
							<ul>
								<li>Bank Name</li>
								<li>AED 15,000</li>
								<li>35%</li>
								<li>AED 7,750</li>
								<li>5.99%</li>
								<li class="applybutton"><button onclick="showpopup()" class="btngist btnapply" type="button">Apply</button></li>
							</ul>
						</div>
						
						
					</li>
					<li>
						
						
						<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox2"  class="checkboxslid"><label for="selectbox2">Select</label>
								</span>
								<span class="rightcontent">
									<a href="#" onclick="getslideid(2);" class="closelist"><img src="images/icon-cross.png"></a>
								</span>
								<div class="clear"></div>
							</div>
							
							<div class="maptopdv" id="mapdv2">
								<iframe src="listing_map.php" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="sliderimg">
								<img src="images/bank2.png">
							</div>
							
						</div>
						
						<div class="sliderdetails">
							<ul>
								<li>Bank Name</li>
								<li>AED 15,000</li>
								<li>35%</li>
								<li>AED 7,750</li>
								<li>5.99%</li>
								<li class="applybutton"><button onclick="showpopup()" class="btngist btnapply" type="button">Apply</button></li>
							</ul>
						</div>
						
						
					</li>
				</ul>
				</div>
				
				
				<div class="clear"></div>
			</div>
			<div class="clear10"></div>
			<div class="clear"></div>
				
				
				
		
		<!-- FEATURE ITEM-->
		
		<!-- FEATURE ITEM-->
		</div><!--/ ROW-FLUID-->
		
	
	<div class="clear10"></div>
	
	</div><!--/CONTAINER-->
</div><!-- / BG WRAPER-->
  
  
			<!-- END HEADER headertop NAV -->

<div class="clear10"></div>
			
</section><!--/ TOP SECTION-->
 

<!-- ###################### FOOTER #######################
    ================================================== -->
<?php
include('footer3.php');
?>

<!-- END: FOOTER -->
</div>
</body>
</html>
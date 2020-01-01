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
<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- Le fav and touch icons -->


<link rel="shortcut icon" href="assets/ico/favicon.ico">
	<!-- If you want the jQuery UI "flick" theme, you can use this instead, but it's not scoped to just Tag-it like tagit.ui-zendesk is: -->
    <!--   <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css"> -->
	
    <link href="css/magicsuggest.css" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	 
    <script src="js/magicsuggest.js"></script>
	<script type="text/javascript">
      $(function() {
        var ms1 = $('#ms1').magicSuggest({
          data: ['Downtown Burj Dubai','Dubai Healthcare City','Dubai Media City','Dubai Marina','Jumeirah Lake Towers','Palm Jumeirah','Murjan','Marina Wharf 1','Royal Oceanic','Princess','Pentominium','Sparkle Tower 2','Silverene']
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

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#nav2').localScroll(1000);
	jQuery('#nav6').localScroll(1000);
	
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	jQuery('#header-section').parallax("50%", 0.1);
	jQuery('#features-section').parallax("50%", 0.1);
	jQuery('#slogan-section-2').parallax("50%", 0.1);
	jQuery('.bg').parallax("50%", 0.3);
	
})
</script>

</head>
<body data-spy="scroll" data-target=".scroller-spy" data-twttr-rendered="true">

<!--START MAIN-WRAPPER--> 
<div class="main-wrapper">
<!--START MAIN-WRAPPER--> 

<!-- TOP SECTION-->
<section class="headertop needhead homeheader homepage" id="header-section">

 <!-- ################-->
 <!-- START TOP MENU -->
 <!-- ################-->
  <?php
  include('header1.php');
  ?>
			<!-- END HEADER headertop NAV -->

			
<!-- HEADER MARKETING SLOGAN-->
<header class="container">
	<div class="row-fluid">
		<div class="bg-wraper">
			<div class="clear10"></div>
			<div class="clear10"></div>
			<div class="clear10"></div>
			<div class="clear10"></div>
			<div class="clear10"></div>
			<div class="hero-unit text-center">
				<!--LOGO-->
				<div class="logo">
					<a href="index.php" title="GISTLER">
						<img src="images/Logo.png" alt="logo"/>
					</a>
				</div>
				<!--/ LOGO-->
				
					<div class="inner-wrap-hero">
						
						<div class="searchbox">
							<div class="form-top">
								<span>
									<img src="images/icon-home.png"> REAL ESTATE
								</span>
								<div class="clear"></div>
							</div>
							<div class="form-body">
								<div class="span6">
									
									<div class="tabs">
    
									   <div class="tab">
										   <input type="radio" id="tab-1" name="tab-group-1" checked>
										   <label for="tab-1">For Sale</label>
										   
										   <div class="content">
											   stuff
										   </div> 
									   </div>
										
									   <div class="tab">
										   <input type="radio" id="tab-2" name="tab-group-1">
										   <label for="tab-2">For Rent</label>
										   
										   <div class="content">
											   stuff2
										   </div> 
									   </div>
										
									</div>
									
									
								</div>
								






								<div class="span6">
									   <div class="clear"></div>
									   
									   <div class="selectmenu"><img src="images/aed.gif" style="width:22px; margin-top:-3px;"> UAE</div>
									   <div class="selectmenu selectcity">
											<select class="emirates">
												<option value="">Emirates</option>
												<option value="Abu Dhabi">Abu Dhabi</option>
												<option value="Ajman">Ajman</option>
												<option value="Dubai">Dubai</option>
												<option value="Sharjah">Sharjah</option>
												<option value="Umm Al Quwain">Umm Al Quwain</option>
												<option value="Fujairah">Fujairah</option>
												<option value="Ras Al Khaimah">Ras Al Khaimah</option>
											</select>
									   </div>
									   
									   <div class="clear"></div>
									   
								</div>
								
								<div class="clear clear"></div>
					
								 <div class="span8 searchcommunity">
									
									<div class="formleftdv">
									<form>
										<div id="ms1" ></div>
										
										<input name="tags" id="singleFieldTags2" class="community" placeholder="City or Community or Tower" value="" style="display:none;">
									</form>
									<span id="counterselect">0</span>
									</div>
									<div class="formrightdv"><i><img src="images/search-gray.png"></i></div>
								  </div>
								  <div class="span4 nomargin">
									<input type="button" class="btnsearch" onclick="window.location.href='map.php'" value="GIST it">
								  </div>
								
								
								<div class="clear"></div>
								<br/><br/><br/>
							</div>
						</div>
						
					</div>
				<!--<hr class="half">-->
				
					<span class="gobottom bottomlink arrowdownlink" id="nav2">
						<a href="#features-section" title="">
							<img src="images/icon-down-arrow.png">
						</a>
					</span>
				
				
			
			</div>	
		</div><!-- / HERO UNIT-->
	</div><!-- / HERO WRAP-->
</header><!-- / HEADER MARKETING SLOGAN container-->
			
</section><!--/ TOP SECTION-->



<!-- /SERVICE SECTION-->			
<section  id="features-section" class="section-2">

	<script>
		function hidepopup(){
			document.getElementById('light').style.display='none';
			document.getElementById('fade').style.display='none';
			showlayer();
		}
		
		function showpopup(){
			document.getElementById('light').style.display='block';
			document.getElementById('fade').style.display='block';
		}
	</script>
	
	<script>
// https://developers.google.com/youtube/iframe_api_reference

// global variable for the player
var player;

// this function gets called when API is ready to use
function onYouTubePlayerAPIReady() {
  // create the global player from the specific iframe (#video)
  player = new YT.Player('video', {
    events: {
      // call this function when player is ready to use
      'onReady': onPlayerReady
    }
  });
}

function onPlayerReady(event) {
  
  // bind events
  var playButton = document.getElementById("play-button");
  playButton.addEventListener("click", function() {
    player.playVideo();
  });
  
  var pauseButton = document.getElementById("pause-button");
  var pauseButton2 = document.getElementById("fade");
  pauseButton.addEventListener("click", function() {
    player.pauseVideo();
  });
  pauseButton2.addEventListener("click", function() {
    player.pauseVideo();
  });
  
}

// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "//www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
</script>
	<div id="light" class="white_content propertymap2" style="display:none;"> <a href = "javascript:void(0)" id="pause-button" onclick="hidepopup();"><img src="images/cross-icon.png" style="height:30px;"></a>
		<div class="clear10"></div>
		<iframe id="video" src="//www.youtube.com/embed/W5frO-VRrL8?enablejsapi=1&html5=1" frameborder="0" class="mapiframe" allowfullscreen></iframe>
		
	</div>
	<div id="fade" class="black_overlay homevideobg" style="display:none;" onclick="hidepopup();"></div>


<style>


</style>

<video autoplay  poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" >
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<source src="//demosthenes.info/assets/videos/polina.webm" type="video/webm">
<source src="//demosthenes.info/assets/videos/polina.mp4" type="video/mp4">
</video>

	<div class="bg-wraper parallax-point-event" id="hidelayer">
	
	<div class="container">
		
		<div class="videofront">
		
			<div class="contentdv" id="hidecontent">
				<br/><br/><br/><br/><br/>
				<p>The best place to <br/>find your dream home</p><br/>
				<div class="testdiv" style="display:none;">This is a test<span>X</span></div>


				<a onclick="hidelayer();" id="play-button"><img src="images/play-cion.png"></a>
			</div>
		
			<span class="gobottom bottomlink" id="nav6">
					<a href="#slogan-section-2" title="">
						<img src="images/icon-down-arrow.png">
					</a>
			</span>
		</div>
	
	
	</div><!--/CONTAINER-->
</div><!-- / BG WRAPER-->
<script>
//$('.contentdv .testdiv:contains("test")').css('background-color', 'red');
//if($(".contentdv:contains('test')").length){
	//alert('test');
//}
var vid = document.getElementById('bgvid');
var pauseButton = document.querySelector('#polina button');
function vidFade() {
    vid.classList.add('stopfade');
}
vid.addEventListener('ended', function () {
	document.getElementById('hidelayer').style.cssText = 'background:rgba(0,0,0,0.4);';
		document.getElementById('hidecontent').style.cssText = 'display:block;';
    vid.play();
    //vidFade();
});
pauseButton.addEventListener('click', function () {
    vid.classList.toggle('stopfade');
    if (vid.paused) {
        vid.play();
        pauseButton.innerHTML = 'Pause';
    } else {
        vid.pause();
        pauseButton.innerHTML = 'Paused';
    }
});
//# sourceURL=pen.js

function showlayer(){
	document.getElementById('hidelayer').style.cssText = 'background:rgba(0,0,0,0.4);';
	document.getElementById('hidecontent').style.cssText = 'display:block;';
}


function hidelayer(){
	document.getElementById('hidelayer').style.cssText = 'background:rgba(0,0,0,0.0);';
	document.getElementById('hidecontent').style.cssText = 'display:none;';
	showpopup();
}
</script>
</section>
	
	<!-- /FEATURE section-->
	
	<!-- /SLOGAN section-->
	<section class="section-3" id="slogan-section-2">
		<div class="bg parallax-point-event">
			<div class="container">
		
			<!-- BADGE FEATURED-->
			<div class="row-fluid">
				<div class="span12 text-center">
					<div class="videoframe">
						<div class="video_wrapper">
							<h3>Available on smart mobile devices</h3>
						</div>
						<iframe src="https://player.vimeo.com/video/148321429?color=ffffff&title=0&byline=0&portrait=0" width="400" height="250" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
			</div>	
			<!-- / BADGE FEATURED-->
			
			<!--  FEATURED ITEMS -->
					
					
			<!--  FEATURED ITEMS -->
					
				
				
			</div><!-- /container-->
		</div><!-- /row-->

</section> <!--/SLOGAN section-->
	

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
<?php
session_start();
$_SESSION = array();

include("simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();

?>
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
<script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" /> 
	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	
	<script src="js/jquery.validate.min.js"></script>
	
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
			
			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				//prevEffect : 'none',
				//nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});
			

		});
	</script>
	

  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <link rel="stylesheet"  href="src/css/lightslider.css"/>
 
  <script src="src/js/lightslider3.js"></script>
    <script>
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:false,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
			
			
		});
    </script>
	
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
	
    
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="js/jsapi.js"></script>
	
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Properties'],
          ['Sale',     15],
          ['Rent',    9]
        ]);

        var options = {
          title: 'Available Properties',
		  colors: ['#45a440', '#0070b0']
        };
		
		var data2 = google.visualization.arrayToDataTable([
          ['Year', 'Sale', 'Rent'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options2 = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
		  colors: ['#45a440', '#0070b0']
        };
		
		var data3 = google.visualization.arrayToDataTable([
          ['Year', 'Sale', 'Rent'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options3 = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
		  colors: ['#45a440', '#0070b0']
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
		var chart2 = new google.visualization.AreaChart(document.getElementById('chart_div2'));
        chart2.draw(data2, options2);
		var chart3 = new google.visualization.AreaChart(document.getElementById('chart_div3'));
        chart3.draw(data3, options3);
      }
	  
	  
	  
	  
	  google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawColColors);

function drawColColors() {
      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Sale');
      data.addColumn('number', 'Rent');

      data.addRows([
        [{v: [8, 0, 0], f: '8 am'}, 1, .25],
        [{v: [9, 0, 0], f: '9 am'}, 2, .5],
        [{v: [10, 0, 0], f:'10 am'}, 3, 1],
        [{v: [11, 0, 0], f: '11 am'}, 4, 2.25],
        [{v: [12, 0, 0], f: '12 pm'}, 5, 2.25],
        [{v: [13, 0, 0], f: '1 pm'}, 6, 3],
        [{v: [14, 0, 0], f: '2 pm'}, 7, 4],
        [{v: [15, 0, 0], f: '3 pm'}, 8, 5.25],
        [{v: [16, 0, 0], f: '4 pm'}, 9, 7.5],
        [{v: [17, 0, 0], f: '5 pm'}, 10, 10],
      ]);

      var options = {
        title: 'Available Properties',
        colors: ['#45a440', '#0070b0'],
        hAxis: {
          title: 'Time of Day',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Rating (scale of 1-10)'
        }
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
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
<style>
.nav-up {
    top: -92px!important;
}
#topnavbar {
   
    height: 40px;
   
    top: 0;
    transition: top 0.2s ease-in-out;
    width: 100%;
}

</style>
<script>
		function hidepopup(){
			document.getElementById('light').style.display='none';
			document.getElementById('fade').style.display='none';
		}
		
		function showpopup(){
			document.getElementById('light').style.display='block';
			document.getElementById('fade').style.display='block';
		}
		
		
		
		
		
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('#topnavbar').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('#topnavbar').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('#topnavbar').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
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
	
	
	
	<?php
	if(isset($_GET['example1-email']) || isset($_GET['email'])){
	?>
	<script>
		function hidepopup(){
			document.getElementById('light2').style.display='none';
			document.getElementById('fade2').style.display='none';
		}
	</script>
	<div id="light2" class="white_content"> <a href = "javascript:void(0)" onclick="hidepopup();">X</a>
		<h3>Thank You</h3>
		<p>You will be contacted by the bank soon</p>
	</div>
	<div id="fade2" class="black_overlay" onclick="hidepopup();"></div>
	<?php
	}
	?>
	
	
	<div id="fade" class="black_overlay" style="display:none;" onclick="hidepopup();"></div>
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
		<div class="row-fluid">
		<!-- FEATURE ITEM-->
		
			
			
			
						<script>
						$(document).ready(function(){
							$("#togglemap1").click(function(){
								$("#mapdv1").toggleClass("displayblock");
							});
							
						});
						</script>
			
			<?php
			include('list-sidebar.php');
			?>
			
			<script>
			$(document).scroll(function() {
				if($(this).scrollTop() > 4200){
					 $("#fixedscroll").addClass("bottomfixed2");
				}
				else{
					$("#fixedscroll").removeClass("bottomfixed2");
				}
				
			});
			
			$(function(){
			   $("#showmap").click(function () {
				  $(this).text(function(i, text){
					  return text === "Gallery" ? "Map" : "Gallery";
				  })
			   });
			})
			</script>
			
			<div class="span9  propertyleftdv">
			
				<div class="prop_info">
					<div class="info_detail">
						<h5>Marina View 3 B/R Apt. Dubai Marina, Bay Central</h5>
						<p>One of the biggest apartments in prestigious building in Dubai Marina -Emirates Crown
3BR with 2 living areas apartment in Emirates Crown with panoramic windows overlooking sea and marina.</p>
					</div>
					<div class="info_footer">
						<span class="sec_views">210</span>
						<span class="sec_likes">210</span>
					</div>
				</div>
				<ul id="content-slider2" class="content-slider propertyslider">
					<li>
						
						<div class="sliderdv ">
							<div class="sliderbottomdv2">
								
								<div class="divwidth45 propdetail propdetail3">
									<span class="leftcontent">
										&nbsp; &nbsp; <a class="togglebutton" href="javascript:;" onclick="showpopup();" id="togglemap2"><img src="images/map-icon2.png"> Quick Map</a> &nbsp; &nbsp; &nbsp; &nbsp; <a class="togglebutton" id="togglemap1"><img src="images/map-location2.png"> <span id="showmap">Map</span></a>
									</span>
									
								</div>
								
								
								
								<div class="divwidth22 propdetail4">
									<a class="togglebutton" ><img src="images/map-zoom.png"></a>
								</div>
								
								<div class="clear"></div>
							</div>
							<div class="maptopdv maptopdv2" id="mapdv1">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28900.799236588402!2d55.12487350823434!3d25.11540148699495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f1529c2653b15%3A0x3dcabcae764a3e16!2sPalm+Jumeirah+-+Dubai+-+United+Arab+Emirates!5e0!3m2!1sen!2s!4v1449176711485" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="sliderimg">
								<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-4.jpg" />
										<div class="imagepopup"><a href="images/bg-4.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-5.jpg" />
										<div class="imagepopup"><a href="images/bg-5.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-4.jpg" />
										<div class="imagepopup"><a href="images/bg-4.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-5.jpg" />
										<div class="imagepopup"><a href="images/bg-5.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-4.jpg" />
										<div class="imagepopup"><a href="images/bg-4.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-5.jpg" />
										<div class="imagepopup"><a href="images/bg-5.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
										 </li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-4.jpg" />
										<div class="imagepopup"><a href="images/bg-4.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-5.jpg" />
										<div class="imagepopup"><a href="images/bg-5.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-4.jpg" />
										<div class="imagepopup"><a href="images/bg-4.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
										 </li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-5.jpg" />
										<div class="imagepopup"><a href="images/bg-5.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-4.jpg" />
										<div class="imagepopup"><a href="images/bg-4.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
										 </li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-5.jpg" />
										<div class="imagepopup"><a href="images/bg-5.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
										 </li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-4.jpg" />
										<div class="imagepopup"><a href="images/bg-4.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-5.jpg" />
										<div class="imagepopup"><a href="images/bg-5.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-4.jpg" />
										<div class="imagepopup"><a href="images/bg-4.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-5.jpg" />
										<div class="imagepopup"><a href="images/bg-5.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-4.jpg" />
										<div class="imagepopup"><a href="images/bg-4.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-5.jpg" />
										<div class="imagepopup"><a href="images/bg-5.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-4.jpg" />
										<div class="imagepopup"><a href="images/bg-4.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
									<li data-thumb="images/sliderimg1.png"> 
										<img src="images/bg-5.jpg" />
										<div class="imagepopup"><a href="images/bg-5.jpg" data-fancybox-group="button" class="fancybox-buttons"><img src="images/map-zoom.png"></a></div>
									</li>
								</ul>
							</div>
							
						</div>
						
						<br/>
						
					</li>
				</ul>
				
				
						<script src="js/Chart.js"></script>
						<div class="propertydetail">
							<div class="propertyleft">
								<h2>Full Marina View 3 B/R Apt.</h2>
								<h4>Dubai Marina, Bay Central</h4>
								
								<div class="propspec">
									<span><img src="images/icon-bed2.png"> 3 Beds</span>
									<span><img src="images/icon-bath2.png"> 2.5 Baths</span>
									<span> 2,000 sqft</span>
								</div>
								
								<p class="more">SEA VIEW AND VACANT 3 BR + MAID FURNISHED APARTMENT AVAILABLE FOR SALE 
LOCATED AT MURJAN 3 ON LOW FLOOR WITH 2170 SQ FT AND EACH BEDROOM WITH ATTACHED BATHROOM
S.P. AED 3,800 000 NET.
<br/><br/>
FOR MORE INFO AND VIEWING PLEASE CALL TO US +97143990990; +971562469590<br/><br/></p>
								
							</div>
							<div class="propertyright">
								<div class="sellingprice">
									<h2>Selling Price <a class="tooltips-bottom" ><img src="images/question.png"><span><p>Lorem ipsum dolor sit amet, ne mutat delicata vim. Nec solum mazim invenire ea, sit mutat vituperatoribus ea.</p></span></a></i>
										
									</h2>
									<h4>AED 250,000 <a class="tooltips-right" ><img src="images/question.png"><span>
										<ul>
											<li><img src="images/tooltip-map1.png"> 215,554,000</li>
											<li><img src="images/tooltip-map2.png"> 215,554,000</li>
											<li><img src="images/tooltip-map1.png"> 215,554,000</li>
											<li><img src="images/tooltip-map2.png"> 215,554,000</li>
										</ul></span></a></h4>
									<p>Gistimate &nbsp; | &nbsp; AED 247,0</p>
								</div>
								<div class="mortgageprice">
									<div class="clear10"></div><div class="clear10"></div>
									<h2>EST. MORTGAGE <a class="tooltips-bottom" ><img src="images/question.png"><span><p>Lorem ipsum dolor sit amet, ne mutat delicata vim. Nec solum mazim invenire ea, sit mutat vituperatoribus ea.</p></span></a></h2>
									<form method="post" action="#">
									<h4>AED 10,230/mo &nbsp;| 
										<a class="tooltips-down2" ><i class="icons-calculator"></i>
											<span>
												<h4>ESTIMATED MONTHLY PAYMENT</h4>
												<p>Home Price* <input type="text" name="test" class="tooltip-txt" value="AED 163,000"></p>
												<p>Down Payment* <input type="text" name="test" class="tooltip-txt" value="AED 163,000"></p>
												<p>Actual Interest(%) <input type="text" name="test" class="tooltip-txt" value=""></p>
												<p>Terms(# of years) <input type="text" name="test" class="tooltip-txt" value=""></p>
												
												<hr/>
												
												<p>Mortgage Principle <input type="text" name="test" class="tooltip-txt" value=""></p>
												<p>Total Instalments <input type="text" name="test" class="tooltip-txt" value=""></p>
												<p>Monthly Payments <input type="text" name="test" class="tooltip-txt" value=""></p>
												<input type="submit" value="Calculate" class="tooltipbtns" name="toolsubmit">
												<input type="reset" value="Reset" class="tooltipbtns" name="toolreset">
											</span>
										</a>
									</h4>
									</form>
									<p>See all current rates on GISTLER</p>
								</div>
							</div>
							<div class="cleardv"></div>
						</div>
	<script>
	$(document).ready(function() {
		// Configure/customize these variables.
		var showChar = 140;  // How many characters are shown by default
		var ellipsestext = "...";
		var moretext = "More Details";
		var lesstext = "Less Details";
		

		$('.more').each(function() {
			var content = $(this).html();
	 
			if(content.length > showChar) {
	 
				var c = content.substr(0, showChar);
				var h = content.substr(showChar, content.length - showChar);
	 
				var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<button href="" class="btnreadmore morelink">' + moretext + '</button></span>';
	 
				$(this).html(html);
			}
	 
		});
	 
		
		$(".btnclosetext").click(function(){
			if($(this).text() === "More Details") {
				$(this).html("Less Details");
				$('#readmorecontent').animate({
					height: '180px'
				}, {
					duration: 300  // 2 seconds
				});
			} else {
				$(this).html("More Details");
				$('#readmorecontent').animate({
					height: '90px'
				}, {
					duration: 300  // 2 seconds
				});
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
		
		/*
		$(".btnreadmore").click(function(){
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
		});*/
	});
	</script>
						<div class="propertyfeature">
							<h3>Features</h3>
							<div class="readmorecontent" id="readmorecontent">
								<div class="span4 featurespts">
									<ul>
										<li>- Central A/C</li>
										<li>- Built in 2000</li>
										<li>- 214 days in Gistler</li>
										<li>- Central A/C</li>
										<li>- Built in 2000</li>
										<li>- 214 days in Gistler</li>
									</ul>
								</div>
								<div class="span4 featurespts">
									<ul>
										<li>- 24/7 Security</li>
										<li>- Cooling: Central</li>
										<li>- Heating: Forced Air</li>
										<li>- 24/7 Security</li>
										<li>- Cooling: Central</li>
										<li>- Heating: Forced Air</li>
									</ul>
								</div>
								<div class="span4 featurespts">
									<ul>
										<li>- Parking: Garage - Attached, 1 space</li>
										<li>- Last Sold: Aug 2010 for AED 170,000</li>
										<li>- Price/Sqft: AED 126</li>
										<li>- Parking: Garage - Attached, 1 space</li>
										<li>- Last Sold: Aug 2010 for AED 170,000</li>
										<li>- Price/Sqft: AED 126</li>
									</ul>
								</div>
							</div>
							<button class="btnreadmore btnclosetext">More Details</button>
						</div>
						
						
						
						<div class="propertyfeature">
							<h3>Gestimate Details </h3>
							<div class="span4 featurespts">
								<ul>
									<li>Gestimate &nbsp; &nbsp; <a class="tooltips-bottom" ><img src="images/question.png"><span><p>Lorem ipsum dolor sit amet, ne mutat delicata vim. Nec solum mazim invenire ea, sit mutat vituperatoribus ea.</p></span></a></li>
									<li><h3>AED 234,423</h3></li>
									<li><span class="danger">-AED 3,250</span> &nbsp;|&nbsp; Last 30 days</li>
									<li>200k <input type="range" min="200" max="327" value="230" readonly> 327k</li>
									<li>Gestimate range</li>
								</ul>
							</div>
							<div class="span4 featurespts">
								<ul>
									<li>Rent Estimate &nbsp; &nbsp; <a class="tooltips-bottom" ><img src="images/question.png"><span><p>Lorem ipsum dolor sit amet, ne mutat delicata vim. Nec solum mazim invenire ea, sit mutat vituperatoribus ea.</p></span></a></li>
									<li><h3>AED 234,423</h3></li>
									<li><span class="success">+AED 85</span> &nbsp;|&nbsp; Last 30 days</li>
									<li>200k <input type="range" min="200" max="327" value="230" readonly> 327k</li>
									<li>Gestimate range</li>
								</ul>
							</div>
							<div class="span4 featurespts">
								<ul>
									<li>Gestimate Forecast &nbsp; &nbsp; <a class="tooltips-bottom" ><img src="images/question.png"><span><p>Lorem ipsum dolor sit amet, ne mutat delicata vim. Nec solum mazim invenire ea, sit mutat vituperatoribus ea.</p></span></a></li>
									<li><h3><img src="images/up-arrow.png"> +1.7 %</h3></li>
									<li><span class="success">+AED 85</span> &nbsp;|&nbsp; Last 30 days</li>
									<li>200k <input type="range" min="200" max="327" value="230" readonly> 327k</li>
									<li>Gestimate range</li>
								</ul>
							</div>
							
							<div class="cleardv"></div>
						</div>
						<div class="propertyfeature posrel">
							<h3 class="absolutehead">Gestimate   <span class="right">1 Year to 5 Year</span></h3>
							
							<div class="tabs">
										<div class="preload">
											<img src="images/chart3.png">
											<img src="images/icon-graph.png">
											<img src="images/icon-bar-Active.png">
											<img src="images/chart2.png">
											<img src="images/chart1.png">
											<img src="images/icon-Pie-Active.png">
										</div>
									   <div class="tab ">
											
										   <input type="radio" id="tab-1" name="tab-group-1" >
										   <label for="tab-1" class="plab tabfirst piechart"> <img src="images/chart1.png"> </label>
										   <div class="clear"></div>
										   <div class="content graphsdvs">
											   <div>
													<div id="piechart" style="width: 100%; height: 300px;"></div>
													<!--<canvas id="chart-area" width="100%" height="250" style="width:100%; height:250px;"/>-->
												</div>
												<div class="clear"></div>
												<div class="clear10"></div>
												
										   </div>
											<div class="clear"></div>
									   </div>
										
									   <div class="tab ">
										   <input type="radio" id="tab-2" name="tab-group-1" checked>
										   <label for="tab-2" class="plab barchart"><img src="images/chart2.png"></label>
										   
										   <div class="content graphsdvs">
											   <div>
													<div id="chart_div"></div>
													<!--<canvas id="canvas2" height="250" width="100%" style="width:100%; height:250px;"></canvas>-->
												</div>
											   
												<div class="clear"></div>
												<div class="clear10"></div>
												
										   </div> 
										   <div class="clear"></div>
									   </div>
									   
									    <div class="tab ">
										   <input type="radio" id="tab-3" name="tab-group-1" >
										   <label for="tab-3" class="plab wavechart"><img src="images/chart3.png"></label>
										   
										   <div class="content graphsdvs">
											   <div>
													<div id="chart_div2" style="width: 100%; height: 300px;"></div>
													<!--<canvas id="canvas" height="250" width="100%" style="width:100%; height:250px;"></canvas>-->
												</div>
												<div class="clear"></div>
												<div class="clear10"></div>
												
										   </div> 
										   <div class="clear"></div>
									   </div>
										<div class="clear"></div>
										
									</div>
							
							<div class="clear"></div>
							
							
							
							
							
							
							
							
							
							
			
			
			<script>
			/*
				var randomScalingFactor = function(){ return Math.round(Math.random()*600)};
				var lineChartData = {
					labels : ["JAN 2010","FEB 2010","MAR 2010","APR 2010","MAY 2010","JUN 2010","JUL 2010"],
					datasets : [
						{
							label: "My First dataset",
							fillColor : "rgba(220,220,220,0.2)",
							strokeColor : "rgba(220,220,220,1)",
							pointColor : "rgba(220,220,220,1)",
							pointStrokeColor : "#fff",
							pointHighlightFill : "#fff",
							pointHighlightStroke : "rgba(220,220,220,1)",
							data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
						},
						{
							label: "My Second dataset",
							fillColor : "rgba(151,187,205,0.2)",
							strokeColor : "rgba(151,187,205,1)",
							pointColor : "rgba(151,187,205,1)",
							pointStrokeColor : "#fff",
							pointHighlightFill : "#fff",
							pointHighlightStroke : "rgba(151,187,205,1)",
							data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
						}
					]

				}
				
				
				var randomScalingFactor2 = function(){ return Math.round(Math.random()*600)};

				var barChartData = {
					labels : ["January","February","March","April","May","June","July"],
					datasets : [
						{
							fillColor : "rgba(220,220,220,0.5)",
							strokeColor : "rgba(220,220,220,0.8)",
							highlightFill: "rgba(220,220,220,0.75)",
							highlightStroke: "rgba(220,220,220,1)",
							data : [randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2()]
						},
						{
							fillColor : "rgba(151,187,205,0.5)",
							strokeColor : "rgba(151,187,205,0.8)",
							highlightFill : "rgba(151,187,205,0.75)",
							highlightStroke : "rgba(151,187,205,1)",
							data : [randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2()]
						}
					]

				}
				
				var pieData = [
						{
							value: 300,
							color:"#F7464A",
							highlight: "#FF5A5E",
							label: "Red"
						},
						{
							value: 50,
							color: "#46BFBD",
							highlight: "#5AD3D1",
							label: "Green"
						},
						{
							value: 100,
							color: "#FDB45C",
							highlight: "#FFC870",
							label: "Yellow"
						},
						{
							value: 40,
							color: "#949FB1",
							highlight: "#A8B3C5",
							label: "Grey"
						},
						{
							value: 120,
							color: "#4D5360",
							highlight: "#616774",
							label: "Dark Grey"
						}

					];

			window.onload = function(){
				var ctx = document.getElementById("canvas").getContext("2d");
				window.myLine = new Chart(ctx).Line(lineChartData, {
					responsive: false
				});
				
				var ctx2 = document.getElementById("canvas2").getContext("2d");
				window.myBar = new Chart(ctx2).Bar(barChartData, {
					responsive : false
				});
				
				var ctx3 = document.getElementById("chart-area").getContext("2d");
						window.myPie = new Chart(ctx3).Pie(pieData);
			}
			*/

			</script>
			
			
						</div>
					
						<div class="propertyfeature graphchart">
							<h3>Comparable Homes</h3>
							<p>Homes like this sold for AED 100k to AED 350k.</p>
							<br/>
							
							
							<!--<img src="images/chartimg.png" width="100%">-->
							<div class="cleardv"></div><br/>
							
							<ul class="comparisonlist">
							  <li class="starter">&nbsp;
								<div class="rangetxt">AED 100K</div>
							  </li>
							  <li class="circle">7
								<div class="windowtop">AED100-120<span></span></div>
							  </li>
							  
							  <li class="circlesmall">2
								<div class="windowbottom">AED100-120<span></span></div>
							  </li>
							  <li class="circle">5
								<div class="windowtop">AED100-120<span></span></div>
							  </li>
							  <li class="circlesmall">2
								<div class="windowbottom">AED100-120<span></span></div>
							  </li>
							  <li>&nbsp;</li>
							  <li>&nbsp;</li>
							  <li class="starter rightalign">&nbsp;
								<div class="rangetxt">AED 100K</div>
							  </li>
							</ul>  
							
							<div class="cleardv"></div><br/>
							<div class="span5 rentboxes">
								<a href="comparable_homes.php"><img src="images/rentimg.png" align="left"></a>
								<span class="right"><a href="comparable_homes.php"><img src="images/right-arrow.png"></a></span>
								<a href="comparable_homes.php"><h3>For Rent</h3>
								<p>Comparable Homes</p></a>
								
							</div>
							
							<div class="span5 rentboxes right">
								<a href="comparable_homes.php"><img src="images/rentimg.png" align="left"></a>
								<span class="right"><a href="comparable_homes.php"><img src="images/right-arrow.png"></a></span>
								<a href="comparable_homes.php"><h3>Recently Rented</h3>
								<p>Comparable Homes</p></a>
								
							</div>
							<div class="cleardv"></div>
						</div>
						
						<div class="propertyfeature">
							<h3>Popularity on Gistler</h3>
							
							<div class="popularitydv">
								<div class="popsecdv">
									<img src="images/icon-eye.png" align="left">
									<h3>875 views since listing</h3>
									<p>1,280 all time (chart)</p>
								</div>
								<div class="popsecdv">
									<img src="images/icon-heart2.png" align="left">
									<h3>875 views since listing</h3>
									<p>1,280 all time (chart)</p>
								</div>
								
								
							</div>
							<div class="cleardv"></div>
						</div>
						
						<div class="propertyfeature propertyslide">
							<h3>Similar Properties </h3>
							
							
							
							<ul id="content-slider" class="content-slider propertyslide">
								<li>
									<div class="propimage">
										<a href="#"><img src="images/sliderimg1.png"></a>
									</div>
									<div class="propdesc">
										<a href="#"><h4>For Rent - AED 2400+/mo</h4></a>
										<p>Sold on: 12/9/2014</p>
										<p>3 Beds / 2 Baths / 1080 sqft</p>
										<p>1162 E 54th PL, Chicago</p>
									</div>
								</li>
								
								<li>
									<div class="propimage">
										<a href="#"><img src="images/sliderimg1.png"></a>
									</div>
									<div class="propdesc">
										<a href="#"><h4>For Rent - AED 2400+/mo</h4></a>
										<p>Sold on: 12/9/2014</p>
										<p>3 Beds / 2 Baths / 1080 sqft</p>
										<p>1162 E 54th PL, Chicago</p>
									</div>
								</li>
								
								<li>
									<div class="propimage">
										<a href="#"><img src="images/sliderimg1.png"></a>
									</div>
									<div class="propdesc">
										<a href="#"><h4>For Rent - AED 2400+/mo</h4></a>
										<p>Sold on: 12/9/2014</p>
										<p>3 Beds / 2 Baths / 1080 sqft</p>
										<p>1162 E 54th PL, Chicago</p>
									</div>
								</li>
								
								<li>
									<div class="propimage">
										<a href="#"><img src="images/sliderimg1.png"></a>
									</div>
									<div class="propdesc">
										<a href="#"><h4>For Rent - AED 2400+/mo</h4></a>
										<p>Sold on: 12/9/2014</p>
										<p>3 Beds / 2 Baths / 1080 sqft</p>
										<p>1162 E 54th PL, Chicago</p>
									</div>
								</li>
								
								<li>
									<div class="propimage">
										<a href="#"><img src="images/sliderimg1.png"></a>
									</div>
									<div class="propdesc">
										<a href="#"><h4>For Rent - AED 2400+/mo</h4></a>
										<p>Sold on: 12/9/2014</p>
										<p>3 Beds / 2 Baths / 1080 sqft</p>
										<p>1162 E 54th PL, Chicago</p>
									</div>
								</li>
								
								<li>
									<div class="propimage">
										<a href="#"><img src="images/sliderimg1.png"></a>
									</div>
									<div class="propdesc">
										<a href="#"><h4>For Rent - AED 2400+/mo</h4></a>
										<p>Sold on: 12/9/2014</p>
										<p>3 Beds / 2 Baths / 1080 sqft</p>
										<p>1162 E 54th PL, Chicago</p>
									</div>
								</li>
								
							</ul>
							
							
						</div>
						
						
						<div class="propertyfeature neighbor">
							<h3>Neighborhood</h3>
							<p><b>Market Guide</b></p>
							<p class="more">Gistler predicts Lake View East home values will rise 0.6% this year, compared to a 1.1% decrease for chicago as a whole. Gistler predicts Lake View East home values will rise 0.6% this year, compared to a 1.1% decrease for chicago as a whole. Gistler predicts Lake View East home values will rise 0.6% this year, compared to a 1.1% decrease for chicago as a whole. Gistler predicts Lake View East home values will rise 0.6% this year, compared to a 1.1% decrease for chicago as a whole.</p>
							
						</div>
						
						<div class="propertyfeature2" >
							<h3>Nearby Properties</h3>
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
									   <label for="tab9-2" class="plab2">ALL</label>
									   
									   <div class="content mapdv">
											
											
											<div class="span6 rentclass">
												<h2>For Rent</h2>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
											</div>
											<div class="span6 saleclass">
												<h2>For Sale</h2>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
											</div>
											
											
											<div class="clear"></div>
									   </div> 
									   <div class="clear"></div>
								   </div>
								   <div class="tab mapdvs">
									   <input type="radio" id="tab9-3" name="tab-group-9">
									   <label for="tab9-3" class="plab2">RENT</label>
									   
									   <div class="content mapdv">
											<div class="rentclass">
												<h2>For Rent</h2>
											</div>
											<div class="clear"></div>
											<div class="span6 rentclass nomarginleft">
												
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
											</div>
											<div class="span6 saleclass">
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
											</div>
											
											
											<div class="clear"></div>
									   </div> 
									   <div class="clear"></div>
								   </div>
								   
								   <div class="tab mapdvs">
									   <input type="radio" id="tab9-4" name="tab-group-9">
									   <label for="tab9-4" class="plab2">SALE</label>
									   
									   <div class="content mapdv">
											<div class="saleclass">
												<h2>For Sale</h2>
											</div>
											<div class="clear"></div>
											<div class="span6 rentclass nomarginleft">
												
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
											</div>
											<div class="span6 saleclass">
												
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
												<div class="propertiesdvs">
													<a href="#"><img src="images/rentimg.png" align="left"></a>
													<p><a href="#">
														635 W Briar PI APT 4<br/>
														3 beds | 3 baths | 3,500 sqft<br/>
														build in 20</a>
													</p>
													<div class="cleardv"></div>
												</div>
											</div>
											
											
											<div class="clear"></div>
									   </div> 
									   <div class="clear"></div>
								   </div>
								   <div class="tab mapdvs">
									   <input type="radio" id="tab9-5" name="tab-group-9" checked>
									   <label for="tab9-5" class="plab2 noborder">AVG. PROPERTY VALUE</label>
									   
									   <div class="content mapdv">
											
											<div id="chart_div3" style="width: 100%; height: 450px;"></div>
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
								   <label for="tab2-2" onclick="document.getElementById('tab9-2').click();" class="plab2">ALL</label>
								   
								   <div class="content mapdv">
										<iframe src="all-properties.php" width="100%" height="450" frameborder="0" scrolling="no" style="border:0" allowfullscreen></iframe>
										
										<div class="clear"></div>
								   </div> 
								   <div class="clear"></div>
							   </div>
							   <div class="tab mapdvs">
								   <input type="radio" id="tab2-3" name="tab-group-2">
								   <label for="tab2-3" onclick="document.getElementById('tab9-3').click();" class="plab2">RENT</label>
								   
								   <div class="content mapdv">
										<iframe src="rent_properties.php" width="100%" height="450" frameborder="0" scrolling="no" style="border:0" allowfullscreen></iframe>
										
										<div class="clear"></div>
								   </div> 
								   <div class="clear"></div>
							   </div>
							   
							   <div class="tab mapdvs">
								   <input type="radio" id="tab2-4" name="tab-group-2">
								   <label for="tab2-4" onclick="document.getElementById('tab9-4').click();" class="plab2">SALE</label>
								   
								   <div class="content mapdv">
										<iframe src="sale_properties.php" width="100%" height="450" frameborder="0" scrolling="no" style="border:0" allowfullscreen></iframe>
										
										<div class="clear"></div>
								   </div> 
								   <div class="clear"></div>
							   </div>
							   <div class="tab mapdvs"  id="avgproperty">
								   <input type="radio" id="tab2-5" name="tab-group-2">
								   <label for="tab2-5" onclick="document.getElementById('tab9-5').click();" class="plab2 noborder">AVG. PROPERTY VALUE</label>
								   
								   <div class="content mapdv">
										<iframe src="all-properties.html" width="100%" height="450" frameborder="0" scrolling="no" style="border:0" allowfullscreen></iframe>
										
										<div class="clear"></div>
								   </div> 
								   <div class="clear"></div>
							   </div>
								<div class="clear"></div>
									
							</div>
							
							
							
							
							
							
						</div>
						
						<div class="propertyfeature3">
							<h3>Nearby Destinations</h3>
							
							
							<div class="tabs destinationdv">
										
							   <div class="tab tabnum">
								   <input type="radio" id="tab3-1" name="tab-group-3" checked>
								   <label for="tab3-1" class="desttabs">Map </label>
								   <div class="clear"></div>
								   <div class="content destcont">
									    <iframe src="destinations.html" width="100%" scrolling="no" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
										<div class="clear"></div>
								   </div>
									<div class="clear"></div>
							   </div>
								
							   <div class="tab tabnum">
								   <input type="radio" id="tab3-2" name="tab-group-3">
								   <label for="tab3-2" class="desttabs">Table</label>
								   
								   <div class="content destcont">
									   
									   
									   <div class="tabs destsubdv">
										
										   <div class="tab destsubtab">
											   <input type="radio" id="tab4-1" name="tab-group-4" checked>
											   <label for="tab4-1" class="destsublab destlab1">Malls </label>
											   <div class="clear"></div>
											   <div class="content destsubcont">
													<ul>
														<li>Dubai Mall <span>9.45KM</span></li>
														<li>Mall of the Emirates <span>6.45KM</span></li>
														<li>BurJuman <span>3.85KM</span></li>
														<li>City Centre Deira <span>3.35KM</span></li>
														<li>Festival City Mall <span>11.68KM</span></li>
														<li>Ibn Battuta Mall <span>8.62KM</span></li>
														<li>Mercato Shopping Mall <span>6.45KM</span></li>
														<li>Al Ghurair City <span>4.25KM</span></li>
														<li>Wafi Mall <span>2.45KM</span></li>
														<li>Dubai Mall <span>5.45KM</span></li>
														<li>Mall of the Emirates <span>3.45KM</span></li>
														<li>BurJuman <span>7.45KM</span></li>
														<li>City Centre Deira <span>4.25KM</span></li>
														<li>Festival City Mall <span>3.65KM</span></li>
													</ul>
													<div class="clear"></div>
											   </div>
												<div class="clear"></div>
										   </div>
											
										   <div class="tab destsubtab">
											   <input type="radio" id="tab4-2" name="tab-group-4">
											   <label for="tab4-2" class="destsublab destlab2">Cinema</label>
											   
											   <div class="content destsubcont">
												   <ul>
														<li>Reel Cinemas <span>6.45KM</span></li>
														<li>Vox Cinemas <span>8.45KM</span></li>
														<li>Novo Cinemas <span>4.35KM</span></li>
														<li>Reel Cinemas <span>7.15KM</span></li>
														<li>Vox Cinemas <span>1.13KM</span></li>
														<li>Novo Cinemas <span>4.93KM</span></li>
														<li>Reel Cinemas <span>6.53KM</span></li>
														<li>Vox Cinemas <span>5.25KM</span></li>
														<li>Novo Cinemas <span>6.45KM</span></li>
														<li>Vox Cinemas <span>6.45KM</span></li>
														<li>Reel Cinemas <span>9.45KM</span></li>
														<li>Novo Cinemas <span>9.45KM</span></li>
														<li>Vox Cinemas <span>5.45KM</span></li>
														<li>Reel Cinemas <span>1.45KM</span></li>
													</ul>
													<div class="clear"></div>
											   </div> 
											   <div class="clear"></div>
										   </div>
										   
										   <div class="tab destsubtab">
											   <input type="radio" id="tab4-3" name="tab-group-4">
											   <label for="tab4-3" class="destsublab destlab3">Schools</label>
											   
											   <div class="content destsubcont">
												   <ul>
														<li>Dubai American Academy <span>3.45KM</span></li>
														<li>Dubai Arab American School <span>2.45KM</span></li>
														<li>Dubai British School <span>6.45KM</span></li>
														<li>Dubai British School Jumeirah Park <span>1.45KM</span></li>
														<li>Dubai Carmel School <span>4.45KM</span></li>
														<li>Dubai College <span>8.45KM</span></li>
														<li>Dubai English Speaking College <span>2.45KM</span></li>
														<li>Dubai English Speaking School <span>3.45KM</span></li>
														<li>Dubai Gem School <span>6.45KM</span></li>
														<li>Dubai American Academy <span>1.45KM</span></li>
														<li>Dubai Arab American School <span>4.45KM</span></li>
														<li>Dubai British School <span>6.45KM</span></li>
														<li>Dubai British School Jumeirah Park <span>4.45KM</span></li>
														<li>Dubai Carmel School <span>2.45KM</span></li>
													</ul>
													<div class="clear"></div>
											   </div> 
											   <div class="clear"></div>
										   </div>
										   <div class="tab destsubtab">
											   <input type="radio" id="tab4-4" name="tab-group-4">
											   <label for="tab4-4" class="destsublab destlab4">Parks</label>
											   
											   <div class="content destsubcont">
												   <ul>
														<li>Al Barsha Pond Park <span>2.45KM</span></li>
														<li>Al Mamzar Beach Park <span>4.45KM</span></li>
														<li>Al Nahda Pond Park  <span>2.45KM</span></li>
														<li>Al Twar Park <span>1.45KM</span></li>
														<li>Creekside Park  <span>4.45KM</span></li>
														<li>Jumeirah Beach Park <span>7.45KM</span></li>
														<li>Mushrif Park <span>5.45KM</span></li>
														<li>Safa Park <span>0.45KM</span></li>
														<li>Zabeel Park <span>3.45KM</span></li>
														<li>Al Barsha Pond Park <span>1.45KM</span></li>
														<li>Al Mamzar Beach Park <span>7.45KM</span></li>
														<li>Al Nahda Pond Park  <span>0.45KM</span></li>
														<li>Al Twar Park <span>8.45KM</span></li>
														<li>Creekside Park  <span>2.45KM</span></li>
													</ul>
													<div class="clear"></div>
											   </div> 
											   <div class="clear"></div>
										   </div>
										   
										   <div class="tab destsubtab">
											   <input type="radio" id="tab4-5" name="tab-group-4">
											   <label for="tab4-5" class="destsublab destlab5">Transport</label>
											   
											   <div class="content destsubcont">
												   <ul>
														<li>Bus Stop <span>5.46KM</span></li>
														<li>Metro Station <span>3.77KM</span></li>
														<li>Tram Station <span>6.49KM</span></li>
														<li>Bus Stop <span>5.46KM</span></li>
														<li>Metro Station <span>3.77KM</span></li>
														<li>Tram Station <span>6.49KM</span></li>
														<li>Bus Stop <span>5.46KM</span></li>
														<li>Metro Station <span>3.77KM</span></li>
														<li>Tram Station <span>6.49KM</span></li>
														<li>Bus Stop <span>5.46KM</span></li>
														<li>Metro Station <span>3.77KM</span></li>
														<li>Tram Station <span>6.49KM</span></li>
														<li>Bus Stop <span>5.46KM</span></li>
														<li>Metro Station <span>3.77KM</span></li>
													</ul>
													<div class="clear"></div>
											   </div> 
											   <div class="clear"></div>
										   </div>
										   
										   <div class="tab destsubtab">
											   <input type="radio" id="tab4-6" name="tab-group-4">
											   <label for="tab4-6" class="destsublab destlab6">Hospitals</label>
											   
											   <div class="content destsubcont">
												   <ul>
														<li>Welcare Hospital <span>1.45KM</span></li>
														<li>Emirates International hospital <span>4.45KM</span></li>
														<li>Iranian hospital <span>5.75KM</span></li>
														<li>International Modern hospital <span>5.57KM</span></li>
														<li>Neuro-Spinal Hospital <span>5.46KM</span></li>
														<li>Belhoul Speciality Hospital <span>8.25KM</span></li>
														<li>Belhoul European hospital <span>4.45KM</span></li>
														<li>New Apollo Polyclinic <span>7.45KM</span></li>
														<li>Medcare hospital <span>45.45KM</span></li>
														<li>Welcare Hospital <span>5.45KM</span></li>
														<li>Emirates International hospital <span>4.45KM</span></li>
														<li>Iranian hospital <span>3.35KM</span></li>
														<li>International Modern hospital <span>9.45KM</span></li>
														<li>Neuro-Spinal Hospital <span>8.45KM</span></li>
													</ul>
													<div class="clear"></div>
											   </div> 
											   <div class="clear"></div>
										   </div>
										   
										   <div class="tab destsubtab">
											   <input type="radio" id="tab4-7" name="tab-group-4">
											   <label for="tab4-7" class="destsublab destlab7">Gov. Services</label>
											   
											   <div class="content destsubcont">
												   <ul>
														<li>Department of Economic Development <span>5.45KM</span></li>
														<li>Department of Finance <span>4.45KM</span></li>
														<li>Department of Tourism and Commerce Marketing <span>2.45KM</span></li>
														<li>Dubai Chamber <span>8.45KM</span></li>
														<li>Dubai Customs <span>5.45KM</span></li>
														<li>Dubai Smart Department <span>2.45KM</span></li>
														<li>Dubai Government Human Resources Department  <span>3.45KM</span></li>
														<li>Dubai Municipality <span>2.45KM</span></li>
														<li>Dubai Trade <span>1.43KM</span></li>
														<li>Department of Economic Development <span>3.35KM</span></li>
														<li>Department of Finance <span>7.55KM</span></li>
														<li>Department of Tourism and Commerce Marketing <span>1.15KM</span></li>
														<li>Dubai Chamber <span>9.22KM</span></li>
														<li>Dubai Customs <span>1.49KM</span></li>
													</ul>
													<div class="clear"></div>
											   </div> 
											   <div class="clear"></div>
										   </div>
											<div class="clear"></div>
											
										</div>
									   
									   
										<div class="clear"></div>
								   </div> 
								   <div class="clear"></div>
							   </div>
								<div class="clear"></div>
								
							</div>
							
						</div>
						
						<div class="propertyfeature callbackdv">
							<h3>Reply to this ad</h3>
							<div class="span4 nomarginleft"><a class="show-number">SHOW PHONE NUMBER</a></div>
							<div class="span4"><a href="mailto:test@gmail.com">SEND EMAIL</a></div>
							<div class="span4"><a href="#">REQUEST A CALL BACK</a></div>
							<div class="clear"></div>
						</div>
						
						<div class="propertyfeature callbackdv">
							<h3>OR</h3>
		<script>
            // When the document is ready
            $(document).ready(function () {
                //validation rules
                //by default it will append a <label class="error> element to the invalid input
                //and will add a "error" class to the input
                $("#form-inquiry2").validate({
                    rules: {
                        "name": {
                            required: true
                        },  
                        "phone": {
                            required: true,
							number: true
                        },  
                        "email": {
							required: true,
							email: true
							//equalTo: "#email"
						},  
                        "message": {
                            required: true
                        },  
                        "captcha": {
                            required: true,
							equalTo: "#ccaptcha"
                        }
						
                    }
                });
            });
        </script>
							<div class="span8 nomarginleft inquirydvs">
								<form method="post" action="" id="form-inquiry2">
									<p>Your Email</p>
									<input type="email" name="email" id="email" class="formtxt" placeholder="Enter your email">
									<div class="clear"></div>
									<div class="span6 nomarginleft">
										<p>Your Name</p>
										<input type="name" name="name" id="name" class="formtxt" placeholder="Type your name">
									</div>
									<div class="span6">
										<p>Your Phone</p>
										<input type="text" name="phone" id="phone" class="formtxt" placeholder="Type your phone">
									</div>
									<p>Message</p>
									<textarea  name="message" id="message" class="formarea" placeholder="Type your message"></textarea>
									
									<div class="formcaptcha">
										<?php
										echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code" style="width:155px; " align="left">';

										?>
										<input type="hidden" name="ccaptcha" id="ccaptcha" value="<?php echo $_SESSION['captcha_code']; ?>">
										<p>Please enter the 4 letters as they appear in the image on the left.</p>
										<input type="text" name="captcha" id="captcha" class="captchatxt">
									</div>
									
									<div class="formsubmit">
										<div class="span4">
											<input type="submit" value="Send Reply" class="btn-inquiry">
										</div>
										<div class="span6">
											<p>By clicking on 'Send Reply'. I agree to the Terms & Conditions and Privacy Policy</p>
										</div>
										<div class="clear"></div>
									</div>
									
									<div class="clear"></div>
								</form>
							</div>
							<div class="clear"></div>
						</div>
			</div>
			
		<script>
			$(document).scroll(function() {
				if($(this).scrollTop() > 640){
					 $("#floatform").addClass("positionfixed");
				}
				else{
					$("#floatform").removeClass("positionfixed");
				}
				
				
				if($(this).scrollTop() < 3420){
					
					$("#floatform").removeClass("bottomfixed3");
				}
				else{
					
					
					 $("#floatform").addClass("bottomfixed3");
				}
				
			});
			$(document).ready(function(){
				$(".show-number").click(function(){
					$(".show-number").text("+123456789");
				});
			});
		</script>	
			<div class="span3 rightsidebar">
				<div class="profiledv">
					<div class="profileimg">
						<a href="#"><img src="images/user-profile.png" ></a>
					</div>
					<div class="cleardv"></div>
					<div class="profiletitle">
						<a href="#"><h2>YELENA MIRKINA</h2></a>
						<h3>Senior Property Consultant</h3>
					</div>
					<div class="estateimg">
						<a href="#"><img src="images/estatelogo.png" ></a>
					</div>
					
					<div class="estatenum">
						<span class="leftnum">BRN# 12345</span>
						<span class="rightnum">ORN# 12345</span>
					</div>
					<div class="estatebtn">
						<a href="mailto:test@gmail.com">SEND EMAIL</a>
						<a class="show-number">SHOW PHONE NUMBER</a>
						<a href="http://www.google.com/">GO TO THE WEBSITE</a>
					</div>
				</div>
				<br/>
		<script>
            // When the document is ready
            $(document).ready(function () {
                //validation rules
                //by default it will append a <label class="error> element to the invalid input
                //and will add a "error" class to the input
                $("#form-inquiry").validate({
                    rules: {
                        "name": {
                            required: true
                        },  
                        "phone": {
                            required: true,
							number: true
                        },  
                        "email": {
							required: true,
							email: true
							//equalTo: "#email"
						},  
                        "message": {
                            required: true
                        },  
                        "captcha": {
                            required: true,
							equalTo: "#ccaptcha"
                        }
						
                    }
                });
            });
        </script>
				<div class="inquiryform" id="floatform">
					<h3>Make an Inquiry</h3>
					<div class="formarea">
						<form method="get" action="" id="form-inquiry">
							<p>Your Name</p>
							<input type="text" name="name" id="name" value="" class="formtxt" placeholder="Type your name">
							<p>Your Phone</p>
							<input type="text" name="phone" id="phone" value="" class="formtxt" placeholder="Type your phone">
							<p>Your Email</p>
							<input type="text" name="email" id="email" value="" class="formtxt" placeholder="Type your name">
							<p>Your Message</p>
							<textarea name="message" id="message" class="formtxtarea" placeholder="Type your message"></textarea>
							
							<?php
							echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code" style=" width:70%; ">';

							?>
							<input type="hidden" name="ccaptcha" id="ccaptcha" value="<?php echo $_SESSION['captcha_code']; ?>">
							<div class="clear10"></div>
							
							<p>Please enter the 4 letters as they appear in the image on the left.</p>
							<input type="text" name="captcha" id="captcha" value="" class="formtxt" placeholder="">
							<input type="submit" name="submit" value="SUBMIT" class="btn-inquiry">
							<p class="termstxt">By clicking on 'Submit' I agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></p>
							<div class="clear10"></div>
						</form>
						
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
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple icons</title>
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script>
	<link href="assets/css/style.css" rel="stylesheet">
	<style>
	.infobox-wrapper {
		visibility:hidden;
	}
	body{max-width:100%; min-width:100%; max-height:100%; overflow:hidden; background:#fff; width: 100%; margin:0px;
    height: 100%;}
	
	.infoBox{width:250px!important; background:url('images/tipbox.png')!important; background-repeat:no-repeat; margin-top:-220px;}
	
	.infoBox > img{
		margin-left:-30px!important;
		    margin: 8px 23px 2px 2px!important;
	}
	.infobox_inner {
		width:200px;
		height:173px;
		margin-bottom: 8px;
		background:#fff;
		color:#FFF;
		padding: .5em;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		border-radius: 2px;
		overflow:auto;
	}
	
	#mapcenter{cursor:pointer;}
	.infobox_inner::-webkit-scrollbar {
		width: 7px;
	}
	 
	.infobox_inner::-webkit-scrollbar-track {
		
	}
	 
	.infobox_inner::-webkit-scrollbar-thumb {
	  background-color: darkgrey;
	  
	}
	
	
	.infoBox{opacity:1!important;}
	.sliderdv{height:173px;}
	.sliderimg{height:100%;}
	.lSSlideOuter{height:100%;}
	.lSSlideWrapper{height:100%;}

	</style>
    <style>
      #map2 {
        height: 380px;
		max-width:100%;
		width:100%;
      }
    </style>
	
	<link rel="shortcut icon" href="assets/ico/favicon.ico">

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>

  
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
	<script type="text/javascript">
function initialize() {
    var loc, map, marker, infobox;
    
    loc = new google.maps.LatLng(25.09523762552123, 55.16304016113281);
    
   map = new google.maps.Map(document.getElementById("map2"), {
         zoom: 12,
         center: loc,
         mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    
	var image = 'images/icon-blue.png';
	var image2 = 'images/icon-blue.png';
	var image3 = 'images/icon-blue.png';
	var image4 = 'images/icon-blue.png';
	var image5 = 'images/icon-blue.png';
	
    marker = new google.maps.Marker({
        position: {lat: 25.09523762552123, lng: 55.16304016113281},
		map: map,
        visible: true,
		icon: image
    });

   infobox = new InfoBox({
         content: document.getElementById("infobox"),
         disableAutoPan: false,
         maxWidth: 150,
         pixelOffset: new google.maps.Size(-140, 0),
         zIndex: null,
         boxStyle: {
            background: "url('http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/examples/tipbox.gif') no-repeat",
            opacity: 0.75,
            width: "280px"
        },
        closeBoxMargin: "12px 4px 2px 2px",
        closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
        infoBoxClearance: new google.maps.Size(1, 1)
    });
    
    google.maps.event.addListener(marker, 'click', function() {
        infobox.open(map, this);
        map.panTo(loc);
    });
	
	$(document).ready(function() { 
		$("#mapcenter").click(function(e) { 
			map.setCenter(loc);
			}); 
		});
	}
google.maps.event.addDomListener(window, 'load', initialize);


function initialize2() {
   var loc, map, marker, infobox;
    
    loc = new google.maps.LatLng(25.09523762552123, 55.16304016113281);
    
    var panorama = new google.maps.StreetViewPanorama(
      document.getElementById('map2'), {
        position: loc,
        pov: {
          heading: 34,
          pitch: 10
        }
      });
	map.setStreetView(panorama);
    
	var image = 'images/icon-blue.png';
	var image2 = 'images/icon-blue.png';
	var image3 = 'images/icon-blue.png';
	var image4 = 'images/icon-blue.png';
	var image5 = 'images/icon-blue.png';
	
    marker = new google.maps.Marker({
        position: {lat: 25.09523762552123, lng: 55.16304016113281},
		map: map,
        visible: true,
		icon: image
    });

   infobox = new InfoBox({
         content: document.getElementById("infobox"),
         disableAutoPan: false,
         maxWidth: 150,
         pixelOffset: new google.maps.Size(-140, 0),
         zIndex: null,
         boxStyle: {
            background: "url('http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/examples/tipbox.gif') no-repeat",
            opacity: 0.75,
            width: "280px"
        },
        closeBoxMargin: "12px 4px 2px 2px",
        closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
        infoBoxClearance: new google.maps.Size(1, 1)
    });
    
    google.maps.event.addListener(marker, 'click', function() {
        infobox.open(map, this);
        map.panTo(loc);
    });
	
	}
	

</script>
	
	
  </head>
  <body>
    
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
								if(myMarginTop == '-95px'){
									$('#footerhide').animate({marginTop:0},300).attr('class', 'footerhide1');
									$('#rotatearrow').attr("src", 'images/hide-button.jpg');
								}
								else{
									$('#footerhide').animate({marginTop:-95},300).attr('class', 'footerhide1');
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
									'width' : $('#content-slider').width()  - 210
								});
								 
							});
							
						});
						</script>
						
						<script>
							function showstreetview(){
								document.getElementById('streetview').style.display = 'none';
								document.getElementById('mapview').style.display = 'inline-block';
								initialize2();
							}
							
							function showmapview(){
								document.getElementById('mapview').style.display = 'none';
								document.getElementById('streetview').style.display = 'inline-block';
								initialize();
							}
						</script>
				<div id="map2" style="width:100%!important; height: 400px;"></div>
				<div class="iframedvleft">
					<a id="mapcenter"><img src="images/mapcenter.png"></a>
					<a  onclick="showstreetview();" id="streetview"><img src="images/streetview.png"></a>
					<a  onclick="showmapview();" id="mapview" style="display:none;"><img src="images/map-view.jpg"></a>
				</div>
			<div class="infobox-wrapper">
				<div id="infobox" class="infobox_inner">
					<div class="sliderdv">
							<div class="slidertopdv">
								<span class="leftcontent">
									<input type="checkbox" name="test" id="selectbox11"  class="checkboxslid"><label for="selectbox11">Select</label> 
								</span>
								<span class="rightcontent">
									<a href="#">Details</a> &nbsp; &nbsp; 
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
				</div>
			</div>
		
  </body>
</html>
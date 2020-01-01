<?php
if(isset($_POST['emirate'])){
	//echo 'test'.$_POST['emirate'];
}
?>	
	
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


	
  

			
	
			
			<!-- END FEATURE ITEM-->
			
						<script>
						$(document).ready(function(){
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
			
			
				
			
				<ul id="content-slider" class="content-slider mortgage">
					<?php
					if(isset($_POST['slideremove']) && ($_POST['slideremove'] == 1)){
						
					}
					else{
					?>
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
					<?php 
					}
					
					if(isset($_POST['slideremove']) && ($_POST['slideremove'] == 2)){
						
					}
					else{
					?>
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
					<?php 
					}
					?>
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
				
				
				
				
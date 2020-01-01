
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
	
	
			
			
			<div class="sliderlisting " id="content-l">
			<ul style="margin:0px;">
				<?php
				if(isset($_POST['selectedproptery']) && ($_POST['selectedproptery'] == 2)){
				?>
				<li>
				<div class="sliderdv bgshade">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox12" checked onclick="get_select();" class="checkboxslid"><label for="selectbox12">Select</label> &nbsp; <a class="togglebutton" onclick="showpopup()" href="javascript:;" id="togglemap2"><img src="images/icon-map.png"> Map</a>
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
				<?php
				}
				?>
				
				
				
				
				<?php
				if(isset($_POST['slideremove']) && ($_POST['slideremove'] != 1)){
				?>
				<li>
				<div class="sliderdv bgshade">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox11" class="checkboxslid"><label for="selectbox11">Select</label> &nbsp; <a class="togglebutton" onclick="showpopup()" href="javascript:;" id="togglemap1"><img src="images/icon-map.png"> Map</a>
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
				<?php } ?>
				
				
				<?php
				if(isset($_POST['selectedproptery']) &&($_POST['selectedproptery'] != 2)){
				?>
				<li>
				<div class="sliderdv bgshade">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox12" class="checkboxslid"><label for="selectbox12">Select</label> &nbsp; <a class="togglebutton" onclick="showpopup()" href="javascript:;" id="togglemap2"><img src="images/icon-map.png"> Map</a>
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
				<?php } ?>
				
				<li>
				<div class="sliderdv bgshade">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox13" class="checkboxslid"><label for="selectbox13">Select</label> &nbsp; <a class="togglebutton" onclick="showpopup()" href="javascript:;" id="togglemap3"><img src="images/icon-map.png"> Map</a>
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
							<input type="checkbox" name="test" id="selectbox14" class="checkboxslid"><label for="selectbox14">Select</label> &nbsp; <a class="togglebutton" onclick="showpopup()" href="javascript:;" id="togglemap4"><img src="images/icon-map.png"> Map</a>
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
							<input type="checkbox" name="test" id="selectbox15" class="checkboxslid"><label for="selectbox15">Select</label> &nbsp; <a class="togglebutton" onclick="showpopup()" href="javascript:;" id="togglemap5"><img src="images/icon-map.png"> Map</a>
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
				
				<div class="cleardv"></div>
			</div>
			
			<?php
			if(isset($_POST['slideremove']) && ($_POST['slideremove'] != 1)){
			?>
			<iframe src="map_filtration3.php" height="95%" width="100%" frameborder="0" scrolling="no" frameborder="0" style="border:0" allowfullscreen></iframe>
			<?php
			}
			else{
			?>
			<iframe src="map_filtration3.php?id=1" height="95%" width="100%" frameborder="0" scrolling="no" frameborder="0" style="border:0" allowfullscreen></iframe>
			<?php
			}
			?>
			
			
			

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
			});
			
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
	
	
			
			
			<div class="sliderlisting2 " id="content-l">
			<ul style="margin:0px;">
				<?php
				if(isset($_POST['selectedproptery']) && ($_POST['selectedproptery'] == 2)){
				?>
				<li>
				<div class="sliderdv bgshade2">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox11" checked onclick="get_select(1);" class="checkboxslid"><label for="selectbox11">&nbsp;</label>
						</span>
						<span class="rightcontent">
							<a href="#" onclick="getslideid(1);" class="closelist"><img src="images/icon-cross.png"></a>
						</span>
						<div class="clear"></div>
					</div>
					<div class="proerptysmall">
						<div class="propertysmleft agents">
							<a href="agent_detail.php"><img src="images/agent.png"></a>
						</div>
						<div class="propertysmright">
							<h5><a href="agent_detail.php">Company Name2</a></h5>
							<p>Bay Central | Dubai Marina</p>
							<p>Dubai | UAE</p>
							
							<div class="agencyprofile">
								<span><img src="images/icon-green.png">26 </span>
								<span><img src="images/icon-blue.png">17 </span>
								<span><img src="images/icon-red.png">05 </span>
								<span><img src="images/icon-orange.png">08 </span>
							</div>
							
						</div>
						<div class="clear"></div>
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
				<div class="sliderdv bgshade2">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox11" onclick="get_select(1);" class="checkboxslid"><label for="selectbox11">&nbsp;</label>
						</span>
						<span class="rightcontent">
							<a href="#" onclick="getslideid(1);" class="closelist"><img src="images/icon-cross.png"></a>
						</span>
						<div class="clear"></div>
					</div>
					<div class="proerptysmall">
						<div class="propertysmleft agents">
							<a href="agent_detail.php"><img src="images/agent.png"></a>
						</div>
						<div class="propertysmright">
							<h5><a href="agent_detail.php">Company Name</a></h5>
							<p>Bay Central | Dubai Marina</p>
							<p>Dubai | UAE</p>
							
							<div class="agencyprofile">
								<span><img src="images/icon-green.png">26 </span>
								<span><img src="images/icon-blue.png">17 </span>
								<span><img src="images/icon-red.png">05 </span>
								<span><img src="images/icon-orange.png">08 </span>
							</div>
							
						</div>
						<div class="clear"></div>
					</div>
					
					
					
				</div>
				</li>
				<?php } ?>
				
				
				<?php
				if(isset($_POST['selectedproptery']) &&($_POST['selectedproptery'] != 2)){
				?>
				<li>
				<div class="sliderdv bgshade2">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox11" onclick="get_select(1);" class="checkboxslid"><label for="selectbox11">&nbsp;</label>
						</span>
						<span class="rightcontent">
							<a href="#" onclick="getslideid(1);" class="closelist"><img src="images/icon-cross.png"></a>
						</span>
						<div class="clear"></div>
					</div>
					<div class="proerptysmall">
						<div class="propertysmleft agents">
							<a href="agent_detail.php"><img src="images/agent.png"></a>
						</div>
						<div class="propertysmright">
							<h5>Company Name2</h5>
							<p>Bay Central | Dubai Marina</p>
							<p>Dubai | UAE</p>
							
							<div class="agencyprofile">
								<span><img src="images/icon-green.png">26 </span>
								<span><img src="images/icon-blue.png">17 </span>
								<span><img src="images/icon-red.png">05 </span>
								<span><img src="images/icon-orange.png">08 </span>
							</div>
							
						</div>
						<div class="clear"></div>
					</div>
					
					
					
				</div>
				</li>
				<?php } ?>
				
				<li>
				<div class="sliderdv bgshade2">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox11" onclick="get_select(1);" class="checkboxslid"><label for="selectbox11">&nbsp;</label>
						</span>
						<span class="rightcontent">
							<a href="#" onclick="getslideid(1);" class="closelist"><img src="images/icon-cross.png"></a>
						</span>
						<div class="clear"></div>
					</div>
					<div class="proerptysmall">
						<div class="propertysmleft agents">
							<a href="agent_detail.php"><img src="images/agent.png"></a>
						</div>
						<div class="propertysmright">
							<h5><a href="agent_detail.php">Company Name</a></h5>
							<p>Bay Central | Dubai Marina</p>
							<p>Dubai | UAE</p>
							
							<div class="agencyprofile">
								<span><img src="images/icon-green.png">26 </span>
								<span><img src="images/icon-blue.png">17 </span>
								<span><img src="images/icon-red.png">05 </span>
								<span><img src="images/icon-orange.png">08 </span>
							</div>
							
						</div>
						<div class="clear"></div>
					</div>
					
					
					
				</div>
				</li>
				
				<li>
				<div class="sliderdv bgshade2">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox11" onclick="get_select(1);" class="checkboxslid"><label for="selectbox11">&nbsp;</label>
						</span>
						<span class="rightcontent">
							<a href="#" onclick="getslideid(1);" class="closelist"><img src="images/icon-cross.png"></a>
						</span>
						<div class="clear"></div>
					</div>
					<div class="proerptysmall">
						<div class="propertysmleft agents">
							<a href="agent_detail.php"><img src="images/agent.png"></a>
						</div>
						<div class="propertysmright">
							<h5><a href="agent_detail.php">Company Name</a></h5>
							<p>Bay Central | Dubai Marina</p>
							<p>Dubai | UAE</p>
							
							<div class="agencyprofile">
								<span><img src="images/icon-green.png">26 </span>
								<span><img src="images/icon-blue.png">17 </span>
								<span><img src="images/icon-red.png">05 </span>
								<span><img src="images/icon-orange.png">08 </span>
							</div>
							
						</div>
						<div class="clear"></div>
					</div>
					
					
					
				</div>
				</li>
				
				<li>
				<div class="sliderdv bgshade2">
					<div class="slidertopdv">
						<span class="leftcontent">
							<input type="checkbox" name="test" id="selectbox11" onclick="get_select(1);" class="checkboxslid"><label for="selectbox11">&nbsp;</label>
						</span>
						<span class="rightcontent">
							<a href="#" onclick="getslideid(1);" class="closelist"><img src="images/icon-cross.png"></a>
						</span>
						<div class="clear"></div>
					</div>
					<div class="proerptysmall">
						<div class="propertysmleft agents">
							<a href="agent_detail.php"><img src="images/agent.png"></a>
						</div>
						<div class="propertysmright">
							<h5><a href="agent_detail.php">Company Name</a></h5>
							<p>Bay Central | Dubai Marina</p>
							<p>Dubai | UAE</p>
							
							<div class="agencyprofile">
								<span><img src="images/icon-green.png">26 </span>
								<span><img src="images/icon-blue.png">17 </span>
								<span><img src="images/icon-red.png">05 </span>
								<span><img src="images/icon-orange.png">08 </span>
							</div>
							
						</div>
						<div class="clear"></div>
					</div>
					
					
					
				</div>
				</li>
				
				<div class="cleardv"></div>
			</div>
			
			<?php
			if(isset($_POST['slideremove']) && ($_POST['slideremove'] != 1)){
			?>
			<iframe src="map_filtration.php" height="95%" width="100%" frameborder="0" scrolling="no" frameborder="0" style="border:0" allowfullscreen></iframe>
			<?php
			}
			else{
			?>
			<iframe src="map_filtration.php?id=1" height="95%" width="100%" frameborder="0" scrolling="no" frameborder="0" style="border:0" allowfullscreen></iframe>
			<?php
			}
			?>
			
			
			
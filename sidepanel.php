<div class="span2 sidebar">
<script>
$(document).ready(function(){
    $(".btntoggle").click(function(){
		$(".custommenu").toggleClass("open");
	});
	$(".btntoggle2").click(function(){
		$(".custommenu").toggleClass("open");
	});
	
	$(function() {
		$("body").click(function(e) {
			if (e.target.id == "myDiv" || $(e.target).parents("#myDiv").size()) { 
				
			} else { 
			   $(".custommenu").removeClass("open");
			}
		});
	})
	
	
});
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.up').click(function() {
            var parent = $(this).parent();
            parent.insertBefore(parent.prev());
			myFunction();
			$("#reset_priority").addClass("btnactive");
			$("#form_reset").addClass("btnactive");
        });
        $('.down').click(function() {
            var parent = $(this).parent();
            parent.insertAfter(parent.next());
			myFunction();
			$("#reset_priority").addClass("btnactive");
			$("#form_reset").addClass("btnactive");
        });
    });
	
	$(document).ready(function() {
	  $(window).keydown(function(event){
		if(event.keyCode == 13) {
		  event.preventDefault();
		  return false;
		}
	  });
	});
	
	function reset_fields(){
		document.getElementById('resetfileds').innerHTML = '<li>&nbsp; 1 &nbsp; <a href="#">Sub Community</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li><li>&nbsp; 2 &nbsp; <a href="#">Sub Community</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li><li>&nbsp; 3 &nbsp; <a href="#">Sub Community</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li><li>&nbsp; 4 &nbsp; <a href="#">Sub Community</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li><li>&nbsp; 5 &nbsp; <a href="#">Sub Community</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li><li>&nbsp; 6 &nbsp; <a href="#">Sub Community</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li>';
		myFunction();
	}
</script>
<script>
$(document).ready(function(){
    $("#reset_priority").click(function(){
        $("#resetfileds").load("reset_priority.php");
		myFunction();
		$("#reset_priority").removeClass("btnactive");
    });
});

		function active_reset() {
			myFunction();
			$("#form_reset").addClass("btnactive");
		}
		
		
	
</script>
				<br/>
				<a  class="btn-refresh" id="form_reset">Reset Listings</a>
				<div class="clear10"></div>
				<div class="clear10"></div>
				<form id="reg-form" name="shippingform" method="get" action="">
				<input type="hidden" id="slideremove" name="slideremove" value="">
				<input type="hidden" id="selectedproptery" name="selectedproptery" value="">
				
				<div id="myDiv" class="btn-group custommenu">
				  <button type="button" class="btn btnpriority btntoggle">SET PRIORITIES</button>
				  <button type="button" class="btn  dropdown-toggle btntoggle" onblur="hidedropdown()" aria-haspopup="true" aria-expanded="false">
					<img src="images/arrow-white-right.png">
				  </button>
				  <div class="dropdown-menu">
					  <div><a class="resetbtn" id="reset_priority">Reset</a> <a class="btntoggle2"><img src="images/icon-cross.png"></a></div>
					  <ul id="resetfileds">
						<li><a href="#">Dubai Lagoon</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li>
						<li><a href="#">Studio City</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li>
						<li><a href="#">Dubai Marina</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li>
						<li><a href="#">Palm Jumeirah</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li>
						<li><a href="#">Greens</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li>
						<li><a href="#">Springs</a> <a class="up"><img src="images/uparrows.png"></a><a class="down"><img src="images/downarrows.png"></a></li>
					  </ul>
				  </div>
				  
				</div>
				
				<ul class="listside">
					<li><a>Showing 500 Results</a></li>
					<li><a href="#">Checked 10 to compare</a></li>
					<li><?php if(basename($_SERVER['PHP_SELF']) == 'listing2.php'){?><button type="button" onclick="window.location.href='listing.php'" class="btngist2">GO BACK</button> <?php }else{?><button class="btngist"  onclick="window.location.href='listing2.php'" type="button">GIST</button> <? } ?></li>
				</ul>
	<script type="text/javascript">
	jQuery( document ).ready(function( $ ) {
	  // Code that uses jQuery's $ can follow here.
	});
      $(function() {
        var ms1 = $('#ms1').magicSuggest({
          data: ['Downtown Burj Dubai','Dubai Healthcare City','Dubai Media City','Dubai Marina','Jumeirah Lake Towers','Palm Jumeirah','Murjan','Marina Wharf 1','Royal Oceanic','Princess','Pentominium','Sparkle Tower 2','Silverene']
        });
      });
    </script>		
<script>
  $(function() {
    var availableTags = [
      "ActionScript",
	  "Dubai Marina",
	  "Dubai Palm",
	  "Dubai Healthcare",
      "JBR Jumeirah Beach Residence",
      "JLT Jumeirah Lake Towers",
      "Downtown",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
	
	
	
	$("#ui-id-1").click(function() {
		myFunction();
		$("#form_reset").addClass("btnactive");
	});
	
	
	/*
	$("#ms1").click(function() {
		myFunction();
		$("#form_reset").addClass("btnactive");
	});
	*/
  });
  </script>
				
				<ul class="listside list-bottom">
					<li><a href="#">EMIRATES</a>
						<ul>
							<div class="fixedscroll">
								<li><input type="checkbox" name="emirate[]" id="emirate1" onclick="active_reset()" value="1" class="sidefilter"><label for="emirate1">Abu Dhabi (100)</label></li>
								<li><input type="checkbox" name="emirate[]" id="emirate2" onclick="active_reset()" value="2" class="sidefilter"><label for="emirate2">Dubai (100)</label></li>
								<li><input type="checkbox" name="emirate[]" id="emirate3" onclick="active_reset()" value="3" class="sidefilter"><label for="emirate3">Sharjah (100)</label></li>
								<li><input type="checkbox" name="emirate[]" id="emirate4" onclick="active_reset()" value="4" class="sidefilter"><label for="emirate4">Ajman (100)</label></li>
								<li><input type="checkbox" name="emirate[]" id="emirate5" onclick="active_reset()" value="5" class="sidefilter"><label for="emirate5">Fujairah (100)</label></li>
								<li><input type="checkbox" name="emirate[]" id="emirate6" onclick="active_reset()" value="6" class="sidefilter"><label for="emirate6">Ras Al Khaima (100)</label></li>
								<li><input type="checkbox" name="emirate[]" id="emirate7" onclick="active_reset()" value="7" class="sidefilter"><label for="emirate7">Umm Al Quwain</label></li>
							</div>
						</ul>
					</li>
					<li  class="searchauto">
					<div id="ms1" class="autosearch"></div>
							<span id="counterselect" style="display:inline-block!important;">0</span>			
					<input type="text" name="tags" id="singleFieldTags2" placeholder="JBR, Dubai Marine..."  style="display:none;" onChange="myFunction()" class="autosearch"></li>
					<li><a href="#">LISTING TYPE</a>
					
					<script language="JavaScript">
					function clicksales(){
						if ($('#filter1').is(':checked') == true) {
							document.getElementById("filter2").checked = true;
						    document.getElementById("filter3").checked = true;
						    document.getElementById("filter4").checked = true;
						}
						else {
							document.getElementById("filter2").checked = false;
						    document.getElementById("filter3").checked = false;
						    document.getElementById("filter4").checked = false;
						}
					  
					  myFunction();
					  $("#form_reset").addClass("btnactive");
					}
					
					function clickforsales(){
						
					  if ($('#filter5').is(':checked') == true) {
						document.getElementById("filter6").checked = true;
					    document.getElementById("filter7").checked = true;
					    document.getElementById("filter8").checked = true;
					  }
					  else {
						document.getElementById("filter6").checked = false;
					    document.getElementById("filter7").checked = false;
					    document.getElementById("filter8").checked = false;
					  }
						
					  
					  myFunction();
					  $("#form_reset").addClass("btnactive");
					}
					</script>
					
						<ul>
							<div class="fixedscroll">
								<li><input type="checkbox" id="filter1" onclick="clicksales()" class="sidefilter"> <label for="filter1">For Sale (8000)</label>
									<p><input type="checkbox" id="filter2" name="forsale[]" value="1" onclick="active_reset()" class="sidefilter"> <label for="filter2">By Agent (7986)</label></p>
									<p><input type="checkbox" id="filter3" name="forsale[]" value="2" onclick="active_reset()" class="sidefilter"> <label for="filter3">By Owner (24)</label></p>
									<p><input type="checkbox" id="filter4" name="forsale[]" value="3" onclick="active_reset()" class="sidefilter"> <label for="filter4">By Developer (24)</label></p>
									<div class="clear10"></div>
								</li>
								<li><input type="checkbox" id="filter5" onclick="clickforsales()" class="sidefilter"> <label for="filter5">For Sale (8000)</label>
									<p><input type="checkbox" id="filter6" name="forsale[]" value="1" onclick="active_reset()" class="sidefilter"> <label for="filter6">By Agent (7986)</label></p>
									<p><input type="checkbox" id="filter7" name="forsale[]" value="2" onclick="active_reset()" class="sidefilter"> <label for="filter7">By Owner (24)</label></p>
									<p><input type="checkbox" id="filter8" name="forsale[]" value="3" onclick="active_reset()" class="sidefilter"> <label for="filter8">By Developer (24)</label></p>
								</li>
							</div>
						</ul>
					</li>
					<li><a href="#">PROPERTY TYPE</a>
						<ul>
							<div class="fixedscroll">
								<li><input type="checkbox" name="propertytype[]" onclick="active_reset()" value="1" id="filtertype1" class="sidefilter"> <label for="filtertype1">Appartments</label></li>
								<li><input type="checkbox" name="propertytype[]" onclick="active_reset()" value="2" id="filtertype2" class="sidefilter"> <label for="filtertype2">Villas</label></li>
								<li><input type="checkbox" name="propertytype[]" onclick="active_reset()" value="3" id="filtertype3" class="sidefilter"> <label for="filtertype3">Town House</label></li>
								<li><input type="checkbox" name="propertytype[]" onclick="active_reset()" value="4" id="filtertype4" class="sidefilter"> <label for="filtertype4">Land</label></li>
								<li><input type="checkbox" name="propertytype[]" onclick="active_reset()" value="5" id="filtertype5" class="sidefilter"> <label for="filtertype5">Duplex</label></li>
								<li><input type="checkbox" name="propertytype[]" onclick="active_reset()" value="6" id="filtertype6" class="sidefilter"> <label for="filtertype6">Penthouse</label></li>
								<li><input type="checkbox" name="propertytype[]" onclick="active_reset()" value="7" id="filtertype7" class="sidefilter"> <label for="filtertype7">Office</label></li>
								<li><input type="checkbox" name="propertytype[]" onclick="active_reset()" value="8" id="filtertype8" class="sidefilter"> <label for="filtertype8">Retail Space</label></li>
								<li><input type="checkbox" name="propertytype[]" onclick="active_reset()" value="9" id="filtertype9" class="sidefilter"> <label for="filtertype9">Warehouse</label></li>
								<li><input type="checkbox" name="propertytype[]" onclick="active_reset()" value="10" id="filtertype10" class="sidefilter"> <label for="filtertype10">Buildings</label></li>
								<li><input type="checkbox" name="propertytype[]" onclick="active_reset()" value="11" id="filtertype11" class="sidefilter"> <label for="filtertype11">Appartments</label></li>
								<li><input type="checkbox" name="propertytype[]" onclick="active_reset()" value="12" id="filtertype12" class="sidefilter"> <label for="filtertype12">Villas</label></li>
								<li><input type="checkbox" name="propertytype[]" onclick="active_reset()" value="13" id="filtertype13" class="sidefilter"> <label for="filtertype13">Town House</label></li>
							</div>
						</ul>
					</li>
					<script>
					function myfunction2(str){
					  document.getElementById("min-price").value = str;
					  myFunction();
					  $("#form_reset").addClass("btnactive");
					}
					function myfunction3(str2){
					  document.getElementById("max-price").value = str2;
					  myFunction();
					  $("#form_reset").addClass("btnactive");
					}
					</script>
					<li><a href="#" id="totalprice">PRICE</a>
						<ul>
							<div class="fixedscroll">
								<script>
								function filterprices(str){
									//alert(str);
									
									var selected = str;
									
									var pricearray1 = ["filterprice1", "filterprice2", "filterprice3", "filterprice4", "filterprice5", "filterprice6", "filterprice7", "filterprice8", "filterprice9", "filterprice10", "filterprice11", "filterprice12"];
									var pricearray2 = ["filterprice13", "filterprice14", "filterprice15", "filterprice16", "filterprice17", "filterprice18", "filterprice19", "filterprice20", "filterprice21", "filterprice22", "filterprice23", "filterprice24"];
									var valuearray1 = ["filtervalue1", "filtervalue2", "filtervalue3", "filtervalue4", "filtervalue5", "filtervalue6", "filtervalue7", "filtervalue8", "filtervalue9", "filtervalue10", "filtervalue11", "filtervalue12"];
									var valuearray2 = ["filtervalue13", "filtervalue14", "filtervalue15", "filtervalue16", "filtervalue17", "filtervalue18", "filtervalue19", "filtervalue20", "filtervalue21", "filtervalue22", "filtervalue23", "filtervalue24"];
									
									var minvalue = +document.getElementById(valuearray1[str]).value;
									
									var min_value = minvalue / 1000;
									if(document.getElementById('max-price').value == 'Max'){
										var max_value = 500000 / 1000;
									}
									else{
										var max_value = document.getElementById('max-price').value / 1000;
									}
									
									document.getElementById('totalprice').innerHTML = min_value+"K - "+ max_value +"K";
									
									for (i = 0; i <= 12; i++){
										//totalprice
										if(+document.getElementById(valuearray2[i]).value < minvalue){
											document.getElementById(pricearray2[i]).style.cssText = 'display:none;';
										}
										else{
											document.getElementById(pricearray2[i]).style.cssText = 'display:block;';
										}
									}
								}
								
								function filterprices2(str){
									//alert(str);
									
									var selected = str;
									
									var pricearray1 = ["filterprice1", "filterprice2", "filterprice3", "filterprice4", "filterprice5", "filterprice6", "filterprice7", "filterprice8", "filterprice9", "filterprice10", "filterprice11", "filterprice12"];
									var pricearray2 = ["filterprice13", "filterprice14", "filterprice15", "filterprice16", "filterprice17", "filterprice18", "filterprice19", "filterprice20", "filterprice21", "filterprice22", "filterprice23", "filterprice24"];
									var valuearray1 = ["filtervalue1", "filtervalue2", "filtervalue3", "filtervalue4", "filtervalue5", "filtervalue6", "filtervalue7", "filtervalue8", "filtervalue9", "filtervalue10", "filtervalue11", "filtervalue12"];
									var valuearray2 = ["filtervalue13", "filtervalue14", "filtervalue15", "filtervalue16", "filtervalue17", "filtervalue18", "filtervalue19", "filtervalue20", "filtervalue21", "filtervalue22", "filtervalue23", "filtervalue24"];
									
									var maxvalue = +document.getElementById(valuearray2[str]).value;
									
									var minvalue = document.getElementById('min-price').value;
									
									if(minvalue == 'Min'){
										minvalue = 0;
									}
									
									var min_value = minvalue / 1000;
									var max_value = maxvalue / 1000;
									
									document.getElementById('totalprice').innerHTML = min_value+"K - "+ max_value +"K";
									
									for (i = 0; i <= 12; i++){ 
										
										if(+document.getElementById(valuearray1[i]).value > maxvalue){
											document.getElementById(pricearray1[i]).style.cssText = 'display:none;';
										}
										else{
											document.getElementById(pricearray1[i]).style.cssText = 'display:block;';
										}
									}
									
								}
								</script>
								
								<li>
								
									<input type="text" name="min-price" id="min-price"  class="filtertxt" value="Min"> --- <input type="text" name="max-price" id="max-price" class="filtertxt"  value="Max">
									<div class="clear10"></div>
									<div class="filterdvs min_maxvalue">
										<a onclick="myfunction2(0); filterprices(0)" id="filterprice1"><input type="hidden" value="0" id="filtervalue1"> 0 </a>
										<a onclick="myfunction2(50000); filterprices(1) " id="filterprice2"><input type="hidden" value="50000" id="filtervalue2"> 50,000+ </a>
										<a onclick="myfunction2(75000); filterprices(2)" id="filterprice3"><input type="hidden" value="75000" id="filtervalue3"> 75,000+ </a>
										<a onclick="myfunction2(100000); filterprices(3)" id="filterprice4"><input type="hidden" value="100000" id="filtervalue4"> 100,000+ </a>
										<a onclick="myfunction2(150000); filterprices(4)" id="filterprice5"><input type="hidden" value="150000" id="filtervalue5"> 150,000+ </a>
										<a onclick="myfunction2(200000); filterprices(5)" id="filterprice6"><input type="hidden" value="200000" id="filtervalue6"> 200,000+ </a>
										<a onclick="myfunction2(250000); filterprices(6)" id="filterprice7"><input type="hidden" value="250000" id="filtervalue7"> 250,000+ </a>
										<a onclick="myfunction2(300000); filterprices(7)" id="filterprice8"><input type="hidden" value="300000" id="filtervalue8"> 300,000+ </a>
										<a onclick="myfunction2(400000); filterprices(8)" id="filterprice9"><input type="hidden" value="400000" id="filtervalue9"> 400,000+ </a>
										<a onclick="myfunction2(500000); filterprices(9)" id="filterprice10"><input type="hidden" value="500000" id="filtervalue10"> 500,000+ </a>
										<a onclick="myfunction2(600000); filterprices(10)" id="filterprice11"><input type="hidden" value="600000" id="filtervalue11"> 600,000+ </a>
										<a onclick="myfunction2(700000); filterprices(11)" id="filterprice12"><input type="hidden" value="700000" id="filtervalue12"> 700,000+ </a>
										
									</div>
									
									<div class="filterdvs min_maxvalue">
										<a onclick="myfunction3(100000); filterprices2(0)" id="filterprice13"><input type="hidden" value="100000" id="filtervalue13"> 100,000+ </a>
										<a onclick="myfunction3(200000); filterprices2(1)" id="filterprice14"><input type="hidden" value="200000" id="filtervalue14"> 200,000+ </a>
										<a onclick="myfunction3(300000); filterprices2(2)" id="filterprice15"><input type="hidden" value="300000" id="filtervalue15"> 300,000+ </a>
										<a onclick="myfunction3(400000); filterprices2(3)" id="filterprice16"><input type="hidden" value="400000" id="filtervalue16"> 400,000+ </a>
										<a onclick="myfunction3(500000); filterprices2(4)" id="filterprice17"><input type="hidden" value="500000" id="filtervalue17"> 500,000+ </a>
										<a onclick="myfunction3(600000); filterprices2(5)" id="filterprice18"><input type="hidden" value="600000" id="filtervalue18"> 600,000+ </a>
										<a onclick="myfunction3(700000); filterprices2(6)" id="filterprice19"><input type="hidden" value="700000" id="filtervalue19"> 700,000+ </a>
										<a onclick="myfunction3(800000); filterprices2(7)" id="filterprice20"><input type="hidden" value="800000" id="filtervalue20"> 800,000+ </a>
										<a onclick="myfunction3(900000); filterprices2(8)" id="filterprice21"><input type="hidden" value="900000" id="filtervalue21"> 900,000+ </a>
										<a onclick="myfunction3(1000000); filterprices2(9)" id="filterprice22"><input type="hidden" value="1000000" id="filtervalue22"> 1,000,000+ </a>
										<a onclick="myfunction3(1100000); filterprices2(10)" id="filterprice23"><input type="hidden" value="1100000" id="filtervalue23"> 1,100,000+ </a>
										<a onclick="myfunction3(1200000); filterprices2(11)" id="filterprice24"><input type="hidden" value="1200000" id="filtervalue24"> 1,200,000+ </a>
									</div>
								</li>
							</div>
						</ul>
					</li>
					<script>
					function bedselect(str){
						//alert(str);
						
						//uncheckall();
						
						    var str = Number(str);
						
							var bedstotal = ["filterbeds1", "filterbeds2", "filterbeds3", "filterbeds4", "filterbeds5", "filterbeds6", "filterbeds7", "filterbeds8", "filterbeds9"];
							var bedstotal2 = ["filterbeds10", "filterbeds11", "filterbeds12", "filterbeds13", "filterbeds14", "filterbeds15", "filterbeds16", "filterbeds17", "filterbeds18"];
							
							var selected = Number(str);
							
							if (document.getElementById(bedstotal[selected]).checked == true) {
								for (i = 0; i <= 7; i++) {
									if(i == str){
										document.getElementById(bedstotal[i]).checked = true;
										document.getElementById('min-bed').value = str;
									}
									else{
										document.getElementById(bedstotal[i]).checked = false;
									}
									
									if(i == str){
										document.getElementById(bedstotal2[i]).checked = true;
										document.getElementById(bedstotal2[i]).readOnly = false;
										document.getElementById('max-bed').value = str+1;
									}
									else if(i == str +1){
										var min_value = str;
										var max_value = str +1;
										document.getElementById(bedstotal2[i]).checked = true;
										document.getElementById('totalbeds').innerHTML = min_value+"-"+ max_value;
										document.getElementById(bedstotal2[i]).readOnly = false;
									}
									else if(i < str){
										document.getElementById(bedstotal2[i]).readOnly = true;
										//$(bedstotal2[i]).css('border','0 none transparent');
										//pointer-events: none
										
									}
									else{
										document.getElementById(bedstotal2[i]).checked = false;
										document.getElementById(bedstotal2[i]).readOnly = false;
									}
								}
							}
							else{
								for (i = 0; i <= 7; i++) {
									document.getElementById(bedstotal[i]).checked = false;
									document.getElementById(bedstotal2[i]).checked = false;
								}
								document.getElementById('min-bed').value = 'Min';
								document.getElementById('max-bed').value = 'Max';
							}
							
							
							
							/*
							var selected = Number(str);
							if (document.getElementById(bedstotal[selected]).checked == true) {
								for (i = str+1; i >= selected; i--) { 
									document.getElementById(bedstotal2[i]).checked = true;
									//alert(i);
								}
							}
							else{
								for (i = str+1; i >= selected; i--) { 
									document.getElementById(bedstotal2[i]).checked = false;
								}
								document.getElementById('max-bed').value = str;
							}
							
							
						
							
							if (document.getElementById(bedstotal[selected]).checked) {
								for (i = 0; i <= selected; i++) { 
									document.getElementById(bedstotal[i]).checked = true;
								}
								document.getElementById('min-bed').value = str;
							}
							else{
								
							}
						*/
							myFunction();
							$("#form_reset").addClass("btnactive");
						
					}
					
					function bedselect2(str){
						//alert(str);
						var str = Number(str);
						var selected = str;
						
						var bedstotal = ["filterbeds1", "filterbeds2", "filterbeds3", "filterbeds4", "filterbeds5", "filterbeds6", "filterbeds7", "filterbeds8", "filterbeds9"];
						var bedstotal2 = ["filterbeds10", "filterbeds11", "filterbeds12", "filterbeds13", "filterbeds14", "filterbeds15", "filterbeds16", "filterbeds17", "filterbeds18"];
						
						if (document.getElementById(bedstotal2[selected]).checked == true) {
							var maxnumberbed = 0;
							for (i = 0; i <= 7; i++) {
								if(i == str){
									//document.getElementById(bedstotal2[i]).checked = true;
									//document.getElementById('max-bed').value = str;
									
								}
								else{
									//document.getElementById(bedstotal2[i]).checked = false;
								}
								
								if(i == str){
									//document.getElementById(bedstotal[i]).checked = true;
									//document.getElementById('min-bed').value = str-1;
								}
								else if(i == str -1){
									//document.getElementById(bedstotal[i]).checked = true;
								}
								else{
									//document.getElementById(bedstotal[i]).checked = false;
								}
								
								var checkboxval = document.getElementById(bedstotal2[i]).value;
								
								if(document.getElementById(bedstotal2[i]).checked == true){
									if(checkboxval > maxnumberbed){
										maxnumberbed = checkboxval;
									}
								}
								
							}
							var min_value = document.getElementById('min-bed').value;
							document.getElementById('totalbeds').innerHTML = min_value+"-"+ maxnumberbed;
							//alert(maxnumberbed);
						}
						else{
							var maxnumberbed = 0;
							for (i = 0; i <= 7; i++) {
								var checkboxval = document.getElementById(bedstotal2[i]).value;
								
								if(document.getElementById(bedstotal2[i]).checked == true){
									if(checkboxval > maxnumberbed){
										maxnumberbed = checkboxval;
										//alert(maxnumberbed);
									}
								}
							}
							
							var min_value = document.getElementById('min-bed').value;
							document.getElementById('totalbeds').innerHTML = min_value+"-"+ maxnumberbed;
						}
						
						/*
						
						if (document.getElementById(bedstotal2[selected]).checked == true) {
							for (i = 0; i <= 7; i++) {
								if(i == str){
									document.getElementById(bedstotal2[i]).checked = true;
									document.getElementById('max-bed').value = str;
								}
								else{
									document.getElementById(bedstotal2[i]).checked = false;
								}
								
								if(i == str){
									document.getElementById(bedstotal[i]).checked = true;
									document.getElementById('min-bed').value = str-1;
								}
								else if(i == str -1){
									document.getElementById(bedstotal[i]).checked = true;
								}
								else{
									document.getElementById(bedstotal[i]).checked = false;
								}
							}
						}
						else{
							for (i = 0; i <= 7; i++) {
								document.getElementById(bedstotal[i]).checked = false;
								document.getElementById(bedstotal2[i]).checked = false;
							}
							document.getElementById('min-bed').value = 'Min';
							document.getElementById('max-bed').value = 'Max';
						}
						*/
						
						
						
						if (document.getElementById(bedstotal2[selected]).readOnly === false) {
							myFunction();
							$("#form_reset").addClass("btnactive");
						}
					}
					</script>
					<li><a href="#">BEDS <span id="totalbeds">0+</span></a>
						<ul>
							<div class="fixedscroll moregap">
								<li>
									<input type="hidden" disabled id="min-bed" name="min-bed" value="Min"><input type="text" class="pricerange" disabled value="Min">  <input type="hidden" disabled id="max-bed" name="max-bed" value="Max"><input type="text" class="pricerange" disabled value="Max">
									<div class="clear10"></div>
									<div class="filterdvs">
										<input type="checkbox" onclick="bedselect(this.value)" value="0" id="filterbeds1" class="sidefilter"> <label for="filterbeds1">0</label><br/>
										<input type="checkbox" onclick="bedselect(this.value)" value="1" id="filterbeds2" class="sidefilter"> <label for="filterbeds2">1</label><br/>
										<input type="checkbox" onclick="bedselect(this.value)" value="2" id="filterbeds3" class="sidefilter"> <label for="filterbeds3">2</label><br/>
										<input type="checkbox" onclick="bedselect(this.value)" value="3" id="filterbeds4" class="sidefilter"> <label for="filterbeds4">3</label><br/>
										<input type="checkbox" onclick="bedselect(this.value)" value="4" id="filterbeds5" class="sidefilter"> <label for="filterbeds5">4</label><br/>
										<input type="checkbox" onclick="bedselect(this.value)" value="5" id="filterbeds6" class="sidefilter"> <label for="filterbeds6">5</label><br/>
										<input type="checkbox" onclick="bedselect(this.value)" value="6" id="filterbeds7" class="sidefilter"> <label for="filterbeds7">6</label><br/>
										<input type="checkbox" onclick="bedselect(this.value)" value="7" id="filterbeds8" class="sidefilter"> <label for="filterbeds8">7</label><br/>
										<input type="checkbox" onclick="bedselect(this.value)" value="8" id="filterbeds9" class="sidefilter"> <label for="filterbeds9">8</label><br/>
									</div>
									
									<div class="filterdvs">
										<input type="checkbox" onclick="bedselect2(this.value)" value="0" id="filterbeds10" class="sidefilter"> <label for="filterbeds10">0</label><br/>
										<input type="checkbox" onclick="bedselect2(this.value)" value="1" id="filterbeds11" class="sidefilter"> <label for="filterbeds11">1</label><br/>
										<input type="checkbox" onclick="bedselect2(this.value)" value="2" id="filterbeds12" class="sidefilter"> <label for="filterbeds12">2</label><br/>
										<input type="checkbox" onclick="bedselect2(this.value)" value="3" id="filterbeds13" class="sidefilter"> <label for="filterbeds13">3</label><br/>
										<input type="checkbox" onclick="bedselect2(this.value)" value="4" id="filterbeds14" class="sidefilter"> <label for="filterbeds14">4</label><br/>
										<input type="checkbox" onclick="bedselect2(this.value)" value="5" id="filterbeds15" class="sidefilter"> <label for="filterbeds15">5</label><br/>
										<input type="checkbox" onclick="bedselect2(this.value)" value="6" id="filterbeds16" class="sidefilter"> <label for="filterbeds16">6</label><br/>
										<input type="checkbox" onclick="bedselect2(this.value)" value="7" id="filterbeds17" class="sidefilter"> <label for="filterbeds17">7</label><br/>
										<input type="checkbox" onclick="bedselect2(this.value)" value="8" id="filterbeds18" class="sidefilter"> <label for="filterbeds18">8</label><br/>
									</div>
								</li>
							</div>
						</ul>
					</li>
					<script>
					function bathselect(str){
						//alert(str);
						var str = Number(str);
						var selected = str;
						
						var bathstotal = ["filterbaths1", "filterbaths2", "filterbaths3", "filterbaths4", "filterbaths5", "filterbaths6", "filterbaths7", "filterbaths8", "filterbaths9"];
						var bathstotal2 = ["filterbaths10", "filterbaths11", "filterbaths12", "filterbaths13", "filterbaths14", "filterbaths15", "filterbaths16", "filterbaths17", "filterbaths18"];
						if (document.getElementById(bathstotal[selected]).checked == true) {
							for (i = 0; i <= 7; i++) {
								/*
								if(i == str){
									document.getElementById(bathstotal[i]).checked = true;
									document.getElementById('min-bath').value = str;
								}
								else{
									document.getElementById(bathstotal[i]).checked = false;
								}
								
								if(i == str){
									document.getElementById(bathstotal2[i]).checked = true;
									document.getElementById('max-bath').value = str+1;
								}
								else if(i == str +1){
									document.getElementById(bathstotal2[i]).checked = true;
								}
								else{
									document.getElementById(bathstotal2[i]).checked = false;
								}
								
								*/
								
								
								
								if(i == str){
										document.getElementById(bathstotal[i]).checked = true;
										document.getElementById('min-bath').value = str;
									}
									else{
										document.getElementById(bathstotal[i]).checked = false;
									}
									
									if(i == str){
										document.getElementById(bathstotal2[i]).checked = true;
										document.getElementById(bathstotal2[i]).readOnly = false;
										document.getElementById('max-bath').value = str+1;
									}
									else if(i == str +1){
										var min_value = str;
										var max_value = str +1;
										document.getElementById(bathstotal2[i]).checked = true;
										document.getElementById('totalbaths').innerHTML = min_value+"-"+ max_value;
										document.getElementById(bathstotal2[i]).readOnly = false;
									}
									else if(i < str){
										document.getElementById(bathstotal2[i]).readOnly = true;
										//$(bathstotal2[i]).css('border','0 none transparent');
										//pointer-events: none
										
									}
									else{
										document.getElementById(bathstotal2[i]).checked = false;
										document.getElementById(bathstotal2[i]).readOnly = false;
									}
								
							
								
								
								
								
								
								
							}
						}
						else{
							for (i = 0; i <= 7; i++) {
								document.getElementById(bathstotal[i]).checked = false;
								document.getElementById(bathstotal2[i]).checked = false;
							}
							document.getElementById('min-bath').value = 'Min';
							document.getElementById('max-bath').value = 'Max';
						}
						
						
						myFunction();
						$("#form_reset").addClass("btnactive");
					}
					
					function bathselect2(str){
						//alert(str);
						var str = Number(str);
						var selected = str;
						
						var bathstotal2 = ["filterbaths10", "filterbaths11", "filterbaths12", "filterbaths13", "filterbaths14", "filterbaths15", "filterbaths16", "filterbaths17", "filterbaths18"];
						var bathstotal = ["filterbaths1", "filterbaths2", "filterbaths3", "filterbaths4", "filterbaths5", "filterbaths6", "filterbaths7", "filterbaths8", "filterbaths9"];
						
						/*
						if (document.getElementById(bathstotal2[selected]).checked == true) {
							for (i = 1; i <= 8; i++) {
								if(i == str){
									document.getElementById(bathstotal2[i]).checked = true;
									document.getElementById('max-bath').value = str;
								}
								else{
									document.getElementById(bathstotal2[i]).checked = false;
								}
								
								if(i == str){
									document.getElementById(bathstotal[i]).checked = true;
									document.getElementById('min-bath').value = str-1;
								}
								else if(i == str -1){
									document.getElementById(bathstotal[i]).checked = true;
								}
								else{
									document.getElementById(bathstotal[i]).checked = false;
								}
							}
						}
						else{
							for (i = 1; i <= 8; i++) {
								document.getElementById(bathstotal[i]).checked = false;
								document.getElementById(bathstotal2[i]).checked = false;
							}
							document.getElementById('min-bath').value = 'Min';
							document.getElementById('max-bath').value = 'Max';
						}
						*/
						
						
						
						
						
						if (document.getElementById(bathstotal2[selected]).checked == true) {
							var maxnumberbed = 0;
							for (i = 0; i <= 7; i++) {
								if(i == str){
									//document.getElementById(bathstotal2[i]).checked = true;
									//document.getElementById('max-bed').value = str;
									
								}
								else{
									//document.getElementById(bathstotal2[i]).checked = false;
								}
								
								if(i == str){
									//document.getElementById(bathstotal[i]).checked = true;
									//document.getElementById('min-bed').value = str-1;
								}
								else if(i == str -1){
									//document.getElementById(bathstotal[i]).checked = true;
								}
								else{
									//document.getElementById(bathstotal[i]).checked = false;
								}
								
								var checkboxval = document.getElementById(bathstotal2[i]).value;
								
								if(document.getElementById(bathstotal2[i]).checked == true){
									if(checkboxval > maxnumberbed){
										maxnumberbed = checkboxval;
									}
								}
								
							}
							var min_value = document.getElementById('min-bath').value;
							document.getElementById('totalbaths').innerHTML = min_value+"-"+ maxnumberbed;
							//alert(maxnumberbed);
						}
						else{
							var maxnumberbed = 0;
							for (i = 0; i <= 7; i++) {
								var checkboxval = document.getElementById(bathstotal2[i]).value;
								
								if(document.getElementById(bathstotal2[i]).checked == true){
									if(checkboxval > maxnumberbed){
										maxnumberbed = checkboxval;
										//alert(maxnumberbed);
									}
								}
							}
							
							var min_value = document.getElementById('min-bath').value;
							document.getElementById('totalbaths').innerHTML = min_value+"-"+ maxnumberbed;
						}
						
						
						
						if (document.getElementById(bathstotal2[selected]).readOnly === false) {
							myFunction();
							$("#form_reset").addClass("btnactive");
						}
					}
					</script>
					<li><a href="#">BATHS <span id="totalbaths">0+</span></a>
						<ul>
							<div class="fixedscroll">
								<li>
									<input type="text" id="min-bath"  class="filtertxt" value="Min"> &nbsp;&nbsp;&nbsp; <input type="text" id="max-bath"  class="filtertxt" value="Max">
									<div class="clear10"></div>
									<div class="filterdvs">
										<input type="checkbox" name="chkbox" onclick="bathselect(this.value)" value="0" id="filterbaths1" class="sidefilter"> <label for="filterbaths1">0</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect(this.value)" value="1" id="filterbaths2" class="sidefilter"> <label for="filterbaths2">1</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect(this.value)" value="2" id="filterbaths3" class="sidefilter"> <label for="filterbaths3">2</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect(this.value)" value="3" id="filterbaths4" class="sidefilter"> <label for="filterbaths4">3</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect(this.value)" value="4" id="filterbaths5" class="sidefilter"> <label for="filterbaths5">4</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect(this.value)" value="5" id="filterbaths6" class="sidefilter"> <label for="filterbaths6">5</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect(this.value)" value="6" id="filterbaths7" class="sidefilter"> <label for="filterbaths7">6</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect(this.value)" value="7" id="filterbaths8" class="sidefilter"> <label for="filterbaths8">7</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect(this.value)" value="8" id="filterbaths9" class="sidefilter"> <label for="filterbaths9">8</label><br/>
									</div>
									
									<div class="filterdvs">
										<input type="checkbox" name="chkbox" onclick="bathselect2(this.value)" value="0" id="filterbaths10" class="sidefilter"> <label for="filterbaths10">0</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect2(this.value)" value="1" id="filterbaths11" class="sidefilter"> <label for="filterbaths11">1</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect2(this.value)" value="2" id="filterbaths12" class="sidefilter"> <label for="filterbaths12">2</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect2(this.value)" value="3" id="filterbaths13" class="sidefilter"> <label for="filterbaths13">3</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect2(this.value)" value="4" id="filterbaths14" class="sidefilter"> <label for="filterbaths14">4</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect2(this.value)" value="5" id="filterbaths15" class="sidefilter"> <label for="filterbaths15">5</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect2(this.value)" value="6" id="filterbaths16" class="sidefilter"> <label for="filterbaths16">6</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect2(this.value)" value="7" id="filterbaths17" class="sidefilter"> <label for="filterbaths17">7</label><br/>
										<input type="checkbox" name="chkbox" onclick="bathselect2(this.value)" value="8" id="filterbaths18" class="sidefilter"> <label for="filterbaths18">8</label><br/>
									</div>
								</li>
							</div>
						</ul>
					</li>
					<script>
					function sizeselect(str){
						
						var selected = str;
						
						var sizetotal2 = ["filtersize10", "filtersize11", "filtersize12", "filtersize13", "filtersize14", "filtersize15", "filtersize16", "filtersize17", "filtersize18"];
						var sizetotal = ["filtersize1", "filtersize2", "filtersize3", "filtersize4", "filtersize5", "filtersize6", "filtersize7", "filtersize8", "filtersize9"];
						
						if (document.getElementById(sizetotal[selected]).checked == true) {
							for (i = 1; i <= 8; i++) {
								if(i == str){
									document.getElementById(sizetotal[i]).checked = true;
									document.getElementById('min-size').value = document.getElementById(sizetotal[i]).value;
								}
								else{
									document.getElementById(sizetotal[i]).checked = false;
								}
								
								if(i == str){
									document.getElementById(sizetotal2[i]).checked = true;
									document.getElementById('max-size').value = document.getElementById(sizetotal2[str+1]).value;
								}
								else if(i == str +1){
									document.getElementById(sizetotal2[i]).checked = true;
								}
								else{
									document.getElementById(sizetotal2[i]).checked = false;
								}
							}
						}
						else{
							for (i = 1; i <= 8; i++) {
								document.getElementById(sizetotal[i]).checked = false;
								document.getElementById(sizetotal2[i]).checked = false;
							}
							document.getElementById('min-size').value = 'Min';
							document.getElementById('max-size').value = 'Max';
						}
						
						
						myFunction();
						$("#form_reset").addClass("btnactive");
					}
					
					function sizeselect2(str){
						
						//alert(str);
						var selected = str;
						
						var sizetotal2 = ["filtersize10", "filtersize11", "filtersize12", "filtersize13", "filtersize14", "filtersize15", "filtersize16", "filtersize17", "filtersize18"];
						var sizetotal = ["filtersize1", "filtersize2", "filtersize3", "filtersize4", "filtersize5", "filtersize6", "filtersize7", "filtersize8", "filtersize9"];
						
						
						if (document.getElementById(sizetotal2[selected]).checked == true) {
							for (i = 1; i <= 8; i++) {
								if(i == str){
									document.getElementById(sizetotal2[i]).checked = true;
									document.getElementById('max-size').value = document.getElementById(sizetotal2[str]).value;
								}
								else{
									document.getElementById(sizetotal2[i]).checked = false;
								}
								
								if(i == str){
									document.getElementById(sizetotal[i]).checked = true;
									document.getElementById('min-size').value = document.getElementById(sizetotal[str-1]).value;
								}
								else if(i == str -1){
									document.getElementById(sizetotal[i]).checked = true;
								}
								else{
									document.getElementById(sizetotal[i]).checked = false;
								}
							}
						}
						else{
							for (i = 1; i <= 8; i++) {
								document.getElementById(sizetotal[i]).checked = false;
								document.getElementById(sizetotal2[i]).checked = false;
							}
							document.getElementById('min-size').value = 'Min';
							document.getElementById('max-size').value = 'Max';
						}
						
						
						myFunction();
						$("#form_reset").addClass("btnactive");
					}
					</script>
					<li><a href="#">SIZE</a>
						<ul>
							<div class="fixedscroll moregap">
								<li>
									<input type="text" id="min-size"  class="filtertxt" value="Min"> &nbsp;&nbsp;&nbsp; <input type="text"  id="max-size" class="filtertxt" value="Max">
									<div class="clear10"></div>
									<div class="filterdvs">
										<input type="checkbox" name="chkbox" onclick="sizeselect(0)" value="0" id="filtersize1" class="sidefilter"> <label for="filtersize1">0</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect(1)" value="1000" id="filtersize2" class="sidefilter"> <label for="filtersize2">1,000</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect(2)" value="2000" id="filtersize3" class="sidefilter"> <label for="filtersize3">2,000</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect(3)" value="3000" id="filtersize4" class="sidefilter"> <label for="filtersize4">3,000</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect(4)" value="4000" id="filtersize5" class="sidefilter"> <label for="filtersize5">4,000</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect(5)" value="5000" id="filtersize6" class="sidefilter"> <label for="filtersize6">5,000</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect(6)" value="6000" id="filtersize7" class="sidefilter"> <label for="filtersize7">6,000</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect(7)" value="7000" id="filtersize8" class="sidefilter"> <label for="filtersize8">7,000</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect(8)" value="8000" id="filtersize9" class="sidefilter"> <label for="filtersize9">8,000</label><br/>
									</div>
									
									<div class="filterdvs">
										<input type="checkbox" name="chkbox" onclick="sizeselect2(0)" value="0" id="filtersize10" class="sidefilter"> <label for="filtersize10">0</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect2(1)" value="1000" id="filtersize11" class="sidefilter"> <label for="filtersize11">1,000</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect2(2)" value="2000" id="filtersize12" class="sidefilter"> <label for="filtersize12">2,000</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect2(3)" value="3000" id="filtersize13" class="sidefilter"> <label for="filtersize13">3,000</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect2(4)" value="4000" id="filtersize14" class="sidefilter"> <label for="filtersize14">4,000</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect2(5)" value="5000" id="filtersize15" class="sidefilter"> <label for="filtersize15">5,000</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect2(6)" value="6000" id="filtersize16" class="sidefilter"> <label for="filtersize16">6,000</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect2(7)" value="7000" id="filtersize17" class="sidefilter"> <label for="filtersize17">7,000</label><br/>
										<input type="checkbox" name="chkbox" onclick="sizeselect2(8)" value="8000" id="filtersize18" class="sidefilter"> <label for="filtersize18">8,000</label><br/>
									</div>
								</li>
							</div>
						</ul>
					</li>
					<li><a href="#">VIEW</a>
						<ul class="listsview">
							<div class="fixedscroll">
								<li><input type="checkbox" name="view[]" onclick="active_reset()" id="filterview1" class="sidefilter"><label for="filterview1">Community (100)</label></li>
								<li><input type="checkbox" name="view[]" onclick="active_reset()" id="filterview2" class="sidefilter"><label for="filterview2">Cityscape (150)</label></li>
								<li><input type="checkbox" name="view[]" onclick="active_reset()" id="filterview3" class="sidefilter"><label for="filterview3">Skyscrapers (170)</label></li>
								<li><input type="checkbox" name="view[]" onclick="active_reset()" id="filterview4" class="sidefilter"><label for="filterview4">Swimming pool (195)</label></li>
								<li><input type="checkbox" name="view[]" onclick="active_reset()" id="filterview5" class="sidefilter"><label for="filterview5">Sea (220)</label></li>
								<li><input type="checkbox" name="view[]" onclick="active_reset()" id="filterview6" class="sidefilter"><label for="filterview6">Fountain (160)</label></li>
								<li><input type="checkbox" name="view[]" onclick="active_reset()" id="filterview7" class="sidefilter"><label for="filterview7">Community (140)</label></li>
								<li><input type="checkbox" name="view[]" onclick="active_reset()" id="filterview8" class="sidefilter"><label for="filterview8">Cityscape (110)</label></li>
								<li><input type="checkbox" name="view[]" onclick="active_reset()" id="filterview9" class="sidefilter"><label for="filterview9">Skyscrapers (190)</label></li>
								<li><input type="checkbox" name="view[]" onclick="active_reset()" id="filterview10" class="sidefilter"><label for="filterview10">Swimming pool (85)</label></li>
								<li><input type="checkbox" name="view[]" onclick="active_reset()" id="filterview11" class="sidefilter"><label for="filterview11">Sea (65)</label></li>
								<li><input type="checkbox" name="view[]" onclick="active_reset()" id="filterview12" class="sidefilter"><label for="filterview12">Fountain (105)</label></li>
							</div>
						</ul>
					</li>
					<li><a href="#">AMENITIES</a>
						<ul class="listsamenities">
							<div class="fixedscroll">
								<li><input type="checkbox" name="amenities[]" onclick="active_reset()" id="aminity1" class="sidefilter"><label for="aminity1">Balcony</label></li>
								<li><input type="checkbox" name="amenities[]" onclick="active_reset()" id="aminity2" class="sidefilter"><label for="aminity2">Built-in Kitchen Appliances</label></li>
								<li><input type="checkbox" name="amenities[]" onclick="active_reset()" id="aminity3" class="sidefilter"><label for="aminity3">Central A/C & Heating</label></li>
								<li><input type="checkbox" name="amenities[]" onclick="active_reset()" id="aminity4" class="sidefilter"><label for="aminity4">Concierge Service</label></li>
								<li><input type="checkbox" name="amenities[]" onclick="active_reset()" id="aminity5" class="sidefilter"><label for="aminity5">Covered Parking</label></li>
								<li><input type="checkbox" name="amenities[]" onclick="active_reset()" id="aminity6" class="sidefilter"><label for="aminity6">Maid Service</label></li>
								<li><input type="checkbox" name="amenities[]" onclick="active_reset()" id="aminity7" class="sidefilter"><label for="aminity7">Maid's Room</label></li>
								<li><input type="checkbox" name="amenities[]" onclick="active_reset()" id="aminity8" class="sidefilter"><label for="aminity8">Pets Allowed</label></li>
								<li><input type="checkbox" name="amenities[]" onclick="active_reset()" id="aminity9" class="sidefilter"><label for="aminity9">Maid Service</label></li>
								<li><input type="checkbox" name="amenities[]" onclick="active_reset()" id="aminity10" class="sidefilter"><label for="aminity10">Maid's Room</label></li>
								<li><input type="checkbox" name="amenities[]" onclick="active_reset()" id="aminity11" class="sidefilter"><label for="aminity11">Pets Allowed</label></li>
							</div>
						</ul>
					</li>
					<li><a href="#">REAL ESTATE AGENCIES</a>
						<ul class="agenciespos">
							<div class="fixedscroll">
								<li><input type="checkbox" name="agencies[]" onclick="active_reset()" id="estate1" class="sidefilter"><label for="estate1">Lychee Island RE</label></li>
								<li><input type="checkbox" name="agencies[]" onclick="active_reset()" id="estate2" class="sidefilter"><label for="estate2">Friendly Rock Real Estate</label></li>
								<li><input type="checkbox" name="agencies[]" onclick="active_reset()" id="estate3" class="sidefilter"><label for="estate3">Lychee Island RE</label></li>
								<li><input type="checkbox" name="agencies[]" onclick="active_reset()" id="estate4" class="sidefilter"><label for="estate4">Wandering Hills</label></li>
								<li><input type="checkbox" name="agencies[]" onclick="active_reset()" id="estate5" class="sidefilter"><label for="estate5">Vista Baja Real Estate</label></li>
								<li><input type="checkbox" name="agencies[]" onclick="active_reset()" id="estate6" class="sidefilter"><label for="estate6">Lychee Island RE</label></li>
								<li><input type="checkbox" name="agencies[]" onclick="active_reset()" id="estate7" class="sidefilter"><label for="estate7">Friendly Rock Real Estate</label></li>
								<li><input type="checkbox" name="agencies[]" onclick="active_reset()" id="estate8" class="sidefilter"><label for="estate8">Lychee Island RE</label></li>
								<li><input type="checkbox" name="agencies[]" onclick="active_reset()" id="estate9" class="sidefilter"><label for="estate9">Wandering Hills</label></li>
								<li><input type="checkbox" name="agencies[]" onclick="active_reset()" id="estate10" class="sidefilter"><label for="estate10">Vista Baja Real Estate</label></li>
							</div>
						</ul>
					</li>
					<li><a href="#">DEVELOPERS</a>
						<ul class="developerspos">
							<div class="fixedscroll">
								<li><input type="checkbox" name="developer[]" onclick="active_reset()" id="developer1" class="sidefilter"><label for="developer1">Rambutan Bay Developers</label></li>
								<li><input type="checkbox" name="developer[]" onclick="active_reset()" id="developer2" class="sidefilter"><label for="developer2">Holly Estates Developers</label></li>
								<li><input type="checkbox" name="developer[]" onclick="active_reset()" id="developer3" class="sidefilter"><label for="developer3">Mesa Azul Development</label></li>
								<li><input type="checkbox" name="developer[]" onclick="active_reset()" id="developer4" class="sidefilter"><label for="developer4">Rambutan Bay Developers</label></li>
								<li><input type="checkbox" name="developer[]" onclick="active_reset()" id="developer5" class="sidefilter"><label for="developer5">Rancho Conejo Developers</label></li>
								<li><input type="checkbox" name="developer[]" onclick="active_reset()" id="developer6" class="sidefilter"><label for="developer6">Holly Estates Developers</label></li>
								<li><input type="checkbox" name="developer[]" onclick="active_reset()" id="developer7" class="sidefilter"><label for="developer7">Holly Estates Developers</label></li>
								<li><input type="checkbox" name="developer[]" onclick="active_reset()" id="developer8" class="sidefilter"><label for="developer8">Mesa Azul Development</label></li>
								<li><input type="checkbox" name="developer[]" onclick="active_reset()" id="developer8" class="sidefilter"><label for="developer8">Rambutan Bay Developers</label></li>
								<li><input type="checkbox" name="developer[]" onclick="active_reset()" id="developer8" class="sidefilter"><label for="developer8">Rancho Conejo Developers</label></li>
							</div>
						</ul>
					</li>
					<li><a href="#">TITLE</a></li>
					<li><a href="#">SUMMARY DESCRIPTION</a></li>
				</ul>
				<input type="submit" id="formsubmitbtn" name="submit" value="Submit" style="display:none;">
				</form>
				
			</div>
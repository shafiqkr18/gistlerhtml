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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
		<script>
            // When the document is ready
            $(document).ready(function () {
                //validation rules
                //by default it will append a <label class="error> element to the invalid input
                //and will add a "error" class to the input
                $("#form-login").validate({
                    rules: {
                        "example1-email": {
                            required: true
                        },  
                        "example1-password": {
                            required: true
                        } 
                    }
                });
				
				$("#form-signup").validate({
                    rules: {
                        "username": {
                            required: true
                        },  
                        "email": {
                            required: true,
							email: true
                        },  
                        "re-email": {
							required: true,
							equalTo: "#email"
						},  
                        "password": {
                            required: true
                        },  
                        "re-password": {
                            required: true,
							equalTo: "#password"
                        }
						
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
<section class="headertop needhead homepage" id="header-section">

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
		<div class="">
			<div class="hero-unit text-center">
				<!--LOGO-->
				<div class="logo">
					<h3>WELCOME TO</h3>
					<a href="index.php" title="GISTLER">
						<img src="images/Logo.png" alt="logo"/>
					</a>
				</div>
				<!--/ LOGO-->
				
					<div class="inner-wrap-hero">
					
						<div class="searchbox">
							
							<div class="form-body">
								<div class="span12">
									<?php
									if(isset($_GET['example1-email']) || isset($_GET['email'])){
									?>
									<script>
										function hidepopup(){
											document.getElementById('light').style.display='none';
											document.getElementById('fade').style.display='none';
										}
									</script>
									<div id="light" class="white_content"> <a href = "javascript:void(0)" onclick="hidepopup();">X</a>
										<h3>Thank You</h3>
										<p>You will be contacted by the bank soon</p>
									</div>
									<div id="fade" class="black_overlay" onclick="hidepopup();"></div>
									<?php
									}
									?>
									
									<div class="tabs">
										<div class="tab logintab">
										   <input type="radio" id="tab-1" name="tab-group-1" <?php if(isset($_GET['id']) && ($_GET['id'] == 0)){echo'checked';}else{echo 'checked';} ?>>
										   <label for="tab-1" class="switchtab1">SIGN IN </label>
										   <div class="clear"></div>
										   <div class="content loginform">
												<form method="get" action="" id="form-login">
												   <input type="text" id="example1-email" name="example1-email"  class="form-control txtform" placeholder="Enter your email or username">
													<input type="password" id="example1-password" name="example1-password" class="form-control txtform" placeholder="Enter your password">
													<div class="clear10"></div>
													
													<div class="halfdv rememberdv">
														<input type="checkbox" id="remember" class="remember" name="remember"> <label for="remember">Remember Me</label><br/>
														<a href="#">Don't know your password?</a>
													</div>
													
													<div class="halfdv">
														<input type="submit" class="btn-login" value="SIGN IN">
													</div>
												</form>
												<div class="clear"></div>
												<div class="clear10"></div>
												<div class="socialdv">
													<h4><img src="images/social-media-line.png" width="100%"></h4>
													<a href="#" target="_blank"><img src="images/social-facebook.png"></a>
													<a href="#" target="_blank"><img src="images/social-twitter.png"></a>
													<a href="#" target="_blank"><img src="images/social-linkedin.png"></a>
													<a href="#" target="_blank"><img src="images/social-googleplus.png"></a>
												</div>
										   </div>
											<div class="clear"></div>
									   </div>
										
									   <div class="tab logintab">
										   <input type="radio" id="tab-2" name="tab-group-1" <?php if(isset($_GET['id']) && ($_GET['id'] == 1)){echo'checked';} ?>>
										   <label for="tab-2" class="switchtab2">NEW ACCOUNT</label>
										   
										   <div class="content loginform2">
												<form method="get" action="" id="form-signup">
												   <input type="text" id="username" name="username"  class="form-control txtform2"  placeholder="Username">
													
													
													<div class="clear"></div>
													<div class="halfdv rememberdv">
														<input type="email" name="email" id="email" class="form-control txtform" placeholder="Enter your email">
													</div>
													
													<div class="halfdv rightdv">
														<input type="email" name="re-email" id="re-email" class="form-control txtform" placeholder="Re - Enter your email">
													</div>
													<div class="clear"></div>
													<div class="halfdv rememberdv">
														<input type="password" name="password" id="password" class="form-control txtform" placeholder="Enter your password">
													</div>
													
													<div class="halfdv rightdv">
														<input type="password" name="re-password" id="re-password" class="form-control txtform" placeholder="Re - Enter your password">
													</div>
													
													<div class="clear"></div>
													<div class="halfdv1 rememberdv">
														<input type="checkbox" class="remember" id="remember2" name="remember"> <label for="remember2">I am a licensed professional</label><br/>
														By clicking submit, you agree to GISTLER's <a href="#">Terms of Use</a>
													</div>
													<div class="halfdv2 rememberdv">
														<input type="submit" class="btn-login" value="SUBMIT">
													</div>
												</form>
												<div class="clear"></div>
												<div class="clear10"></div>
												<div class="socialdv">
													<h4><img src="images/social-media-line.png" style="width:100%;"></h4>
													
													
													<a href="#" target="_blank"><img src="images/social-facebook.png"></a>
													<a href="#" target="_blank"><img src="images/social-twitter.png"></a>
													<a href="#" target="_blank"><img src="images/social-linkedin.png"></a>
													<a href="#" target="_blank"><img src="images/social-googleplus.png"></a>
												</div>
												<br/>
										   </div> 
										   <div class="clear"></div>
									   </div>
										<div class="clear"></div>
										
									</div>
									
									<div class="clear10"></div>
									
									
									
								</div>
								
								
								<div class="clear clear10"></div>
								
								 
								
								
								<div class="clear"></div>
								<br/><br/><br/>
							</div>
						</div>
						
					</div>
				<!--<hr class="half">-->
			
			
			</div>	
		</div><!-- / HERO UNIT-->
	</div><!-- / HERO WRAP-->
</header><!-- / HEADER MARKETING SLOGAN container-->
			
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
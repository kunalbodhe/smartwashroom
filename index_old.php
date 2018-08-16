
<?php
 include("dbconnect.php");
 // $connect=mysqli_connect("localhost:3306","root","","pune");
session_start();
$_SESSION['username']="nil";
 if (isset($_POST['submit']))
 {
 	$city=$_POST['user'];
 	$pwd=$_POST['pwd'];
 	$title=$_POST['check'];

		if($title=="aai")
			{
				// echo"<p>Please enter all the field</p>";
				$sql="SELECT * FROM login where username='$city' and password='$pwd' and title='$title';";
 		 	$res= mysqli_query($connect,$sql);
			  if(mysqli_num_rows($res)>0)
			  {
			 	echo"<p>Login sucessful</p>";
			 	$_SESSION['username']=$city;
		 		 header('Location: city.php');	
			 }
			else
				{
					echo"<p>Login failed</p>";
				}		
			}
		elseif ($title=="airport") 
			# code...
		
			// if($user=="kunal" && $pwd=="kunal")
		{
	 	  	$sql="SELECT * FROM login where username='$city' and password='$pwd' and title='$title';";
 		 	$res= mysqli_query($connect,$sql);
			  if(mysqli_num_rows($res)>0)
			  {
			 	echo"<p>Login sucessful</p>";
			 	$_SESSION['username']=$city;
		 		 header('Location:mainds.php');	
			 }
			else
				{
					echo"<p>Login failed</p>";
				}	
		}
  }		
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>smart washroom system</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="smart washroom," />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Shadows+Into+Light+Two&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Cinzel" rel="stylesheet"> 

<!-- team -->

  
   <link rel="stylesheet" href="css/team2.css" type="text/css" media="all" /> 
  
<!-- end team -->

<style type="text/css">
	
	/*animation code*/

			*{box-sizing:border-box}
	:before,:after{box-sizing:border-box}
			
	/*css*/
	.wrap{perspective:1000px;
		  perspective-origin:50% 50%}

 .cube{position:relative;
 		height:120px;
 		width:120px;
 		transform-style:preserve-3d;
 		margin:0 auto}

 .cube>div{position:absolute;
 		  height:100px;width:100px;  
 		  padding:20px;
 		  opacity:.9;
 		  background:#fff;
 		  background-position:center center;
 		  border:1px solid #ccc}

 .cube>div img{width:100%}
  .cube .front{
  				transform:translateZ(50px);
  				background-size:100px}
   .cube .back{ transform:rotateY(90deg) translateZ(50px);
   				background-size:100px}
    .cube .top{
    			transform:rotateY(180deg) translateZ(50px);
    			background-repeat:no-repeat;
    			background-size:100px}
 .cube .bottom{
 				transform:rotateY(-90deg) translateZ(50px);
 				background-repeat:no-repeat;background-size:100px}
  .cube .right{
  				transform:rotateX(-90deg) translateZ(50px) rotate(180deg);
  				background-repeat:no-repeat;background-size:100px}
   .cube .left{
			   	transform:rotateX(90deg) translateZ(50px);
			   	background-repeat:no-repeat;text-align:center;
			   	background-size:100px}
 
 @keyframes spinningH{from
 						{transform:rotateX(0deg) rotateY(0deg)}
 					  to{transform:rotateX(360deg) rotateY(360deg)}}
 .animate{ 
 			 animation:spinningH 6s infinite linear}

 .animate1{
 			animation:spinningH 6s infinite linear .1s}

 .animate2{
 		   animation:spinningH 6s infinite linear .2s}
 .animate3{
 			animation:spinningH 6s infinite linear .3s}
 
 #technology_spec{padding:60px 0}	
	/*end animation code*/

	.log { width: 300px; 
		   height: 50px;
		   margin-left: -50px; 
		   border-radius: 5px;
		   margin-bottom: 5px;
		   border: 1px solid #eee;
		   background: none;
		   
		 }
		 .log:hover{font-weight: bold;}
/*preloader*/
			* {
  
  box-sizing: border-box;
}
section.wrapper {
  padding: 0px 0;
  
}
section.wrapper.dark {
  background: #313134;
}
div.spinner {
  
  animation: rotate 10s infinite linear;
  position: relative;
  display: block;
  margin: auto;
  width: 142px;
  height: 142px;
}
div.spinner i {
  
  animation: rotate 3s infinite cubic-bezier(0.09, 0.6, 0.8, 0.03);
  
  transform-origin: 50% 100% 0;
  position: absolute;
  display: inline-block;
  top: 50%;
  left: 50%;
  border: solid 6px transparent;
  border-bottom: none;
}
div.spinner i:nth-child(1) {
  animation-timing-function: cubic-bezier(0.09, 0.3, 0.12, 0.03);
  width: 44px;
  height: 22px;
  margin-top: -22px;
  margin-left: -22px;
  border-color: #2172b8;
  border-top-left-radius: 36px;
  border-top-right-radius: 36px;
}
div.spinner i:nth-child(2) {
  animation-timing-function: cubic-bezier(0.09, 0.6, 0.24, 0.03);
  width: 58px;
  height: 29px;
  margin-top: -29px;
  margin-left: -29px;
  border-color: #18a39b;
  border-top-left-radius: 42px;
  border-top-right-radius: 42px;
}
div.spinner i:nth-child(3) {
  animation-timing-function: cubic-bezier(0.09, 0.9, 0.36, 0.03);
  width: 72px;
  height: 36px;
  margin-top: -36px;
  margin-left: -36px;
  border-color: #82c545;
  border-top-left-radius: 48px;
  border-top-right-radius: 48px;
}
div.spinner i:nth-child(4) {
  animation-timing-function: cubic-bezier(0.09, 1.2, 0.48, 0.03);
  width: 86px;
  height: 43px;
  margin-top: -43px;
  margin-left: -43px;
  border-color: #f8b739;
  border-top-left-radius: 54px;
  border-top-right-radius: 54px;
}
div.spinner i:nth-child(5) {
  animation-timing-function: cubic-bezier(0.09, 1.5, 0.6, 0.03);
  width: 100px;
  height: 50px;
  margin-top: -50px;
  margin-left: -50px;
  border-color: #f06045;
  border-top-left-radius: 60px;
  border-top-right-radius: 60px;
}
div.spinner i:nth-child(6) {
  animation-timing-function: cubic-bezier(0.09, 1.8, 0.72, 0.03);
  width: 114px;
  height: 57px;
  margin-top: -57px;
  margin-left: -57px;
  border-color: #ed2861;
  border-top-left-radius: 66px;
  border-top-right-radius: 66px;
}
div.spinner i:nth-child(7) {
  animation-timing-function: cubic-bezier(0.09, 2.1, 0.84, 0.03);
  width: 128px;
  height: 64px;
  margin-top: -64px;
  margin-left: -64px;
  border-color: #c12680;
  border-top-left-radius: 72px;
  border-top-right-radius: 72px;
}
div.spinner i:nth-child(8) {
  animation-timing-function: cubic-bezier(0.09, 2.4, 0.96, 0.03);
  width: 142px;
  height: 71px;
  margin-top: -71px;
  margin-left: -71px;
  border-color: #5d3191;
  border-top-left-radius: 78px;
  border-top-right-radius: 78px;
}

@keyframes rotate {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

div.wthree_offer_grid1:hover, div.wthree_offer_grid1:active{background: rgba(0,0,0,0.8);}

		 /**{border: 1px solid black;}*/

#wrapper{z-index:10;width: 100%; height: 750px;}	

.choose{ padding: 20px; color: white; text-align: center;width: 90% }	
.drop{background: none; color: grey; width: 125%; padding: 10px; margin-left: -20%; border-radius:5px; border-radius: 3px;margin-bottom: 3px;}
table.choose{}
</style>
</head>
	
<body>

<!-- preloader -->
<div id="wrapper">
<table  style="margin-left: 42%; margin-top: 10%">
	<tr><td colspan="1"><section style="margin-left: 40%;padding: 40px;">
  <div class="spinner">
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
  </div>
</section></td></tr>
	<tr><td><section>
  <div class="spinner">
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
  </div>
</section></td><td><section>
  <div class="spinner">
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
  </div>
</section></td></tr>
</table>
<script type="text/javascript">	
	var wrapper=document.getElementById("wrapper");
	window.addEventListener('load',function(){
		wrapper.style.display='none';
	});
</script>
</div>
<!--// preloader -->
<!-- //preloader -->

<!-- banner -->
	<div class="banner">
		<div class="container">	
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html">SMART <span>WASHROOM </span></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
							<ul class="nav navbar-nav link-effect-14" id="link-effect-14">
								<li class="active"><a href="index.html"><span>Home</span></a></li>
								<li><a href="#services"><span>Services</span></a></li>
								<li><a href="#gallery"><span>Gallery</span></a></li>
								<li class="dropdown">
								<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Short Codes</span><b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Web Icons</a></li>
									<li><a href="typography.html">Typography</a></li>
								</ul> -->
							</li>
								<li><a href="#" data-toggle="modal" data-target="#myModal1"><span>Dashboard</span></a></li>
								<li><a href="#contact"><span>Mail Us</span></a></li>
							</ul>
							<div class="agileinfo_social_icons">
							<ul class="agileits_social_list">
								<!-- <li><a href="#">DASHBOARD >></a></li> -->
								 <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</nav>	
				</div>
			</nav>
			<!-- <div class="w3_agile_banner_info">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="agile_banner_info_grid">
									<p>01.</p>
									<div class="agile_banner_info_grid_pos">
										<p><span>This year I’ve</span> completed more complex design projects.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="agile_banner_info_grid">
									<p>02.</p>
									<div class="agile_banner_info_grid_pos">
										<p><span>This year I’ve</span> completed more complex design projects.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="agile_banner_info_grid">
									<p>03.</p>
									<div class="agile_banner_info_grid_pos">
										<p><span>This year I’ve</span> completed more complex design projects.</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>			
			</div> -->
		</div>
	</div>
<!-- //banner -->
<!-- welcome -->
 	<div class="welcome">
		  <div class="container">
				<div class="ab-w3l-spa">
					<label class="wel"></label>
					<h2 class="w3ls_head" style="color: black;">Welcome</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ever since the 1500s.Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores hasellusMaecenas ac hendrerit purus. Lorem ipsum dolor sit amet.Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> 
					<div class="agileits_w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
					</div>
				</div>
		   </div>
    </div>
<!-- //welcome -->
<!-- product -->
	<div class="cruise-w3-agile">
		
		<div class="clearfix"></div>
	</div>
<!-- //product -->

<!-- services -->
	<!-- <div class="banner-bottom" id="services">
		<div class="container">
			<div class="agileits_heading_section">
				<label class="wel"></label>
				<h2 class="w3ls_head">Our Special Services</h2>
				</div>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agileits_services_grid">
					<h3>Web Development</h3>
					<p>Vivamus hendrerit non mauris eget consectetur. Sed placerat metus vitae nisi 
						porttitor tristique. Sed iaculis dolor posuere posuere tincidunt.</p>
					<div class="w3_agile_services_grid1">
						<img src="images/g10.jpg" alt=" " class="img-responsive" />
						<div class="w3_blur"></div>
					</div>
					<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">Learn More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-4 agileits_services_grid">
					<h3>Android Development</h3>
					<p>Vivamus hendrerit non mauris eget consectetur. Sed placerat metus vitae nisi 
						porttitor tristique. Sed iaculis dolor posuere posuere tincidunt.</p>
					<div class="w3_agile_services_grid1">
						<img src="images/g11.jpg" alt=" " class="img-responsive" />
						<div class="w3_blur"></div>
					</div>
					<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">Learn More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-4 agileits_services_grid">
					<h3>IOT Services</h3>
					<p>Vivamus hendrerit non mauris eget consectetur. Sed placerat metus vitae nisi 
						porttitor tristique. Sed iaculis dolor posuere posuere tincidunt.</p>
					<div class="w3_agile_services_grid1">
						<img src="images/g12.jpg" alt=" " class="img-responsive" />
						<div class="w3_blur"></div>
					</div>
					<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">Learn More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> -->
<!-- //services -->	
<!-- offer -->
	<div class="offer">
		<div class="container">
			<div class="agileits_heading_section">
				<label class="wel"></label>
				<h3 class="w3ls_head">OUR SPECIAL SERVICES</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agile_offer_grid">
					
					<div class="wthree_offer_grid1" style="border: 1px solid white;">
						
						<div class="w3layouts_more">
						<h4>WEB DEVELOPMENT</h4>
						</div>
						<hr>
						<p class="w3_agileits_service_para">
							<img src="images/web.png" class="pic" style="width: 200px; height: 200px; margin-left: 20%; margin-top: 30px; margin-bottom: 30px;">
						</p>
					
					<div class="w3layouts_more" style="border: 1px solid white;">
						<a href="#">Know More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					</div>
				</div>
				<div class="col-md-4 agile_offer_grid">
					
					<div class="wthree_offer_grid1" style="border: 1px solid white;">
						
						<div class="w3layouts_more">
						<h4>IOT SERVICES</h4>
						</div>
						<hr>
						<p class="w3_agileits_service_para">
							<img src="images/iot.png" class="pic" style="width: 200px; height: 260px; margin-left: 20%">
						</p>
					
					<div class="w3layouts_more" style="border: 1px solid white;">
						<a href="#">Know More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					</div>
				</div>
				<div class="col-md-4 agile_offer_grid">
					
					<div class="wthree_offer_grid1" style="border: 1px solid white;">
						
						<div class="w3layouts_more">
						<h4>ANDROID DEVELOPMENT</h4>
						</div>
						<hr>
						<p class="w3_agileits_service_para">
							<img src="images/andro.png" class="pic" style="width: 200px; height: 200px; margin-left: 20%; margin-top: 30px; margin-bottom: 30px;">
						</p>
					
					<div class="w3layouts_more" style="border: 1px solid white;">
						<a href="#">Know More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //offer -->
<!-- offer-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-4 w3l_services_footer_top_left">
				<img src="images/13.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-8 w3l_services_footer_top_right">
				<div class="w3l_services_footer_top_right_main">
					<div class="w3l_services_footer_top_right_main_l">
						<h3>20 March 2017</h3>
					</div>
					<div class="w3l_services_footer_top_right_main_l1">	
						<div class="w3ls_service_icon">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</div>
					</div>
					<div class="w3l_services_footer_top_right_main_r">
						<a href="#" data-toggle="modal" data-target="#myModal">Maximus pretium </a>
						<p>Morbi sollicitudin odio massa, et rutrum sem rutrum in. 
							Duis elementum turpis ultricies, finibus leo.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3l_services_footer_top_right_main">
					<div class="w3l_services_footer_top_right_main_l">
						<h3>25 March 2017</h3>
					</div>
					<div class="w3l_services_footer_top_right_main_l1">	
						<div class="w3ls_service_icon">
							<i class="fa fa-map" aria-hidden="true"></i>
						</div>
					</div>
					<div class="w3l_services_footer_top_right_main_r">
						<a href="#" data-toggle="modal" data-target="#myModal">Aliquam faucibus </a>
						<p>Morbi sollicitudin odio massa, et rutrum sem rutrum in. 
							Duis elementum turpis ultricies, finibus leo.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3l_services_footer_top_right_main">
					<div class="w3l_services_footer_top_right_main_l">
						<h3>30 March 2017</h3>
					</div>
					<div class="w3l_services_footer_top_right_main_l1">	
						<div class="w3ls_service_icon">
							<i class="fa fa-pie-chart" aria-hidden="true"></i>
						</div>
					</div>
					<div class="w3l_services_footer_top_right_main_r">
						<a href="#" data-toggle="modal" data-target="#myModal">Vitae faucibus</a>
						<p>Morbi sollicitudin odio massa, et rutrum sem rutrum in. 
							Duis elementum turpis ultricies, finibus leo.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //offer-bottom -->

<!-- our product -->
	<div class="offer">
		<div class="testimonials">
		<div class="container">
		<label class="wel"></label>
			<h3 class="w3ls_head">OUR PRODUCT</h3>
			<div class="testimonials-grids">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<!-- <div class="testimonials-grid-left">
										<img src="images/ft.jpg" alt=" " class="img-responsive" />
									</div> -->
									<div class="testimonials-grid-right" style="background-image: url(images/3.jpg);">
										<p style="background: rgba(0,0,0,0.6);">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
											praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
											excepturi sint occaecati cupiditate non provident.</p>
										
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
											praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
											excepturi sint occaecati cupiditate non provident.</p>
										<h4>Richard Doe</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="images/3.png" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right">
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
											praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
											excepturi sint occaecati cupiditate non provident.</p>
										<h4>Rita James</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right">
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
											praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
											excepturi sint occaecati cupiditate non provident.</p>
										<h4>Crisp Ali</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right">
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
											praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
											excepturi sint occaecati cupiditate non provident.</p>
										<h4>Laura roy</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
					</div>
				</div>
					<script src="js/jquery.wmuSlider.js"></script> 
						<script>
							$('.example1').wmuSlider();         
						</script> 
			</div>
		</div>
	</div>
	</div>


<!-- <div class="gallery" id="gallery">  
		<div class="container"> 
			<label class="wel"></label>
			<h2 class="w3ls_head">Gallery</h2>
			<div class="gallery-agileinfo">
				<div class="col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g1.jpg" class="imghvr-hinge-right figure">
						<img src="images/g1.jpg" alt="" title="New Designs Image"/> 
						<div class="agile-figcaption">
						   <h4>Room Design</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a> 
				</div> 
				<div class="col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g2.jpg" class="imghvr-hinge-right figure">
						<img src="images/g2.jpg" alt="" title="New Designs Image"/> 
						<div class="agile-figcaption">
						  <h4>Room Design</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a> 
				</div>
				<div class="col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g3.jpg" class="imghvr-hinge-right figure">
						<img src="images/g3.jpg" alt="" title="New Designs Image"/> 
						<div class="agile-figcaption">
						  <h4>Room Design</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a> 
				</div>
				<div class="col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g4.jpg" class="imghvr-hinge-right figure">
						<img src="images/g4.jpg" alt="" title="New Designs Image"/> 
						<div class="agile-figcaption">
						   <h4>Room Design</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a> 
				</div>
				<div class="col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g5.jpg" class="imghvr-hinge-right figure">
						<img src="images/g5.jpg" alt="" title="New Designs Image"/> 
						<div class="agile-figcaption">
						   <h4>Room Design</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a> 
				</div> 
				<div class="col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g6.jpg" class="imghvr-hinge-right figure">
						<img src="images/g6.jpg" alt="" title="New Designs Image"/> 
						<div class="agile-figcaption">
						   <h4>Room Design</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a> 
				</div>
<div class="col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g7.jpg" class="imghvr-hinge-right figure">
						<img src="images/g7.jpg" alt="" title="New Designs Image"/> 
						<div class="agile-figcaption">
						   <h4>Room Design</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a> 
				</div>
				<div class="col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g8.jpg" class="imghvr-hinge-right figure">
						<img src="images/g8.jpg" alt="" title="New Designs Image"/> 
						<div class="agile-figcaption">
						   <h4>Room Design</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a> 
				</div> 
				<div class="col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g9jpg" class="imghvr-hinge-right figure">
						<img src="images/g9.jpg" alt="" title="New Designs Image"/> 
						<div class="agile-figcaption">
						  <h4>Room Design</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a> 
				</div> 				
		 -->		<div class="clearfix"> </div>
				<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
				<!-- <script>
					$(function(){
						var gallery = $('.w3gallery-grids a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
					});
				</script>   -->
			</div> 
		</div>
	</div>




<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
		<label class="wel"></label>
			<h3 class="w3ls_head">What People are Saying</h3>
			<div class="testimonials-grids">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right">
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
											praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
											excepturi sint occaecati cupiditate non provident.</p>
										<h4>Richard Doe</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="images/3.png" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right">
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
											praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
											excepturi sint occaecati cupiditate non provident.</p>
										<h4>Rita James</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right">
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
											praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
											excepturi sint occaecati cupiditate non provident.</p>
										<h4>Crisp Ali</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right">
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
											praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
											excepturi sint occaecati cupiditate non provident.</p>
										<h4>Laura roy</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
					</div>
				</div>
					<script src="js/jquery.wmuSlider.js"></script> 
						<script>
							$('.example1').wmuSlider();         
						</script> 
			</div>
		</div>
	</div>
<!-- //testimonials -->
<!-- services -->
<div class="services">
		
			<div class="agileits_heading_section">
			<div class="w3layouts_skills_grids w3layouts_featured_services_grids">
				<div class="col-md-6 w3_featured_services_right">
					<div class="w3_featured-top">
						<label class="cru"></label>
						<h3>home decor & design tips</h3>
						<label class="cru"></label>
					</div>
				</div>
				<div class="col-md-6 w3_featured_services_left">
					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-cog"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>Bedroom Design</h4>
							<p>Maecenas bibendum nisi purus, in ullamcorper nisl aliquam id.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-university"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>Kitchen Design</h4>
							<p>Maecenas bibendum nisi purus, in ullamcorper nisl aliquam id.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-wrench"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>Kids Room Design</h4>
							<p>Maecenas bibendum nisi purus, in ullamcorper nisl aliquam id.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
				</div>
				
				<div class="clearfix"> </div>
			</div>
	
	</div>
<!-- //services -->

<!-- subscribe -->
	<div class="wthree-subscribe" style="background:#eee;">
		<div class="container">
		<label class="wel"></label>
			<h3 class="w3ls_head">Our Team </h3>
			<div class="w3-agileits-subscribe-form">
				
					<!-- team -->
	<div class="team jarallax" id="team">
		<div class="container-fluid">
			
			<div class="agile_team_grids">
				<div class="col-md-3 agile_team_grid">
					<div class="view w3-agile-view">
						<img src="images/k.jpg" alt=" " class="img-responsive" />
						<div class="w3lmask">
							<h5>Kunal Bodhe</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="view w3-agile-view">
						<img src="images/v.jpg" alt=" " class="img-responsive" />
						<div class="w3lmask">
							<h5>Vrushabh Kale</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="social overlay">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="view w3-agile-view">
						<img src="images/t3.jpg" alt=" " class="img-responsive" />
						<div class="w3lmask">
							<h5>Sudarshan Meshram</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="view w3-agile-view">
						<img src="images/t4.jpg" alt=" " class="img-responsive" />
						<div class="w3lmask">
							<h5>Akash Niwalkar</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->


			</div>
		</div>
	</div>
<!-- //subscribe -->
<!-- gallery -->
	
<!-- //gallery --> 


	<!-- contact -->		
	
	<div class="contact" id="contact" style="background-image: url(images/b.jpg);"> 

		<div class="container">
			<label class="wel"></label>
			<h2 class="w3ls_head">Contact Us</h2> 
			<div class="contact-agileinfo">
				<div class="col-md-6 contact-right"> 
					<form action="" method="post">  
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="text" class="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Phone no" placeholder="Phone" required="">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<input type="submit" value="SUBMIT" > 
					</form>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 contact-left">
					<div class="address" >
						<h5>Address:</h5>
						<p style="color:#ffca65"><i class="glyphicon glyphicon-home"></i> 333 Broome St New York, Nagpur 440022, </p>
					</div>
					<div class="address address-mdl">
						<h5>Phones:</h5>
						<p style="color:yellow;"><i class="glyphicon glyphicon-earphone"></i> +91 959 546 8333</p>
						<p style="color:#0f0;"><i class="glyphicon glyphicon-phone"></i> +91 952 750 4731</p>
					</div>
					<div class="address">
						<h5>Email:</h5>
						<p><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:info@example.com" style="color:#f00;">mail@example.com</a></p>
					</div>
					<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModalloc">OUR LOCATION<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>

				<div class="clearfix"></div>
			</div>

		</div> 
	</div>
	<!-- <div class="agileits-w3layouts-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen></iframe>
	</div> -->
	<!-- //contact -->	



<!-- footer -->
	<div class="w3ls-footer-grids" style="margin-top: 5px;">
				<div class="container">
					<div class="col-md-5 w3l-footer one">
						<h3>Company</h3>
						<p> Contrary to popular belief, Lorem Ipsum is not<br>
						    simply random text. It has roots in a piece of<br>
						    Latin at Hampden-Sydney College in Virginia <br>
						    simply random text. It has roots in a piece of<br>
						    from a Lorem Ipsum passage, undoubtable source.</p>
						<p class="adam">- Adam Rose, MD</p>
						<div class="clearfix"></div>
					</div>
					<!-- <div class="col-md-3 w3l-footer one tweet">
						<h3>Tweets</h3>
						<ul>
							<li>
								<a href="#"><i class="fa fa-twitter"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.
								<i>http//example.com</i></a>
								<span>About 15 minutes ago<span>
							</span></span></li>
							<li>
								<a href="#"> <i class="fa fa-twitter"></i>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit. 
								<i>http//example.com</i></a>
								<span>About a day ago<span>
							</span></span></li>
						</ul>
					</div> -->
					<div class="col-md-4 w3l-footer two">
						<h3>Connect</h3>
						<ul>
							<li><a class="fb" href="#"><i class="fa fa-facebook"></i>Like us on Facebook</a></li>
							<li><a class="fb1" href="#"><i class="fa fa-twitter"></i>Follow us on Twitter</a></li>
							<li><a class="fb2" href="#"><i class="fa fa-google-plus"></i>Add us on Google Plus</a></li>
							<li><a class="fb3" href="#"><i class="fa fa-dribbble"></i>Follow us on Dribbble</a></li>
							<!-- <li><a class="fb4" href="#"><i class="fa fa-pinterest-p"></i>Follow us on Pinterest</a></li> -->
						</ul>
					</div>
					<div class="col-md-3 w3l-footer three">
						<h3>Contact</h3>
						<ul>
							<li><i class="fa fa-map-marker"></i><p>The company name <span>Lorem ipsum dolor,</span>Nagpur-440022. </p><div class="clearfix"></div> </li>
							<li><i class="fa fa-phone"></i><p>9595468333</p> <div class="clearfix"></div> </li>
							<li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com">info@example.com</a> <div class="clearfix"></div></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="copy-right-grids">
				<div class="container">
					<div class="copy-left">
							<p class="footer-gd">2017 © smart Washroom. All Rights Reserved | Design by <a href="#" target="_blank">vrushabh_k</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

<!-- //footer-->
<!--Dashboard login bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content" style="background:none; width:60%;margin-top: 20%;margin-left:20%;border: 1px solid #eee; ">
				<div class="modal-header">
					Dashboard Login
											
				</div>
				<section>
					<div class="modal-body">
						<!-- <img src="images/4.jpg" alt=" " class="img-responsive" /> -->
							<!-- animated box -->

						<div id="technology_spec">
                            <div class="wrap">
                                <div class="cube animate">
                                    <div class="front"><img src="images/t1.jpg" alt="html5" ></div>
                                    <div class="back"><img src="images/t2.jpg" alt="css3"></div>
                                    <div class="top"><img src="images/t3.jpg" alt="angularjs"></div>
                                    <div class="bottom"><img src="images/t4.jpg" alt="nodejs" ></div>
                                    <div class="left"><img src="images/t1.jpg" alt="jquery" ></div>
                                    <div class="right"><img src="images/t2.jpg" alt="bootstrap"></div>
                                </div>
                            </div>
                       </div>
			<!-- end animated box -->
						<form action="" method="POST">
							<div style="margin-left: 20%;">
								 <table class="choose">
									<tr>
										<td>
											<!-- <input type="radio" name="check" value="aai">AAI -->
											<select name="check" class="drop"><option>
												CHOOSE LOGIN</option>
												<option value="aai">Airport Authority Of India</option>
												<option value="airport">City Airport</option>
											</select>
										</td>
										<!-- <td>
											<input type="radio" name="check" value="airport">AIRPORT
										</td> -->
									</tr>
								  
								  
								</table> 
							
							<input type="text" name="user" placeholder="username" class="log" required="" style="padding-left: 40%;background:none;color: white;">
							<input type="password" name="pwd" placeholder="password" class="log" required="" style="padding-left: 40%;background:none;">
							<input type="submit" name="submit" class="log" style="background: orange;"> 
							<!-- <button name="submit" class="log" style="background:none;font-weight: bold; color: white;">LOGIN</button> -->
							</div>
						</form>
						
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //dashboard login bootstrap-pop-up -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Room Design
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- bootstrap-pop-up location-->
	<div class="modal video-modal fade" id="myModalloc" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document" style="width: 80%;">
			<div class="modal-content" style="height: 50%;">
				<div class="modal-header">
					MAP
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="agileits-w3layouts-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen></iframe>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
  </script>
<!-- //flexSlider -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!-- change background aftr scroll -->
<script type="text/javascript">
	
	$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 300) {
	    $(".black").css("background" , "blue");
	  }

	  else{
		  $(".black").css("background" , "none");  	
	  }
  })
})
</script>



						
<!-- php part -->







</body>
</html>

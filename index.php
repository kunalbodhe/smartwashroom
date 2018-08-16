<?php
  // include("dbconnect.php");
$connect=mysqli_connect("localhost","root","","smarttoillet") or die("Database connection failed");
session_start();
$_SESSION['user']="nil";
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
			 //	echo"<p>Login sucessful</p>";
			 	$_SESSION['username']=$city;
		 		 header('Location: city.php');	
			 }
			else
				{
					echo"<p>Login failed</p>";
				}		
			}
		elseif ($title=="airport") 
			{
				$sql="SELECT * FROM login where username='$city' and password='$pwd' and title='$title';";
 		 		$res= mysqli_query($connect,$sql);
			    if(mysqli_num_rows($res)>0)
			       {
			 //	echo"<p>Login sucessful</p>";
			 			$_SESSION['user']=$city;
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
<html>
<head>
	<title>smart washroom system</title>

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
<!-- css -->
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
		   
		   
		   
		 }
		 .log:hover{font-weight: bold;color:white;}

#wrapper{z-index:10;width: 100%; height: 750px;}	

.choose{ padding: 20px; color: white; text-align: center;width: 90% ;background:rgba(0,0,0,0.8);}	
.drop{background: none; color: grey; width: 125%; padding: 10px; margin-left: -20%; border-radius:5px; border-radius: 3px;margin-bottom: 3px;}
table.choose{}
body{}
</style>

</head>
<body>
	<div class="banner">
		<div class="container">	
			<div class="modal-dialog" role="document">
			<div class="modal-content" style="background:rgba(0,0,0,0.8); width:60%;margin-top: 10%;margin-left:20%;border: 1px solid #eee;">
				<div class="modal-header">
					Dashboard Login
											
				</div>
				<section>
					<div class="modal-body">
						<div id="technology_spec">
                            <div class="wrap">
                                <div class="cube animate">
                                    <div class="front"><img src="images/fb.jpg" alt="html5" ></div>
                                    <div class="back"><img src="images/happy.png" alt="css3"></div>
                                    <div class="top"><img src="images/sad.png" alt="angularjs"></div>
                                    <div class="bottom"><img src="images/sad.png" alt="nodejs" ></div>
                                    <div class="left"><img src="images/dustbinfull.png" alt="jquery" ></div>
                                    <div class="right"><img src="images/fbs.jpg" alt="bootstrap"></div>
                                </div>
                            </div>
                       </div>
			<!-- end animated box -->
						<form action="" method="POST">
							<div style="margin-left: 20%;">
								 <table class="choose">
									<tr>
										<td>
											<select name="check" class="drop"><option style="color:white;">
												CHOOSE LOGIN</option>
												<option value="aai" style="color:black;">Airport Authority Of India</option>
												<option value="airport" style="color:black;">City Airport</option>
											</select>
										</td>
									</tr>
								</table> 
							
							<input type="text" name="user" placeholder="USERNAME" class="log" required="" style="padding-left: 40%;background:rgba(0,0,0,0.8);color: white;">
							<input type="password" name="pwd" placeholder="PASSWORD" class="log" required="" style="padding-left: 40%;background:rgba(0,0,0,0.8);color: white;">
							<input type="submit" name="submit" class="log" style="background: orange;"> 
							
							</div>
						</form>
						
					</div>
				</section>
			</div>
		</div>
		</div>
		</div>
	</div>

<!-- <div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal"> -->
	
		
	<!-- </div> -->

</body>
</html>
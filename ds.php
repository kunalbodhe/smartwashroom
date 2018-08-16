<?php 
  // include("dbconnect.php");
// include("up.php");

   session_start();
				 $sets=$_SESSION['sets'];
				 $city=$_SESSION['city'];
				if($sets=="nil"){
					echo"<script>window.location.href='mainds.php';</script>";
				}
	
  $connect=mysqli_connect("localhost:3306","root","",$city) or die("db cannection failled");

                   						$data1=array();
						               	$sql1="SELECT * FROM live$sets ORDER BY id DESC LIMIT 1;";
						                         		$res1=mysqli_query($connect,$sql1); 
						                         		while($data1=mysqli_fetch_assoc($res1))
						                         		{
							                              $good_g= $data1['g_fb_good'];
							                              $dustbin_g= $data1['g_fb_dustbin'];
							                              $smell_g= $data1['g_fb_smell'];
							                              $toiletpaper_g= $data1['g_fb_toiletpaper'];
							                              $handwash_g= $data1['g_fb_handwash'];
							                              $washbasin_g= $data1['g_fb_washbasin'];
							                              $floor_g= $data1['g_fb_floor'];
							                              
							                              $good_l= $data1['l_fb_good'];
							                              $dustbin_l= $data1['l_fb_dustbin'];
							                              $smell_l= $data1['l_fb_smell'];
							                              $toiletpaper_l= $data1['l_fb_toiletpaper'];
							                              $handwash_l= $data1['l_fb_handwash'];
							                              $washbasin_l= $data1['l_fb_washbasin'];
							                              $floor_l= $data1['l_fb_floor'];
							                              
							                              $cnt_handicap= $data1['cnt_handicap'];
							                              $cnt_ladies= $data1['cnt_ladies'];
							                              $cnt_gents= $data1['cnt_gents'];}

							                               $floor_l1= $data1['l_live_floor1'];
							                              $floor_g1= $data1['l_live_floor1'];
							                              $floor_l2= $data1['l_live_floor2'];
							                              $floor_g2= $data1['l_live_floor2'];
							                              $g_lastclean=$data1['g_lastclean'];
							                              $l_lastclean=$data1['l_lastclean'];
							                              

                   							
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="css/team2.css">
<link rel="stylesheet" type="text/css" href="css/style1.css"/>
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- //bootstrap-css -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="js/morris.js"></script>
<!-- graph -->
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   
<style type="text/css">
	body{background:#000;height:100%;padding-bottom: 50px;}
	.top{background:#444; height:px; margin-top: 5px;padding:2px;}
	.date{text-align: right; color:#000;}
	.heading{ padding-left:5px; padding:5px; background:#111; color:orange; font-weight:550;}
	.parameters{background:#555; color:#ccc; padding:3px;margin-top:5px; text-align:justify;padding-left:12%;}
	.parameters:hover{background:orange; color:black;font-weight: bold;}
	.cnt{ text-align:center;color:#fff;font-size: 60px}
	.ch{background:#444;}
	.cha{color: #ccc;}
	.fa{color:black;}
	.fa:hover{color:orange;font-size:70px;}
	
	.gender{background:#444;height:125px; border: 1px solid #444;color: #ccc;}
	.gender:hover{background:orange; box-shadow: 2px 2px 4px #000000; font-weight:bold; color:black;}
	.noti{background:#555}	
	.noti:hover{background: orange; color: black;font-size: 18px;font-weight: 800;}
	.footer {
			    position:;
			    left: 0;
			    margin-bottom: 8px;
			    margin-top:-13px;
			    width: 100%;
			    background:#333;
			    color:#eee;
			    text-align: center;
			    padding: 0;
			}
	.blink_me {
    
			    animation-name: blinker;
			    animation-duration: 2s;
			    animation-timing-function: linear;
			    animation-iteration-count: infinite;
			}

@keyframes blinker {  
					    0% { opacity: 1.0; background:orange; /*border-color: red;*/ }
					    50% { opacity: 0.0; background:black; }
					    /*70% { opacity: 0.0; background:green; }*/
					    100% { opacity: 1.0;background:orange; }
					}		
	
	/**{border: 1px solid white;}*/
</style>


</head>
<body>
<div class="container-fluid">
	<div class="row" style="margin-top:0.7%;">  <!-- first row -->
		<!-- <div class="col-md-1"></div> -->
		<div class="col-md-2 top" style="border-right: 5px solid orange; text-align: right;color:#eee">

			WELCOME TO SET NO 
			 <?php
				
				echo $sets;
				
			?>
		</div>
		<div class="col-md-10 top">
			<div class="date" id="date" style="margin-right:7%;">
				<?php
					date_default_timezone_set('Asia/Kolkata');
					// echo date('H:i:sa');
					echo " " . date("d-m-Y") . "";
					echo " " . date("l");
				?>
					
			</div>
		</div>
		<!-- <div class="col-md-1"></div> -->
		
	</div>
	<div class="row" style="margin-top: 5px;padding-bottom: 20px;">  <!-- second row -->
			<div class="col-md-1"></div>
			<div class="col-md-1 top" style="height: 577px;margin-top:0;border-right: 6px solid black; "> 
				<div style="text-align: center; color:white;">
    				<p style="font-size: 50px; font-weight: bold;"><i class="fa fa-home" style="color:orange; opacity:"> </i></p>
    			</div>
    			<div style="text-align: center; color:white;">
    				<a href="chart.php"><p style="font-size: 50px; font-weight: bold;"><i class="fa fa-users" style=""> </i></p></a>
    			</div>
    			<div style="text-align: center; color:white;">
    				<a href="fb.php"><p style="font-size: 50px; font-weight: bold;"><i class="fa fa-comments" style=""> </i></p></a>
    			</div>
    			<div style="text-align: center; color:white;">
    				<a href="noti.php"><p style="font-size: 50px; font-weight: bold;"><i class="fa fa-bell" style=""> </i></p></a>
    			</div>
    			 <div style="text-align: center; color:white;">
    				<a href="mainds.php"><p style="font-size: 50px; font-weight: bold;"><i class="fa fa-chevron-circle-left" style=""> </i></p></a>
    			</div>
    			<!-- <div style="text-align: center; color:white;">
    				<p style="font-size: 50px; font-weight: bold;"><i class="fa fa-area-chart" style=""></i></p>
    			</div> --> 

			</div>
			<div class="col-md-9" style="background:#333;">
				<div class="row">
					<div class="col-md-8">
						<div class="row" style="margin-left:5px;">
							<a href="#"><div class="col-md-4" style="margin-top:5px;">
								<header class="heading">GENTS</header>

								<div class="gender" style="">
									Today's Count
									<span class="cha" style=""></span>
									<p class="cnt" style="">
										<?php echo $cnt_gents; ?>              
									</p>
									
								</div></a>
								
							</div>
							<div class="col-md-4" style="margin-top:5px;">
								
									<header class="heading" style="">
										HANDICAP
									</header>
									<div class="gender" style="">
										Today's Count
									<p style="color: #ccc;"></p>
									<p class="cnt" style="">
										<?php echo $cnt_handicap; ?>
									</p>
								</div>
							</div>
							<div class="col-md-4" style="margin-top:5px;">
								
									<header class="heading" style="">
										LADIES
									</header>
									<div class="gender" style="">
										Today's Count
									<p style=""></p>
									<p class="cnt" style="">
											<?php echo $cnt_ladies; ?>
									</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-11" style="margin-top:8px; margin-left: 15px; width: 95.5%;">
									<div style="background-image: url(images/fbb.jpeg); height:243px;border: 1px solid #111; background-size: cover;">
										<header class="heading" style="">FEEDBACK</header>
										<div class="" style="color:#ccc;background:#222;text-align: center;">
												<div class="row">

													<div class="col-md-6">FEEDBACK FROM GENTS</div>
													<div class="col-md-"></div>
													<div class="col-md-6">FEEDBACK FROM LADIES</div>
												</div>
											
											</div>	
										
										<div class="row" style="background:rgba(0,0,0,0.7); width:100%;margin-left: 0px;">
											<div class="col-md-1"></div>
											<div class="col-md-4" style="">
                   								<div id="graph41" style="margin-top:-5%;height: 200px;"></div>

			     									<script>
							                            Morris.Donut({
							                              element: 'graph41',
							                              data: [
							                                       {value: <?php echo $good_g;?>, label: 'HAPPY', formatted: '<?php echo $good_g;?>'},
							                                        {value: <?php echo $dustbin_g;?>, label: 'dustbin', formatted: '<?php echo $dustbin_g;?>' },
							                                        {value:<?php echo $floor_g;?>, label: 'dirty floor', formatted: '<?php echo $floor_g;?>' },
							                                        {value:<?php echo $smell_g;?>, label: 'bad smell', formatted: '<?php echo $smell_g;?>' },
							                                        {value:<?php echo $toiletpaper_g;?>, label: 'toilet paper', formatted: '<?php echo $toiletpaper_g;?>' },
							                                        {value:<?php echo $washbasin_g;?>, label: 'dirty washbasin', formatted: '<?php echo $washbasin_g;?>' },
							                                        {value:<?php echo $handwash_g;?>, label: 'handwash', formatted: '<?php echo $handwash_g;?>' },
							                                    ],
							                                    	 backgroundColor: '#ccc',
							                                          labelColor: 'white',
							                                          colors: [  '#fff', '#000','#foo','#0f0','#00f','yellow', 'blue' ],
							                                     formatter: function (x, data) { return data.formatted; }
							                            });
							                        </script>
							                   
                							 </div>
                							 <div class="col-md-2"></div>
                							 	
                							 
                							 <div class="col-md-4" >
                   								<div id="graph4" style="margin-top:-5%; height: 200px;"></div>

                   								
			     									<script>
							                            Morris.Donut({
							                              element: 'graph4',
							                              data: [
							                                        {value: <?php echo $good_l;?>, label: 'HAPPY', formatted: '<?php echo $good_l;?>'},
							                                        {value: <?php echo $dustbin_l;?>, label: 'dustbin', formatted: '<?php echo $dustbin_l;?>' },
							                                        {value:<?php echo $floor_l;?>, label: 'dirty floor', formatted: '<?php echo $floor_l;?>' },
							                                        {value:<?php echo $smell_l;?>, label: 'bad smell', formatted: '<?php echo $smell_l;?>' },
							                                        {value:<?php echo $toiletpaper_l;?>, label: 'toilet paper', formatted: '<?php echo $toiletpaper_l;?>' },
							                                        {value:<?php echo $washbasin_l;?>, label: 'dirty washbasin', formatted: '<?php echo $washbasin_l;?>' },
							                                        {value:<?php echo $handwash_l;?>, label: 'handwash', formatted: '<?php echo $handwash_l;?>' },
							                                    ],
							                                    	 backgroundColor: '#ccc',
							                                          labelColor: 'white',
							                                          colors: [  '#fff', '#000','#foo','#0f0','#00f','yellow', 'blue' ],
							                                     formatter: function (x, data) { return data.formatted; }
							                            });
							                        </script>
							                   
                							 </div>
                						</div>
									</div>
								</div>
							</div>
							<div class="col-md-1"></div>
							<div class="row">
								<div class="col-md-11" style="margin-top:5px; margin-left: 15px; width: 95.5%;">
									<div style="background:#333; height:160px;">
										<div class="heading" style="">
											CLEANING STATUS
										</div>
											<div class="" style="color:#ccc;background:#222;text-align: center;">
												<div class="row">
													<div class="col-md-4">Washroom id's</div>
													<div class="col-md-4">Aspected cleaning time</div>
													<div class="col-md-4">Last cleaning time</div>
												</div>
										
											</div>
										
										<div class="parameters" style="font-size: 14px;">
											<div class="row">
												<div class="col-md-4">GENTS</div>
												<div class="col-md-4">After 2hr of cleaning</div>
												<div class="col-md-4">
													<?php 
														$datag=array();
														$sqlg="SELECT g_cleanstatus, responce FROM clean_gents$sets WHERE id=1;";
														$resg=mysqli_query($connect,$sqlg);
														while($datag=mysqli_fetch_assoc($resg)>0) {
														 $g_lastclean=$datag['g_cleanstatus'];
														 $date=$datag['responce']; }

														 if ($g_lastclean==1) {
														 	echo $date;
														
														}
													 ?>
												</div>
											</div>
										</div>
										<div class="parameters" style="font-size: 14px;">
											<div class="row">
												<div class="col-md-4">LEDIES</div>
												<div class="col-md-4">After 2hr of cleaning</div>
												<div class="col-md-4">
													<?php 
														$datag=array();
														$sqlg="SELECT l_cleanstatus, responce FROM clean_ladies$sets WHERE id=1;";
														$resg=mysqli_query($connect,$sqlg);
														while($datag=mysqli_fetch_assoc($resg)) {
														 $l_lastclean=$datag['l_cleanstatus'];
														 $date=$datag['responce']; }

														 if ($l_lastclean==1) {
														 	echo $date;
														
														}
													 ?>
												</div>
											</div>
										</div>
										<!-- <div class="parameters" style="">
											<div class="row">
												<div class="col-md-4">HANDICAP</div>
												<div class="col-md-4">12:30 PM</div>
												<div class="col-md-4">02:15 AM</div>
											</div>
										</div> -->
										
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12">
								<div style="margin-top:5px;">
									<div style="background:#333; height:250px;border: 1px solid #333;">
										<header class="heading" style="">
											LIVE STATUS
										</header>
											<div class="" style="color:#ccc;background:#222;text-align: center;">
												<div class="row">

													<div class="col-md-5">parameters</div>
													<div class="col-md-2"></div>
													<div class="col-md-5">Status</div>
						                              
						                   		
												</div>
											
											</div>
										<div class="parameters 
														<?php

						                           		$data1=array();
						                       			$sql1="SELECT  g_live_floor1, 
						                       				           g_live_floor2,
						                       				           l_live_floor1,
						                       				           l_live_floor2 FROM live ORDER BY id DESC LIMIT 1;";
						                         		$res1=mysqli_query($connect,$sql1); 
						                         		while($data1=mysqli_fetch_assoc($res1))
						                         		{
							                              $floor_l1= $data1['l_live_floor1'];
							                              $floor_g1= $data1['g_live_floor1'];
							                              $floor_l2= $data1['l_live_floor2'];
							                              $floor_g2= $data1['g_live_floor2'];
							                              
						                              		if($floor_g1==1|| $floor_g2==1 || $floor_l1==1 || $floor_l2==1)
						                              			{echo "blink_me";}
						                                		
						                                } ?>
													" style="">
											<div class="row">
												
										
												<div class="col-md-5">Floor</div>
												<div class="col-md-2"></div>
												<div class="col-md-5">
														<?php
														// $both_l=$floor_l1 && $floor_l2; 
														// $both_g=$floor_g1 && $floor_g2; 
														if($floor_g1==1|| $floor_g2==1 || 
														   $floor_l1==1|| $floor_l2==1)
														{
								         				    if($floor_g1+$floor_g2+ 
														  	   $floor_l1+$floor_l2==4)
																{echo "cleaning in both";}

															 elseif($floor_l1+$floor_l2==2)
																{echo "cleaning (L)<br>";
																	$sql55="UPDATE notification SET title='Ladies washroom is cleaning';";
																	$res55=mysqli_query($connect,$sql55);

																}
															 elseif($floor_g1+$floor_g2==2)
																 	{echo "Cleaning(G)<br>";
																 	$sql56="UPDATE notification SET title='Gents washroom is cleaning';";
																	$res56=mysqli_query($connect,$sql56);
																	}

															if($floor_l1+$floor_l2==1)
																{echo "wet(L)";}
															if($floor_g1+$floor_g2==1)
																 	{echo "wet(G)";}

														}
																else{ echo " cleaned";}
														?> 
												</div>
											</div>
										</div>
										<div class="parameters 
													<?php

						                           		$data1=array();
						                       			$sql1="SELECT l_live_dustbin, g_live_dustbin FROM live$sets ORDER BY id DESC LIMIT 1;";
						                         		$res1=mysqli_query($connect,$sql1); 
						                         		while($data1=mysqli_fetch_assoc($res1))
						                         		{
							                              $dustbin_l= $data1['l_live_dustbin'];
							                              $dustbin_g= $data1['g_live_dustbin'];
							                              
						                              		if($dustbin_l==1 || $dustbin_g==1)
						                              			{echo "blink_me";}
						                                	else{ echo " ";}	
						                                } ?>

										" style="">
											<div class="row">
												<div class="col-md-5">Dustbin</div>
												<div class="col-md-2"></div>
												<div class="col-md-5">
														<?php if($dustbin_l==1 || $dustbin_g==1)
																{
																	if($dustbin_l && $dustbin_g)
																	{echo "Full (G & L)";}
																	elseif ($dustbin_l==1)
																	 {echo "Full (L)";

																		$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=SWMSIN&route=4&mobiles=919527504731,&authkey=219275Ajb3YYuTjk5z5b2b715c&country=91&message=Dustbin is full at wr. Id 2(Ladies)",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  // echo $response;
}


																	  }
																	elseif ($dustbin_g==1) 
																	  {echo "Full (G)";

																		$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=SWMSIN&route=4&mobiles=919527504731,&authkey=219275Ajb3YYuTjk5z5b2b715c&country=91&message=Dustbin is full at wr. Id 1(gents)",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  // echo $response;
}


																	   }
																
																}
						                              			
						                                	else{ echo "Empty";} ?>
												</div>
											</div>
										</div>
										<div class="parameters
															<?php

						                           		$data1=array();
						                       			$sql2="SELECT l_live_airquality, g_live_airquality  FROM live$sets ORDER BY id DESC LIMIT 1;";
						                         		$res2=mysqli_query($connect,$sql2); 
						                         		while($data1=mysqli_fetch_assoc($res2))
						                         		{
							                         $airquality_l= $data1['l_live_airquality'];
							                         $airquality_g= $data1['g_live_airquality'];
							                              
						                              		if($airquality_l==1 ||$airquality_g==1)
						                              			{echo "blink_me";}
						                                	else{ echo " ";}	
						                                } ?>
													" style="">
											<div class="row">
												<div class="col-md-5">Air Quality</div>
												<div class="col-md-2"></div>
												<div class="col-md-5">
													<?php 
														if($airquality_l==1 ||$airquality_g==1)
														{
															if($airquality_l && $airquality_g)
															{echo "Impure (both)";}
															elseif($airquality_l==1)
															{echo "Impure (L)";


															$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=SWMSIN&route=4&mobiles=919527504731,&authkey=219275Ajb3YYuTjk5z5b2b715c&country=91&message=Impure Air quality at wr. Id 2(Ladies)",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  // echo $response;
}


															}
															elseif ($airquality_g==1)
															{echo "Impure(G)";

															$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=SWMSIN&route=4&mobiles=919527504731,&authkey=219275Ajb3YYuTjk5z5b2b715c&country=91&message=Impure air quality at wr. Id 1(gents)",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}


															} 
														}
						                                else{ echo "Pure";} 
						                              ?>
												</div>
											</div>
										</div>
										<!-- <div class="parameters
													<?php

						                           		$data1=array();
						                       			$sql1="SELECT l_live_water, g_live_water FROM live ORDER BY id DESC LIMIT 1;";
						                         		$res1=mysqli_query($connect,$sql1); 
						                         		while($data1=mysqli_fetch_assoc($res1))
						                         		{
							                              $water_l= $data1['l-live_water'];
							                              $water_g= $data1['g-live_water'];
							                              
						                              		if($water_l==1 || $water_g==1)
						                              			{echo "blink_me";}
						                                	else{ echo " ";}	
						                                } ?>
											" style="">
											<div class="row">
												<div class="col-md-5">Water Tank</div>
												<div class="col-md-2"></div>
												<div class="col-md-5">
														<?php if($water_l==1 || $water_g==1)
						                              			{
						                              				if($water_l==1)
						                              					{echo "Full (L)";}
						                              				elseif($water_g==1)
						                              					{echo "Full (G)";}
						                              			}
						                                	else{ echo "Empty";} ?>
											    </div>
											</div>
										</div>
										<div class="parameters

														<?php

						                           		$data1=array();
						                       			$sql1="SELECT tissue FROM alerts ORDER BY id DESC LIMIT 1;";
						                         		$res1=mysqli_query($connect,$sql1); 
						                         		while($data1=mysqli_fetch_assoc($res1))
						                         		{
							                              $tissue= $data1['tissue'];
							                              
						                              		if($tissue==1)
						                              			{echo "blink_me";}
						                                	else{ echo " ";}	
						                                } ?>
											" style="">
											<div class="row">
												<div class="col-md-5">Tissue</div>
												<div class="col-md-2"></div>
												<div class="col-md-5">
															<?php if($tissue==1)
						                              			{echo "Not Availeble";}
						                                	else{ echo "Availeble";} ?>
												</div>
											</div>
										</div> -->
										<!-- <div class="parameters" style="">
											<div class="row">
												<div class="col-md-7">Wahroom Type</div>
												
												<div class="col-md-5"><span style="color: white">Man</span>/Unman</div>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div> -->
						<div class="row">
							<div class="col-md-12">
								<div style="margin-top:-20px;">
									<div style="background:#333; height:305px;">
										<header class="heading" style="">
											NOTIFICATIONS
										</header>
										<div class="parameters" style="">
											<div class="row">
												<div class="col-md-12">
						<?php 
							$data2=array();
							$sql2="SELECT * FROM notification$sets ORDER BY id DESC LIMIT 1;";
							$res2=mysqli_query($connect,$sql2); 
							while($data2=mysqli_fetch_assoc($res2))
							{
							    $noti1= $data2['title'];
							    $date1=$data2['response'];
							    $fstid=$data2['id'];
							    // echo $good."<br>".$date."<br> Id :".$fstid;
							}
							 $snd= $fstid-1;
							 // echo $snd;
							 $sql3="SELECT * FROM notification$sets WHERE id=$snd;";
							$res3=mysqli_query($connect,$sql3); 
							while($data2=mysqli_fetch_assoc($res3))
							{ $noti2=$data2['title'];
							  $time2=$data2['response'];
							// echo "<br>".$noti2." ".$time2." id".$snd."<br>";
							}
							$trd= $snd-1;
							 // echo $trd;
							 $sql4="SELECT * FROM notification$sets WHERE id=$trd;";
							$res4=mysqli_query($connect,$sql4); 
							while($data2=mysqli_fetch_assoc($res4))
							{ $noti3=$data2['title'];
							  $time3=$data2['response'];
							// echo "<br>".$noti3." ".$time3." id".$trd;
							}

							//Time

date_default_timezone_set('Asia/Kolkata');
$current= date("y-m-d h:i:sa");
$t1=$time2;
$t2=$time3;
$t3=$date1;

$diff = abs(strtotime($current) - strtotime($t1));
$diff2 = abs(strtotime($current) - strtotime($t2));
$diff3 = abs(strtotime($current) - strtotime($t3));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 
$minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 

$years2 = floor($diff2 / (365*60*60*24));
$months2 = floor(($diff2 - $years2 * 365*60*60*24) / (30*60*60*24));
$days2 = floor(($diff2 - $years2 * 365*60*60*24 - $months2*30*60*60*24)/ (60*60*24));
$hours2   = floor(($diff2 - $years2 * 365*60*60*24 - $months2*30*60*60*24 - $days2*60*60*24)/ (60*60)); 
$minuts2 = floor(($diff2 - $years2 * 365*60*60*24 - $months2*30*60*60*24 - $days2*60*60*24 - $hours2*60*60)/ 60);

$years3 = floor($diff3 / (365*60*60*24));
$months3 = floor(($diff3 - $years3 * 365*60*60*24) / (30*60*60*24));
$days3 = floor(($diff3 - $years3 * 365*60*60*24 - $months3*30*60*60*24)/ (60*60*24));
$hours3   = floor(($diff3 - $years3 * 365*60*60*24 - $months3*30*60*60*24 - $days3*60*60*24)/ (60*60)); 
$minuts3 = floor(($diff3 - $years3 * 365*60*60*24 - $months3*30*60*60*24 - $days3*60*60*24 - $hours3*60*60)/ 60); 

						?>

													<p><?php echo $noti1; ?></p>
													<p style="text-align: right;margin-right:12%;"><?php echo"".$hours3."h ".$minuts3."m  Ago"; ?></p>
												</div>
												
											</div>
										</div>
										<div class="parameters" style="">
											<div class="row">
												<div class="col-md-12">
													<p><?php echo $noti2; ?></p>
													<p style="text-align: right;margin-right:12%;"><?php echo"".$hours."h ".$minuts."m  Ago"; ?></p>
												</div>
												
											</div>
										</div>
										<div class="parameters" style="">
											<div class="row">
												<div class="col-md-12">
													<p><?php echo $noti3; ?></p>
													<p style="text-align: right;margin-right:12%;"><?php echo"".$hours2."h ".$minuts2."m  Ago"; ?></p>
												</div>
												
											</div>
										</div>
							<a href="noti.php"><header class="heading noti" style="margin-top:15px;text-align: center;">
											CLICK HERE TO SEE MORE
										</header></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>

	<div class="row" style="margin-top: 5px;">
		
		<div class="col-md-12 footer" style="">
			<footer>&copy; 2017-18 <span style="color: orange; font-weight:800;">|</span> team minions &reg; <span style="color: orange; font-weight:800;">|</span> </footer>
		</div>



<!-- graphs -->
		<div class="col-md-1"></div>
	</div>
</div>

						
</body>


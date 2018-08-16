<?php 
 // include("dbconnect.php");

 	session_start();

 	$city=$_SESSION['city'];
	 if($city=="nil"){
	  echo"<script>window.location.href='city.php';</script>";
	  }
 	$_SESSION['sets']="nil";
	 if (isset($_POST['submit']))
	 {
 	 	$sets=$_POST['sets'];
		
 		$_SESSION['sets']=$sets;
 		
				 	
		header('Location:ds.php');	
	}	

	
	
	 $connect=mysqli_connect("localhost:3306","root","",$city) or die("db cannection failled");

?>
<?php
// set 1
	$data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS cnt1 FROM daily1;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $cnt1= $data['cnt1'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS gf1 FROM daily1;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $gf1= $data['gf1'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS bf1 FROM daily1;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bf1= $data['bf1'];}
// set 2	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS cnt2 FROM daily2;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $cnt2= $data['cnt2'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS gf2 FROM daily2;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $gf2= $data['gf2'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS bf2 FROM daily2;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bf2= $data['bf2'];}
// set 3	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS cnt3 FROM daily3;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $cnt3= $data['cnt3'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS gf3 FROM daily3;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $gf3= $data['gf3'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS bf3 FROM daily3;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bf3= $data['bf3'];}
// set 4	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS cnt4 FROM daily4;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $cnt4= $data['cnt4'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS gf4 FROM daily4;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $gf4= $data['gf4'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS bf4 FROM daily4;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bf4= $data['bf4'];}
// set 5	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS cnt5 FROM daily5;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $cnt5= $data['cnt5'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS gf5 FROM daily5;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $gf5= $data['gf5'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS bf5 FROM daily5;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bf5= $data['bf5'];}
// set 6	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS cnt6 FROM daily6;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $cnt6= $data['cnt6'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS gf6 FROM daily6;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $gf6= $data['gf6'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS bf6 FROM daily6;";
	$res=mysqli_query($connect,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bf6= $data['bf6'];}

// $sql="INSERT INTO common(cnt1,cnt2,cnt3,cnt4,cnt5,cnt6,gf1,bf1,gf2,bf2,gf3,bf3,gf4,bf4,gf5,bf5,gf6,bf6) VALUES ('$cnt1','$cnt2','$cnt3','$cnt4','$cnt5','$cnt6','$gf1','$bf1','$gf2','$bf2','$gf3','$bf3','$gf4','$bf4','$gf5','$bf5','$gf6','$bf6');";	 
// $res=mysqli_query($connect,$sql);

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


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

   <!-- font -->
   <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

<!-- graph -->
	  
<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>
   


<style type="text/css">
	body{background:#222;}
	.headtext{text-align: center;
				background:orange;
				padding:15px;
				font-size:30px;
				font-weight: bold;

			 }
	.sidebar{  }
	.sidebody{ background: ; }	
		.city{ height:430px; margin: 5px; background:#444; border: 3px solid #00CCFF; color:#fff;}
		/*.city:hover{background:orange; color:#fff;}	*/
		.cityname{font-size:40px;
				  font-weight:bold;
				  text-align:;
				  padding: 10px;
				  padding-top:px;

				}
			.rad{height: 30px;width: 30px;}	 
		.subhead{ text-align: center;
				  padding: 10px;
				  background: #ccc;
				  font-size: 18px;
				  font-weight: bold;
				  margin-top: 25px;


				}
		.barhead{}
		.bar{background:}
		.wr_id{height: 100px; border: 1px solid yellow; margin: 5px; width:15%; margin-top: 24px; padding: 0px; margin-left: 10px;}

.wr_id_heading{background:yellow; text-align: center;font-weight: bold;margin-top: 0px }	
		.rating{background: #555; text-align: center;color: white;margin-top: 22px;}
			.btn{border: 2px solid white; text-transform: uppercase; font-weight:bold;}
		.btn:hover{background:orange;  border: 2px solid orange;}
		.grf{min-width:10%; height: 380px; margin-top:25px;}
	.footer {
			    position:;
			    left: 0;
			    margin-bottom: 10px;
			    margin-top:;
			    width: 100%;
			    background:#333;
			    color:#eee;
			    text-align: center;
			    padding: 0;
			    margin-top: 10px;
			}
	.fa-star{color: yellow;}		
	
	
	/**{border: 1px solid white;}*/
</style>


</head>
<body>
	<div class="heading">
		<div>
			<div>

				<h1 class="headtext">WELCOME TO
				<?php
					if($city=='PUNE95275'){echo "PUNE";}
				elseif($city=='MUMBAI95275'){echo "MUMBAI";}
				elseif($city=='NAGPUR95275'){echo "NAGPUR";}
				elseif($city=='HYDERABAD95275'){echo "HYDERABAD";}
				elseif($city=='BANGLORE95275'){echo "BANGLORE";}
				elseif($city=='DELHI95275'){echo "DELHI";}

				 // echo $city;
				  ?>
				 AIRPORT</h1>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3 sidebar">
						<div class="row">
							<div class="col-md-12">
								<div class="subhead">
									<form action="" method="POST">
										<select name="sets" style="height: 35px;">
											<!-- <option>SELECT SET</option> -->
											<option value="1">SET NO 1</option>
											<option value="2">SET NO 2</option>
											<option value="3">SET NO 3</option>
											<option value="4">SET NO 4</option>
											<option value="5">SET NO 5</option>
										</select>
										<input type="submit" name="submit" class="btn">
									</form>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="subhead">
									<span class="barhead">TOTAL COUNT</span><hr>
									<p class="bar">
										 <?php
                                      // $data99=array();
                                      // $sql99="SELECT sum(cnt1+cnt2+cnt3+cnt4+cnt5+cnt6)as total_cnt FROM common;";
                                      // $res9830=mysqli_query($connect,$sql99); 
                                      // while($data99=mysqli_fetch_assoc($res9830))
                                      // { $total_cnt=$data99['total_cnt'];
                                      //     }
										 $total_cnt=$cnt1+$cnt2+$cnt3+$cnt4+$cnt5+$cnt6;
                                  
                                            echo $total_cnt;
                                            ?>
									</p>
								</div>
							</div>
						</div>
						<div class="row">

								<?php
                                    //   $data990=array();
                                    //   $sql990="SELECT g_fb_good,g_fb_bad,l_fb_good,l_fb_bad,cnt_ladies,cnt_gents FROM live WHERE id=1;";
                                    //   $res9840=mysqli_query($connect,$sql990); 
                                    //   while($data990=mysqli_fetch_assoc($res9840))
                                    //   { $g_good=$data990['g_fb_good'];
                                  		// $g_bad=$data990['g_fb_bad'];
                                  		// $l_good=$data990['l_fb_good'];
                                  		// $l_bad=$data990['l_fb_bad'];
                                  		// $l_cnt=$data990['cnt_ladies'];
                                  		// $g_cnt=$data990['cnt_gents'];
                                  		 // echo $g_good."<br>".$g_bad."<br>".$l_good."<br>".$l_bad."<br>";
                                  		
                                  		$good=$gf1+$gf2+$gf3+$gf4+$gf5+$gf6;
                                  		$bad=$bf1+$bf2+$bf3+$bf4+$bf5+$bf6;
                                  		$all=$good+$bad;
                                        $total_fb=$good/$all*100;
                                         // echo (round($total_fb)."%");
                                  	// }
                                 ?>
							<div class="col-md-12">
								<div class="subhead">
									<span class="barhead">FEEDBACK</span><hr>
									<p class="bar">
										<div class="w3-light-grey">
  											<div class="w3-container w3-red" style="width:<?php echo (round($total_fb));?>%">
  												<?php  echo (round($total_fb)."%");?>
  											</div>
										</div>
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="subhead">
									<div style="text-align: center; color:white;">
    				<a href="city.php"><p style="font-size: 50px; font-weight: bold;"><i class="fa fa-chevron-circle-left" style=""> </i></p></a>
    			</div>
									<!-- <span class="barhead">CLEANING STAUS</span><hr>
									 -->
								</div>
							</div>
						</div>
					</div>


<?php


?>
					<div class="col-md-9 sidebody">
						<div class="row">
							<div class="col-md-12">
								<div id="container" class="grf" style=""></div>

<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'people count and feedback'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'SET 1',
            'SET 2',
            'SET 3',
            'SET 4',
            'SET 5',
            'SET 6'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'counts'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0,
            borderWidth: 0
        }
    },
    series: [{
        name: 'people count',
        data: [<?php echo $cnt1.",".$cnt2.",".$cnt3.",".$cnt4.",".$cnt5.",".$cnt6."";?>]

    }, {
        name: 'Good feedback',
        data: [<?php echo $gf1.",".$gf2.",".$gf3.",".$gf4.",".$gf5.",".$gf6."";?>]

    }, {
        name: 'Bad feedback',
        data: [<?php echo $bf1.",".$bf2.",".$bf3.",".$bf4.",".$bf5.",".$bf6."";?>]

    }]
});
</script>


							</div>
						</div>

						<?php
						$fb1=$gf1+$bf1;
						$rate1=$gf1/$fb1*100;
						$fb2=$gf2+$bf2;
						$rate2=$gf2/$fb2*100;
						$fb3=$gf3+$bf3;
						$rate3=$gf3/$fb3*100;
						$fb4=$gf4+$bf4;
						$rate4=$gf4/$fb4*100;
						$fb5=$gf5+$bf5;
						$rate5=$gf5/$fb5*100;
						$fb6=$gf6+$bf6;
						$rate6=$gf6/$fb6*100;
						// echo $rate1."<br>".$rate2."<br>".$rate3."<br>".$rate4."<br>".$rate5."<br>".$rate6."<br>";
						?>


						<div class="row">
							<div class="col-md-2 wr_id">
								<h4 class="wr_id_heading">SET NO. 01</h4>
								<div class="rating" style="">
									<p>RATINGS</p>
									<p class="bar">
										<div class="w3-light-grey">
  											<div class="w3-container w3-red" style="width:<?php echo (round($rate1));?>%">
  												<?php  echo (round($rate1)."%");?>
  											</div>
										</div>
									</p>
								</div>

							</div>
							<div class="col-md-2 wr_id">
								<h4 class="wr_id_heading">SET NO. 02</h4>
								<div class="rating" style="">
									<p>RATINGS</p>
									<p class="bar">
										<div class="w3-light-grey">
  											<div class="w3-container w3-red" style="width:<?php echo (round($rate2));?>%">
  												<?php  echo (round($rate2)."%");?>
  											</div>
										</div>
									</p>
								</div>
							</div>
							<div class="col-md-2 wr_id">
								<h4 class="wr_id_heading">SET NO. 03</h4>
								<div class="rating" style="">
									<p>RATINGS</p>
									<p class="bar">
										<div class="w3-light-grey">
  											<div class="w3-container w3-red" style="width:<?php echo (round($rate3));?>%">
  												<?php  echo (round($rate3)."%");?>
  											</div>
										</div>
									</p>
								</div>
							</div>
							<div class="col-md-2 wr_id">
								<h4 class="wr_id_heading">SET NO. 04</h4>
								<div class="rating" style="">
									<p>RATINGS</p>
									<p class="bar">
										<div class="w3-light-grey">
  											<div class="w3-container w3-red" style="width:<?php echo (round($rate4));?>%">
  												<?php  echo (round($rate4)."%");?>
  											</div>
										</div>
									</p>
								</div>
							</div>
							<div class="col-md-2 wr_id">
								<h4 class="wr_id_heading">SET NO. 05</h4>
								<div class="rating" style="">
									<p>RATINGS</p>
									<p class="bar">
										<div class="w3-light-grey">
  											<div class="w3-container w3-red" style="width:<?php echo (round($rate5));?>%">
  												<?php  echo (round($rate5)."%");?>
  											</div>
										</div>
									</p>
								</div>
							</div>
							<div class="col-md-2 wr_id">
								<h4 class="wr_id_heading">SET NO. 06</h4>
								<div class="rating" style="">
									<p>RATINGS</p>
									<p class="bar">
										<div class="w3-light-grey">
  											<div class="w3-container w3-red" style="width:<?php echo (round($rate5));?>%">
  												<?php  echo (round($rate5)."%");?>
  											</div>
										</div>
									</p>
								</div>
							</div>

						</div>
						
					</div>
					
				</div>
				
			</div>
		</div>
	</div>

		<div class="col-md-12 footer" style="">
			<footer>&copy; 2018 <span style="color: orange; font-weight:800;">|</span>  smart washroom &reg; <span style="color: orange; font-weight:800;">|</span> design by: team minions</footer>
		</div>
						
</body>

</html>
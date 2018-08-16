<?php 
// include("dbconnect.php");
session_start();
         $sets=$_SESSION['sets'];
         $city=$_SESSION['city'];
        if($sets=="nil"){
          echo"<script>window.location.href='mainds.php';</script>";
        }
      $connect=mysqli_connect("localhost:3306","root","",$city) or die("db cannection failled");
?>
<?php
// January
	// good
	$data=array();
	$sql="SELECT SUM(g_fb_good) AS good_gjan FROM daily$sets WHERE(date BETWEEN '2019-01-01' AND '2019-01-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$jan_ggood=$data['good_gjan'];}
	$data=array();
	$sql="SELECT SUM(l_fb_good) AS good_ljan FROM daily$sets WHERE(date BETWEEN '2019-01-01' AND '2019-01-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$jan_lgood=$data['good_ljan'];}
	// bad
	$data=array();
	$sql="SELECT SUM(g_fb_bad) AS bad_gjan FROM daily$sets WHERE(date BETWEEN '2019-01-01' AND '2019-01-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$jan_gbad=$data['bad_gjan'];}
	$data=array();
	$sql="SELECT SUM(l_fb_bad) AS bad_ljan FROM daily$sets WHERE(date BETWEEN '2019-01-01' AND '2019-01-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$jan_lbad=$data['bad_ljan'];}
// February
	// good
	$data=array();
	$sql="SELECT SUM(g_fb_good) AS good_gfeb FROM daily$sets WHERE(date BETWEEN '2019-02-01' AND '2019-02-28');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$feb_ggood=$data['good_gfeb'];}
	$data=array();
	$sql="SELECT SUM(l_fb_good) AS good_lfeb FROM daily$sets WHERE(date BETWEEN '2019-02-01' AND '2019-02-28');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$feb_lgood=$data['good_lfeb'];}
	// bad
	$data=array();
	$sql="SELECT SUM(g_fb_bad) AS bad_gfeb FROM daily$sets WHERE(date BETWEEN '2019-02-01' AND '2019-02-28');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$feb_gbad=$data['bad_gfeb'];}
	$data=array();
	$sql="SELECT SUM(l_fb_bad) AS bad_lfeb FROM daily$sets WHERE(date BETWEEN '2019-02-01' AND '2019-02-28');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$feb_lbad=$data['bad_lfeb'];}
// march
	// good
	$data=array();
	$sql="SELECT SUM(g_fb_good) AS good_gmar FROM daily$sets WHERE(date BETWEEN '2019-03-01' AND '2019-03-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$mar_ggood=$data['good_gmar'];}
	$data=array();
	$sql="SELECT SUM(l_fb_good) AS good_lmar FROM daily$sets WHERE(date BETWEEN '2019-03-01' AND '2019-03-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$mar_lgood=$data['good_lmar'];}
// bad
	$data=array();
	$sql="SELECT SUM(g_fb_bad) AS bad_gmar FROM daily$sets WHERE(date BETWEEN '2019-03-01' AND '2019-03-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$mar_gbad=$data['bad_gmar'];}
	$data=array();
	$sql="SELECT SUM(l_fb_bad) AS bad_lmar FROM daily$sets WHERE(date BETWEEN '2019-03-01' AND '2019-03-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$mar_lbad=$data['bad_lmar'];}
// april
	$data=array();
	$sql="SELECT SUM(g_fb_good) AS good_gapr FROM daily$sets WHERE(date BETWEEN '2019-04-01' AND '2019-04-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$apr_ggood=$data['good_gapr'];}
	$data=array();
	$sql="SELECT SUM(l_fb_good) AS good_lapr FROM daily$sets WHERE(date BETWEEN '2019-04-01' AND '2019-04-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$apr_lgood=$data['good_lapr'];}
// bad
	$data=array();
	$sql="SELECT SUM(g_fb_bad) AS bad_gapr FROM daily$sets WHERE(date BETWEEN '2019-04-01' AND '2019-04-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$apr_gbad=$data['bad_gapr'];}
	$data=array();
	$sql="SELECT SUM(l_fb_bad) AS bad_lapr FROM daily$sets WHERE(date BETWEEN '2019-04-01' AND '2019-04-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$apr_lbad=$data['bad_lapr'];}
// may
	$data=array();
	$sql="SELECT SUM(g_fb_good) AS good_gmay FROM daily$sets WHERE(date BETWEEN '2018-05-01' AND '2018-05-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$may_ggood=$data['good_gmay'];}
	$data=array();
	$sql="SELECT SUM(l_fb_good) AS good_lmay FROM daily$sets WHERE(date BETWEEN '2018-05-01' AND '2018-05-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$may_lgood=$data['good_lmay'];}
// bad
	$data=array();
	$sql="SELECT SUM(g_fb_bad) AS bad_gmay FROM daily$sets WHERE(date BETWEEN '2018-05-01' AND '2018-05-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$may_gbad=$data['bad_gmay'];}
	$data=array();
	$sql="SELECT SUM(l_fb_bad) AS bad_lmay FROM daily$sets WHERE(date BETWEEN '2018-05-01' AND '2018-05-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$may_lbad=$data['bad_lmay'];}
// june
	$data=array();
	$sql="SELECT SUM(g_fb_good) AS good_gjune FROM daily$sets WHERE(date BETWEEN '2018-06-01' AND '2018-06-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$june_ggood=$data['good_gjune'];}
	$data=array();
	$sql="SELECT SUM(l_fb_good) AS good_ljune FROM daily$sets WHERE(date BETWEEN '2018-06-01' AND '2018-06-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$june_lgood=$data['good_ljune'];}
// bad
	$data=array();
	$sql="SELECT SUM(g_fb_bad) AS bad_gjune FROM daily$sets WHERE(date BETWEEN '2018-06-01' AND '2018-06-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$june_gbad=$data['bad_gjune'];}
	$data=array();
	$sql="SELECT SUM(l_fb_bad) AS bad_ljune FROM daily$sets WHERE(date BETWEEN '2018-06-01' AND '2018-06-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$june_lbad=$data['bad_ljune'];}
// july
	$data=array();
	$sql="SELECT SUM(g_fb_good) AS good_gjuly FROM daily$sets WHERE(date BETWEEN '2018-07-01' AND '2018-07-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$july_ggood=$data['good_gjuly'];}
	$data=array();
	$sql="SELECT SUM(l_fb_good) AS good_ljuly FROM daily$sets WHERE(date BETWEEN '2018-07-01' AND '2018-07-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$july_lgood=$data['good_ljuly'];}
// bad
	$data=array();
	$sql="SELECT SUM(g_fb_bad) AS bad_gjuly FROM daily$sets WHERE(date BETWEEN '2018-07-01' AND '2018-07-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$july_gbad=$data['bad_gjuly'];}
	$data=array();
	$sql="SELECT SUM(l_fb_bad) AS bad_ljuly FROM daily$sets WHERE(date BETWEEN '2018-07-01' AND '2018-07-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$july_lbad=$data['bad_ljuly'];}
// August
	$data=array();
	$sql="SELECT SUM(g_fb_good) AS good_gaug FROM daily$sets WHERE(date BETWEEN '2018-08-01' AND '2018-08-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$aug_ggood=$data['good_gaug'];}
	$data=array();
	$sql="SELECT SUM(l_fb_good) AS good_laug FROM daily$sets WHERE(date BETWEEN '2018-08-01' AND '2018-08-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$aug_lgood=$data['good_laug'];}
// bad
	$data=array();
	$sql="SELECT SUM(g_fb_bad) AS bad_gaug FROM daily$sets WHERE(date BETWEEN '2018-08-01' AND '2018-08-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$aug_gbad=$data['bad_gaug'];}
	$data=array();
	$sql="SELECT SUM(l_fb_bad) AS bad_laug FROM daily$sets WHERE(date BETWEEN '2018-08-01' AND '2018-08-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$aug_lbad=$data['bad_laug'];}
// September
	$data=array();
	$sql="SELECT SUM(g_fb_good) AS good_gsept FROM daily$sets WHERE(date BETWEEN '2018-09-01' AND '2018-09-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$sept_ggood=$data['good_gsept'];}
	$data=array();
	$sql="SELECT SUM(l_fb_good) AS good_lsept FROM daily$sets WHERE(date BETWEEN '2018-09-01' AND '2018-09-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$sept_lgood=$data['good_lsept'];}
// bad
	$data=array();
	$sql="SELECT SUM(g_fb_bad) AS bad_gsept FROM daily$sets WHERE(date BETWEEN '2018-09-01' AND '2018-09-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$sept_gbad=$data['bad_gsept'];}
	$data=array();
	$sql="SELECT SUM(l_fb_bad) AS bad_lsept FROM daily$sets WHERE(date BETWEEN '2018-09-01' AND '2018-09-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$sept_lbad=$data['bad_lsept'];}
// October
	$data=array();
	$sql="SELECT SUM(g_fb_good) AS good_goct FROM daily$sets WHERE(date BETWEEN '2018-10-01' AND '2018-10-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$oct_ggood=$data['good_goct'];}
	$data=array();
	$sql="SELECT SUM(l_fb_good) AS good_loct FROM daily$sets WHERE(date BETWEEN '2018-10-01' AND '2018-10-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$oct_lgood=$data['good_loct'];}
// bad
	$data=array();
	$sql="SELECT SUM(g_fb_bad) AS bad_goct FROM daily$sets WHERE(date BETWEEN '2018-10-01' AND '2018-10-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$oct_gbad=$data['bad_goct'];}
	$data=array();
	$sql="SELECT SUM(l_fb_bad) AS bad_loct FROM daily$sets WHERE(date BETWEEN '2018-10-01' AND '2018-10-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$oct_lbad=$data['bad_loct'];}
// November
$data=array();
	$sql="SELECT SUM(g_fb_good) AS good_gnov FROM daily$sets WHERE(date BETWEEN '2018-11-01' AND '2018-11-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$nov_ggood=$data['good_gnov'];}
	$data=array();
	$sql="SELECT SUM(l_fb_good) AS good_lnov FROM daily$sets WHERE(date BETWEEN '2018-11-01' AND '2018-11-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$nov_lgood=$data['good_lnov'];}
// bad
	$data=array();
	$sql="SELECT SUM(g_fb_bad) AS bad_gnov FROM daily$sets WHERE(date BETWEEN '2018-11-01' AND '2018-11-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$nov_gbad=$data['bad_gnov'];}
	$data=array();
	$sql="SELECT SUM(l_fb_bad) AS bad_lnov FROM daily$sets WHERE(date BETWEEN '2018-11-01' AND '2018-11-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$nov_lbad=$data['bad_lnov'];}
// December
$data=array();
	$sql="SELECT SUM(g_fb_good) AS good_gdec FROM daily$sets WHERE(date BETWEEN '2018-12-01' AND '2018-12-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$dec_ggood=$data['good_gdec'];}
	$data=array();
	$sql="SELECT SUM(l_fb_good) AS good_ldec FROM daily$sets WHERE(date BETWEEN '2018-12-01' AND '2018-12-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$dec_lgood=$data['good_ldec'];}
// bad
	$data=array();
	$sql="SELECT SUM(g_fb_bad) AS bad_gdec FROM daily$sets WHERE(date BETWEEN '2018-12-01' AND '2018-12-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$dec_gbad=$data['bad_gdec'];}
	$data=array();
	$sql="SELECT SUM(l_fb_bad) AS bad_ldec FROM daily$sets WHERE(date BETWEEN '2018-12-01' AND '2018-12-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$dec_lbad=$data['bad_ldec'];}


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
   

<style type="text/css">
  body{background:#000;height:100%}
  .top{background:#444; height:30px; margin-top: 3px;padding:2px;}
  .date{text-align: right; color:#000;}
  .heading{padding:5px; background:#111; color:orange; font-weight:550; text-align:center;}
  .parameters{background:#555; color:#ccc; padding:3px;margin-top:5px; text-align:justify;padding-left:12%;}
  .parameters:hover{background:orange; color:black;font-weight: bold;}
  .cnt{ text-align:center;color:#fff;font-size: 60px}
  .ch{background:#444;}
  .cha{color: #ccc;}
  .fa{color:black;}
  .fa:hover{color:orange;font-size:70px;}
    .pcn{color:black;padding: 3px;}
  #graph1,#graph2,#graph3,#graph4,#graph5,#graph6{height:200px;}
  .box{border:2px solid white;}
  .in{background: white;height:}
  .bn{background: none; border: none;}
  .bn:hover{font-weight:bold; color:white;}

  table tr td{padding: 2px;}
  .footer {
          position:;
          left: 0;
          margin-bottom: 49px;
          margin-top:-13px;
          width: 100%;
          background:#333;
          color:#eee;
          text-align: center;
          padding: 0;
      }

    
  /**{border: 1px solid white;}*/
</style>




</head>

<body>

<div class="container-fluid">
  <div class="row" style="margin-top:0.7%;">
    
    <div class="col-md-2 top" style="border-right: 5px solid orange; text-align: right;color:#eee">WELCOME TO SET NO <?php echo $sets; ?></div>
    <div class="col-md-7 top"><marquee style="color: white;">Feedback is Based of no of people gives feedback</marquee></div>
    <div class="col-md-3 top">
      <div class="date" id="date" style="margin-right:7%;">
        <?php
          // echo " " . date("h:i:A") . "";
          echo " " . date("d-m-Y") . "";
          echo " " . date("l");
        ?>
          <!-- <script>
           function autoRefresh_div()
           { $("#date").load("ds.php");}
            setInterval('autoRefresh_div()', 60000);   
          </script>  -->
        
      </div>
    </div>   
  </div>

<!-- second row -->  
    <div class="row" style="margin-top: 5px;padding-bottom: 15px;">  
      <div class="col-md-1"></div>
      <div class="col-md-1 top" style="height: 577px;margin-top:0;border-right: 6px solid black; "> 
        <div style="text-align: center; color:white;">
            <a href="ds.php"><p style="font-size: 50px; font-weight: bold;"><i class="icons fa fa-home" > </i></p></a>
          </div>
          <div style="text-align: center; color:white;">
            <a href="chart.php"><p style="font-size: 50px; font-weight: bold;"><i class="icons fa fa-users" style=" opacity:"> </i></p></a>
          </div>
          <div style="text-align: center; color:white;">
            <p style="font-size: 50px; font-weight: bold;"><i class="icons fa fa-comments" style="color:orange;"> </i></p>
          </div>
          <div style="text-align: center; color:white;">
            <a href="noti.php"><p style="font-size: 50px; font-weight: bold;"><i class="icons fa fa-bell" style=""> </i></p></a>
          </div>
          
      </div>
      <div class="col-md-10" style="background:#333; padding-top:10px; padding-bottom:10px;">
        <div class="row">
        	<form action="" method="POST">

        	<table border="1" style="margin-left: 10%; color: black; border-color: black;text-align: center;font-size:18px;padding:1px;width: 80%;">

        		<tr><td colspan="6" class="" style="font-size: 30px;color: orange; background: #111;padding: 5px;"><b>MONTHLY STATASTIC</b></td></tr>
        		<tr><th style="text-align: center;"><i class="pcn fa fa-calendar" style="font-size: 40px;"></i></th>
        			<td colspan="2" style="text-align: center;background:blue;"><i class="pcn fa fa-male" style="font-size: 40px;"></i></td>
        			<td colspan="2" style="text-align: center; background:#FF0CA0;"><i class="pcn fa fa-female" style="font-size: 40px;"></i></td>
        			<td class="pcn" style="font-size: 40px;"> >> </td>
        		</tr>
        		<tr style="color: black;">
        			<th style="text-align: center;background: red">MONTHS</th>
        			<th style="text-align: center;background: green">GOOD</th>
        			<th style="text-align: center;background: red">BAD</th>
        			<th style="text-align: center;background: green">GOOD</th>
        			<th style="text-align: center;background: red">BAD</th>
        			<th style="text-align: center;background: green">>></th>
        		</tr>
        		<tr>
        			<td>January</td>
        			<td><?php echo $jan_ggood; if ($jan_ggood==0) {echo "0";}?></td>
        			<td><?php echo $jan_gbad;  if ($jan_gbad==0)  {echo "0";}?></td>
        			<td><?php echo $jan_lgood; if ($jan_lgood==0) {echo "0";}?></td>
        			<td><?php echo $jan_gbad;  if ($jan_gbad==0)  {echo "0";}?></td>
        			<td><button name="jan" class="bn">>></button></td>
        		</tr>
        		<tr>
        			<td>February</td>
        			<td><?php echo $feb_ggood; if ($feb_ggood==0) {echo "0";}?></td>
        			<td><?php echo $feb_gbad;  if ($feb_gbad==0)  {echo "0";}?></td>
        			<td><?php echo $feb_lgood; if ($feb_lgood==0) {echo "0";}?></td>
        			<td><?php echo $feb_gbad;  if ($feb_gbad==0)  {echo "0";}?></td>
        			<td><button name="feb" class="bn">>></button></td>
        		</tr>
        		<tr>
        			<td>March</td>
        			<td><?php echo $mar_ggood; if ($mar_ggood==0) {echo "0";}?></td>
        			<td><?php echo $mar_gbad;  if ($mar_gbad==0)  {echo "0";}?></td>
        			<td><?php echo $mar_lgood; if ($mar_lgood==0) {echo "0";}?></td>
        			<td><?php echo $mar_gbad;  if ($mar_gbad==0)  {echo "0";}?></td>
        			<td><button name="mar" class="bn">>></button></td>
        		</tr>
        		
        		<tr>
        			<td>April</td>
        			<td><?php echo $apr_ggood; if ($apr_ggood==0) {echo "0";}?></td>
        			<td><?php echo $apr_gbad;  if ($apr_gbad==0)  {echo "0";}?></td>
        			<td><?php echo $apr_lgood; if ($apr_lgood==0) {echo "0";}?></td>
        			<td><?php echo $apr_gbad;  if ($apr_gbad==0)  {echo "0";}?></td>
        			<td><button name="apr" class="bn">>></button></td>
        		</tr>
        		<tr>
        			<td>May</td>
        			<td><?php echo $may_ggood; if ($may_ggood==0) {echo "0";}?></td>
        			<td><?php echo $may_gbad;  if ($may_gbad==0)  {echo "0";}?></td>
        			<td><?php echo $may_lgood; if ($may_lgood==0) {echo "0";}?></td>
        			<td><?php echo $may_gbad;  if ($may_gbad==0)  {echo "0";}?></td>
        			<td><button name="may" class="bn">>></button></td>
        		</tr>
        		<tr>
        			<td>June</td>
        			<td><?php echo $june_ggood; if ($june_ggood==0) {echo "0";}?></td>
        			<td><?php echo $june_gbad;  if ($june_gbad==0)  {echo "0";}?></td>
        			<td><?php echo $june_lgood; if ($june_lgood==0) {echo "0";}?></td>
        			<td><?php echo $june_gbad;  if ($june_gbad==0)  {echo "0";}?></td>
        			<td><button name="june" class="bn">>></button></td>
        		</tr>
        		<tr>
        			<td>July</td>
        			<td><?php echo $july_ggood; if ($july_ggood==0) {echo "0";}?></td>
        			<td><?php echo $july_gbad;  if ($july_gbad==0)  {echo "0";}?></td>
        			<td><?php echo $july_lgood; if ($july_lgood==0) {echo "0";}?></td>
        			<td><?php echo $july_gbad;  if ($july_gbad==0)  {echo "0";}?></td>
        			<td><button name="july" class="bn">>></button></td>
        		</tr>
        		<tr>
        			<td>August</td>
        			<td><?php echo $aug_ggood; if ($aug_ggood==0) {echo "0";}?></td>
        			<td><?php echo $aug_gbad;  if ($aug_gbad==0)  {echo "0";}?></td>
        			<td><?php echo $aug_lgood; if ($aug_lgood==0) {echo "0";}?></td>
        			<td><?php echo $aug_gbad;  if ($aug_gbad==0)  {echo "0";}?></td>
        			<td><button name="aug" class="bn">>></button></td>
        		</tr>
        		<tr>
        			<td>September</td>
        			<td><?php echo $sept_ggood; if ($sept_ggood==0) {echo "0";}?></td>
        			<td><?php echo $sept_gbad;  if ($sept_gbad==0)  {echo "0";}?></td>
        			<td><?php echo $sept_lgood; if ($sept_lgood==0) {echo "0";}?></td>
        			<td><?php echo $sept_gbad;  if ($sept_gbad==0)  {echo "0";}?></td>
        			<td><button name="sept" class="bn">>></button></td>
        		</tr>
        		<tr>
        			<td>Octomber</td>
        			<td><?php echo $oct_ggood; if ($oct_ggood==0) {echo "0";}?></td>
        			<td><?php echo $oct_gbad;  if ($oct_gbad==0)  {echo "0";}?></td>
        			<td><?php echo $oct_lgood; if ($oct_lgood==0) {echo "0";}?></td>
        			<td><?php echo $oct_gbad;  if ($oct_gbad==0)  {echo "0";}?></td>
        			<td><button name="oct" class="bn">>></button></td>
        		</tr>
        		<tr>
        			<td>November</td>
        			<td><?php echo $nov_ggood; if ($nov_ggood==0) {echo "0";}?></td>
        			<td><?php echo $nov_gbad;  if ($nov_gbad==0)  {echo "0";}?></td>
        			<td><?php echo $nov_lgood; if ($nov_lgood==0) {echo "0";}?></td>
        			<td><?php echo $nov_gbad;  if ($nov_gbad==0)  {echo "0";}?></td>
        			<td><button name="nov" class="bn">>></button></td>
        		</tr>
        		<tr>
        			<td>December</td>
        			<td><?php echo $dec_ggood; if ($dec_ggood==0) {echo "0";}?></td>
        			<td><?php echo $dec_gbad;  if ($dec_gbad==0)  {echo "0";}?></td>
        			<td><?php echo $dec_lgood; if ($dec_lgood==0) {echo "0";}?></td>
        			<td><?php echo $dec_gbad;  if ($dec_gbad==0)  {echo "0";}?></td>
        			<td><button name="dec" class="bn">>></button></td>
        		</tr>

        	</table>

        	<table border="1" style="color: black;margin-left: 10px;border-color: black;margin-top: 10px;text-align:center;width: 98%;">
        		<tr><th colspan="17" style="text-align:center;background: #111;color: orange;">DAILY STATASTICS</th></tr>
        		<tr><th colspan="8" style="text-align:center;background: blue;color: white;">GENTS</th>
        			<th colspan="8" style="text-align:center;background:#FF0CA0;color: white;">LADIES</th>
        			<th rowspan="2" style="text-align:center;">DATE</th>
        		</tr>
        		<tr style="background:#222; color:white;">
        			<td style="background: green;">GOOD</td>
        			<td style="background: red;">BAD</td>
        			<td>DUSTBIN</td>
        			<td>SMELL</td>
        			<td>T.PAPER</td>
        			<td>H.WASH</td>
        			<td>W.BASIN</td>
        			<td>FLOOR</td>
        			<td style="background: green;">GOOD</td>
        			<td style="background: red;">BAD</td>
        			<td>DUSTBIN</td>
        			<td>SMELL</td>
        			<td>T.PAPER</td>
        			<td>H.WASH</td>
        			<td>W.BASIN</td>
        			<td>FLOOR</td>
        	
        		</tr>
        		 <?php 

                          	if (isset($_POST['jan'])) {
                          	
                             $data=array();
     						 $sql="SELECT * FROM daily$sets WHERE(date BETWEEN '2018-01-01 00:01:00' AND '2018-01-31 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              
                             echo "<tr><td>".$data['g_fb_good']."</td><td>".$data['g_fb_bad']."</td><td>".$data['g_fb_dustbin']."</td><td>".$data['g_fb_smell']."</td><td>".$data['g_fb_toilletpaper']."</td><td>".$data['g_fb_handwash']."</td><td>".$data['g_fb_washbasin']."</td><td>".$data['g_fb_floor']."</td><td>".$data['l_fb_good']."</td><td>".$data['l_fb_bad']."</td><td>".$data['l_fb_dustbin']."</td><td>".$data['l_fb_smell']."</td><td>".$data['l_fb_toilletpaper']."</td><td>".$data['l_fb_handwash']."</td><td>".$data['l_fb_washbasin']."</td><td>".$data['l_fb_floor']."</td><td>".$data['date']."</td></tr>";
                            }}
                            elseif (isset($_POST['feb'])) {
                             $data=array();
     						 $sql="SELECT * FROM daily$sets WHERE(date BETWEEN '2018-02-01 00:01:00' AND '2018-02-28 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              echo "<tr><td>".$data['g_fb_good']."</td><td>".$data['g_fb_bad']."</td><td>".$data['g_fb_dustbin']."</td><td>".$data['g_fb_smell']."</td><td>".$data['g_fb_toilletpaper']."</td><td>".$data['g_fb_handwash']."</td><td>".$data['g_fb_washbasin']."</td><td>".$data['g_fb_floor']."</td><td>".$data['l_fb_good']."</td><td>".$data['l_fb_bad']."</td><td>".$data['l_fb_dustbin']."</td><td>".$data['l_fb_smell']."</td><td>".$data['l_fb_toilletpaper']."</td><td>".$data['l_fb_handwash']."</td><td>".$data['l_fb_washbasin']."</td><td>".$data['l_fb_floor']."</td><td>".$data['date']."</td></tr>";
                            }}
                            elseif (isset($_POST['mar'])) {
                             $data=array();
     						 $sql="SELECT * FROM daily$sets WHERE(date BETWEEN '2018-03-01 00:01:00' AND '2018-03-31 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              echo "<tr><td>".$data['g_fb_good']."</td><td>".$data['g_fb_bad']."</td><td>".$data['g_fb_dustbin']."</td><td>".$data['g_fb_smell']."</td><td>".$data['g_fb_toilletpaper']."</td><td>".$data['g_fb_handwash']."</td><td>".$data['g_fb_washbasin']."</td><td>".$data['g_fb_floor']."</td><td>".$data['l_fb_good']."</td><td>".$data['l_fb_bad']."</td><td>".$data['l_fb_dustbin']."</td><td>".$data['l_fb_smell']."</td><td>".$data['l_fb_toilletpaper']."</td><td>".$data['l_fb_handwash']."</td><td>".$data['l_fb_washbasin']."</td><td>".$data['l_fb_floor']."</td><td>".$data['date']."</td></tr>";
                            }}
                            elseif (isset($_POST['apr'])) {
                             $data=array();
     						 $sql="SELECT * FROM daily$sets WHERE(date BETWEEN '2018-04-01 00:01:00' AND '2018-04-30 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              echo "<tr><td>".$data['g_fb_good']."</td><td>".$data['g_fb_bad']."</td><td>".$data['g_fb_dustbin']."</td><td>".$data['g_fb_smell']."</td><td>".$data['g_fb_toilletpaper']."</td><td>".$data['g_fb_handwash']."</td><td>".$data['g_fb_washbasin']."</td><td>".$data['g_fb_floor']."</td><td>".$data['l_fb_good']."</td><td>".$data['l_fb_bad']."</td><td>".$data['l_fb_dustbin']."</td><td>".$data['l_fb_smell']."</td><td>".$data['l_fb_toilletpaper']."</td><td>".$data['l_fb_handwash']."</td><td>".$data['l_fb_washbasin']."</td><td>".$data['l_fb_floor']."</td><td>".$data['date']."</td></tr>";
                            }}
                            elseif (isset($_POST['may'])) {
                             $data=array();
     						 $sql="SELECT * FROM daily$sets WHERE(date BETWEEN '2018-05-01 00:01:00' AND '2018-05-31 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                               	$a=$data['g_fb_good'];
                               	echo $a;
                              echo "<tr><td style='background:green;'>".$data['g_fb_good']."</td><td  style='background:red;'>".$data['g_fb_bad']."</td><td>".$data['g_fb_dustbin']."</td><td>".$data['g_fb_smell']."</td><td>".$data['g_fb_toilletpaper']."</td><td>".$data['g_fb_handwash']."</td><td>".$data['g_fb_washbasin']."</td><td>".$data['g_fb_floor']."</td><td  style='background:green;'>".$data['l_fb_good']."</td><td  style='background:red;'>".$data['l_fb_bad']."</td><td>".$data['l_fb_dustbin']."</td><td>".$data['l_fb_smell']."</td><td>".$data['l_fb_toilletpaper']."</td><td>".$data['l_fb_handwash']."</td><td>".$data['l_fb_washbasin']."</td><td>".$data['l_fb_floor']."</td><td>".$data['date']."</td></tr>";
                            }}
                            elseif (isset($_POST['june'])) {
                             $data=array();
     						 $sql="SELECT * FROM daily$sets WHERE(date BETWEEN '2018-06-01 00:01:00' AND '2018-06-30 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              echo "<tr><td>".$data['g_fb_good']."</td><td>".$data['g_fb_bad']."</td><td>".$data['g_fb_dustbin']."</td><td>".$data['g_fb_smell']."</td><td>".$data['g_fb_toilletpaper']."</td><td>".$data['g_fb_handwash']."</td><td>".$data['g_fb_washbasin']."</td><td>".$data['g_fb_floor']."</td><td>".$data['l_fb_good']."</td><td>".$data['l_fb_bad']."</td><td>".$data['l_fb_dustbin']."</td><td>".$data['l_fb_smell']."</td><td>".$data['l_fb_toilletpaper']."</td><td>".$data['l_fb_handwash']."</td><td>".$data['l_fb_washbasin']."</td><td>".$data['l_fb_floor']."</td><td>".$data['date']."</td></tr>";
                            }}
                            elseif (isset($_POST['july'])) {
                             $data=array();
     						 $sql="SELECT * FROM daily$sets WHERE(date BETWEEN '2018-07-01 00:01:00' AND '2018-07-31 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              echo "<tr><td>".$data['g_fb_good']."</td><td>".$data['g_fb_bad']."</td><td>".$data['g_fb_dustbin']."</td><td>".$data['g_fb_smell']."</td><td>".$data['g_fb_toilletpaper']."</td><td>".$data['g_fb_handwash']."</td><td>".$data['g_fb_washbasin']."</td><td>".$data['g_fb_floor']."</td><td>".$data['l_fb_good']."</td><td>".$data['l_fb_bad']."</td><td>".$data['l_fb_dustbin']."</td><td>".$data['l_fb_smell']."</td><td>".$data['l_fb_toilletpaper']."</td><td>".$data['l_fb_handwash']."</td><td>".$data['l_fb_washbasin']."</td><td>".$data['l_fb_floor']."</td><td>".$data['date']."</td></tr>";
                            }}
                            elseif (isset($_POST['aug'])) {
                             $data=array();
     						 $sql="SELECT * FROM daily$sets WHERE(date BETWEEN '2018-08-01 00:01:00' AND '2018-08-31 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              echo "<tr><td>".$data['g_fb_good']."</td><td>".$data['g_fb_bad']."</td><td>".$data['g_fb_dustbin']."</td><td>".$data['g_fb_smell']."</td><td>".$data['g_fb_toilletpaper']."</td><td>".$data['g_fb_handwash']."</td><td>".$data['g_fb_washbasin']."</td><td>".$data['g_fb_floor']."</td><td>".$data['l_fb_good']."</td><td>".$data['l_fb_bad']."</td><td>".$data['l_fb_dustbin']."</td><td>".$data['l_fb_smell']."</td><td>".$data['l_fb_toilletpaper']."</td><td>".$data['l_fb_handwash']."</td><td>".$data['l_fb_washbasin']."</td><td>".$data['l_fb_floor']."</td><td>".$data['date']."</td></tr>";
                            }}
                            elseif (isset($_POST['sept'])) {
                             $data=array();
     						 $sql="SELECT * FROM daily$sets WHERE(date BETWEEN '2018-09-01 00:01:00' AND '2018-09-30 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              echo "<tr><td>".$data['g_fb_good']."</td><td>".$data['g_fb_bad']."</td><td>".$data['g_fb_dustbin']."</td><td>".$data['g_fb_smell']."</td><td>".$data['g_fb_toilletpaper']."</td><td>".$data['g_fb_handwash']."</td><td>".$data['g_fb_washbasin']."</td><td>".$data['g_fb_floor']."</td><td>".$data['l_fb_good']."</td><td>".$data['l_fb_bad']."</td><td>".$data['l_fb_dustbin']."</td><td>".$data['l_fb_smell']."</td><td>".$data['l_fb_toilletpaper']."</td><td>".$data['l_fb_handwash']."</td><td>".$data['l_fb_washbasin']."</td><td>".$data['l_fb_floor']."</td><td>".$data['date']."</td></tr>";
                            }}
                            elseif (isset($_POST['oct'])) {
                             $data=array();
     						 $sql="SELECT * FROM daily$sets WHERE(date BETWEEN '2018-10-01 00:01:00' AND '2018-10-31 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                             echo "<tr><td>".$data['g_fb_good']."</td><td>".$data['g_fb_bad']."</td><td>".$data['g_fb_dustbin']."</td><td>".$data['g_fb_smell']."</td><td>".$data['g_fb_toilletpaper']."</td><td>".$data['g_fb_handwash']."</td><td>".$data['g_fb_washbasin']."</td><td>".$data['g_fb_floor']."</td><td>".$data['l_fb_good']."</td><td>".$data['l_fb_bad']."</td><td>".$data['l_fb_dustbin']."</td><td>".$data['l_fb_smell']."</td><td>".$data['l_fb_toilletpaper']."</td><td>".$data['l_fb_handwash']."</td><td>".$data['l_fb_washbasin']."</td><td>".$data['l_fb_floor']."</td><td>".$data['date']."</td></tr>";
                            }}
                            elseif (isset($_POST['nov'])) {
                             $data=array();
     						 $sql="SELECT * FROM daily$sets WHERE(date BETWEEN '2018-11-01 00:01:00' AND '2018-11-30 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              echo "<tr><td>".$data['g_fb_good']."</td><td>".$data['g_fb_bad']."</td><td>".$data['g_fb_dustbin']."</td><td>".$data['g_fb_smell']."</td><td>".$data['g_fb_toilletpaper']."</td><td>".$data['g_fb_handwash']."</td><td>".$data['g_fb_washbasin']."</td><td>".$data['g_fb_floor']."</td><td>".$data['l_fb_good']."</td><td>".$data['l_fb_bad']."</td><td>".$data['l_fb_dustbin']."</td><td>".$data['l_fb_smell']."</td><td>".$data['l_fb_toilletpaper']."</td><td>".$data['l_fb_handwash']."</td><td>".$data['l_fb_washbasin']."</td><td>".$data['l_fb_floor']."</td><td>".$data['date']."</td></tr>";
                            }}
                            elseif (isset($_POST['dec'])) {
                             $data=array();
     						 $sql="SELECT * FROM daily$sets WHERE(date BETWEEN '2018-12-01 00:01:00' AND '2018-12-31 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              echo "<tr><td>".$data['g_fb_good']."</td><td>".$data['g_fb_bad']."</td><td>".$data['g_fb_dustbin']."</td><td>".$data['g_fb_smell']."</td><td>".$data['g_fb_toilletpaper']."</td><td>".$data['g_fb_handwash']."</td><td>".$data['g_fb_washbasin']."</td><td>".$data['g_fb_floor']."</td><td>".$data['l_fb_good']."</td><td>".$data['l_fb_bad']."</td><td>".$data['l_fb_dustbin']."</td><td>".$data['l_fb_smell']."</td><td>".$data['l_fb_toilletpaper']."</td><td>".$data['l_fb_handwash']."</td><td>".$data['l_fb_washbasin']."</td><td>".$data['l_fb_floor']."</td><td>".$data['date']."</td></tr>";
                            }}
                          ?>
        	</table>
        	</form>
       </div>
      </div>              
      <!-- <div class="col-md-1"></div>           -->
    </div> <!-- row end -->                                     
    
  <div class="row" style="margin-top: 5px;">
    
    <div class="col-md-12 footer" style="">
      <footer>&copy; 2017-18 <span style="color: orange; font-weight:800;">|</span> team minions &reg; <span style="color: orange; font-weight:800;">|</span> </footer>
    </div>
  </div>
</div>



 
      
</body>
</html>
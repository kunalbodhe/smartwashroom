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
	$data=array();
	$sql="SELECT SUM(cnt_gents) AS total_gjan FROM daily$sets WHERE(date BETWEEN '2019-01-01' AND '2019-01-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$jan_gents=$data['total_gjan'];}
	$data=array();
	$sql="SELECT SUM(cnt_ladies) AS total_ljan FROM daily$sets WHERE(date BETWEEN '2019-01-01' AND '2019-01-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$jan_ladies=$data['total_ljan'];}
// February
$data=array();
	$sql="SELECT SUM(cnt_gents) AS total_gfeb FROM daily$sets WHERE(date BETWEEN '2019-02-01' AND '2019-02-28');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$feb_gents=$data['total_gfeb'];}
	$data=array();
	$sql="SELECT SUM(cnt_ladies) AS total_lfeb FROM daily$sets WHERE(date BETWEEN '2019-02-01' AND '2019-02-28');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$feb_ladies=$data['total_lfeb'];}
// march
$data=array();
	$sql="SELECT SUM(cnt_gents) AS total_gmar FROM daily$sets WHERE(date BETWEEN '2019-03-01' AND '2019-03-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$mar_gents=$data['total_gmar'];}
	$data=array();
	$sql="SELECT SUM(cnt_ladies) AS total_lmar FROM daily$sets WHERE(date BETWEEN '2019-03-01' AND '2019-03-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$mar_ladies=$data['total_lmar'];}
// april
$data=array();
	$sql="SELECT SUM(cnt_gents) AS total_gapr FROM daily$sets WHERE(date BETWEEN '2019-04-01' AND '2019-04-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$apr_gents=$data['total_gapr'];}
	$data=array();
	$sql="SELECT SUM(cnt_ladies) AS total_lapr FROM daily$sets WHERE(date BETWEEN '2019-04-01' AND '2019-04-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$apr_ladies=$data['total_lapr'];}
// may
	$data=array();
	$sql="SELECT SUM(cnt_gents) AS total_gmay FROM daily$sets WHERE(date BETWEEN '2018-05-01' AND '2018-05-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$may_gents=$data['total_gmay'];}
	$data=array();
	$sql="SELECT SUM(cnt_ladies) AS total_lmay FROM daily$sets WHERE(date BETWEEN '2018-05-01' AND '2018-05-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$may_ladies=$data['total_lmay'];}
// june
	$data=array();
	$sql="SELECT SUM(cnt_gents) AS total_gjune FROM daily$sets WHERE(date BETWEEN '2018-06-01' AND '2018-06-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$june_gents=$data['total_gjune'];}
	$data=array();
	$sql="SELECT SUM(cnt_ladies) AS total_ljune FROM daily$sets WHERE(date BETWEEN '2018-06-01' AND '2018-06-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$june_ladies=$data['total_ljune'];}
// july
	$data=array();
	$sql="SELECT SUM(cnt_gents) AS total_gjuly FROM daily$sets WHERE(date BETWEEN '2018-07-01' AND '2018-07-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$july_gents=$data['total_gjuly'];}
	$data=array();
	$sql="SELECT SUM(cnt_ladies) AS total_ljuly FROM daily$sets WHERE(date BETWEEN '2018-07-01' AND '2018-07-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$july_ladies=$data['total_ljuly'];}
// August
$data=array();
	$sql="SELECT SUM(cnt_gents) AS total_gaug FROM daily$sets WHERE(date BETWEEN '2018-08-01' AND '2018-08-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$aug_gents=$data['total_gaug'];}
	$data=array();
	$sql="SELECT SUM(cnt_ladies) AS total_laug FROM daily$sets WHERE(date BETWEEN '2018-08-01' AND '2018-08-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$aug_ladies=$data['total_laug'];}
// September
	$data=array();
	$sql="SELECT SUM(cnt_gents) AS total_gsept FROM daily$sets WHERE(date BETWEEN '2018-09-01' AND '2018-09-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$sept_gents=$data['total_gsept'];}
	$data=array();
	$sql="SELECT SUM(cnt_ladies) AS total_lsept FROM daily$sets WHERE(date BETWEEN '2018-09-01' AND '2018-09-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$sept_ladies=$data['total_lsept'];}
// October
$data=array();
	$sql="SELECT SUM(cnt_gents) AS total_goct FROM daily$sets WHERE(date BETWEEN '2018-10-01' AND '2018-10-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$oct_gents=$data['total_goct'];}
	$data=array();
	$sql="SELECT SUM(cnt_ladies) AS total_loct FROM daily$sets WHERE(date BETWEEN '2018-10-01' AND '2018-10-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$oct_ladies=$data['total_loct'];}
// November
$data=array();
	$sql="SELECT SUM(cnt_gents) AS total_gnov FROM daily$sets WHERE(date BETWEEN '2018-11-01' AND '2018-11-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$nov_gents=$data['total_gnov'];}
	$data=array();
	$sql="SELECT SUM(cnt_ladies) AS total_lnov FROM daily$sets WHERE(date BETWEEN '2018-11-01' AND '2018-11-30');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$nov_ladies=$data['total_lnov'];}
// December
$data=array();
	$sql="SELECT SUM(cnt_gents) AS total_gdec FROM daily$sets WHERE(date BETWEEN '2018-12-01' AND '2018-12-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$dec_gents=$data['total_gdec'];}
	$data=array();
	$sql="SELECT SUM(cnt_ladies) AS total_ldec FROM daily$sets WHERE(date BETWEEN '2018-12-01' AND '2018-12-31');";
    $res=mysqli_query($connect,$sql);
    while($data=mysqli_fetch_assoc($res))
    {$dec_ladies=$data['total_ldec'];}

?>


<!DOCTYPE html>
<html>
<head>
	<title>
		chart
	</title>


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
 <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   

    
   


<style type="text/css">
  body{background:#000;height:100%; padding-bottom: 60px;}
  .top{background:#444; height:px; margin-top: 5px;padding:2px;}
  .date{text-align: right; color:#000;}
  .heading{ padding-left:5px; padding:5px; background:#111; color:orange; font-weight:550;}
  .parameters{background:#555; color:#ccc; padding:3px;margin-top:5px; text-align:justify;padding-left:12%;}
  .parameters:hover{background:orange; color:black;font-weight: bold;}
  .cnt{ text-align:center;color:#fff;font-size: 60px}
  .ch{background:#444;}
  .cha{color: #ccc;}
  .icons{color:black;}
  .icons:hover{color:orange;font-size:70px;}
  .pcn{color:black; font-size:25px;padding: 3px;}

  .gender{background:#444;height:125px; border: 1px solid #444;color: #ccc;}
  .gender:hover{background:orange; box-shadow: 2px 2px 4px #000000; font-weight:bold; color:black;}
  .noti{background:#555}  
  .noti:hover{background: orange; color: black;font-size: 18px;font-weight: 800;}
  .ppl{color:#eee; margin:10px; background:#0f0;}
  .root{background:#444; margin-bottom:10px;}
  .live{color:orange;background:#111;text-align:center;margin-top:5px;font-weight:800;border:2px solid black; font-size:16px; width: 422px;}
  table{;margin-top:-10px;margin-bottom:5px;}
  table tr th{width:110px;border:1px solid black;text-align: center;font-size:18px;}
  table tr:hover{background:orange;}
  .bn{background: none; border: none;}
  .bn:hover{font-weight:bold; color:white;}
  #line-example2,#line-example,#line-example1{border: 1px solid black; height:165px;}
  #line-example1:hover, #line-example:hover,#line-example2:hover{background:#111; height:px; }
  .footer {
          position:fixed;
          left: 0;
          bottom: 5px;
          margin-bottom: 8px;
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
    <div class="col-md-10 top">
      <div class="date" id="date" style="margin-right:7%;">
        <?php
          // echo " " . date("h:i:A") . "";
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
            <a href="ds.php"><p style="font-size: 50px; font-weight: bold;"><i class="icons fa fa-home" > </i></p></a>
          </div>
          <div style="text-align: center; color:white;">
            <p style="font-size: 50px; font-weight: bold;"><i class="icons fa fa-users" style="color:orange; opacity:"> </i></p>
          </div>
          <div style="text-align: center; color:white;">
            <a href="fb.php"><p style="font-size: 50px; font-weight: bold;"><i class="icons fa fa-comments" style=""> </i></p></a>
          </div>
          <div style="text-align: center; color:white;">
            <a href="noti.php"><p style="font-size: 50px; font-weight: bold;"><i class="icons fa fa-bell" style=""> </i></p></a>
          </div>
         

      </div>
      <div class="col-md-9" style="background:#333; padding-bottom:5px;">
        <div class="row">
          <div class="col-md-12">
            <div class="row" style="margin-top:10px;">
            	<div class="col-md-6">
            		<form action="" method="POST">
            		<table border="1" style="color: black; text-align: center; margin-top: 10px;border-color: black;">
    				<tr>
    					<th class="live" colspan="4" style="color:orange;">MONTHLY DATA</th>
    				</tr>
    				<tr>
                          <th><i class="pcn fa fa-calendar" style="font-size: 40px;"></i></th><th><i class="pcn fa fa-male" style="font-size: 40px;"></i></th><th><i class="pcn fa fa-female" style="font-size: 40px;"></i></th><th>>></th>
                    </tr>
                    <tr class="pcn"><td>January</td>
                    	<td><?php echo $jan_gents; if ($jan_gents==0) {echo "0";}?></td>
                    	<td><?php echo $jan_ladies;if ($jan_ladies==0) {echo "0";}?></td>
                    	<td><button name="jan" class="bn">>></button></td>
                    </tr>
                    <tr class="pcn"><td>February</td>
                    	<td><?php echo $feb_gents; if ($feb_gents==0) {echo "0";}?></td>
                    	<td><?php echo $feb_ladies;if ($feb_ladies==0) {echo "0";}?></td>
                    	<td><button name="feb" class="bn">>></button></td>
                    </tr>
                    <tr class="pcn"><td>March</td>
                    	<td><?php echo $mar_gents; if ($mar_gents==0) {echo "0";}?></td>
                    	<td><?php echo $mar_ladies;if ($mar_ladies==0) {echo "0";}?></td>
                    	<td><button name="mar" class="bn">>></button></td>
                    </tr>
                    <tr class="pcn"><td>April</td>
                    	<td><?php echo $apr_gents; if ($apr_gents==0) {echo "0";}?></td>
                    	<td><?php echo $apr_ladies;if ($apr_ladies==0) {echo "0";}?></td>
                    	<td><button name="apr" class="bn">>></button></td>
                    </tr>

                    <tr class="pcn">
                    	<td>May</td>
                    	<td><?php echo $may_gents; if ($may_gents==0) {echo "0";}?></td>
                    	<td><?php echo $may_ladies;if ($may_ladies==0) {echo "0";}?></td>
                    	<td><button name="may" class="bn">>></button></td>
                    </tr>

                    <tr class="pcn"><td>June</td>
                    	<td><?php echo $june_gents; if ($june_gents==0) {echo "0";}?></td>
                    	<td><?php echo $june_ladies;if ($june_ladies==0) {echo "0";}?></td>
                    	<td><button name="june" class="bn">>></button></td>
                    </tr>
                    <tr class="pcn"><td>July</td>
                    	<td><?php echo $july_gents; if ($july_gents==0) {echo "0";}?></td>
                    	<td><?php echo $july_ladies;if ($july_ladies==0) {echo "0";}?></td>
                    	<td><button name="july" class="bn">>></button></td>
                    </tr>
                    <tr class="pcn"><td>August</td>
                    	<td><?php echo $aug_gents; if ($aug_gents==0) {echo "0";}?></td>
                    	<td><?php echo $aug_ladies;if ($aug_ladies==0) {echo "0";}?></td>
                    	<td><button name="aug" class="bn">>></button></td>
                    </tr>
                    <tr class="pcn"><td>September</td>
                    	<td><?php echo $sept_gents; if ($sept_gents==0) {echo "0";}?></td>
                    	<td><?php echo $sept_ladies;if ($sept_ladies==0) {echo "0";}?></td>
                    	<td><button name="sept" class="bn">>></button></td>
                    </tr>
                    <tr class="pcn"><td>October</td>
                    	<td><?php echo $oct_gents; if ($oct_gents==0) {echo "0";}?></td>
                    	<td><?php echo $oct_ladies;if ($oct_ladies==0) {echo "0";}?></td>
                    	<td><button name="oct" class="bn">>></button></td>
                    </tr>
                    <tr class="pcn"><td>November</td>
                    	<td><?php echo $nov_gents; if ($nov_gents==0) {echo "0";}?></td>
                    	<td><?php echo $nov_ladies;if ($nov_ladies==0) {echo "0";}?></td>
                    	<td><button name="nov" class="bn">>></button></td>
                    </tr>
                    <tr class="pcn"><td>December</td>
                    	<td><?php echo $dec_gents; if ($dec_gents==0) {echo "0";}?></td>
                    	<td><?php echo $dec_ladies;if ($dec_ladies==0) {echo "0";}?></td>
                    	<td><button name="dec" class="bn">>></button></td>
                    </tr>

    			</table>
    				</form>
            	</div>
            
            	<div class="col-md-6">
            		<div class="" style="color: #000;margin-left:15px; "> 
                  <p class="live" style="width: 470px;">DAILY RECORD</p>
                    <table border="1" style="color: black; text-align: center; border-color: black; width:100%;">
                     <!--  <thead> -->
                        <tr>
                          <th><i class="pcn fa fa-male" style=""></i></th>
                          <th><i class="pcn fa fa-female" style=""></i></th>
                          <th><i class="pcn fa fa-calendar" style=""></i></th>
                        </tr>
                          <?php 

                          	if (isset($_POST['jan'])) {
                          	
                             $data=array();
     						 $sql="SELECT cnt_gents, cnt_ladies,date FROM daily$sets WHERE(date BETWEEN '2018-01-01 00:01:00' AND '2018-01-31 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              $cnt_gents=$data['cnt_gents'];
                              $cnt_ladies=$data['cnt_ladies'];
                              $date=$data['date'];
                             echo "<tr><td>".$cnt_gents."</td><td>".$cnt_ladies."</td><td>".$date."</td></tr>;";
                            }}
                            elseif (isset($_POST['feb'])) {
                             $data=array();
     						 $sql="SELECT cnt_gents, cnt_ladies,date FROM daily$sets WHERE(date BETWEEN '2018-02-01 00:01:00' AND '2018-02-28 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              $cnt_gents=$data['cnt_gents'];
                              $cnt_ladies=$data['cnt_ladies'];
                              $date=$data['date'];
                             echo "<tr><td>".$cnt_gents."</td><td>".$cnt_ladies."</td><td>".$date."</td></tr>;";
                            }}
                            elseif (isset($_POST['mar'])) {
                             $data=array();
     						 $sql="SELECT cnt_gents, cnt_ladies,date FROM daily$sets WHERE(date BETWEEN '2018-03-01 00:01:00' AND '2018-03-31 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              $cnt_gents=$data['cnt_gents'];
                              $cnt_ladies=$data['cnt_ladies'];
                              $date=$data['date'];
                             echo "<tr><td>".$cnt_gents."</td><td>".$cnt_ladies."</td><td>".$date."</td></tr>;";
                            }}
                            elseif (isset($_POST['apr'])) {
                             $data=array();
     						 $sql="SELECT cnt_gents, cnt_ladies,date FROM daily$sets WHERE(date BETWEEN '2018-04-01 00:01:00' AND '2018-04-30 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              $cnt_gents=$data['cnt_gents'];
                              $cnt_ladies=$data['cnt_ladies'];
                              $date=$data['date'];
                             echo "<tr><td>".$cnt_gents."</td><td>".$cnt_ladies."</td><td>".$date."</td></tr>;";
                            }}
                            elseif (isset($_POST['may'])) {
                             $data=array();
     						 $sql="SELECT cnt_gents, cnt_ladies,date FROM daily$sets WHERE(date BETWEEN '2018-05-01 00:01:00' AND '2018-05-31 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              $cnt_gents=$data['cnt_gents'];
                              $cnt_ladies=$data['cnt_ladies'];
                              $date=$data['date'];
                             echo "<tr><td>".$cnt_gents."</td><td>".$cnt_ladies."</td><td>".$date."</td></tr>;";
                            }}
                            elseif (isset($_POST['june'])) {
                             $data=array();
     						 $sql="SELECT cnt_gents, cnt_ladies,date FROM daily$sets WHERE(date BETWEEN '2018-06-01 00:01:00' AND '2018-06-30 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              $cnt_gents=$data['cnt_gents'];
                              $cnt_ladies=$data['cnt_ladies'];
                              $date=$data['date'];
                             echo "<tr><td>".$cnt_gents."</td><td>".$cnt_ladies."</td><td>".$date."</td></tr>;";
                            }}
                            elseif (isset($_POST['july'])) {
                             $data=array();
     						 $sql="SELECT cnt_gents, cnt_ladies,date FROM daily$sets WHERE(date BETWEEN '2018-07-01 00:01:00' AND '2018-07-31 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              $cnt_gents=$data['cnt_gents'];
                              $cnt_ladies=$data['cnt_ladies'];
                              $date=$data['date'];
                             echo "<tr><td>".$cnt_gents."</td><td>".$cnt_ladies."</td><td>".$date."</td></tr>;";
                            }}
                            elseif (isset($_POST['aug'])) {
                             $data=array();
     						 $sql="SELECT cnt_gents, cnt_ladies,date FROM daily$sets WHERE(date BETWEEN '2018-08-01 00:01:00' AND '2018-08-31 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              $cnt_gents=$data['cnt_gents'];
                              $cnt_ladies=$data['cnt_ladies'];
                              $date=$data['date'];
                             echo "<tr><td>".$cnt_gents."</td><td>".$cnt_ladies."</td><td>".$date."</td></tr>;";
                            }}
                            elseif (isset($_POST['sept'])) {
                             $data=array();
     						 $sql="SELECT cnt_gents, cnt_ladies,date FROM daily$sets WHERE(date BETWEEN '2018-09-01 00:01:00' AND '2018-09-30 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              $cnt_gents=$data['cnt_gents'];
                              $cnt_ladies=$data['cnt_ladies'];
                              $date=$data['date'];
                             echo "<tr><td>".$cnt_gents."</td><td>".$cnt_ladies."</td><td>".$date."<td></tr>;";
                            }}
                            elseif (isset($_POST['oct'])) {
                             $data=array();
     						 $sql="SELECT cnt_gents, cnt_ladies,date FROM daily$sets WHERE(date BETWEEN '2018-10-01 00:01:00' AND '2018-10-31 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              $cnt_gents=$data['cnt_gents'];
                              $cnt_ladies=$data['cnt_ladies'];
                              $date=$data['date'];
                             echo "<tr><td>".$cnt_gents."</td><td>".$cnt_ladies."</td><td>".$date."</td></tr>;";
                            }}
                            elseif (isset($_POST['nov'])) {
                             $data=array();
     						 $sql="SELECT cnt_gents, cnt_ladies,date FROM daily$sets WHERE(date BETWEEN '2018-11-01 00:01:00' AND '2018-11-30 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              $cnt_gents=$data['cnt_gents'];
                              $cnt_ladies=$data['cnt_ladies'];
                              $date=$data['date'];
                             echo "<tr><td>".$cnt_gents."</td><td>".$cnt_ladies."</td><td>".$date."</td></tr>;";
                            }}
                            elseif (isset($_POST['dec'])) {
                             $data=array();
     						 $sql="SELECT cnt_gents, cnt_ladies,date FROM daily$sets WHERE(date BETWEEN '2018-12-01 00:01:00' AND '2018-12-31 23:58:55');";
                             $res=mysqli_query($connect,$sql);
                              while($data=mysqli_fetch_assoc($res))
                               {
                              $cnt_gents=$data['cnt_gents'];
                              $cnt_ladies=$data['cnt_ladies'];
                              $date=$data['date'];
                             echo "<tr><td>".$cnt_gents."</td><td>".$cnt_ladies."</td><td>".$date."</td></tr>;";
                            }}
                          ?>
                          
                      
                   </table>
                </div>
              </div>
            	</div>
            	
            </div>    

          </div>    
        </div>  
      </div>


      <div class="col-md-1"></div> 

      
      <div class="col-md-12 footer" style="">
      <footer>&copy; 2017-18 <span style="color: orange; font-weight:800;">|</span> team minions &reg; <span style="color: orange; font-weight:800;">|</span> </footer>
    </div>         
    </div> <!-- row end -->                 
    	
    	
 
    
    

<!-- graphs -->
    
  </div>
</div>


</body>
</html>
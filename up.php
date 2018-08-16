<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="refresh" content="5" >
</head>
<body>
<?php date_default_timezone_set('Asia/Kolkata');
echo date('H:i:sa'); ?>



<?php
 $connect=mysqli_connect("localhost:3306","root","","pune") or die("db cannection failled");
// include("dbconnect.php");
// tx data female to live
		$data11=array();
		$sql11="SELECT * FROM female1;";
		$res11=mysqli_query($connect,$sql11); 
		while($data11=mysqli_fetch_assoc($res11))
		 {
		 	$cnt_ladies=$data11['cnt_ladies'];
		 	$dustbin_l=$data11['l_live_dustbin'];
		 	$airquality_l=$data11['l_live_airquality'];
		 	$water_l=$data11['l_live_water'];
		 	$floor1_l=$data11['l_live_floor1'];
		 	$floor2_l=$data11['l_live_floor2'];

		 	$round_cnt_ladies=$cnt_ladies/2;

		 	echo "<br>ladies cnt=".(round($round_cnt_ladies)."");
		 	echo " dustbin=".$dustbin_l;
		 	echo " AQ=".$airquality_l;
		 	echo " h2O=".$water_l;
		 	echo "f1=".$floor1_l;
		 	echo "f2=".$floor2_l."<br>";
		 
		 	 $sql12="UPDATE live1 
		 	 			set cnt_ladies='$round_cnt_ladies',
		 	 			 l_live_floor2='$floor2_l',
		 	 			 l_live_floor1='$floor1_l',
		 	 			l_live_dustbin='$dustbin_l',
		 	 		 l_live_airquality='$airquality_l',
		 	 			  l_live_water='$water_l';";
        $res12=mysqli_query($connect,$sql12);}



// tx data male to live
		$data11=array();
		$sql11="SELECT * FROM male1;";
		$res13=mysqli_query($connect,$sql11); 
		while($data11=mysqli_fetch_assoc($res13))
		 {
		 	$cnt_gents=$data11['cnt_gents'];
		 	$dustbin_g=$data11['g_live_dustbin'];
		 	$airquality_g=$data11['g_live_airquality'];
		 	$water_g=$data11['g_live_water'];
		 	$floor1_g=$data11['g_live_floor1'];
		 	$floor2_g=$data11['g_live_floor2'];

		 	$round_cnt_gents=$cnt_gents/2;

		 	echo "<br>gents cnt=".(round($round_cnt_gents)."");

		 	echo " dustbin=".$dustbin_g;
		 	echo " AQ=".$airquality_g;
		 	echo " h2O=".$water_g;
		 	echo " f1=".$floor1_g;
		 	echo " f2=".$floor2_g;
		 
		 	 $sql12="UPDATE live1 
		 	 			set cnt_gents='$round_cnt_gents',
		 	 			 g_live_floor2='$floor2_g',
		 	 			 g_live_floor1='$floor1_g',
		 	 			g_live_dustbin='$dustbin_g',
		 	 		 g_live_airquality='$airquality_g',
		 	 			  g_live_water='$water_g';";
        $res12=mysqli_query($connect,$sql12);}





   $data0=array();
   $sql0="SELECT g_live_floor1, g_live_floor2, l_live_floor1, l_live_floor2 FROM live1 WHERE id=1;";
   $res0=mysqli_query($connect,$sql0);
   while ($data0=mysqli_fetch_assoc($res0)) {
        	$gf1=$data0['g_live_floor1'];
        	$gf2=$data0['g_live_floor2'];
        	$lf1=$data0['l_live_floor1'];
        	$lf2=$data0['l_live_floor2'];
        	
        } 

       
        
        date_default_timezone_set('Asia/Kolkata');
		$current= date("y-m-d h:i:sa");
	
		if ($gf1+$gf2==2) {
			$sql01="UPDATE clean_gents1 SET g_cleanstatus='1',
									            responce='$current' WHERE id=1;";
			$res01=mysqli_query($connect,$sql01);

			$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=SWMSIN&route=4&mobiles=919527504731,&authkey=219275Ajb3YYuTjk5z5b2b715c&country=91&message=Cleaning in process at wr. Id 1(gents)",
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
			
		if ($lf1+$lf2==2) {
			$sql02="UPDATE clean_ladies1 SET l_cleanstatus='1',
												 responce='$current' WHERE id=1;";
			$res02=mysqli_query($connect,$sql02);

			$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=SWMSIN&route=4&mobiles=919527504731,&authkey=219275Ajb3YYuTjk5z5b2b715c&country=91&message=Cleaning in process at wr. Id 2(ladies)",
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


// count to feedback

if($cnt_ladies==0){
    
    $sql9="UPDATE live1 SET l_fb_good=0,l_fb_bad=0,l_fb_dustbin=0,l_fb_smell=0,l_fb_floor=0,l_fb_toiletpaper=0,l_fb_handwash=0,l_fb_washbasin=0;";
    $res9=mysqli_query($connect,$sql9);
    
}


if($cnt_gents==0){
    
    $sql9="UPDATE live1 SET g_fb_good=0,g_fb_bad=0,g_fb_dustbin=0,g_fb_smell=0,g_fb_floor=0,g_fb_toiletpaper=0,g_fb_handwash=0,g_fb_washbasin=0;";

    $res9=mysqli_query($connect,$sql9);
}

// Mail///////////

date_default_timezone_set('Asia/Kolkata');
$current= date("y-m-d h:i:sa");
$mail_send="05:00:02pm";

if ($current==$mail_send) {
$datar=array();
$sqlr1="SELECT cnt_gents, cnt_ladies,l_fb_good,l_fb_bad,g_fb_good,g_fb_bad FROM live1 ORDER BY id DESC LIMIT 1;";
$resr1=mysqli_query($connect,$sqlr1);
while ($datar=mysqli_fetch_assoc($resr1)) {
	$gents1=$datar['cnt_gents'];
	$ladies1=$datar['cnt_ladies'];
	$l_good1=$datar['l_fb_good'];
	$l_bad1=$datar['l_fb_bad'];
	$g_good1=$datar['g_fb_good'];
	$g_bad1=$datar['g_fb_bad'];
	$count1=$gents1+$ladies1;
	$good1=$l_good1+$g_good1;
	$bad1=$l_bad1+$g_bad1;
}
$sqlr2="SELECT cnt_gents, cnt_ladies,l_fb_good,l_fb_bad,g_fb_good,g_fb_bad FROM live2 ORDER BY id DESC LIMIT 1;";
$resr2=mysqli_query($connect,$sqlr2);
while ($datar=mysqli_fetch_assoc($resr2)) {
	$gents2=$datar['cnt_gents'];
	$ladies2=$datar['cnt_ladies'];
	$l_good2=$datar['l_fb_good'];
	$l_bad2=$datar['l_fb_bad'];
	$g_good2=$datar['g_fb_good'];
	$g_bad2=$datar['g_fb_bad'];
	$count2=$gents2+$ladies2;
	$good2=$l_good2+$g_good2;
	$bad2=$l_bad2+$g_bad2;
}
$sqlr3="SELECT cnt_gents, cnt_ladies,l_fb_good,l_fb_bad,g_fb_good,g_fb_bad FROM live3 ORDER BY id DESC LIMIT 1;";
$resr3=mysqli_query($connect,$sqlr3);
while ($datar=mysqli_fetch_assoc($resr3)) {
	$gents3=$datar['cnt_gents'];
	$ladies3=$datar['cnt_ladies'];
	$l_good3=$datar['l_fb_good'];
	$l_bad3=$datar['l_fb_bad'];
	$g_good3=$datar['g_fb_good'];
	$g_bad3=$datar['g_fb_bad'];
	$count3=$gents3+$ladies3;
	$good3=$l_good3+$g_good3;
	$bad3=$l_bad3+$g_bad3;
}
$sqlr4="SELECT cnt_gents, cnt_ladies,l_fb_good,l_fb_bad,g_fb_good,g_fb_bad FROM live4 ORDER BY id DESC LIMIT 1;";
$resr4=mysqli_query($connect,$sqlr4);
while ($datar=mysqli_fetch_assoc($resr4)) {
	$gents4=$datar['cnt_gents'];
	$ladies4=$datar['cnt_ladies'];
	$l_good4=$datar['l_fb_good'];
	$l_bad4=$datar['l_fb_bad'];
	$g_good4=$datar['g_fb_good'];
	$g_bad4=$datar['g_fb_bad'];
	$count4=$gents4+$ladies4;
	$good4=$l_good4+$g_good4;
	$bad4=$l_bad4+$g_bad4;
}
$sqlr5="SELECT cnt_gents, cnt_ladies,l_fb_good,l_fb_bad,g_fb_good,g_fb_bad FROM live5 ORDER BY id DESC LIMIT 1;";
$resr5=mysqli_query($connect,$sqlr5);
while ($datar=mysqli_fetch_assoc($resr5)) {
	$gents5=$datar['cnt_gents'];
	$ladies5=$datar['cnt_ladies'];
	$l_good5=$datar['l_fb_good'];
	$l_bad5=$datar['l_fb_bad'];
	$g_good5=$datar['g_fb_good'];
	$g_bad5=$datar['g_fb_bad'];
	$count5=$gents5+$ladies5;
	$good5=$l_good5+$g_good5;
	$bad5=$l_bad5+$g_bad5;
}
// Total count
$total_cnt=$count1+$count2+$count3+$count4+$count5;
$total_gfb=$good1+$good2+$good3+$good4+$good5;
$total_bfb=$bad1+$bad2+$bad3+$bad4+$bad5;

	$to = "vrushabhkale4005@gmail.com";
    $subject = "washroom Report";
         
    $message = "<b>This is daily washroom report.</b>";
    $message .= "<div style='border:2px solid black; text-align: center;'>
					<h1>Washroom Report</h1>
					<h6>$current</h6>
					<table border=1>
						<tr><th>Total count</th>
							<th>Good feedback</th>
							<th>Bad feedback</th></tr>
						<tr><td>$total_cnt</td>
							<td>$total_gfb</td>
							<td>$total_bfb</td></tr>
					</table><br>

		<table border='1' style='text-align: center'>
		<tr><th>Washroom ID</th><th>People count</th><th>G.Feedback</th><th>B.Feedbak</th></tr>
		<tr><td>G-01</td><td>$count1</td><td>$good1</td><td>$bad1</td></tr>
		<tr><td>G-02</td><td>$count2</td><td>$good2</td><td>$bad2</td></tr>
		<tr><td>G-03</td><td>$count3</td><td>$good3</td><td>$bad3</td></tr>
		<tr><td>G-04</td><td>$count4</td><td>$good4</td><td>$bad4</td></tr>
		<tr><td>G-05</td><td>$count5</td><td>$good5</td><td>$bad5</td></tr>
</table><br></div>";
         
         $header = "From:info@swmsindia.com \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
}

?>


</body>
</html>

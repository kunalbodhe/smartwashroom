<?php
 $connect=mysqli_connect("localhost:3306","root","","pune") or die("db cannection failled");
// include("dbconnect.php");

date_default_timezone_set('Asia/Kolkata');
$current= date("y-m-d h:i:sa");
$tx_livetodaily="11:57:02pm";
$rst_data="12:00:02am";

if ($current==$tx_livetodaily) {
	
	$data1=array();
						                       	$sql1="SELECT * FROM live1 ORDER BY id DESC LIMIT 1;";
						                         		$res1=mysqli_query($connect,$sql1); 
						                         		while($data1=mysqli_fetch_assoc($res1))
						                         		{
							                              $good_g= $data1['g_fb_good'];
							                              $bad_l= $data1['l_fb_bad'];
							                              $dustbin_g= $data1['g_fb_dustbin'];
							                              $smell_g= $data1['g_fb_smell'];
							                              $toiletpaper_g= $data1['g_fb_toiletpaper'];
							                              $handwash_g= $data1['g_fb_handwash'];
							                              $washbasin_g= $data1['g_fb_washbasin'];
							                              $floor_g= $data1['g_fb_floor'];
							                              
							                              $good_l= $data1['l_fb_good'];
							                              $bad_l= $data1['l_fb_bad'];
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
							                              $floor_g1= $data1['g_live_floor1'];
							                              $floor_l2= $data1['l_live_floor2'];
							                              $floor_g2= $data1['g_live_floor2'];
							                              $g_lastclean=$data1['g_lastclean'];
							                              $l_lastclean=$data1['l_lastclean'];
							                          
		$sql5="INSERT into daily1(cnt_gents,cnt_ladies,cnt_handicap,l_fb_good,l_fb_bad,l_fb_dustbin,l_fb_smell,l_fb_toilletpaper,l_live_handwash,l_live_washbasin,g_fb_good,g_fb_bad,g_fb_dustbin,g_fb_smell,g_fb_toilletpaper,g_live_handwash,g_live_washbasin) VALUES ('$cnt_gents','$cnt_ladies','$cnt_handicap','$good_l','$bad_l','$dustbin_l','$smell_l','$toilletpaper_l','$handwash_l','$washbasin_l','$good_g','$bad_g','$dustbin_g','$smell_g','$toilletpaper_g','$handwash_g','$washbasin_g');";
		$res5=mysqli_query($connect,$sql5);					                          

	 }

if ($current==$rst_data) {

							$sql6="UPDATE live1 SET g_fb_good='0',
													g_fb_bad='0',
													g_fb_dustbin='0',
													g_fb_smell='0', 
													g_fb_floor='0',
													g_fb_toiletpaper='0',
													g_fb_handwash='0',
													g_fb_washbasin='0',
													l_fb_good='0',
													l_fb_bad='0',
													l_fb_dustbin='0',
													l_fb_smell='0', 
													l_fb_floor='0',
													l_fb_toiletpaper='0',
													l_fb_handwash='0',
													l_fb_washbasin='0',
													cnt_gents='0',
													cnt_ladies='0',
													cnt_handicap='0',WHERE id=1";

							$res6=mysqli_query($connect,$sql6);
						}

$data17=array();	
$sql17="SELECT id FROM daily1 ORDER BY id DESC LIMIT 1;";	
$res17=mysqli_query($connect,$sql17);
while($data17=mysqli_fetch_assoc($res17))
{ $lst_id_daily=$data17['id'];}
 echo $lst_id_daily;

$total_id_daily= $lst_id_daily-7;
echo $total_id_daily;

?>
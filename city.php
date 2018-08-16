
<?php 
	session_start();
	$_SESSION['city']="nil";
	 if (isset($_POST['submit']))
	 {
	 	$city=$_POST['city'];
		
		$_SESSION['city']=$city;
				 	
		header('Location:mainds.php');	
	}	
?>
<?php

$pune95275=mysqli_connect("localhost:3306","root","","pune95275") or die("db cannection failled");
$nagpur95275=mysqli_connect("localhost:3306","root","","nagpur95275") or die("db cannection failled");
$mumbai95275=mysqli_connect("localhost:3306","root","","mumbai95275") or die("db cannection failled");
$delhi95275=mysqli_connect("localhost:3306","root","","delhi95275") or die("db cannection failled");
$hyderabad95275=mysqli_connect("localhost:3306","root","","hyderabad95275") or die("db cannection failled");
$banglore95275=mysqli_connect("localhost:3306","root","","banglore95275") or die("db cannection failled");


// 1st db pune
	$data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS pcnt1 FROM daily1;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pcnt1= $data['pcnt1'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS pgf1 FROM daily1;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pgf1= $data['pgf1'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS pbf1 FROM daily1;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pbf1= $data['pbf1'];}
// set 2	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS pcnt2 FROM daily2;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pcnt2= $data['pcnt2'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS pgf2 FROM daily2;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pgf2= $data['pgf2'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS pbf2 FROM daily2;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pbf2= $data['pbf2'];}
// set 3	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS pcnt3 FROM daily3;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pcnt3= $data['pcnt3'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS pgf3 FROM daily3;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pgf3= $data['pgf3'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS pbf3 FROM daily3;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pbf3= $data['pbf3'];}
// set 4	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS pcnt4 FROM daily4;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pcnt4= $data['pcnt4'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS pgf4 FROM daily4;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pgf4= $data['pgf4'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS pbf4 FROM daily4;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pbf4= $data['pbf4'];}
// set 5	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS pcnt5 FROM daily5;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pcnt5= $data['pcnt5'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS pgf5 FROM daily5;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pgf5= $data['pgf5'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS pbf5 FROM daily5;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pbf5= $data['pbf5'];}
// set 6	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS pcnt6 FROM daily6;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pcnt6= $data['pcnt6'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS pgf6 FROM daily6;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pgf6= $data['pgf6'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS pbf6 FROM daily6;";
	$res=mysqli_query($pune95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $pbf6= $data['pbf6'];}
// 2nd db nagpur
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS ncnt1 FROM daily1;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $ncnt1= $data['ncnt1'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS ngf1 FROM daily1;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $ngf1= $data['ngf1'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS nbf1 FROM daily1;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $nbf1= $data['nbf1'];}
// set 2	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS ncnt2 FROM daily2;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $ncnt2= $data['ncnt2'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS ngf2 FROM daily2;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $ngf2= $data['ngf2'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS nbf2 FROM daily2;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $nbf2= $data['nbf2'];}
// set 3	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS ncnt3 FROM daily3;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $ncnt3= $data['ncnt3'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS ngf3 FROM daily3;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $ngf3= $data['ngf3'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS nbf3 FROM daily3;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $nbf3= $data['nbf3'];}
// set 4	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS ncnt4 FROM daily4;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $ncnt4= $data['ncnt4'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS ngf4 FROM daily4;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $ngf4= $data['ngf4'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS nbf4 FROM daily4;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $nbf4= $data['nbf4'];}
// set 5	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS ncnt5 FROM daily5;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $ncnt5= $data['ncnt5'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS ngf5 FROM daily5;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $ngf5= $data['ngf5'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS nbf5 FROM daily5;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $nbf5= $data['nbf5'];}
// set 6	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS ncnt6 FROM daily6;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $ncnt6= $data['ncnt6'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS ngf6 FROM daily6;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $ngf6= $data['ngf6'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS nbf6 FROM daily6;";
	$res=mysqli_query($nagpur95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $nbf6= $data['nbf6'];}
// 3rd db mumbai
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS mcnt1 FROM daily1;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mcnt1= $data['mcnt1'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS mgf1 FROM daily1;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mgf1= $data['mgf1'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS mbf1 FROM daily1;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mbf1= $data['mbf1'];}
// set 2	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS mcnt2 FROM daily2;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mcnt2= $data['mcnt2'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS mgf2 FROM daily2;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mgf2= $data['mgf2'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS mbf2 FROM daily2;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mbf2= $data['mbf2'];}
// set 3	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS mcnt3 FROM daily3;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mcnt3= $data['mcnt3'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS mgf3 FROM daily3;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mgf3= $data['mgf3'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS mbf3 FROM daily3;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mbf3= $data['mbf3'];}
// set 4	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS mcnt4 FROM daily4;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mcnt4= $data['mcnt4'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS mgf4 FROM daily4;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mgf4= $data['mgf4'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS mbf4 FROM daily4;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mbf4= $data['mbf4'];}
// set 5	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS mcnt5 FROM daily5;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mcnt5= $data['mcnt5'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS mgf5 FROM daily5;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mgf5= $data['mgf5'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS mbf5 FROM daily5;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mbf5= $data['mbf5'];}
// set 6	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS mcnt6 FROM daily6;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mcnt6= $data['mcnt6'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS mgf6 FROM daily6;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mgf6= $data['mgf6'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS mbf6 FROM daily6;";
	$res=mysqli_query($mumbai95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $mbf6= $data['mbf6'];}
// 4th db delhi
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS dcnt1 FROM daily1;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dcnt1= $data['dcnt1'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS dgf1 FROM daily1;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dgf1= $data['dgf1'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS dbf1 FROM daily1;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dbf1= $data['dbf1'];}
// set 2	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS dcnt2 FROM daily2;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dcnt2= $data['dcnt2'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS dgf2 FROM daily2;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dgf2= $data['dgf2'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS dbf2 FROM daily2;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dbf2= $data['dbf2'];}
// set 3	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS dcnt3 FROM daily3;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dcnt3= $data['dcnt3'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS dgf3 FROM daily3;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dgf3= $data['dgf3'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS dbf3 FROM daily3;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dbf3= $data['dbf3'];}
// set 4	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS dcnt4 FROM daily4;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dcnt4= $data['dcnt4'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS dgf4 FROM daily4;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dgf4= $data['dgf4'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS dbf4 FROM daily4;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dbf4= $data['dbf4'];}
// set 5	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS dcnt5 FROM daily5;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dcnt5= $data['dcnt5'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS dgf5 FROM daily5;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dgf5= $data['dgf5'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS dbf5 FROM daily5;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dbf5= $data['dbf5'];}
// set 6	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS dcnt6 FROM daily6;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dcnt6= $data['dcnt6'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS dgf6 FROM daily6;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dgf6= $data['dgf6'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS dbf6 FROM daily6;";
	$res=mysqli_query($delhi95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $dbf6= $data['dbf6'];}
// 5th db hyderabad
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS hcnt1 FROM daily1;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hcnt1= $data['hcnt1'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS hgf1 FROM daily1;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hgf1= $data['hgf1'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS hbf1 FROM daily1;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hbf1= $data['hbf1'];}
// set 2	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS hcnt2 FROM daily2;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hcnt2= $data['hcnt2'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS hgf2 FROM daily2;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hgf2= $data['hgf2'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS hbf2 FROM daily2;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hbf2= $data['hbf2'];}
// set 3	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS hcnt3 FROM daily3;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hcnt3= $data['hcnt3'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS hgf3 FROM daily3;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hgf3= $data['hgf3'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS hbf3 FROM daily3;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hbf3= $data['hbf3'];}
// set 4	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS hcnt4 FROM daily4;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hcnt4= $data['hcnt4'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS hgf4 FROM daily4;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hgf4= $data['hgf4'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS hbf4 FROM daily4;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hbf4= $data['hbf4'];}
// set 5	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS hcnt5 FROM daily5;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hcnt5= $data['hcnt5'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS hgf5 FROM daily5;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hgf5= $data['hgf5'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS hbf5 FROM daily5;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hbf5= $data['hbf5'];}
// set 6	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS hcnt6 FROM daily6;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hcnt6= $data['hcnt6'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS hgf6 FROM daily6;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hgf6= $data['hgf6'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS hbf6 FROM daily6;";
	$res=mysqli_query($hyderabad95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $hbf6= $data['hbf6'];}
// 6th db banglore 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS bcnt1 FROM daily1;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bcnt1= $data['bcnt1'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS bgf1 FROM daily1;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bgf1= $data['bgf1'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS bbf1 FROM daily1;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bbf1= $data['bbf1'];}
// set 2	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS bcnt2 FROM daily2;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bcnt2= $data['bcnt2'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS bgf2 FROM daily2;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bgf2= $data['bgf2'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS bbf2 FROM daily2;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bbf2= $data['bbf2'];}
// set 3	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS bcnt3 FROM daily3;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bcnt3= $data['bcnt3'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS bgf3 FROM daily3;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bgf3= $data['bgf3'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS bbf3 FROM daily3;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bbf3= $data['bbf3'];}
// set 4	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS bcnt4 FROM daily4;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bcnt4= $data['bcnt4'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS bgf4 FROM daily4;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bgf4= $data['bgf4'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS bbf4 FROM daily4;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bbf4= $data['bbf4'];}
// set 5	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS bcnt5 FROM daily5;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bcnt5= $data['bcnt5'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS bgf5 FROM daily5;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bgf5= $data['bgf5'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS bbf5 FROM daily5;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bbf5= $data['bbf5'];}
// set 6	 
	 $data=array();
	$sql="SELECT SUM(cnt_gents+cnt_ladies) AS bcnt6 FROM daily6;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bcnt6= $data['bcnt6'];}
	 $sql="SELECT SUM(g_fb_good+l_fb_good) AS bgf6 FROM daily6;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bgf6= $data['bgf6'];}
	 $sql="SELECT SUM(g_fb_bad+l_fb_bad) AS bbf6 FROM daily6;";
	$res=mysqli_query($banglore95275,$sql);
	while($data=mysqli_fetch_assoc($res)) {
	 $bbf6= $data['bbf6'];}
// ____________________________


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
				  margin-top: 28px;
				  padding-top: 20px;
				  padding-bottom: 20px;


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
	
	
	/**{border: 1px solid white;}*/*/
</style>


</head>
<body>
	<div class="heading">
		<div>
			<div>
				<h1 class="headtext"><b>WELCOME TO
				<?php
					 // session_start();
					$user=$_SESSION['username'];
					if($user=="nil"){
						echo"<script>window.location.href='index.php';</script>";
						}
					else{
						echo $user;
						}
				?></b>
				 </h1>
			
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
									<h4><b>SELECT CITY</b></h4><hr>
									<form action="" method="POST">
										<select name="city" style="height: 35px;">
											 <!-- <option>SELECT SET</option> -->
											<option value="PUNE95275">PUNE</option>
											<option value="NAGPUR95275">NAGPUR</option>
											<option value="MUMBAI95275">MUMBAI</option>
											<option value="BANGLORE95275">BANGLORE</option>
											<option value="DELHI95275">DELHI</option>
											<option value="HYDERABAD95275">HYDERABAD</option>
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
                                  //     $data99=array();
                                  //     $sql99="SELECT sum(cnt_gents)as total1 FROM live;";
                                  //     $res9830=mysqli_query($connect,$sql99); 
                                  //     while($data99=mysqli_fetch_assoc($res9830))
                                  //     { $cnt_gents30=$data99['total1'];
                                  //         }

                                  // $data99=array();
                                  //       $sql99="SELECT sum(cnt_ladies)as total2 FROM live;";
                                  //       $res9730=mysqli_query($connect,$sql99); 
                                  //       while($data99=mysqli_fetch_assoc($res9730))
                                  //       { $cnt_ladies30=$data99['total2'];
                                  //          }
                                  //           $total_cnt=$cnt_gents30+$cnt_ladies30;
									$total_cnt= $pcnt1+$pcnt2+$pcnt3+$pcnt4+$pcnt5+$pcnt6+
												$mcnt1+$mcnt2+$mcnt3+$mcnt4+$mcnt5+$mcnt6+	
												$ncnt1+$ncnt2+$ncnt3+$ncnt4+$ncnt5+$ncnt6+
												$hcnt1+$hcnt2+$hcnt3+$hcnt4+$hcnt5+$hcnt6+
												$bcnt1+$bcnt2+$bcnt3+$bcnt4+$bcnt5+$bcnt6+
												$dcnt1+$dcnt2+$dcnt3+$dcnt4+$dcnt5+$dcnt6;
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
                                  		//  // echo $g_good."<br>".$g_bad."<br>".$l_good."<br>".$l_bad."<br>";
                                  		// $cnt=$l_cnt+$g_cnt;
                                  		// $good=$g_good+$l_good;
                                  		// $bad=$l_bad+$g_bad;
										$good=$pgf1+$pgf2+$pgf3+$pgf4+$pgf5+$pgf6+
											  $mgf1+$mgf2+$mgf3+$mgf4+$mgf5+$mgf6+
											  $ngf1+$ngf2+$ngf3+$ngf4+$ngf5+$ngf6+
											  $hgf1+$hgf2+$hgf3+$hgf4+$hgf5+$hgf6+
											  $bgf1+$bgf2+$bgf3+$bgf4+$bgf5+$bgf6+
											  $dgf1+$dgf2+$dgf3+$dgf4+$dgf5+$dgf6;

										$bad= $pbf1+$pbf2+$pbf3+$pbf4+$pbf5+$pbf6+
											  $mbf1+$mbf2+$mbf3+$mbf4+$mbf5+$mbf6+
											  $nbf1+$nbf2+$nbf3+$nbf4+$nbf5+$nbf6+
											  $hbf1+$hbf2+$hbf3+$hbf4+$hbf5+$hbf6+
											  $bbf1+$bbf2+$bbf3+$bbf4+$bbf5+$bbf6+
											  $dbf1+$dbf2+$dbf3+$dbf4+$dbf5+$dbf6;
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
						<!-- <div class="row">
							<div class="col-md-12">
								<div class="subhead">
									<span class="barhead">CLEANING STAUS</span><hr>
									<p class="bar">
										<div class="w3-light-grey">
  											<div class="w3-container w3-blue" style="width:75%">75%</div>
										</div>
									</p>
								</div>
							</div>
						</div> -->
					</div>

					<div class="col-md-9 sidebody">
						<div class="row">
							<!-- <div class="col-md-10"></div> -->
							<!-- <div class="col-md-12">
								<input id="btn-Preview-Image" type="button" value="Preview"/>
    							<a id="btn-Convert-Html2Image" href="">Download</a>
							</div> -->
						</div>
						<div class="row">
							<div class="col-md-12" id="html-content-holder">
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
        
    },
    xAxis: {
        categories: [
            'pune',
            'Nagpur',
            'Mumbai',
            'Goa',
            'Chennai',
            'hyderabad'
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
        data: [<?php echo $pc.",".$mc.",".$nc.",".$hc.",".$bc.",".$dc."";?>]

    }, {
        name: 'Good feedback',
        data: [<?php echo $pg.",".$mg.",".$ng.",".$hg.",".$bg.",".$dg."";?>]

    }, {
        name: 'Bad feedback',
        data: [<?php echo $pb.",".$mb.",".$nb.",".$hb.",".$bb.",".$db."";?>]

    }]
});
</script>


							</div>
						</div>
<?php
										  $pc=$pcnt1+$pcnt2+$pcnt3+$pcnt4+$pcnt5+$pcnt6;
										  $mc=$mcnt1+$mcnt2+$mcnt3+$mcnt4+$mcnt5+$mcnt6;
										  $nc=$ncnt1+$ncnt2+$ncnt3+$ncnt4+$ncnt5+$ncnt6;
										  $hc=$hcnt1+$hcnt2+$hcnt3+$hcnt4+$hcnt5+$hcnt6;
										  $bc=$bcnt1+$bcnt2+$bcnt3+$bcnt4+$bcnt5+$bcnt6;
										  $dc=$dcnt1+$dcnt2+$dcnt3+$dcnt4+$dcnt5+$dcnt6;

										  $pg=$pgf1+$pgf2+$pgf3+$pgf4+$pgf5+$pgf6;
										  $mg=$mgf1+$mgf2+$mgf3+$mgf4+$mgf5+$mgf6;
										  $ng=$ngf1+$ngf2+$ngf3+$ngf4+$ngf5+$ngf6;
										  $hg=$hgf1+$hgf2+$hgf3+$hgf4+$hgf5+$hgf6;
									      $bg=$bgf1+$bgf2+$bgf3+$bgf4+$bgf5+$bgf6;
										  $dg=$dgf1+$dgf2+$dgf3+$dgf4+$dgf5+$dgf6;

										 $pb=$pbf1+$pbf2+$pbf3+$pbf4+$pbf5+$pbf6;
										 $mb=$mbf1+$mbf2+$mbf3+$mbf4+$mbf5+$mbf6;
									     $nb=$nbf1+$nbf2+$nbf3+$nbf4+$nbf5+$nbf6;
										 $hb=$hbf1+$hbf2+$hbf3+$hbf4+$hbf5+$hbf6;
										 $bb=$bbf1+$bbf2+$bbf3+$bbf4+$bbf5+$bbf6;
										 $db=$dbf1+$dbf2+$dbf3+$dbf4+$dbf5+$dbf6;

                                  		

						$fb1=$pg+$pb;
						$rate1=$pg/$fb1*100;
						$fb2=$mg+$mb;
						$rate2=$mg/$fb2*100;
						$fb3=$ng+$nb;
						$rate3=$ng/$fb3*100;
						$fb4=$hg+$hb;
						$rate4=$hg/$fb4*100;
						$fb5=$bg+$bb;
						$rate5=$bg/$fb5*100;
						$fb6=$dg+$db;
						$rate6=$dg/$fb6*100;
						// echo $rate1."<br>".$rate2."<br>".$rate3."<br>".$rate4."<br>".$rate5."<br>".$rate6."<br>";
						?>


						<div class="row">
							<div class="col-md-2 wr_id">
								<h4 class="wr_id_heading">PUNE</h4>
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
								<h4 class="wr_id_heading">NAGPUR</h4>
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
								<h4 class="wr_id_heading">MUMBAI</h4>
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
								<h4 class="wr_id_heading">HYDERABAD</h4>
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
								<h4 class="wr_id_heading">BANGLORE</h4>
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
								<h4 class="wr_id_heading">DELHI</h4>
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
<?php


?>
	
		
		<div class="col-md-12 footer" style="">
			<footer>&copy; 2018 <span style="color: orange; font-weight:800;">|</span>  smart washroom &reg; <span style="color: orange; font-weight:800;">|</span> design by: team minions</footer>
		</div>



<!-- graphs -->
<script>
$(document).ready(function(){

	
var element = $("#html-content-holder"); // global variable
var getCanvas; // global variable
 
    $("#btn-Preview-Image").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
             }
         });
    });

	$("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
	});

});

</script>


<!-- <div id="container" style="width: 100%; height: 300px; margin: 0 auto"></div> -->

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
            'pune',
            'Mumbai',
            'Nagpur',
            'Hyderabad',
            'Banglore',
            'Delhi'
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
        data: [<?php echo $pc.",".$mc.",".$nc.",".$hc.",".$bc.",".$dc."";?>]

    }, {
        name: 'Good feedback',
        data: [<?php echo $pg.",".$mg.",".$ng.",".$hg.",".$bg.",".$dg."";?>]

    }, {
        name: 'Bad feedback',
        data: [<?php echo $pb.",".$mb.",".$nb.",".$hb.",".$bb.",".$db."";?>]

    }]
});
		</script>		
						
</body>

</html>
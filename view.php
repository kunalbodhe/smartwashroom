<!DOCTYPE html>
<head>
    <meta http-equiv="refresh" content="5">
</head>
<body>
    
    <table border=1 style="margin-left:0px;">
        <tr>
        <td>wr id</td><td>count</td><td>dustbin</td><td>airquility</td><td>floor1</td><td>floor2</td>
        </tr>
        
        
<?php
include("dbconnect.php");

$data=array();

$sql="SELECT * FROM male;";
$res=mysqli_query($connect, $sql);
while ($data=mysqli_fetch_assoc($res)) {

	$wr_id=$data['wr_id'];
	$cnt_gents=$data['cnt_gents'];
    $g_live_dustbin=$data['g_live_dustbin'];
    $g_live_airquality=$data['g_live_airquality'];
    $g_live_floor1=$data['g_live_floor1'];
    $g_live_floor2=$data['g_live_floor2'];
	
	 echo "<tr><td>".$wr_id."</td><td>".$cnt_gents."</td><td>".$g_live_dustbin."</td><td>".$g_live_airquality."</td><td>".$g_live_floor1."</td><td>".$g_live_floor2."</td>";
}

?>

 </table>    
 <br>
 <br>
 
  <table border=1 style="margin-right:0px;">
        <tr>
        <td>wr id</td><td>ladies count</td><td>dustbin</td><td>airquility</td><td>floor 1</td><td>floor 2</td>
        </tr>
        
        
<?php
include("dbconnect.php");

$data=array();

$sql="SELECT * FROM female;";
$res=mysqli_query($connect, $sql);
while ($data=mysqli_fetch_assoc($res)) {

	$wr_id=$data['wr_id'];
	$cnt_ladies=$data['cnt_ladies'];
    $l_live_dustbin=$data['l_live_dustbin'];
    $l_live_airquality=$data['l_live_airquality'];
    $l_live_floor1=$data['l_live_floor1'];
    $l_live_floor2=$data['l_live_floor2'];
    
	
	 echo "<tr><td>".$wr_id."</td><td>".$cnt_ladies."</td><td>".$l_live_dustbin."</td><td>".$l_live_airquality."</td><td>".$l_live_floor1."</td><td>".$l_live_floor2."</td>";
}

?>

 </table>    
 <!--to make fb zero of ladies-->
 <br>
 <br>
 
  <table border=1 style="margin-right:0px;">
        <tr>
        <td>Ladies count</td><td>good fb</td><td>bad fb</td><td>dustbin</td><td>smell</td><td>floor</td><td>toiletpaper</td><td>handwash</td><td>basin</td>
        </tr>
        
        
<?php
include("dbconnect.php");



$data=array();

$sql="SELECT cnt_ladies FROM female;";
$res=mysqli_query($connect, $sql);
while ($data=mysqli_fetch_assoc($res)) {

	$cnt_ladies=$data['cnt_ladies'];
	
}


    $sql="SELECT * FROM live;";
    $res=mysqli_query($connect, $sql);
    while ($data=mysqli_fetch_assoc($res)) {

	$l_fb_good=$data['l_fb_good'];
	$l_fb_bad=$data['l_fb_bad'];
	$l_fb_dustbin=$data['l_fb_dustbin'];
	$l_fb_smell=$data['l_fb_smell'];
	$l_fb_floor=$data['l_fb_floor'];
	$l_fb_toiletpaper=$data['l_fb_toiletpaper'];
	$l_fb_handwash=$data['l_fb_handwash'];
	$l_fb_washbasin=$data['l_fb_washbasin'];
    
}

   
	 echo "<tr><td>".$cnt_ladies."</td><td>".$l_fb_good."</td><td>".$l_fb_bad."</td><td>".$l_fb_dustbin."</td><td>".$l_fb_smell."</td>
	           <td>".$l_fb_floor."</td><td>".$l_fb_toiletpaper."</td><td>".$l_fb_handwash."</td><td>".$l_fb_washbasin."</td><tr>";


?>

 </table>    
  <!--to make fb zero of gents-->
 <br>
 <br>
 
  <table border=1 style="margin-right:0px;">
        <tr>
        <td>Gents count</td><td>good fb</td><td>bad fb</td><td>dustbin</td><td>smell</td><td>floor</td><td>toiletpaper</td><td>handwash</td><td>basin</td>
        </tr>
        
        
<?php
include("dbconnect.php");



$data=array();

$sql="SELECT cnt_gents FROM male;";
$res=mysqli_query($connect, $sql);
while ($data=mysqli_fetch_assoc($res)) {

	$cnt_gents=$data['cnt_gents'];
	
}


    
    
    $sql="SELECT * FROM live;";
    $res=mysqli_query($connect, $sql);
    while ($data=mysqli_fetch_assoc($res)) {

	$g_fb_good=$data['g_fb_good'];
	$g_fb_bad=$data['g_fb_bad'];
	$g_fb_dustbin=$data['g_fb_dustbin'];
	$g_fb_smell=$data['g_fb_smell'];
	$g_fb_floor=$data['g_fb_floor'];
	$g_fb_toiletpaper=$data['g_fb_toiletpaper'];
	$g_fb_handwash=$data['g_fb_handwash'];
	$g_fb_washbasin=$data['g_fb_washbasin'];
    
}

   
	 echo "<tr><td>".$cnt_gents."</td><td>".$g_fb_good."</td><td>".$g_fb_bad."</td><td>".$g_fb_dustbin."</td><td>".$g_fb_smell."</td>
	           <td>".$g_fb_floor."</td><td>".$g_fb_toiletpaper."</td><td>".$g_fb_handwash."</td><td>".$g_fb_washbasin."</td><tr>";


?>

 </table>    
 
 
</body>

</html>
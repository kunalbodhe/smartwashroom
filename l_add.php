<?php
   // include("dbconnect.php");

$connect=mysqli_connect("localhost:3306","root","","pune") or die("db cannection failled");

   $wr_id=$_GET['wr_id'];
   $cnt_ladies=$_GET['cnt_ladies'];
   $l_live_dustbin=$_GET['l_live_dustbin'];
   $l_live_airquality=$_GET['l_live_airquality'];
   $l_live_floor1=$_GET['l_live_floor1'];
   $l_live_floor2=$_GET['l_live_floor2'];

   // $sql="insert into female1 (wr_id,cnt_ladies,l_live_dustbin,l_live_airquality,l_live_floor1,l_live_floor2)  values ('$wr_id','$cnt_ladies', '$l_live_dustbin', '$l_live_airquality', '$l_live_floor1','$l_live_floor2')";  
   
    $sql="UPDATE female1 SET wr_id='$wr_id',
                     cnt_ladies='$cnt_ladies',
                l_live_dustbin='$l_live_dustbin',
             l_live_airquality='$l_live_airquality',
                 l_live_floor1='$l_live_floor1', 
                 l_live_floor2='$l_live_floor2' ORDER BY id DESC LIMIT 1;";
   
   
   
   
   $res=mysqli_query($connect,$sql);
   header("Location: view.php");
?>
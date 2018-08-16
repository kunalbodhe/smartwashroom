<?php
   // include("dbconnect.php");

$connect=mysqli_connect("localhost:3306","root","","pune") or die("db cannection failled");

   $wr_id=$_GET['wr_id'];
   $cnt_gents=$_GET['cnt_gents'];
   $g_live_dustbin=$_GET['g_live_dustbin'];
   $g_live_airquality=$_GET['g_live_airquality'];
   $g_live_floor1=$_GET['g_live_floor1'];
   $g_live_floor2=$_GET['g_live_floor2'];


   
  $sql="UPDATE male1 SET wr_id='$wr_id',
                     cnt_gents='$cnt_gents',
                g_live_dustbin='$g_live_dustbin',
             g_live_airquality='$g_live_airquality',
                 g_live_floor1='$g_live_floor1',
                 g_live_floor2='$g_live_floor2' WHERE id=1;";
   
   
   $res=mysqli_query($connect,$sql);
   header("Location: view.php");
?>
<?php 
session_start();
                

// $connect=mysqli_connect("localhost:3306","root","","smarttoillet") or die("db cannection failled");
include("dbconnect.php");
$data1=array();
                                                
// $sets=$_SESSION['sets'];

$data1=array();
$sql1="SELECT * FROM live ORDER BY id DESC LIMIT 1;";
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
                                                          $floor_l= $data1['l_fb_floor'];}






date_default_timezone_set('Asia/Kolkata');
echo date('H:i:sa');

$current= date("h:i:sa");
$next="01:40:20am";
   echo $current;
   echo "<br>".$next."<br>";
   echo date("h:i:sa");

    // echo date('h')+2.":".date('i').":".date('sa');


   if ($current==$next) {
$fuck="999";
$sql1="DELETE FROM live WHERE id=1";
$sql2="INSERT INTO live(wr_id) values ('$fuck');";
        $res1=mysqli_query($connect,$sql1);
        $res2=mysqli_query($connect,$sql2);
    echo "hokabe";
                                      # code...
                                  }                               



// $ago=$current - $next;
$diff = abs(strtotime($current) - strtotime($next));
echo $ago;

$date1 = "2007-03-24";
$date2 = "2009-06-26";

// $diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 
$minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 
$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60)); 

printf("%d years, %d months, %d days, %d hours, %d minuts\n, %d seconds\n", $years, $months, $days, $hours, $minuts, $seconds); 
echo $years."year".$months."months".$day."days".$hours."hours".$minuts."minutea".$seconds."sec";

echo"<br>".$hours."h ".$minuts."m  Ago";


// aspected time
$time_now=mktime(date('h')+2,date('i')+30,date('s'));
$date = date('d-m-Y H:ia', $time_now);
echo "<br>".$date;

// notification

$data2=array();
$sql2="SELECT * FROM notification ORDER BY id DESC LIMIT 1;";
$res2=mysqli_query($connect,$sql2); 
while($data2=mysqli_fetch_assoc($res2))
{
    $good= $data2['title'];
    $date=$data2['date'];
    $fstid=$data2['id'];
    echo $good."<br>".$date."<br> Id :".$fstid;
}
 $snd= $fstid-1;
 echo $snd;
 $sql3="SELECT * FROM notification WHERE id=$snd;";
$res3=mysqli_query($connect,$sql3); 
while($data2=mysqli_fetch_assoc($res3))
{ $noti2=$data2['title']; $time2=$data2['date'];
echo "<br>".$noti2." ".$time2." id".$snd."<br>";
}
$trd= $snd-1;
 echo $trd;
 $sql4="SELECT * FROM notification WHERE id=$trd;";
$res4=mysqli_query($connect,$sql4); 
while($data2=mysqli_fetch_assoc($res4))
{ $noti3=$data2['title']; $time3=$data2['date'];
echo "<br>".$noti3." ".$time3." id".$trd;
}

?>


<?php
echo "<br>".$noti3." ".$time3." id".$trd;
echo "<br>".$noti2." ".$time2." id".$snd."<br>";
echo $good."<br>".$date."<br> Id :".$fstid;
?>
<!-- time Ago -->
<?php
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

echo $current."<br>".$next."<br>";
echo"<br>".$hours."h ".$minuts."m  Ago";
echo"<br>".$hours2."h ".$minuts2."m  Ago";
echo"<br>".$hours2."h ".$minuts2."m  Ago";



// Addition of all value in single column

$data99=array();
$sql99="SELECT sum(cnt_gents)as total FROM daily;";
$res99=mysqli_query($connect,$sql99); 
while($data99=mysqli_fetch_assoc($res99))
{ $kari=$data99['total'];}


               
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<table><tr><td><?php echo $kari; ?> </td></tr></table>


<div>
  <form action="" method="POST">
    <button name="submit">
      <div style="height: 50px; width: 50px; background: red;"></div>
    </button>
  </form>
</div>

<?php
if (isset($_POST['submit'])) {
    echo "jaaaa n";
  }
else{echo "hokabeeeee";}

?>


<div>
  <div class="modal fade" id="overlay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>thank you</p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('#overlay').modal('show');

setTimeout(function() {
    $('#overlay').modal('hide');
}, 3000);
</script>



<?php
$ar=array();
$abc=10;
$sql="UPDATE weekly 
      SET cnt_ledies='$abc' WHERE id=1;";
$res964=mysqli_query($connect,$sql);
?>
</div>
</body>
</html>

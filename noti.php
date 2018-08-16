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
  body{background:#000;height:700px;}
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
  
  #graph1,#graph2,#graph3,#graph4,#graph5,#graph6{height:200px;}
  .box{border:2px solid white;}
  .in{background: white;height:}
  table{color: white; width: 100%;}
  td{background:;padding: 10px;}
  .footer {
          position:fixed;
          left: 0;
          bottom: 0;
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
    <div class="col-md-7 top"><marquee style="color: white;">Notifications are availeble upto last 30 days.</marquee></div>
    <div class="col-md-3 top">
      <div class="date" id="date" style="margin-right:7%;">
        <?php date_default_timezone_set('Asia/Kolkata');
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
            <a href="fb.php"><p style="font-size: 50px; font-weight: bold;"><i class="icons fa fa-comments" style=""> </i></p></a>
          </div>
          <div style="text-align: center; color:white;">
            <p style="font-size: 50px; font-weight: bold;"><i class="icons fa fa-bell" style="color:orange;"> </i></p>
          </div>
        
      </div>
      <div class="col-md-9" style="background:#333; padding-top:10px; padding-bottom:10px;">
        <div class="row">
          <div class="col-md-12">
            <header class="heading" style="">NOTIFICATIONS</header>
            <div class="">
                <table border="1">
                  <?php $data1=array();
                                    $sql1="SELECT title, response FROM notification$sets ORDER BY id DESC LIMIT 8;";
                                        $res1=mysqli_query($connect,$sql1); 
                                        if (mysqli_num_rows($res1) > 0) {
                                        while($data1=mysqli_fetch_assoc($res1))
                                        {
                                          $title=$data1['title'];
                                          $date=$data1['response'];
                                          echo "<tr><td>".$title."</td><td>".$date."</td></tr>";
                                           } }
                   
                   ?>

                </table>
            </div>
          </div>
        </div>
<div class="footer" style="">
      <footer>&copy; 2017-18 <span style="color: orange; font-weight:800;">|</span> team minions &reg; <span style="color: orange; font-weight:800;">|</span> </footer>
    </div>

       </div>         
       

  
</div>




</body>
</html> 
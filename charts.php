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
  .pcn{color:black; font-size:40px;padding: 3px;}

  .gender{background:#444;height:125px; border: 1px solid #444;color: #ccc;}
  .gender:hover{background:orange; box-shadow: 2px 2px 4px #000000; font-weight:bold; color:black;}
  .noti{background:#555}  
  .noti:hover{background: orange; color: black;font-size: 18px;font-weight: 800;}
  .ppl{color:#eee; margin:10px; background:#0f0;}
  .root{background:#444; margin-bottom:10px;}
  .live{color:orange;background:#111;text-align:center;margin-top:5px;font-weight:800;border:2px solid black; font-size:16px; width: 422px;}
  table{;margin-top:-10px;margin-bottom:5px;}
  table tr th{width:210px;border:1px solid black;text-align: center;font-size:18px;}
  table tr:hover{background:orange;}
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
          <!-- <script>
           function autoRefresh_div()
           { $("#date").load("ds.php");}
            setInterval('autoRefresh_div()', 60000);   
          </script>  -->
        
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
                <div class="" style="color: #000;margin-left:15px; "> 
                  <p class="live" style="width: 470px;">DAILY RECORD</p>
                    <table>
                      <thead>
                        <tr>
                          <th><i class="pcn fa fa-male" style=""></i></th><th><i class="pcn fa fa-female" style=""></i></th><th><i class="pcn fa fa-calendar" style=""></i></th></tr>
                          <?php 
                              $data=array();
                              $sql1="SELECT cnt_gents, cnt_ladies,date FROM daily$sets ORDER BY id DESC;";
                              $res1=mysqli_query($connect,$sql1);
                             while($data=mysqli_fetch_assoc($res1))
                             {
                              $cnt_gents=$data['cnt_gents'];
                              $cnt_ladies=$data['cnt_ladies'];
                              $date=$data['date'];
                             echo "<tr><th>".$cnt_gents."</th><th>".$cnt_ladies."</th><th>".$date."</th></tr>;";
                            }
                          ?>
                          
                      </thead>
                   </table>
                </div>
              </div>    

              <div class="col-md-6">
                <div class="" style="color: #000;margin-left:30px; "> 
                  <p class="live"> RECORD</p>
                    <table>
                      <thead>
                        <tr>
                          <th><i class="pcn fa fa-male" style=""></i></th><th><i class="pcn fa fa-female" style=""></i></th></tr>
                          <tr><th>
                                  <?php
                                      $data99=array();
                                      $sql99="SELECT sum(cnt_gents)as total1 FROM daily$sets;";
                                      $res98a=mysqli_query($connect,$sql99); 
                                      while($data99=mysqli_fetch_assoc($res98a))
                                      { $cnt_gentsa=$data99['total1'];
                                          echo $cnt_gentsa;}
                                  ?>
                            </th>
                              <th>
                                
                                  <?php
                                            $data99=array();
                                        $sql99="SELECT sum(cnt_ladies)as total2 FROM daily$sets ORDER BY id DESC LIMIT 7;";
                                        $res97=mysqli_query($connect,$sql99); 
                                        while($data99=mysqli_fetch_assoc($res97))
                                        { $cnt_ladies=$data99['total2'];
                                            echo $cnt_ladies;}
                                      ?>
                              </th>
                          
                        </tr>
                      </thead>
                   </table>
                </div>
                <div class="" style="color: #000;margin-left:30px;margin-top:10%;"> 
                  <p class="live">WEEKLY RECORD</p>
                    <table>
                      <thead>
                        <tr>
                          <th><i class="pcn fa fa-male" style=""></i></th><th><i class="pcn fa fa-female" style=""></i></th></tr>
                          <tr><th>
                                  <?php
                                      $data99=array();
                                      $sql99="SELECT sum(cnt_gents)as total1 FROM daily$sets ORDER BY id DESC LIMIT 7;";
                                      $res98=mysqli_query($connect,$sql99); 
                                      while($data99=mysqli_fetch_assoc($res98))
                                      { $cnt_gents=$data99['total1'];
                                          echo $cnt_gents;}
                                  ?>
                              </th>
                              <th>
                                      <?php
                                            $data99=array();
                                        $sql99="SELECT sum(cnt_ladies)as total2 FROM daily$sets ORDER BY id DESC LIMIT 7;";
                                        $res97=mysqli_query($connect,$sql99); 
                                        while($data99=mysqli_fetch_assoc($res97))
                                        { $cnt_ladies=$data99['total2'];
                                            echo $cnt_ladies;}
                                      ?>
                              </th>
                          
                        </tr>
                      </thead>
                   </table>
                </div>
                <div class="" style="color: #000;margin-left:30px;margin-top:10%; "> 
                  <p class="live">MONTHLY RECORD</p>
                    <table>
                      <thead>
                        <tr>
                          <th><i class="pcn fa fa-male" style=""></i></th><th><i class="pcn fa fa-female" style=""></i></th></tr>
                          <tr><th>
                                <?php
                                      $data99=array();
                                      $sql99="SELECT sum(cnt_gents)as total1 FROM daily$sets ORDER BY id DESC LIMIT 30;";
                                      $res9830=mysqli_query($connect,$sql99); 
                                      while($data99=mysqli_fetch_assoc($res9830))
                                      { $cnt_gents30=$data99['total1'];
                                          echo $cnt_gents30;}
                                  ?>
                          </th>
                          <th>
                                <?php
                                            $data99=array();
                                        $sql99="SELECT sum(cnt_ladies)as total2 FROM daily$sets ORDER BY id DESC LIMIT 7;";
                                        $res9730=mysqli_query($connect,$sql99); 
                                        while($data99=mysqli_fetch_assoc($res9730))
                                        { $cnt_ladies30=$data99['total2'];
                                            echo $cnt_ladies30;}
                                      ?>
                          </th>
                        
                        </tr>
                      </thead>
                   </table>
                </div>
              </div>          


                <!-- -->
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
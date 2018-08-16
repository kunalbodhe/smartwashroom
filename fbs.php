<?php 
// include("dbconnect.php");
session_start();
         $sets=$_SESSION['sets'];
         $city=$_SESSION['city'];
        if($sets=="nil"){
          echo"<script>window.location.href='mainds.php';</script>";
        }
      $connect=mysqli_connect("localhost:3306","root","",$city) or die("db cannection failled");



                                    $data1=array();
                                    $sql1="SELECT * FROM live$sets ORDER BY id DESC LIMIT 1;";
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
                                            $floor_l= $data1['l_fb_floor'];
                                            $gents= $data1['cnt_gents'];
                                            $cnt_ladies= $data1['cnt_ladies'];
                                            }

 $data99=array();
    $sql99="SELECT sum(l_fb_good)as total4w1 FROM daily$sets ORDER BY id DESC LIMIT 7;";
    $res95w1=mysqli_query($connect,$sql99); 
    while($data99=mysqli_fetch_assoc($res95w1))
    { $good_lw1=$data99['total4w1'];}
// echo $good_lw1;
 
     $sql91="SELECT sum(l_fb_dustbin)as total6w2 FROM daily$sets ORDER BY id DESC LIMIT 7;";
    $res93w2=mysqli_query($connect,$sql91); 
    while($data99=mysqli_fetch_assoc($res93w2))
   { $dustbin_lw2=$data99['total6w2'];}
 // echo $dustbin_lw2;

    $sql92="SELECT sum(l_fb_smell)as total7w3 FROM daily$sets ORDER BY id DESC LIMIT 7;";
    $res92w3=mysqli_query($connect,$sql92); 
    while($data99=mysqli_fetch_assoc($res92w3))
     { $smell_lw3=$data99['total7w3'];}
   // echo $smell_lw3;

     $sql93="SELECT sum(l_fb_toilletpaper)as total8w4 FROM daily$sets ORDER BY id DESC LIMIT 7;";
     $res91w4=mysqli_query($connect,$sql93); 
     while($data99=mysqli_fetch_assoc($res91w4))
     { $toilletpaper_lw4=$data99['total8w4'];}
   // echo $toilletpaper_lw4;

     $sql94="SELECT sum(l_fb_handwash)as total19w5 FROM daily$sets ORDER BY id DESC LIMIT 7;";
     $res90w5=mysqli_query($connect,$sql94); 
     while($data99=mysqli_fetch_assoc($res90w5))
     { $handwash_lw5=$data99['total19w5'];}
   // echo $handwash_lw5;
 
     $sql95="SELECT sum(l_fb_washbasin)as total20w6 FROM daily$sets ORDER BY id DESC LIMIT 7;";
     $res89w6=mysqli_query($connect,$sql95); 
     while($data99=mysqli_fetch_assoc($res89w6))
     { $washbasin_lw6=$data99['total20w6'];}
   // echo $washbasin_lw6;
  
     $sql96="SELECT sum(l_fb_floor)as total20w7 FROM daily$sets ORDER BY id DESC LIMIT 7;";
     $res89w7=mysqli_query($connect,$sql96); 
     while($data99=mysqli_fetch_assoc($res89w7))
     { $floor_lw7=$data99['total20w7'];}
   // echo $floor_lw7;

    $sql81="SELECT sum(g_fb_good)as total4x1 FROM daily$sets ORDER BY id DESC LIMIT 7;";
    $res95x1=mysqli_query($connect,$sql81); 
    while($data99=mysqli_fetch_assoc($res95x1))
    { $good_gw1=$data99['total4x1'];
}
// echo $good_gw1;
 
     $sql82="SELECT sum(g_fb_dustbin)as total6x2 FROM daily$sets ORDER BY id DESC LIMIT 7;";
    $res93x2=mysqli_query($connect,$sql82); 
    while($data99=mysqli_fetch_assoc($res93x2))
   { $dustbin_gw2=$data99['total6x2'];}
 // echo $dustbin_gw2;

    $sql83="SELECT sum(g_fb_smell)as total7x3 FROM daily$sets ORDER BY id DESC LIMIT 7;";
    $res92x3=mysqli_query($connect,$sql83); 
    while($data99=mysqli_fetch_assoc($res92x3))
     { $smell_gw3=$data99['total7x3'];}
   // echo $smell_gw3;

     $sql84="SELECT sum(g_fb_toilletpaper)as total8x4 FROM daily$sets ORDER BY id DESC LIMIT 7;";
     $res91x4=mysqli_query($connect,$sql84); 
     while($data99=mysqli_fetch_assoc($res91x4))
     { $toilletpaper_gw4=$data99['total8x4'];}
   // echo $toilletpaper_gw4;

     $sql85="SELECT sum(g_fb_handwash)as total19x5 FROM daily$sets ORDER BY id DESC LIMIT 7;";
     $res90x5=mysqli_query($connect,$sql85); 
     while($data99=mysqli_fetch_assoc($res90x5))
     { $handwash_gw5=$data99['total19x5'];}
   // echo $handwash_gw5;
 
     $sql86="SELECT sum(g_fb_washbasin)as total20x6 FROM daily$sets ORDER BY id DESC LIMIT 7;";
     $res89x6=mysqli_query($connect,$sql86); 
     while($data99=mysqli_fetch_assoc($res89x6))
     { $washbasin_gw6=$data99['total20x6'];}
   // echo $washbasin_gw6;
  
     $sql87="SELECT sum(g_fb_floor)as total20x7 FROM daily$sets ORDER BY id DESC LIMIT 7;";
     $res89x7=mysqli_query($connect,$sql87); 
     while($data99=mysqli_fetch_assoc($res89x7))
     { $floor_gw7=$data99['total20x7'];}
   // echo $floor_gw7;
      

 // For monthly    
 
$data01=array();
    $sql01="SELECT sum(l_fb_good)as total4m1 FROM daily$sets ORDER BY id DESC LIMIT 30;";
    $res95m1=mysqli_query($connect,$sql01); 
    while($data01=mysqli_fetch_assoc($res95m1))
    { $good_lm1=$data01['total4m1'];}
// echo $good_lw1;
 
     $sql02="SELECT sum(l_fb_dustbin)as total6m2 FROM daily$sets ORDER BY id DESC LIMIT 30;";
    $res93m2=mysqli_query($connect,$sql02); 
    while($data01=mysqli_fetch_assoc($res93m2))
   { $dustbin_lm2=$data01['total6m2'];}
 // echo $dustbin_lw2;

    $sql03="SELECT sum(l_fb_smell)as total7m3 FROM daily$sets ORDER BY id DESC LIMIT 30;";
    $res92m3=mysqli_query($connect,$sql03); 
    while($data01=mysqli_fetch_assoc($res92m3))
     { $smell_lm3=$data01['total7m3'];}
   // echo $smell_lw3;

     $sql04="SELECT sum(l_fb_toilletpaper)as total8m4 FROM daily$sets ORDER BY id DESC LIMIT 30;";
     $res91m4=mysqli_query($connect,$sql04); 
     while($data01=mysqli_fetch_assoc($res91m4))
     { $toilletpaper_lm4=$data01['total8m4'];}
   // echo $toilletpaper_lw4;

     $sql05="SELECT sum(l_fb_handwash)as total19m5 FROM daily$sets ORDER BY id DESC LIMIT 30;";
     $res90m5=mysqli_query($connect,$sql05); 
     while($data01=mysqli_fetch_assoc($res90m5))
     { $handwash_lm5=$data01['total19m5'];}
   // echo $handwash_lw5;
 
     $sql06="SELECT sum(l_fb_washbasin)as total20m6 FROM daily$sets ORDER BY id DESC LIMIT 30;";
     $res89m6=mysqli_query($connect,$sql06); 
     while($data01=mysqli_fetch_assoc($res89m6))
     { $washbasin_lm6=$data01['total20m6'];}
   // echo $washbasin_lw6;
  
     $sql07="SELECT sum(l_fb_floor)as total20m7 FROM daily$sets ORDER BY id DESC LIMIT 30;";
     $res89m7=mysqli_query($connect,$sql07); 
     while($data01=mysqli_fetch_assoc($res89m7))
     { $floor_lm7=$data01['total20m7'];}
   // echo $floor_lw7;

    $sql11="SELECT sum(g_fb_good)as total4y1 FROM daily$sets ORDER BY id DESC LIMIT 30;";
    $res95y1=mysqli_query($connect,$sql11); 
    while($data01=mysqli_fetch_assoc($res95y1))
    { $good_gm1=$data01['total4y1'];
}
// echo $good_gw1;
 
     $sql12="SELECT sum(g_fb_dustbin)as total6y2 FROM daily$sets ORDER BY id DESC LIMIT 30;";
    $res93y2=mysqli_query($connect,$sql12); 
    while($data01=mysqli_fetch_assoc($res93y2))
   { $dustbin_gm2=$data01['total6y2'];}
 // echo $dustbin_gw2;

    $sql13="SELECT sum(g_fb_smell)as total7y3 FROM daily$sets ORDER BY id DESC LIMIT 30;";
    $res92y3=mysqli_query($connect,$sql13); 
    while($data01=mysqli_fetch_assoc($res92y3))
     { $smell_gm3=$data01['total7y3'];}
   // echo $smell_gw3;

     $sql14="SELECT sum(g_fb_toilletpaper)as total8y4 FROM daily$sets ORDER BY id DESC LIMIT 30;";
     $res91y4=mysqli_query($connect,$sql14); 
     while($data01=mysqli_fetch_assoc($res91y4))
     { $toilletpaper_gm4=$data01['total8y4'];}
   // echo $toilletpaper_gw4;

     $sql15="SELECT sum(g_fb_handwash)as total19y5 FROM daily$sets ORDER BY id DESC LIMIT 30;";
     $res90y5=mysqli_query($connect,$sql15); 
     while($data01=mysqli_fetch_assoc($res90y5))
     { $handwash_gm5=$data01['total19y5'];}
   // echo $handwash_gw5;
 
     $sql16="SELECT sum(g_fb_washbasin)as total20y6 FROM daily$sets ORDER BY id DESC LIMIT 30;";
     $res89y6=mysqli_query($connect,$sql16); 
     while($data01=mysqli_fetch_assoc($res89y6))
     { $washbasin_gm6=$data01['total20y6'];}
   // echo $washbasin_gw6;
  
     $sql17="SELECT sum(g_fb_floor)as total20y7 FROM daily$sets ORDER BY id DESC LIMIT 30;";
     $res89y7=mysqli_query($connect,$sql17); 
     while($data01=mysqli_fetch_assoc($res89y7))
     { $floor_gm7=$data01['total20y7'];}
   // echo $floor_gw7;
                                        

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
  body{background:#000;height:100%}
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
  .footer {
          position:;
          left: 0;
          margin-bottom: 49px;
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
    <div class="col-md-7 top"><marquee style="color: white;">Feedback is Based of no of people gives feedback</marquee></div>
    <div class="col-md-3 top">
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
            <p style="font-size: 50px; font-weight: bold;"><i class="icons fa fa-comments" style="color:orange;"> </i></p>
          </div>
          <div style="text-align: center; color:white;">
            <a href="noti.php"><p style="font-size: 50px; font-weight: bold;"><i class="icons fa fa-bell" style=""> </i></p></a>
          </div>
          
      </div>
      <div class="col-md-9" style="background:#333; padding-top:10px; padding-bottom:10px;">
        <div class="row">

          <div class="col-md-4">
            <div class="box">
              <div class="row">
                <div class="col-md-12">
                  <div class="in">
                    <header class="heading" style="">LIVE STATUS</header>
                    
                  </div>
                </div> 
              </div>
              <div class="row">
                <div class="col-md-12" style="">
                 <p style="color:white;text-align:center;width:90%;border:1px solid white;margin-left:5%;margin-top:9%;">GENTS</p>
                  <div id="graph1"></div>
                </div> 
              </div>
              <div class="row">
                <div class="col-md-12">
                <p style="color:white;text-align:center;width:90%;border:1px solid white;margin-left:5%;margin-top:10%;">LEDIES</p>
                  <div id="graph2"></div>
                </div> 
              </div>
             </div> 
          </div>

          <div class="col-md-4">
            <div class="box">
              <div class="row">
                <div class="col-md-12">
                  <div class="in">
                    <header class="heading" style="">WEEKLY STATUS</header>
                  </div>
                </div> 
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p style="color:white;text-align:center;width:90%;border:1px solid white;margin-left:5%;margin-top:9%;">GENTS</p>
                  <div id="graph3"></div>
                </div> 
              </div>
              <div class="row">
                <div class="col-md-12">
                   <p style="color:white;text-align:center;width:90%;border:1px solid white;margin-left:5%;margin-top:10%;">LEDIES</p>
                  <div id="graph4"></div>
                </div> 
              </div>
            </div>  
          </div>


          <div class="col-md-4">
            <div class="box">
              <div class="row">
                <div class="col-md-12">
                  <div class="in">
                    <header class="heading" style="">MONTHLY STATUS</header>
                  </div>
                </div> 
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p style="color:white;text-align:center;width:90%;border:1px solid white;margin-left:5%;margin-top:9%;">GENTS</p>
                  <div id="graph5"></div>
                </div> 
              </div>
              <div class="row">
                <div class="col-md-12">
                   <p style="color:white;text-align:center;width:90%;border:1px solid white;margin-left:5%;margin-top:10%;">LEDIES</p>
                  <div id="graph6"></div>
                </div> 
              </div>
             </div> 
          </div>

          
       </div>
      </div>              
      <div class="col-md-1"></div>          
    </div> <!-- row end -->                                     
    
  <div class="row" style="margin-top: 5px;">
    
    <div class="col-md-12 footer" style="">
      <footer>&copy; 2017-18 <span style="color: orange; font-weight:800;">|</span> team minions &reg; <span style="color: orange; font-weight:800;">|</span> </footer>
    </div>
  </div>
</div>


<!-- 1 -->
   <script>
       Morris.Donut({
            element: 'graph1',
              data: [
                      {value: <?php echo $good_g;?>, label: 'HAPPY', formatted: '<?php echo $good_g;?>'},
                                                      {value: <?php echo $dustbin_g;?>, label: 'dustbin', formatted: '<?php echo $dustbin_g;?>' },
                                                      {value:<?php echo $floor_g;?>, label: 'dirty floor', formatted: '<?php echo $floor_g;?>' },
                                                      {value:<?php echo $smell_g;?>, label: 'bad smell', formatted: '<?php echo $smell_g;?>' },
                                                      {value:<?php echo $toiletpaper_g;?>, label: 'toilet paper', formatted: '<?php echo $toiletpaper_g;?>' },
                                                      {value:<?php echo $washbasin_g;?>, label: 'dirty washbasin', formatted: '<?php echo $washbasin_g;?>' },
                                                      {value:<?php echo $handwash_g;?>, label: 'handwash', formatted: '<?php echo $handwash_g;?>' },
                   ],              
                                                     backgroundColor: '#ccc',
                                                        labelColor: 'white',
                                                        colors: [  '#fff', '#000','#foo','#0f0','#00f','yellow', ],
                                                   formatter: function (x, data) { return data.formatted; }
                                          });
                                      </script>                                                           

                                        <script>
                                          Morris.Donut({
                                            element: 'graph2',
                                            data: [
                                                      {value: <?php echo $good_l;?>, label: 'HAPPY', formatted: '<?php echo $good_l;?>'},
                                                      {value: <?php echo $dustbin_l;?>, label: 'dustbin', formatted: '<?php echo $dustbin_l;?>' },
                                                      {value:<?php echo $floor_l;?>, label: 'dirty floor', formatted: '<?php echo $floor_l;?>' },
                                                      {value:<?php echo $smell_l;?>, label: 'bad smell', formatted: '<?php echo $smell_l;?>' },
                                                      {value:<?php echo $toiletpaper_l;?>, label: 'toilet paper', formatted: '<?php echo $toiletpaper_l;?>' },
                                                      {value:<?php echo $washbasin_l;?>, label: 'dirty washbasin', formatted: '<?php echo $washbasin_l;?>' },
                                                      {value:<?php echo $handwash_l;?>, label: 'handwash', formatted: '<?php echo $handwash_l;?>' },
                                                  ],
                                                     backgroundColor: '#ccc',
                                                        labelColor: 'white',
                                                        colors: [  '#fff', '#000','#foo','#0f0','#00f','yellow', ],
                                                   formatter: function (x, data) { return data.formatted; }
                                                        });
                                         </script>


                                         
                                         <script>
                                          Morris.Donut({
                                            element: 'graph3',
                                            data: [
                                                      {value:<?php echo $good_gw1;?>, label: 'HAPPY', formatted: '<?php echo $good_gw1;?>' },
                                                      {value:<?php echo $dustbin_gw2; ?>, label: 'Dustbin', formatted: '<?php echo $dustbin_gw2; ?>' },
                                                      {value:<?php echo $smell_gw3; ?>, label: 'Smell', formatted: '<?php echo $smell_gw3; ?>' },
                                                      {value:<?php echo $toilletpaper_gw4; ?>, label: 'Toilletpaper', formatted: '<?php echo $toilletpaper_gw4; ?>' },
                                                      {value:<?php echo $handwash_gw5; ?>, label: 'Handwash', formatted: '<?php echo $handwash_gw5; ?>' },
                                                      {value:<?php echo $washbasin_gw6; ?>, label: 'washbasin', formatted: '<?php echo $washbasin_gw6; ?>' },
                                                       {value:<?php echo $floor_gw7; ?>, label: 'Floor', formatted: '<?php echo $floor_gw7; ?>' },
                                                  ],
                                                     backgroundColor: '#ccc',
                                                        labelColor: 'white',
                                                        colors: [  '#fff', '#000','#foo','#0f0','#00f','yellow', ],
                                                   formatter: function (x, data) { return data.formatted; }
                                                        });
                                         </script>

 <?php
  
  ?>                                        
                                         <script>
                                          Morris.Donut({
                                            element: 'graph4',
                                            data: [
                                                    {value:<?php echo $good_lw1;?>, label: 'HAPPY', formatted: '<?php echo $good_lw1;?>' },
                                                      {value:<?php echo $dustbin_lw2; ?>, label: 'Dustbin', formatted: '<?php echo $dustbin_lw2; ?>' },
                                                      {value:<?php echo $smell_lw3; ?>, label: 'Smell', formatted: '<?php echo $smell_lw3; ?>' },
                                                      {value:<?php echo $toilletpaper_lw4; ?>, label: 'Toilletpaper', formatted: '<?php echo $toilletpaper_lw4; ?>' },
                                                      {value:<?php echo $handwash_lw5; ?>, label: 'Handwash', formatted: '<?php echo $handwash_lw5; ?>' },
                                                      {value:<?php echo $washbasin_lw6; ?>, label: 'washbasin', formatted: '<?php echo $washbasin_lw6; ?>' },
                                                       {value:<?php echo $floor_lw7; ?>, label: 'Floor', formatted: '<?php echo $floor_lw7; ?>' },
                                                      
                                                  ],
                                                     backgroundColor: '#ccc',
                                                        labelColor: 'white',
                                                        colors: [  '#fff', '#000','#foo','#0f0','#00f','yellow', ],
                                                   formatter: function (x, data) { return data.formatted; }
                                                        });
                                         </script>
                                         <script>
                                          Morris.Donut({
                                            element: 'graph5',
                                            data: [
                                                      {value:<?php echo $good_gm1;?>, label: 'HAPPY', formatted: '<?php echo $good_gm1;?>' },
                                                      {value:<?php echo $dustbin_gm2; ?>, label: 'Dustbin', formatted: '<?php echo $dustbin_gm2; ?>' },
                                                      {value:<?php echo $smell_gm3; ?>, label: 'Smell', formatted: '<?php echo $smell_gm3; ?>' },
                                                      {value:<?php echo $toilletpaper_gm4; ?>, label: 'Toilletpaper', formatted: '<?php echo $toilletpaper_gm4; ?>' },
                                                      {value:<?php echo $handwash_gm5; ?>, label: 'Handwash', formatted: '<?php echo $handwash_gm5; ?>' },
                                                      {value:<?php echo $washbasin_gm6; ?>, label: 'washbasin', formatted: '<?php echo $washbasin_gm6; ?>' },
                                                       {value:<?php echo $floor_gm7; ?>, label: 'Floor', formatted: '<?php echo $floor_gm7; ?>' },
                                                  ],
                                                     backgroundColor: '#ccc',
                                                        labelColor: 'white',
                                                        colors: [  '#fff', '#000','#foo','#0f0','#00f','yellow', ],
                                                   formatter: function (x, data) { return data.formatted; }
                                                        });
                                         </script>
                                         <script>
                                          Morris.Donut({
                                            element: 'graph6',
                                            data: [
                                                      {value:<?php echo $good_lm1;?>, label: 'HAPPY', formatted: '<?php echo $good_lm1;?>' },
                                                      {value:<?php echo $dustbin_lm2; ?>, label: 'Dustbin', formatted: '<?php echo $dustbin_lm2; ?>' },
                                                      {value:<?php echo $smell_lm3; ?>, label: 'Smell', formatted: '<?php echo $smell_lm3; ?>' },
                                                      {value:<?php echo $toilletpaper_lm4; ?>, label: 'Toilletpaper', formatted: '<?php echo $toilletpaper_lm4; ?>' },
                                                      {value:<?php echo $handwash_lm5; ?>, label: 'Handwash', formatted: '<?php echo $handwash_lm5; ?>' },
                                                      {value:<?php echo $washbasin_lm6; ?>, label: 'washbasin', formatted: '<?php echo $washbasin_lm6; ?>' },
                                                       {value:<?php echo $floor_lm7; ?>, label: 'Floor', formatted: '<?php echo $floor_lm7; ?>' }
                                                  ],
                                                     backgroundColor: '#ccc',
                                                        labelColor: 'white',
                                                        colors: [  '#fff', '#000','#foo','#0f0','#00f','yellow', ],
                                                   formatter: function (x, data) { return data.formatted; }
                                                        });
                                         </script>
</body>
</html>
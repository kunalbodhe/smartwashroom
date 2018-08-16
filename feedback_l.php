<?php 
include("dbconnect.php");
// $connect=mysqli_connect("localhost:3306","root","","smarttoillet") or die("db cannection failled"); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- ######_____css_start______################################################################-->

<!-- ######_____css_end______################################################################-->
<!-- <meta http-equiv="refresh" content="10"> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script src="clock.js"></script>
<link rel="stylesheet" type="text/css" href="Gcss.css">
_<!-- _______font family______ -->
<link href="https://fonts.googleapis.com/css?family=Lobster|Satisfy" rel="stylesheet">
<!-- ___________modal good fb__________ -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
  .imp{ border: 1px solid black;}
   .out{padding:5px; border:1px solid grey; border-radius: 20px; display: inline-block;}

  .col-md-2{border: none;}
  .modal-content {background:#C0C0C0;}
 #canvas{ margin-top: 20px; background: #3A6C8D;}         
  body{background: #eee;}
  button{border:none;
        background: #eee;
        width: 50%;
        border-radius:50%;
        outline: none;
        margin-left: 25%;}

    h3{text-align: center;
       background: linear-gradient(to left, black, red);
       color:white;
       font-weight: bold;
       padding: 5px;  
       border-radius:10px;
      }    

  /*marquee{font-size: 22px;font-weight: bold;background: red; color: white;}    */
 /**{border: 1px solid black;}*/



</style>
  
</head>
<body oncontextmenu="return false">
<div style="background: #D3E9F7;"><h6 style="text-align:center;width:100%; color:#fff; padding:5px;background:#3A6C8D;margin: 0">VISITOR WELCOME</h6>
</div>
<div class="container-fluid">
	   <div class="row" style="background:#3A6C8D">
	       <div class="col-md-2" style="background: #3A6C8D; border: none;">
		       <canvas id="canvas" width="100" height="100" style=""></canvas>  
	       </div>
	       <div class="col-md-10" style="background:#3A6C8D; ">
            <div style="color: white;; width: 100%; " >
                <h1 style="font-size: 70px;width: 80%;text-align: center;font-family: 'Lobster', cursive;">Welcome</	
            </div>
         </div>
    </div>
  </div>
  <div style="width: 100%;background: #eee;padding:10px;">  <h4 style="font-size: 50px;text-align: center;">Please rate our washroom</h4></div>
  <div class="row" style="background: #eee;width: 100%;">
    <!-- <div> -->
    	
        <form action="" method="POST">
        	<div>
           <div class="col-md-6"> 
            	<button name="submit_good">
            		<img src="image/happy.png" style="width:100%;">
            	</button>
                <?php 
                    // if(isset($_POST['button1'])){echo "<h1>string</h1>";}
                     $data=array();
   					 $sql="SELECT l_fb_good FROM live WHERE id=1;";
   					 $res2=mysqli_query($connect,$sql);
   					 while($data=mysqli_fetch_assoc($res2))
					{ $last_cnt=$data['l_fb_good']; }
				    if (isset($_POST['submit_good'])) {
						$new_cnt=$last_cnt+1;
   					 	$sql="UPDATE live SET l_fb_good='$new_cnt' where id=1;";
   					 	$res=mysqli_query($connect,$sql);
   					 echo "<script>alert('Thank you for your precious feedback!');</script>";
                   
				        
				    }
       			?>
       	   </div>		
       	   <div class="col-md-6">
        		<button name="submit_bad" id="myBtn" type="button">
        			<img src="image/sad.png" style="width: 100%;">
        		</button>
        <!-- ########################### -->		
        			
       	<!-- ######################################## -->	
              	<div id="result1" style=" margin-left: 50%;font-weight: BOLD;"></div>
            </div>
          	           
          </form>          
        </div>
        <div  style="color:#00f;margin-top: 50px;">
     		<!-- <p><marquee> Airport Authority of India</marquee></p> -->
 		</div>  


  <form action="" method="post">        
<!-- The Modal -->
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="background: white;">
    <span class="close">&times;</span>
  <div>
  
<!--################################################# -->
      
      <div class="container">
        <div class="row">

          <div class="col-md-1"></div>
<!-- ############################################################################ -->
                                                    <script type="text/javascript">
                                                    $(document).ready(function()
                                                    {
                                                      $(".imp1").click(function()
                                                      {
                                                        if($("#one").prop("checked"))
                                                        {
                                                          $("#one").prop('checked',false);
                                                          $(".out1").css("background-color","white"); 
                                                          
                                                        }
                                                        else{
                                                            $("#one").prop('checked',true);
                                                            $(".out1").css("background-color","green");
                                                          
                                                          } 
                                                      });
                                                    });
                                                    </script>
<!--############################################################################################### -->
               <div class="col-md-2" style="border: none;">
        
            <input type="checkbox" name="dustbin" id="one" value="1">
            <div class="out out1"> 
               <img src="image/1.jpg" class="imp imp1" name="dustbin" style="width:130px; height: 130px;border:none;">
             </div>
           </input>
               <h3>Dustbin Full</h3>
              </div>
<!--################################################################################################ -->
              <div class="col-md-1"></div>
          <!--###################################################################################### -->
                                                   <script type="text/javascript">
                                                    $(document).ready(function()
                                                    {
                                                      $(".imp2").click(function()
                                                      {
                                                        if($("#one2").prop("checked"))
                                                        {
                                                          $("#one2").prop('checked',false);
                                                          $(".out2").css("background-color","white"); 
                                                            
                                                        }
                                                        else{
                                                            $("#one2").prop('checked',true);
                                                            $(".out2").css("background-color","green");
                                                          
                                                          } s
                                                      });
                                                    });
                                                    </script>
  <!--##################################################################################### -->
          <div class="col-md-2">
            <input type="checkbox" name="smell" id="one2" value="1">
              <div class="out out2">
                <img src="image/7.jpg" class="imp imp2" style="width:130px; height:130px;border: none;"> 
              </div>
            </input>
            <h3>Bad Smell</h3>
          </div>
          <!--################################################# -->
              <div class="col-md-1"></div>

              <!--################################################################################### -->
                                                  <script type="text/javascript">
                                                    $(document).ready(function()
                                                    {
                                                      $(".imp3").click(function()
                                                      {
                                                        if($("#one3").prop("checked"))
                                                        {
                                                          $("#one3").prop('checked',false);
                                                          $(".out3").css("background-color","white"); 
                                                            
                                                        }
                                                        else{
                                                            $("#one3").prop('checked',true);
                                                            $(".out3").css("background-color","green");
                                                          
                                                          } 
                                                      });
                                                    });
                                                  </script>
              <!--################################################################################### -->
              <div class="col-md-2">
                
                  <input type="checkbox" name="floor" id="one3" value="1">
                    <div class="out out3">
                      <img src="image/2.jpg" class="imp imp3" style="width:130px; height:130px; border: none;">
                    </div>
                  </input>
               
               <h3>Dirty Floor</h3>
              </div>
          
        </div>
        <!--################################################# -->
        <div style="padding: 10px;"></div>

        <div class="row" >
      <!--################################################# -->    
          <div class="col-md-1"></div>
<!-- ###__[4]___######################################################################### -->
                                                  <script type="text/javascript">
                                                    $(document).ready(function()
                                                    {
                                                      $(".imp4").click(function()
                                                      {
                                                        if($("#one4").prop("checked"))
                                                        {
                                                          $("#one4").prop('checked',false);
                                                          $(".out4").css("background-color","white"); 
                                                            
                                                        }
                                                        else{
                                                            $("#one4").prop('checked',true);
                                                            $(".out4").css("background-color","green");
                                                          
                                                          } 
                                                      });
                                                    });
                                                  </script>
              <!-- ################################################################################ -->
              <div class="col-md-2">
                
                  <input type="checkbox" name="paper" id="one4" value="1">
                    <div class="out out4">
                      <img src="image/6.jpg" class="imp imp4" style="width:130px; height:130px; border: none;">
                    </div>
                  </input>
               
                <h3>No Toilet Paper</h3>
              </div>
        <!-- ____________________________________________ -->
              <div class="col-md-1"></div>
          <!-- ________________________________________________- -->
    <!-- #_[5]_###################################################################################### -->
                                                   <script type="text/javascript">
                                                    $(document).ready(function()
                                                    {
                                                      $(".imp5").click(function()
                                                      {
                                                        if($("#one5").prop("checked"))
                                                        {
                                                          $("#one5").prop('checked',false);
                                                          $(".out5").css("background-color","white"); 
                                                            
                                                        }
                                                        else{
                                                            $("#one5").prop('checked',true);
                                                            $(".out5").css("background-color","green");
                                                          
                                                          } 
                                                      });
                                                    });
                                                  </script>
         <!-- ####################################################################################### -->
              <div class="col-md-2">
              
                  <input type="checkbox" name="handwash" value="1" id="one5" >
                    <div class="out out5">
                      <img src="image/5.jpg" class="imp imp5" style="width:130px; height:130px; border: none;">
                    </div>
                  </input>
            
                <h3>Empty Handwash</h3> 
              </div>
<!-- ________________________________________________________________________________________________ -->
              <div class="col-md-1"></div>
<!-- #######__[6]__######################################################################## -->
                                                               <script type="text/javascript">
                                                    $(document).ready(function()
                                                    {
                                                      $(".imp6").click(function()
                                                      {
                                                        if($("#one6").prop("checked"))
                                                        {
                                                          $("#one6").prop('checked',false);
                                                          $(".out6").css("background-color","white"); 
                                                            
                                                        }
                                                        else{
                                                            $("#one6").prop('checked',true);
                                                            $(".out6").css("background-color","green");
                                                          
                                                          } 
                                                      });
                                                    });
                                                  </script>
              <!-- ################################################################################# -->
              <div class="col-md-2" style="">
               
                  <input type="checkbox" name="basin" id="one6" value="1">
                    <div class="out out6">
                      <img src="image/3.jpg" class="imp imp6" style="width:130px; height:130px;border:none">
                    </div>
                  </input>
              
                  <h3>Dirty Washbasin</h3>
              </div>
          
        </div>
      </div>

</div>
<div style="padding-top: 10px;">
  <button name="submit" type="submit" style="text-align: center; background: red; padding:5px; color: white; border-radius:10px;font-weight:bold; font-size:30px;">SUBMIT</button>
  
</div>

<?php 

 	$data=array();
   	$sql="SELECT * FROM live WHERE id=1;";
   	$res3=mysqli_query($connect,$sql);
   	 while($data=mysqli_fetch_assoc($res3))
	{ $last_cnt2=$data['l_fb_bad']; 
	  $lst_dustbin=$data['l_fb_dustbin'];
	  $lst_smell=$data['l_fb_smell'];
	  $lst_floor=$data['l_fb_floor'];
	  $lst_toiletpaper=$data['l_fb_toiletpaper'];
	  $lst_handwash=$data['l_fb_handwash'];
	  $lst_washbasin=$data['l_fb_washbasin'];
	}
				 
    if(isset($_POST['submit']))
    {
         echo "<script>alert('Thank you for your precious feedback!');</script>";
                   
        
    	$new_cnt2=$last_cnt2+1;
   		$sql="UPDATE live SET l_fb_bad='$new_cnt2' where id=1;";
   		$res4=mysqli_query($connect,$sql);


      if(isset($_POST['dustbin']) || ($_POST['smell']) ||($_POST['floor'])|| ($_POST['paper'])|| ($_POST['handwash'])|| ($_POST['basin']))
      {

         $dustbin= $_POST['dustbin']; 
         $smell= $_POST['smell'];
         $floor=$_POST['floor'];
         $paper= $_POST['paper'];
         $handwash= $_POST['handwash']; 
         $basin= $_POST['basin'];
    
       if ($dustbin==1) {
       	$new_dustbin=$lst_dustbin+$dustbin;
       	$sql5="UPDATE live SET l_fb_dustbin='$new_dustbin' where id=1;";
   		$res4=mysqli_query($connect,$sql5);}

   		if ($smell==1) {
       	$new_smell=$lst_smell+$smell;
       	$sql6="UPDATE live SET l_fb_smell='$new_smell' where id=1;";
   		$res6=mysqli_query($connect,$sql6);}

   		if ($floor==1) {
       	$new_floor=$lst_floor+$floor;
       	$sql7="UPDATE live SET l_fb_floor='$new_floor' where id=1;";
   		$res7=mysqli_query($connect,$sql7);}

   		if ($paper==1) {
       	$new_toiletpaper=$lst_toiletpaper+$paper;
       	$sql8="UPDATE live SET l_fb_toiletpaper='$new_toiletpaper' where id=1;";
   		$res8=mysqli_query($connect,$sql8);}

   		if ($handwash==1) {
       	$new_handwash=$lst_handwash+$handwash;
       	$sql9="UPDATE live SET l_fb_handwash='$new_handwash' where id=1;";
   		$res9=mysqli_query($connect,$sql9);}

   		if ($basin==1) {
       	$new_washbasin=$lst_washbasin+$basin;
       	$sql11="UPDATE live SET l_fb_washbasin='$new_washbasin' where id=1;";
   		$res11=mysqli_query($connect,$sql11);}
       	
      }

    }   
?>

</form>

<!-- ########################################### -->   
<script>
var modal = document.getElementById('myModal');// Get the button that opens the modal
var btn = document.getElementById("myBtn");// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
</div>
<!-- <script type="text/javascript">setTimeout(function() {$('#myBtn').modal('hide');}, 4000);</script> -->

<script>
document.getElementById("demo").innerHTML =
new Date();
</script>
<script>
            var canvas = document.getElementById("canvas");
            var ctx = canvas.getContext("2d");
            var radius = canvas.height / 2;
            ctx.translate(radius, radius);
            radius = radius * 0.90
            setInterval(drawClock, 1000);

            function drawClock() {
              drawFace(ctx, radius);
              drawNumbers(ctx, radius);
              drawTime(ctx, radius);
            }

            function drawFace(ctx, radius) {
              var grad;
              ctx.beginPath();
              ctx.arc(0, 0, radius, 0, 2*Math.PI);
              ctx.fillStyle = 'white';
              ctx.fill();
              grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
              grad.addColorStop(0, '#333');
              grad.addColorStop(0.5, 'white');
              grad.addColorStop(1, '#333');
              ctx.strokeStyle = grad;
              ctx.lineWidth = radius*0.1;
              ctx.stroke();
              ctx.beginPath();
              ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
              ctx.fillStyle = '#333';
              ctx.fill();
            }

              function drawNumbers(ctx, radius) {
                var ang;
                var num;
                ctx.font = radius*0.15 + "px arial";
                ctx.textBaseline="middle";
                ctx.textAlign="center";
                for(num = 1; num < 13; num++){
                  ang = num * Math.PI / 6;
                  ctx.rotate(ang);
                  ctx.translate(0, -radius*0.85);
                  ctx.rotate(-ang);
                  ctx.fillText(num.toString(), 0, 0);
                  ctx.rotate(ang);
                  ctx.translate(0, radius*0.85);
                  ctx.rotate(-ang);
                }
              }

              function drawTime(ctx, radius){
                  var now = new Date();
                  var hour = now.getHours();
                  var minute = now.getMinutes();
                  var second = now.getSeconds();
                  //hour
                  hour=hour%12;
                              hour=(hour*Math.PI/6)+
                (minute*Math.PI/(6*60))+
                (second*Math.PI/(360*60));
                drawHand(ctx, hour, radius*0.5, radius*0.07);
                //minute
                minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
                drawHand(ctx, minute, radius*0.8, radius*0.07);
                // second
                second=(second*Math.PI/30);
                drawHand(ctx, second, radius*0.9, radius*0.02);
            }

            function drawHand(ctx, pos, length, width) {
                ctx.beginPath();
                ctx.lineWidth = width;
                ctx.lineCap = "round";
                ctx.moveTo(0,0);
                ctx.rotate(pos);
                ctx.lineTo(0, -length);
                ctx.stroke();
                ctx.rotate(-pos);
            }
    </script>
    <!-- ###################################### -->
    
        
     
    <!-- ######################################## -->
   		
</body>
</html>
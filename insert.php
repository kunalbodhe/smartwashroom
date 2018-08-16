
<html>
<head>
   <meta http-equiv="refresh" content="5"><title>Data of Sensor</title>
</head>
<body>
<h1>Real Time Data from i-Health Monitoring System</h1>
<form action="add.php" method="get">
<TABLE>
<tr>
   <td>Temperature 1</td>
   <td><input type="text" name="temp" size="20" maxlength="30"></td>
</tr>
<tr>
   <td>Moisture 1</td>
   <td><input type="text" name="heart" size="20" maxlength="30"></td>
</tr>
</TABLE>
<input type="submit" name="accion" value="Grabar">
</FORM>
<hr>

<table border="1" cellspacing="1" cellpadding="1">
      <tr>
          <td>Time</td>
         <td>Temperature </td>
         <td>Heart</td>
       </tr>
<?php   
 include("dbconnect.php");
      $sql="select * from male;";
   $result=mysqli_query($connect,$sql);
    $row=array();
   while($row = mysqli_fetch_assoc($result)) {
printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; 
    </td></tr>",$row["wr_id"], 
                $row["cnt_gents"], 
                $row["g_live_dustbin"],
                $row["g_live_airquality"],
                $row["g_live_floor1"]);
   }
   //mysql_free_result($connection,$result);
?>
</table>
</body>
</html>


 

<?php

	
// Set parameters
$apikey = '0c4e1be8-187b-4b1f-8726-0f9ba5ecf39c';
$value = '<title>Test PDF conversion</title><body>
<h1>hello world</h1>

<table class="first" cellpadding="4" cellspacing="6">
 <tr>
  
  <td width="100" align="center"><b>washroom Id</b></td>
  <td width="100" align="center"><b>people Cnt</b></td>
  <td width="100" align="center"><b>Good Feedback</b></td>
  <td width="100" align="center"><b>Bad Feedback</b></td>
  <td width="100" align="center"><b>Cleaning</b></td>
  <td width="100" align="center"><b>Rating</b></td>
 </tr>
 <tr>
  
  <td width="100" align="center"><b>G-01</b></td>
  <td width="100" align="center"><b>echo $cnt_gents</b></td>
  <td width="100" align="center"><b></b></td>
  <td width="100" align="center"><b></b></td>
  <td width="100" align="center"><b></b></td>
  <td width="100" align="center"><b></b></td>
 </tr>
 <tr>
  
  <td width="100" align="center"><b>G-02</b></td>
  <td width="100" align="center"><b></b></td>
  <td width="100" align="center"><b></b></td>
  <td width="100" align="center"><b></b></td>
  <td width="100" align="center"><b></b></td>
  <td width="100" align="center"><b></b></td>
 </tr>
</table>



</body>'; // can aso be a url, starting with http..
 

$result = file_get_contents("http://api.html2pdfrocket.com/pdf?apikey=" . urlencode($apikey) . "&value=" . urlencode($value));
 
// Output headers so that the file is downloaded rather than displayed
// Remember that header() must be called before any actual output is sent
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . strlen($result));
 
// Make the file a downloadable attachment - comment this out to show it directly inside the 
// web browser.  Note that you can give the file any name you want, e.g. alias-name.pdf below:
header('Content-Disposition: attachment; filename=' . 'alias-name.pdf' );
 
// Stream PDF to user
echo $result;


?>
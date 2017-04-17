<?php
//Here is the Email function to send the confirmation to our staff

function sendConfirmation($company, $presenter, $email, $phone, $webcasting, $notes, $filename){
	
	// multiple recipients
$to  = 'jianmyphy123@tutanota.com';// . ', '; // note the comma
//$to .= 'wez@example.com';

// subject
$subject = 'Jefferies 2016 Presentation Upload';

// message

$message = '
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h2 align="center">New Presenter Upload for <em>Jefferies 2016 Industrials Conference</em></h2>
<table width="392" border="1" align="center" cellpadding="6">
  <tr>
    <td width="105">Company:</td>
    <td width="223">'.$company.'</td>
  </tr>
  <tr>
    <td>Presenter:</td>
    <td>'.$presenter.'</td>
  </tr>
  <tr>
    <td>Email:</td>
    <td>'.$email.'</td>
  </tr>
  <tr>
    <td>Phone:</td>
    <td>'.$phone.'</td>
  </tr>
  <tr>
    <td>Webcasting?</td>
    <td>'.$webcasting.'</td>
  </tr>
  <tr>
    <td>Notes:</td>
    <td>'.$notes.'</td>
  </tr>
  <tr>
    <td>Filename:</td>
    <td>'.$filename.'</td>
  </tr>
</table>
<p align="center">&nbsp;</p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
	
}//close function sendConfirmation


?>
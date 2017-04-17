<?php
require_once('dev.php');

$message = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <h2 align="center">New Presenter Upload for <em>Jefferies 2016 Industrials Conference</em></h2>
    <table width="392" border="1" align="center" cellpadding="6" class="table">
        <tr>
            <td width="105">Company:</td>
            <td width="223">'.$_POST['company'].'</td>
        </tr>
        <tr>
            <td>Presenter:</td>
            <td>'.$_POST['contact_name'].'</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>'.$_POST['email'].'</td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td>'.$_POST['phone'].'</td>
        </tr>
        <tr>
            <td>Webcasting?</td>
            <td>'.$_POST['webcasting'].'</td>
        </tr>
        <tr>
            <td>Notes:</td>
            <td>'.$_POST['notes'].'</td>
        </tr>
        <tr>
            <td>Filename:</td>
            <td>'.$_POST['file'].'</td>
        </tr>
    </table>
</body>
</html>
';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

$success = mail($mail_to_address, $mail_subject, $message, implode("\r\n", $headers));

$res = array(
    "success"=> $success,
    "to" => $mail_to_address,
    "mail" => $message
);

echo json_encode($res);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>
<?php
use PHPMailer\PHPMailer\Exception; 
use PHPMailer\PHPMailer\PHPMailer;
require_once __DIR__ . '/vendor/autoload.php';
require('fpdf/fpdf.php');
        $pdf = new FPDF();
  function sendemail($email) {
		
    $mail = new PHPMailer(true);

try {
//Server settings
$mail->SMTPDebug = 0;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = ' smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'auditoriamum@gmail.com';                     //SMTP username
$mail->Password   = 'auditoria@1234';                               //SMTP password
$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('auditoriamum@gmail.com', 'Auditoria');
$mail->addAddress('patilasmita0000@gmail.com', '');     //Add a recipient
    
$add="as";
//Content
$mail->isHTML(true);                                  
$mail->Subject = 'Receipt from Auditoria';
$mail->Body    = "
 <h3>From auditoria,</h3>
<h3>An invitation to attend,</h3>
<h2>$add Shanes Guitar Performance</h2>
<h3>Venue: Auditoria (Swindon, Mumbai, India)</h3>
<h3>Date: 9 Oct 2021</h3>
<br>
<h4>To know more about the artist, please visit sa.com </h4>
<a href='https://getbootstrap.com/docs/5.0/getting-started/introduction/' >Book your Tickets Now</a>" ;     

$mail->send();
//echo 'Message has been sent';
}catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}        
sendemail('patilasmita0000@gmail.com');




?>

    <h3>From auditoria,</h3>
    <h3>An invitation to attend,</h3>
    <h2>Shane's Guitar Performance</h2>
    <h3>Venue: Auditoria (Swindon, Mumbai, India)</h3>
    <h3>Date: 9 Oct 2021</h3>
    <br>
    <h4>To know more about the artist, please visit sa.com </h4>
    <a href="">Book your Tickets Now</a>

    
    <script src="" async defer></script>
  </body>
</html>
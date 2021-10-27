<?php
session_start();
use PHPMailer\PHPMailer\Exception; 
        use PHPMailer\PHPMailer\PHPMailer;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
  </script>
  <script src="jquery-3.5.1.min.js"></script>
  <script type='text/javascript' src="/bootstrap.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  
    </head>
    <body>
       
 
<?php
require('config.php');

$conn = mysqli_connect('localhost','root','','test');



require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
 
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $r_order_id=$_SESSION['razorpay_order_id'];
    $r_payment_id=$_POST['razorpay_payment_id'];

    $name=$_SESSION['name'];
    $email=$_SESSION['email'];
    $no=$_SESSION['cont'];
    $address=$_SESSION['address'];
    $eventname=$_SESSION['eventname'];
    $req=$_SESSION['req'];
    $price=$_SESSION['price'];
    $hall=$_SESSION['hall'];
    $type=$_SESSION['ntype'];
    $date=$_SESSION['date'];
    $capacity=$_SESSION['capacity'];
    
 
    //Database
    if ($type=="Entertainment") {

        $time=$_SESSION['time'];
        $image=$_SESSION['file'];
        $ticketcost=$_SESSION['ticketcost'];
        $link=$_SESSION['link'];

        $sql = "INSERT INTO `orders` ( `order_id`, `payment_id`, `email`, `price`, `person`, `event`, `contact`, `address`, `request`, `hall`, `type`, `date`, `capacity` , `time`, `images`, `link`, `ticketcost`) VALUES ( '$r_order_id', '$r_payment_id', '$email', '$price', '$name', '$eventname', '$no', '$address', '$req', '$hall', '$type', '$date', '$capacity', '$time', '$image' , '$link', '$ticketcost');";
        //echo $sql;
        $_SESSION['status']="success";
        mysqli_query($conn,$sql);
      //  echo "DB Done";
    }
    else {
        $_SESSION['askuser']="";
    $sql = "INSERT INTO `orders` ( `order_id`, `payment_id`,  `email`, `price`, `person`, `event`, `contact`, `address`, `request`, `hall`, `type`, `date`, `capacity`) VALUES ( '$r_order_id', '$r_payment_id', '$email', '$price', '$name', '$eventname', '$no', '$address', '$req', '$hall', '$type', '$date', '$capacity');";
    //echo $sql;
    $_SESSION['status']="success";
    mysqli_query($conn,$sql);
    }

    //PDF  
     //PDF Content
     $address=addslashes($address);
     $eventname=addslashes($eventname);
     $n="+".$no[0].$no[1]." ";
     $arr=range(2,11);
     foreach ($arr as $i)
         $n=$n.$no[$i];
     $cont=$n;
     date_default_timezone_set("Asia/Kolkata");
     $d= date("h:i:sa");
      
        ?>
      <?php
        require_once __DIR__ . '/vendor/autoload.php';
            require('fpdf/fpdf.php');
                    $pdf = new FPDF();

         
             
            $pdf->AddPage();
            $pdf->SetFont('Arial','',12);

            $pdf->Cell(w:'140',h:'10',txt:'',border:'0',ln:'1',align:'L');
            $pdf->Cell(w:'40',h:'10',txt:'Auditoria',border:'0',ln:'1',align:'L');
            $pdf->Cell(w:'40',h:'8',txt:'Swindon, Mumbai, India',border:'0',ln:'1',align:'L');

            $pdf->Cell(w:'140',h:'10',txt:'',border:'0',ln:'1',align:'L');

            $pdf->Cell(w:'140',h:'10',txt:'Issued to',border:'0',ln:'1',align:'L');
            $pdf->Cell(w:'140',h:'10',txt:$name,border:'0',ln:'1',align:'L');
            $pdf->Cell(w:'140',h:'10',txt:$email,border:'0',ln:'1',align:'L');
            $pdf->Cell(w:'140',h:'10',txt:$cont,border:'0',ln:'1',align:'L');

            $pdf->Cell(w:'140',h:'10',txt:'',border:'0',ln:'1',align:'L');

            $pdf->Cell(w:'140',h:'10',txt:"Booked ".$hall." for ".$date,border:'0',ln:'1',align:'L');
            $pdf->Cell(w:'140',h:'10',txt:"Amount Paid: ".$price." Rs",border:'0',ln:'1',align:'L');
            $pdf->Cell(w:'140',h:'10',txt:"Payment Id: ".$r_payment_id,border:'0',ln:'1',align:'L');

            $pdf->Cell(w:'140',h:'10',txt:'',border:'0',ln:'1',align:'L');

            $pdf->Cell(w:'140',h:'10',txt:'Paid On',border:'0',ln:'1',align:'L');
            $pdf->Cell(w:'140',h:'10',txt:$date." ".$d,border:'0',ln:'1',align:'L');

            $attach = $pdf->output("","S");

            function sendemail($attach,$email) {
		
                $mail = new PHPMailer(true);
        
            try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = ' smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'email';                     //SMTP username
            $mail->Password   = 'password';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('email', 'Auditoria');
            $mail->addAddress($email, '');     //Add a recipient
                
            $mail -> addStringAttachment($attach, 'receipt.pdf');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Receipt from Auditoria';
            $mail->Body    = '<p>Thank you for trusting us. We would make the best of provisions for you and make every moment of the special day memorable.PFA the receipt of payment. If you have any doubts or special requests you can contact us any time.<p>
            <br><br> From Auditoria ';     
       
            $mail->send();
            //echo 'Message has been sent';
            }catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        }        
            sendemail($attach,$email);
            //End of Bill EMail


            //Sending mail to registered users

            if ($_SESSION['askuser']=="Yes") {
                
                $con = mysqli_connect('localhost','root','','test'); 
                $sql = "SELECT * FROM newsletter ";
               
               if ($result = mysqli_query($con, $sql)) {
                 
                //One Time need
               function alertusers($rec) {
                
                $mails = new PHPMailer(true);
                try {
                    $time=$_SESSION['time'];
                    $image=$_SESSION['file'];
                    $link=$_SESSION['link'];
                    $date=$_SESSION['date'];
                    $eventname=$_SESSION['eventname'];
                    //Server settings
                    $mails->SMTPDebug = 0;                      //Enable verbose debug output
                    $mails->isSMTP();                                            //Send using SMTP
                    $mails->Host       = ' smtp.gmail.com';                     //Set the SMTP server to send through
                    $mails->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mails->Username   = 'email';                     //SMTP username
                    $mails->Password   = 'password';                               //SMTP password
                    $mails->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                    $mails->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    
                    //Recipients
                    $mails->setFrom('email', 'Auditoria');
                    $mails->addAddress($rec, '');     //Add a recipient
                    
                    $time = strtotime($time);
                    $t=date("h:i A",$time);
                    $dates = strtotime($date);
                  $d=date("d M Y ",$dates);

                    //Content
                    $mails->isHTML(true);                                  
                    $mails->Subject = 'Invitation from Auditoria';
                    $mails->Body    = "
                     <h3>From auditoria,</h3>
                    <h3>An invitation to attend,</h3>
                    <h2>$eventname's Performance</h2>
                    <h3>Venue: Auditoria (Swindon, Mumbai, India)</h3>
                    <h3>Date: $d</h3>
                    <h3>Time: $t</h3>
                    <br>
                    <h4>To know more about the artist, please visit $link</h4>
                    <a href='http://localhost/Auditorium/index.php' >Book your Tickets Now</a>" ;     
                    
                    $mails->send();
                    //echo 'Message has been sent';
                    }catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }

               }
                
                
                // Fetch one and one row
                 while ($row = mysqli_fetch_row($result)) {
                  //echo $row[1]." ";
                  alertusers($row[1]);
            
                 }
                 mysqli_free_result($result);
               }
            }



    if ($_SESSION['status']=="success") {
        echo "<script>alert('Payment Successful. Payment id:$r_payment_id ')</script>";
    }
$html="     <br><br><div class='mt-5 mx-xl-5 mx-2 text-center'>
            <span class='h5'>Payment Successful.</span><br>
            <span class='h5'>Payment id:$r_payment_id </span><br>
            <span class='h5'>A mail has been sent at your specified e-mail address.</span><br>
            <button class='btn btn-primary mt-3' type='reset' onclick=fun()>Back to Home Page</a> </div>" ;

}
else
{
    $html = "<p>Your payment failed.You have already Paid.</p>
             <p>{$error}</p>";
}

echo $html;
?>

<script >
function fun() {
    
    <?php unset($_SESSION);
    session_destroy(); ?>
    window.location.href="index.php";
    return false;
    
}

</script>
    </body>
</html>
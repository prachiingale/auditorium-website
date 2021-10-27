<?php
session_start();

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/pay.css">
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
    <style>
        .razorpay-payment-button {
            background-color:#7853bc;
            color:white;          
        }
        .razorpay-payment-button:hover {
            letter-spacing:1.5px;
            color:white;   
        }
    </style>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark purple">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Auditoria</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto ">
          <li class="nav-item mx-xl-4 mx-3">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>

          <li class="nav-item dropdown mx-xl-4 mx-3">
            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Events
            </a>
            <ul class=" purple-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-light" href="weddings.php">Weddings</a></li>
              <li>
                <hr class="dropdown-divider ">
              </li>
              <li><a class="dropdown-item text-light" href="entertainment.php">Entertainment</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-light" href="corporatemain.php">Corporate</a></li>
            </ul>
          </li>
          <li class="nav-item mx-xl-4 mx-3">
            <a class="nav-link  " href="BookAuditorium.php">Book Auditorium</a>
          </li>
          <li class="nav-item mx-xl-4 mx-3"><a class="nav-link " active aria-current="page" href="index.php#tickets">Book Tickets</a></li>
          <li class="nav-item mx-xl-4 mx-3">
            <a class="nav-link" href="contactUs.php">Contact Us</a>
          </li>
         
          <li class="nav-item mx-xl-4 mx-3">
            <a class="nav-link" href="index.php#subs">Sign Up</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
<br><br><br>
<br><br>
<?php



require('config.php');
require('razorpay-php/Razorpay.php');

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//

$name=$_POST['inputname'];
$_SESSION["name"]=$name;
$email=$_POST['inputemail'];
$_SESSION["email"]=$email;
$contact=$_POST['inputcontact'];
$_SESSION["contact"]=$contact;
$tno=$_POST['inputno'];
$_SESSION["tno"]=$tno;
$percost=$_SESSION['ticketcost'];
$radioVal = $_POST["btnradio"];

$event=$_SESSION['event'];
$date = strtotime($_SESSION['date']);
$d=date("d M Y ",$date);

  if ($radioVal=="premium")
$cost=$tno*$percost*2;
else
	$cost=$tno*$percost;

$_SESSION["amount"]=$cost;

if ($tno==1)
$text="ticket";
else
$text="tickets";
echo " <div class='container mt-5 text-center mb-3'>";
echo "<div class='mb-5 h5 '>Procceed to pay <strong> INR $cost </strong> to Auditoira for booking $text of <strong> $event </strong> for the date <strong> $d </strong>?</div>";


$orderData = [
    'receipt'         => 3456,
    'amount'          => $cost * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}


$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Auditoria",
    "description"       => $event,
    "image"             => "images/audi.jpg",
    "prefill"           => [
    "name"              => $name,
    "email"             => $email,
    "contact"           => $contact,
    ],
    "notes"             => [
    "address"           => "Auditoria",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);
?>


<!--  The entire list of Checkout fields is available at
 https://docs.razorpay.com/docs/checkout-form#checkout-fields -->

<form action="ticketverify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="3456"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
 
  
  <input type="hidden" name="shopping_order_id" value="3456">

 <?php echo "</div>"; ?>
</form>
<br>
<br>



<script src="" async defer></script>
<script>
        $(document).ready(function () {
            
                $(".razorpay-payment-button").addClass("btn");
                
           
        });
    </script>
</body>
</html>

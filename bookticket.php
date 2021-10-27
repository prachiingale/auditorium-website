<?php
session_start();
$id = $_GET['id'];
$_SESSION['id']=$id;

?>


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
        <link rel="stylesheet" href=css/bookticket.css> <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
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
              <li><a class="dropdown-item text-light" href="wedding.php">Weddings</a></li>
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
            <a class="nav-link  active" href="BookAuditorium.php">Book Auditorium</a>
          </li>
          <li class="nav-item mx-xl-4 mx-3"><a class="nav-link " aria-current="page" href="index.php#tickets">Book Tickets</a></li>
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




  <?php
				$connect = mysqli_connect("localhost", "root", "", "test"); 				
				$query = "SELECT * FROM orders where type='Entertainment' and id=$id ORDER BY date DESC";  
                $result = mysqli_query($connect, $query);  
                
                while($row = mysqli_fetch_array($result) )  
                {  
                  $_SESSION["ticketcost"]=$row['ticketcost'];
                  $date = strtotime($row['date']);
                  $d=date("d M Y ",$date);
                  $time = strtotime($row['time']);
                  $t=date("h:i A",$time);
				          $premcost=$row['ticketcost']*2;
                  $_SESSION['event']=$row['event'];
                  $_SESSION['date']=$row['date'];

   echo  '<div class="container mt-3 mt-lg-5 px-md-5">
   <div class="row ">
   <h4 class="mb-md-3 mb-3 text-center">'.$row['event'].'</h4>
    <h4 class="mb-md-4 mb-4 text-center">'.$d.$t.' </h4>
    <h5 class="mb-md-4 mb-4 text-center">At Swindon Hall, Auditoria</h5>
    <p>'.$row['request'].'</p>
   
    
    <div class="mb-3 mt-3 row">
	
	
	<div class="col-md-4">
	<form action="ticketpay.php" method="POST">
		<label for="iinputname" class="form-label">Enter Name</label>
		<input class="form-control" name="inputname" id="iinputname" placeholder="John Doe">
	</div>
	<div class="col-md-4">
		<label for="iinputemail" class="form-label">Enter Email</label>
		<input type="email" class="form-control" name="inputemail" id="iinputemail">
	</div>
	<div class="col-md-4">
		<label for="iinputcontact" class="form-label">Enter Phone Number</label>
		<input type="number" class="form-control" name="inputcontact" id="iinputcontact">
	</div>
	
      <div class="mt-3">
        <label for="iinputno" class=" col-form-label me-md-4 me-3">Enter Number of Tickets to be booked:</label>
        <input type="number" class="form-control fwidth" id="iinputno" name="inputno">
      </div>
     
	 
	 <div class="mt-3 mb-2" >Select Type of Ticket:</div>
	   <div class="btn-group  flexdisplay" role="group" aria-label="Basic radio toggle button group">
	  <div class="row row-cols-sm-2 row-cols-1">
	  <div class="col">
  <input type="radio" class="col-sm-6 btn-check x-4" name="btnradio" id="btnradio1" autocomplete="off"  value="premium">
<label class="btn btn-outline-primary py-0 px-0" for="btnradio1">
         <div class="card rbtn">
            <div class="card-body text-center">
            <img src="images/premium.png">
              <h5 class="card-title">Premium Tickets</h5>
              <p class="card-text">Enjoy great seats with access to a private lounge and a Reserved Sitting on Deck. </p>
              <p>Cost per Ticket: '.$premcost.' <p>
            </div>
          </div>
		</label>
</div>
<div class="col">
  <input type="radio" class="col-sm-6 btn-check" name="btnradio" id="btnradio2" autocomplete="off" checked value="standard">
  <label class="btn btn-outline-primary rbtn py-0 px-0" for="btnradio2">
         <div class="card" id="c">
            <div class="card-body text-center">
            <img src="images/ticket.png">
              <h5 class="card-title">Standard Tickets</h5>
              <p class="card-text">Includes Standard Facilities with access to Lounge and Reserved Seating.</p>
              <p>Cost per Ticket: '.$row['ticketcost'].' <p>
            </div>
          </div>
		</label>
	</div>
	</div>
</div>	
	
	
	  </div>
	  
	  <div class="text-center mt-2 mt-md-3">
	  <input class="btn btncol px-4 px-md-5" type="submit" value="Proceed to Pay">
	  </div>
       </form>

      <div class="container d-flex justify-content-center">
          <div class="btn-group  flex-wrap" role="group" aria-label="Basic example">
          <a class="btn rounded mx-3 mx-md-5 mt-md-5 my-3 borcol" target="_blank" href='.$row['link'].'>Check details of Artist <i class="bi bi-chevron-double-right d-none" id="arrow"></i></a>
            <a class="btn rounded mx-3 mx-md-5 mt-md-5 my-3 borcol" target="_blank" href="entertainment.php">Check details of Hall <i class="bi bi-chevron-double-right d-none" id="arrow"></i></a>
            <a class="btn  rounded mx-3 mx-md-5 mt-md-5 my-3 borcol" target="_blank" href="contactUs.php">How to reach Us <i class="bi bi-chevron-double-right d-none" id="arrow"></i></a>
          </div>
     
      </div>
	  </div></div>
      ';
    }
    ?>



<br><br>
<footer class="purple ">
    <div>
      <div class="row row-cols-1 row-cols-md-3  g-4  mx-3 justify-content-center">
        <div class="col d-flex justify-content-center align-items-center flex-column align-content-center">
          <p class="mb-0"><img src="images/audi.jpg"></p>
        </div>
        <div class="col">
          <h4 class="text-center text-sm-start mb-3 text-white">Contact Us</h4>
          <p class=""><i class="bi bi-house-door-fill"></i> Swindon, Mumbai, India </p>
          <p class=""><i class="bi bi-telephone-fill"></i> +91 1234567899 </p>
          <p class=""><i class="bi bi-envelope-open-fill"></i> auditoriamum@gmail.com </p>
        </div>
        <div class="col">
          <h4 class="text-center text-sm-start  mb-3 text-white">Events</h4>
          <p class=""><a href="wedding.php" id="events-footer">Weddings</a></p>
          <p class=""><a href="corporatemain.php" id="events-footer">Corporate</a></p>
          <p class=""><a href="entertainment.php" id="events-footer">Entertainment</a></p>
        </div>
      </div>
    </div>
    <div class="container text-center mt-1">
      <a class="btn  rounded-circle m-1 mx-md-4 " id="pop" role="button">
        <i class="bi h4 bi-youtube pyou">
        </i>
      </a>
      <a id="pop" class="btn rounded-circle m-1 mx-md-4" role="button"><i class="bi  h4 bi-twitter ptwit"></i></a>
      <a id="pop" class="btn rounded-circle m-1 mx-md-4" role="button"><i class="bi  h4 bi-instagram pinst"></i></a>
      <a id="pop" class="btn rounded-circle m-1 mx-md-4" role="button"><i class="bi  pgit h4 bi-github"></i></a>
      <a id="pop" class="btn rounded-circle m-1 mx-md-4 " role="button"><i class="bi pface h4 bi-facebook"></i></a>
    </div>
    <p class="p-3 mb-0 text-white text-center"> &copy; Auditoria</p>
  </footer> 

        <script src="" async defer></script>
    </body>
</html>
<?php
session_start();
$subject = $_GET['hallname'];

$_SESSION['hall']=$subject;

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href=css/bookaudi.css> <link
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
      <a class="navbar-brand" href="#">Auditoria</a>
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

    <div class="container mt-5 px-xl-5 mb-5">
        <form class="row g-3 mx-lg-5 mx-sm-2" action="pay.php" enctype="multipart/form-data"  method="POST">
        <div class="col-12 ">
        <h5>Personal Details:</h5>
        </div>
        <div class="col-12 ">
                <label for="iinputname" class="form-label">Enter Name</label>
                <input type="text" class="form-control" name="inputname" id="iinputname" placeholder="Firstname Middlename Lastname">
            </div>
            <div class="col-md-4">
                <label for="iinputemail" class="form-label">Enter Email</label>
                <input type="email" class="form-control" name="inputemail" id="iinputemail">
            </div>
            <div class="col-md-4">
                <label for="iinputcontact" class="form-label">Enter Contact Number</label>
                <input type="number" class="form-control" name="inputcontact" id="iinputcontact">
            </div>
            <div class="col-md-4">
                <label for="iinputcap" class="form-label">Enter Maximum Number of Attending Guests</label>
                <input type="number" class="form-control" name="inputcap" id="iinputcap">
            </div>
            <div class="col-12">
                <label for="iinputaddress" class="form-label">Enter Address</label>
                <input type="text" class="form-control" name="inputaddress" id="iinputaddress" placeholder="1234 Main St">
            </div>
            <div class="col-12 mt-5">
                <label for="iinputevent" class="form-label">Enter Event's Name</label>
                <input type="text" class="form-control" name="inputevent" id="iinputevent" placeholder="Bill's Wedding, Sandra's Performance">
            </div>
            
            <?php
            if ($_SESSION['ntype']=="Entertainment") {
            $html='

            <div class="col-7">
            <label for="iinputlink" class="form-label">Enter Personal Website Link (if any)</label>
            <input type="text" class="form-control" name="inputlink" id="iinputlink">
            </div>

            <div class="col-5">
            <label for="iinputtime" class="form-label">Enter Time for Event</label>
            <input type="time" class="form-control" name="inputtime" id="iinputtime" >
            </div>

			
            <div class="col-7">
            <label for="inputfile" class="form-label">Upload Image File</label>
            <input class="form-control" type="file" id="inputfile" name="inputfile">
            </div>

			<div class="col-5">
            <label for="iinputcost" class="form-label">Enter Price for each Ticket</label>
            <input class="form-control" type="number" id="iinputcost" name="inputcost">
            </div>
			

            <div class="col-12 mt-3">
            <label for="inputevent" class="form-label">Do you want to send email about this event to registered users?</label>
            <div class="ps-3"> <label for="iy" class="form-label"><input type="radio" name="askuser" id="iy" value="Yes"> Yes, I would like to increase my reach</label></div>  
            <div class="mt-2 ps-3"> <label for="in" class="form-label"> <input type="radio" name="askuser" value="No" id="in"> No</label></div>  
            </div>
            <div class="col-12 mt-3">
            <label for="iinputreq" class="form-label">Enter Few Introductory Lines for the Perfromance</label>
            <textarea class="form-control" name="inputreq" id="iinputreq" ></textarea>
        </div>
            ';
            }
            else {
              $html= 
              ' <div class="col-12 mt-3">
              <label for="iinputreq" class="form-label">Any Special Requests??</label>
              <textarea class="form-control" name="inputreq" id="iinputreq" ></textarea>
          </div>';
            }
            echo $html;
            
            ?>
           
            
            <div class="col-12 text-center">
                <input type="submit" class="btn ppurple" value="Proceed to Payment"></button>
            </div>
            </form>
        </div>

 
<br>
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
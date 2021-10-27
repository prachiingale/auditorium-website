<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href=css/bookaudi.css> 
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

  



  <div class="container  text-center mt-4 mt-lg-5">
    <div class="mx-3">
      <div class="mb-3 ">
        <form method="POST" action="" id="f">
          <label for="exampleFormControlInput1" class="form-label pe-xl-5 h4 mb-4">Select Date and Type of Event to check for Availibility</label>
          <input type="date" class="form-control formcontrol mx-auto" name="ndate" placeholder="name@example.com">
      </div>
      <div class="mb-4 mt-4">
        <select class="form-select formcontrol mx-auto" name="type" aria-label="Default select example">
          <option disabled selected>Select Type of Event </option>
          <option value="Corporate">Corporate</option>
          <option value="Celebration">Weddings</option>
          <option value="Entertainment">Entertainment</option>
        </select>
      </div>
      <div class="my-3">
        <input type="submit" value="Check for Availibility" class="btn ppurple  " name="sub">
      </div>
      </form>
    </div>
  </div>





  <div id="Entertainment" class="start">
    <div
      class="row row-cols-1 row-cols-md-3 row-cols-sm-2 row-cols-lg-4 row-cols-xl-4 g-4 text-center mt-3 mx-3 justify-content-center">
      <div class="col" id="Swindon">
        <div class="ent-bkg align-items-center card h-100"><a href="entertainment.php" class="card-a nav-link"><img
              src="images/social4lg.jpg" class="card-img-top mt-2 " alt="..."></a>
          <div>
            <h5 class="card-title"><a href="entertainment.php" class="corp-a nav-link pb-0">Swindon Hall</a></h5>
            <p class="card-text mb-1">Capacity-280</p>
            <p class="card-text mb-3">Rate-30000 Rs</p>
            <a class="btn ent-btn-bkg mb-3 px-3 py-2 rounded-pill" href="bookaudiform.php?hallname=Swindon Hall">Book Auditorium</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="Corporate" class="start">
    <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 row-cols-lg-4 row-cols-xl-4 g-4 text-center mt-3 mx-3
      justify-content-center">
     
	 <div id="Farmhouse" class="start">
      <div class="col" >
        <div class="corp-bkg card align-items-center h-100 "><a href="farmhouse.php" class="card-a nav-link"><img
              src="images/corp1.jpg" class="card-img-top mt-2 " alt="..."></a>
          <div>
            <h5 class="card-title"><a href="farmhouse.php" class="corp-a nav-link pb-0">Farmhouse Boardroom</a></h5>
            <p class="card-text mb-1 ">Capacity-50</p>
            <p class="card-text mb-3">Rate-7000 Rs</p>
            <a class="btn corp-btn-bkg mb-3 px-3 py-2 rounded-pill"  href="bookaudiform.php?hallname=Farmhouse Boardroom">Book Auditorium</a>
          </div>
        </div>
      </div>
      </div>
	 
      <div id="Council" class="start">
      <div class="col" >
        <div class="corp-bkg align-items-center card h-100"><a href="council.php" class="card-a nav-link"><img src="images/a.jpg"
              class="card-img-top mt-2 " alt="..."></a>
          <div>
            <h5 class="card-title"><a href="council.php" class="corp-a nav-link pb-0">Council Room</a></h5>
            <p class="card-text mb-1">Capacity-110</p>
            <p class="card-text mb-3">Rate-11000 Rs</p>
            <a class="btn corp-btn-bkg mb-3 px-3 py-2 rounded-pill"  href="bookaudiform.php?hallname=Council Room">Book Auditorium</a>
          </div>
        </div>
          </div>
      </div>
	  
      
	  
      <div id="Hayloft" class="start">
      <div class="col">
        <div class="corp-bkg card align-items-center h-100 "><a href="hayloft.php" class="card-a nav-link"><img
              src="images/corp2.jpg" class="card-img-top mt-2 " alt="..."></a>
          <div>
            <h5 class="card-title"><a href="hayloft.php" class="corp-a nav-link pb-0">Hayloft Gallery</a></h5>
            <p class="card-text mb-1">Capacity-180</p>
            <p class="card-text mb-3">Rate-16000 Rs</p>
            <a class="btn corp-btn-bkg mb-3 px-3 py-2 rounded-pill" href="bookaudiform.php?hallname=Hayloft Gallery" >Book Auditorium</a>
          </div>
        </div>
      </div>
      </div>
	  
      <div id="Main" class="start">
      <div class="col">
        <div class="corp-bkg card align-items-center h-100 ">
          <a href="main.php" class="card-a nav-link">
            <img src="images/corp3.jpg" class="card-img-top mt-2" alt="...">
          </a>
          <div>
            <h5 class="card-title"><a href="main.php" class="corp-a  nav-link pb-0">Main Hall</a></h5>
            <p class="card-text mb-1">Capacity-230</p>
            <p class="card-text mb-3">Rate-22000 Rs</p>
            <a class="btn corp-btn-bkg mb-3 px-3 py-2 rounded-pill "  href="bookaudiform.php?hallname=Main Hall">Book Auditorium</a>
          </div>
        </div>
      </div>
      </div>
	  
	  
  </div>
  </div>


  <div id="Celebration" class="start">
    <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 row-cols-lg-4 row-cols-xl-4 g-4 text-center mt-3 mx-3
      justify-content-center">
      <div class="col" id="Central">
        <div class="wedding-bkg align-items-center card h-100"><a href="wedding.php" class="card-a nav-link"><img
              src="images/celeb9.jpg" class="card-img-top mt-2 " alt="..."></a>
          <div>
            <h5 class="card-title"><a href="wedding.php" class="corp-a nav-link pb-0">Central Hall</a></h5>
            <p class="card-text mb-1">Capacity-320</p>
            <p class="card-text mb-3">Rate-40000 Rs</p>
            <a class="btn wedding-btn-bkg mb-3 px-3 py-2 rounded-pill"  href="bookaudiform.php?hallname=Central Hall">Book Auditorium</a>
          </div>
        </div>
      </div>
  </div>
  </div>


  <!--Start Submission-->



  <?php
        
        //$in = "<script> document.getElementById('ddate').innerHTML;</script>"
      //<!--END OF SUBMISSION-->


//<!--Code for Choice Display-->
      $ndate = $type = $ven ="";
      if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['sub'])) {
        
        
        
        //echo'<script> $("#foot").removeClass("fixed-bottom"); </script>';
        
        $ndate = test_inp($_POST["ndate"]);
        $type = test_inp($_POST["type"]);
        displaychoices($ndate,$type);
       
        $_SESSION['date']=$ndate;
        $_SESSION['ntype']=$type;

      }
    
     
   

        function displaychoices($ndate,$type) {
          $farmhouse=$hayloft=$council=$main=0;
          $flag=0;
        if($type=="Entertainment" or $type=="Celebration") 
        {
          $con = mysqli_connect('localhost','root');
        
          mysqli_select_db($con,'test');

          $q = "select * from orders where type='$type' and date='$ndate' ";
         
           $result = mysqli_query($con,$q);
           
           
           while($row = mysqli_fetch_array($result)) {
             
             $flag=1;
             echo "<h5 class='text-center my-5'>Sorry for the inconvinence but all the halls are booked.</h5>";
           }
           if($flag==0 and $type=="Entertainment") {
            echo'<script>
            $("#foot").removeClass("fixed-bottom");
            </script>';
            echo'<script>
            $("#Entertainment").removeClass("start");
            </script>';
           }
           if($flag==0 and $type=="Celebration") {
            echo'<script>
            $("#foot").removeClass("fixed-bottom");
            </script>';
            echo'<script>
            $("#Celebration").removeClass("start");
            </script>';
           }
        }
        else {
          
          $flag=0;
            $con = mysqli_connect('localhost','root');
            
            mysqli_select_db($con,'test');

            $q = "select * from orders where type='$type' and date='$ndate' ";
            
             $result = mysqli_query($con,$q);
             while($row = mysqli_fetch_array($result)) {
              $ven = $row['hall'];
              
               $flag=1;
               if($ven=="Farmhouse Boardroom") {
                 $farmhouse=1;
              
               }
               if($ven=="Hayloft Gallery") {
                $hayloft=1;
               
              }
              if($ven=="Council Room") {
              
                $council=1;
              }
              if($ven=="Main Hall") {
                
                $main=1;
              }
             }

             if($flag==1) {
               
                if($farmhouse==1 and $hayloft==1 and $council==1 and $main==1) {
                 echo "<h5 class='text-center my-5'>Sorry for the inconvinence but all the halls are booked.</h5>";
                  
                }
                else {
                  echo'<script>
                  $("#foot").removeClass("fixed-bottom");
                  </script>';
                 
                  
                  echo '<script>
                  $("#Corporate").removeClass("start");
                  </script>';
                  if($farmhouse==0) {
                    $_SESSION['hall']='Farmhouse Boardroom';
                    echo'<script>
                    $("#Farmhouse").removeClass("start");
                    </script>';
                  }
                  if($hayloft==0) {
                   
                    echo'<script>
                    $("#Hayloft").removeClass("start");
                    </script>';
                  }
                  if($council==0) {
                    
                    echo'<script>
                    $("#Council").removeClass("start");
                    </script>';
                  }
                  if($main==0) {
                    
                    echo'<script>
                    $("#Main").removeClass("start");
                    </script>';
                  }
                  
                }
             }
             else {
              echo'<script>
                  $("#foot").removeClass("fixed-bottom");
                  </script>';
              echo '<div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 row-cols-lg-4 row-cols-xl-4 g-4 text-center mt-3 mx-3
              justify-content-center">
              <script>
              $("#Corporate").removeClass("start");
              $("#Farmhouse").removeClass("start");
              $("#Hayloft").removeClass("start");
              $("#Council").removeClass("start");
              $("#Main").removeClass("start");
              </script>';
              echo '</div>';
             }
            }


            }

// Removing the redundant HTML characters if any exist.
      function test_inp($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

 
      ?>

<br><br>
 <footer class="purple fixed-md-bottom mt-5 pt-3" id="foot">
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


</body>

</html>
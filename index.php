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
  <link rel="stylesheet" href=css/index.css> 
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
  <link href="https://fonts.googleapis.com/css2?family=Prata&family=Salsa&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark purple">
    <div class="container-fluid"><a class="navbar-brand p-0 px-2" href="index.php"><span class="nava">A</span><span class="navrest">uditoria</span></a><button
        class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto ">
          <li class="nav-item mx-xl-4 mx-3"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
          <li class="nav-item dropdown mx-xl-4 mx-3"><a class="nav-link dropdown-toggle " href="#" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">Events </a>
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
          <li class="nav-item mx-xl-4 mx-3"><a class="nav-link" href="BookAuditorium.php">Book Auditorium</a></li>
          <li class="nav-item mx-xl-4 mx-3"><a class="nav-link " aria-current="page" href="index.php#tickets">Book Tickets</a></li>
          <li class="nav-item mx-xl-4 mx-3"><a class="nav-link" href="contactUs.php">Contact Us</a></li>
         
          <li class="nav-item mx-xl-4 mx-3"><a class="nav-link" href="index.php#subs">Sign Up</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div id="carouselExampleIndicators" class="carousel slide  carousel-dark carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators"><button type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button><button type="button"
        data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button><button
        type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active"><img src="images/celeb1.jpg" class="d-block w-100" alt="..."></div>
      <div class="carousel-item"><img src="images/corp3.jpg" class="d-block w-100" alt="..."></div>
      <div class="carousel-item"><img src="images/social3.jpg" class="d-block w-100" alt="..."></div>
    </div><button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span
        class="visually-hidden">Previous</span></button><button class="carousel-control-next" type="button"
      data-bs-target="#carouselExampleIndicators" data-bs-slide="next"><span class="carousel-control-next-icon"
        aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
  </div>


  <div class="container d-flex text-center flex-column my-5  p-md-2" id="subs">
    <i class="bi h1 bi-calendar-check fill"></i>
    <h3 class="mt-3">Subscribe to our Newletter</h3>
    <div class="mt-md-2 h6">Get Alert/Updates about the Upcoming Events and never miss out on Amazing Events!!! </div>
<div class="mx-lg-5 px-lg-5">
    <form class="mx-md-5 mx-none mt-3 px-lg-5 px-2" action="newuser.php" method="POST">
		<div class="input-group mb-3 px-sm-5">
      <input type="email" name="email" class=" ps-0 form-control subscribe-border border-top-0 border-end-0 border-start-0 ms-lg-5 rounded ps-lg-4 py-2" placeholder="Enter Email Address" aria-label="Recipient's username" aria-describedby="button-addon2">
      <input name="newuser" class=" btn subscribe-btn me-lg-5 rounded px-lg-3 py-2 px-xxl-4" type="submit" id="button-addon2" value="Subscribe"></input>
    </div>  
		</form>
</div>
  </div>



  <h3 class="text-center my-4 d-blue" id="tickets">Upcoming Events</h3>

  <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 row-cols-lg-4 row-cols-xl-5 g-4 text-center  mx-3 justify-content-center" id="first">
				<?php
				$connect = mysqli_connect("localhost", "root", "", "test"); 				
				$query = "SELECT * FROM orders where type='Entertainment' ORDER BY date DESC";  
                $result = mysqli_query($connect, $query);  
                $i=0;
                
                while($row = mysqli_fetch_array($result) and $i<5)  
                {  
                  $i+=1;
                  $date = strtotime($row['date']);
                  $d=date("d M Y ",$date);
                  $time = strtotime($row['time']);
                  $t=date("h:i A",$time);
                  if ($row['link']=="")
                  $row['link']='#';

    echo '<div class="col">
      <div class="blue-bkg align-items-center card h-100"><a href='.$row['link'].' target="_blank" class="card-a nav-link"><img src="data:image/jpeg;base64,'.base64_encode($row['images'] ).'"
            class="card-img-top mt-2 px-2" alt="..."></a>
        <div>
          <h5 class="card-title"><a href='.$row['link'].' target="_blank" class="card-a nav-link pb-0"> '.$row['event'].' </a></h5>
          <p class="card-text mb-3 ">'.$d.$t.'  </p><a class="btn btn-pink-bkg mb-3 rounded-pill" href="bookticket.php?id='.$row['id'].'"> Book Ticket </a>
        </div>
      </div>
    </div>';
				}
?>
</div>


<div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 row-cols-lg-4 row-cols-xl-5 g-4 text-center  mx-3 justify-content-center extra" id="dash">
				<?php
        
				$connect = mysqli_connect("localhost", "root", "", "test"); 				
				$query = "SELECT * FROM orders where type='Entertainment' ORDER BY date DESC";  
                $result = mysqli_query($connect, $query);  
               
                
                while($row = mysqli_fetch_array($result) )  
                {  
                  
                  
                  $date = strtotime($row['date']);
                  $d=date("d M Y ",$date);
                  $time = strtotime($row['time']);
                  $t=date("h:m A",$time);
    echo '<div class="col">
      <div class="blue-bkg align-items-center card h-100"><a href='.$row['link'].' target="_blank" class="card-a nav-link"><img src="data:image/jpeg;base64,'.base64_encode($row['images'] ).'"
            class="card-img-top mt-2 px-2" alt="..."></a>
        <div>
          <h5 class="card-title"><a href="'.$row['link'].'" target="_blank" class="card-a nav-link pb-0"> '.$row['event'].' </a></h5>
          <p class="card-text mb-3 ">'.$d.$t.'  </p><a class="btn btn-pink-bkg mb-3 rounded-pill" href="bookticket.php?id=1"> Book Ticket </a>
        </div>
      </div>
    </div>';
				}
?>
</div>

 
  

  <div class="text-center my-3 mt-5"><button  id="seeless" onclick="viewmore()" class="btn rounded-pill btn-lg btn-blue-bkg btnh">View More</button>
  </div>
  
  <div class=" mx-2">
    <div class="container text-center mt-5 pos mb-3">
      <h3 class="brown-header">About Us</h3>
      <div class=" mt-4 mt-md-5 ">
        <div class="brown-bkg p-4 p-md-5  para rounded shad ">
          <p>Our historic London venue provides rooms to host
          various events comprising lavish weddings,
          splendid Entertainment events,
          and exquisite corporate events. Auditoria offers its members and guests a truly unique setting.
          Excellent catering facilities are offered by the in-house catering team. <span class="d-none d-sm-block">We
            provide four befitting meeting spaces for corporate events. A variety of
            indoor and outdoor drinks reception settings are available for marvelous weddings. The Swindon hall
            has impressive lighting and sound capabilities for musical performance and plays. 
          </span>
          <span>So,what Event are you hosting at the Auditoria?</span></p>
          <div class="btn-group flex-wrap" role="group" aria-label="Basic mixed styles example">
            <a type="button" class="btn btn-corp-bkg px-xl-4 px-2" href="corporatemain.php">Corporate</a>
            <a type="button" class="btn btn-ent-bkg px-xl-4 px-2" href="entertainment.php">Entertainment</a>
            <a type="button" class="btn btn-cel-bkg px-xl-4 px-2" href="wedding.php">Weddings</a>
            
          </div>
</div>
         
      </div>
    </div>
  </div>

  <script>
 function viewmore(){
   var element = document.getElementById("dash");
  element.classList.remove("extra");
  var element = document.getElementById("first");
  element.classList.add("d-none");
  var element = document.getElementById("seeless");
  element.classList.add("d-none");
}
    
  
  </script> 

  <div class="container d-flex text-center flex-column my-5  p-md-2">
    <i class="bi h1 bi-question-diamond fill"></i>
    <div class="mt-md-2">Got any doubts?? Feel Free to Contact Us</div>

    <div class="mt-2"><a class="btn rounded-pill signup-btn mt-md-2 px-sm-3 px-md-4 py-md-2 " href="contactUs.php">Enquire Now</a>
    </div>

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
</body>

</html>
<?php

session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'test');

$email = $_POST['email'];

$q = "select * from newsletter where email='$email' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num ==1){
    echo "<script>alert('Enter different credentials')</script>";
    ?>
    <script>
        window.location="http://localhost/Auditorium/index.php";
      
        </script>
<?php
}
else {  
    $query = "insert into newsletter(email) values('$email')";
    $result = mysqli_query($con,$query);
    echo "<script>alert('Thank you for Subscribing. Now you will never miss any event!!')</script>";
    ?>
    <script>
        window.location="http://localhost/Auditorium/index.php";
        </script>
<?php
}
?>
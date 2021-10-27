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
        <link rel="stylesheet" href="">
    </head>
    <body>
        
<?php

    $name = $_POST['inputname'];
    $email = $_POST['inputemail'];
    $contact = $_POST['inputcontact'];
    $query = $_POST['inputquery'];
   
    $con = mysqli_connect('localhost','root');


    
    mysqli_select_db($con, 'test');
    
    
    
    $query = "INSERT INTO `queries` (`name`, `email`, `contact`, `query`) VALUES ('$name', '$email', '$contact', '$query')";
    
    if (mysqli_query($con,$query))
        echo '<script>alert("Query has been submitted. Our team will reach out to you soon")</script>';
    else
    echo '<script>alert("Please try again. We are experiencing some issues")</script>';
    
    echo '<script>window.location.href="index.php"</script>';
     ?>   
        <script src="" async defer></script>
    </body>
</html>
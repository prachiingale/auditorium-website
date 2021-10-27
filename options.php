<?php
   //header('location:BookAuditorium.php'); 
    if(isset($_POST['sub'])){
        $d = $_POST['ndate'];
        //echo "<script>alert('HEY');</script>";
        echo"$d";

        if(!empty($_POST['type'])) {
            $selected = $_POST['type'];
            echo 'You have chosen: ' . $selected;
        } else {
            echo 'Please select the value.';
        }
        echo gettype($d) . "<br>";

        
       
    }
   
   /*$con = mysqli_connect('localhost','root');
        if($con){
            echo "Connected";
        }
        else {
            echo "NOT CONNECTED";
        }
        
        mysqli_select_db($con,'test');
        
        
        $q = "select * from dates";
       // $q = "select * from dates where name='$name' && password='$pass' ";
        $result = mysqli_query($con,$q);
        while($row = mysqli_fetch_array($result)) {
            
            echo $row['name'];       
            echo $row['start'];
        }*/


        
?>
<?php

$DeliveryID = $_POST["DeliveryID"];

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    echo $DeliveryID;
    $sql = "DELETE  FROM `DELIVERY` WHERE DeliveryID = '$DeliveryID'"; 
        $result = mysqli_query($con,$sql);
        if($result){
            header('location:assistantHome.php');
        }
        else
        {
            die(mysqli_error($con)); 
        }
?>
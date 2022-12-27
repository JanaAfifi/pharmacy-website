<?php

$PrescriptionID = $_POST['PrescriptionID'];

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    echo $PrescriptionID;
    $sql = "DELETE  FROM `PRESCRIPTION` WHERE  PrescriptionID = '$PrescriptionID'"; 
        mysqli_query($con,$sql);
        header('location:pharmacistHome.php');
?>
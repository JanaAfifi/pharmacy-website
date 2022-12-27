<?php

$licenseNumber = $_POST['licenseNumber'];

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    echo $licenseNumber;
    $sql = "DELETE  FROM `DOCTOR` WHERE License_number = $licenseNumber"; 
        $result = mysqli_query($con,$sql);
        if($result){
            header('location:assistantHome.php');
        }
        else
        {
            die(mysqli_error($con)); 
        }
?>
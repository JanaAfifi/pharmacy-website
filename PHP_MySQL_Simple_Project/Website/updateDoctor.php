<?php

$License_number = $_POST['License_number'];
$SPECIALTY = $_POST['SPECIALTY'];
$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Phone_number = $_POST['Phone_number'];
$Office_address = $_POST['Office_address'];

// Create connection
$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "UPDATE DOCTOR SET SPECIALTY ='$SPECIALTY', First_Name = '$First_Name', Last_Name = '$Last_Name', Phone_number = $Phone_number, Office_address = '$Office_address' WHERE License_number = '$License_number'"; 

mysqli_query($con, $sql);

@include("assistantHome.php");
?>
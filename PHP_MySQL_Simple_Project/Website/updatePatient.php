<?php

$PHN = $_POST['PHN'];
$Address = $_POST['Address'];
$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Phone_number = $_POST['Phone_number'];
$Date_of_birth = $_POST['Date_of_birth'];

// Create connection
$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "UPDATE PATIENT SET Address ='$Address', First_Name = '$First_Name', Last_Name = '$Last_Name', Phone_number = '$Phone_number', Date_of_birth = '$Date_of_birth' WHERE PHN = '$PHN'"; 

mysqli_query($con, $sql);

@include("assistantHome.php");
?>
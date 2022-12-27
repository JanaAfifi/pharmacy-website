<?php
$DIN = $_POST["DIN"];
$Date = $_POST["Date"];
$SSN = $_POST["pharmacistSSN"];
$DoseNumber = $_POST["DoseNumber"];
// Create connection
$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "INSERT INTO VACCINE_RECORD VALUES ('$DIN', '$Date', '$SSN', '$DoseNumber')"; 

mysqli_query($con, $sql);

@include("pharmacistHome.php");
?>
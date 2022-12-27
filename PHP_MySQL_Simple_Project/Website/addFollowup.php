<?php
$Date = $_POST["Date"];
$Notes = $_POST["Notes"];
$SSN = $_POST["pharmacistSSN"];
$PrescriptionID = $_POST["prescriptionID"];
// Create connection
$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "INSERT INTO FOLLOWUP VALUES ('$Date', '$Notes', '$SSN', '$PrescriptionID')"; 

mysqli_query($con, $sql);

@include("pharmacistHome.php");
?>
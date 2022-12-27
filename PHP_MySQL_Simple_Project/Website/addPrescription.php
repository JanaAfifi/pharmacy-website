<?php
$PrescriptionID = $_POST["prescriptionID"];
$Date = $_POST["date"];
$Workflow_state = $_POST["workflow_state"];
$PHN = $_POST["PHN"];
$SSN = $_POST["SSN"];
$License_number = $_POST["LicenceNumber"];
$DeliveryID = $_POST["DeliveryID"];
$DIN = $_POST["DIN"];
$Quantity = $_POST["Quantity"];
// Create connection
$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "INSERT INTO PRESCRIPTION VALUES ('$PrescriptionID', '$Date', '$Workflow_state', '$PHN', '$SSN', '$License_number', '$DeliveryID', '$DIN', $Quantity)"; 

mysqli_query($con, $sql);

@include("assistantHome.php");
?>
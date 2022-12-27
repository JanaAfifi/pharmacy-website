<?php

$PrescriptionID = $_POST['PrescriptionID'];
$Date = $_POST['Date'];
$Workflow_state = $_POST['Workflow_state'];
$PHN = $_POST['PHN'];
$SSN = $_POST['SSN'];
$License_number = $_POST['License_number'];
$DeliveryID = $_POST['DeliveryID'];
$DIN = $_POST['DIN'];
$QUANTITY = $_POST['QUANTITY'];

// Create connection
$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "UPDATE PRESCRIPTION SET Date ='$Date', Workflow_state = '$Workflow_state', PHN = '$PHN', SSN = '$SSN', License_number = '$License_number', DeliveryID = '$DeliveryID', DIN = '$DIN', QUANTITY = $QUANTITY WHERE PrescriptionID = '$PrescriptionID'"; 

mysqli_query($con, $sql);

@include("pharmacistHome.php");
?>
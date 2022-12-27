<?php

$date = $_POST['Date'];
$notes = $_POST['Notes'];
$SSN = $_POST['SSN'];
$PrescriptionID = $_POST['PrescriptionID'];

// Create connection
$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// $followup = $_POST["followup"];
// $sql = "SELECT * FROM `FOLLOWUP` WHERE Date = '$followup'";

// $select_item = mysqli_query($con, $sql);
// $fetch_item = mysqli_fetch_assoc($select_item);

$sql = "UPDATE FOLLOWUP SET Notes ='$notes', SSN = $SSN WHERE Date = '$date' AND PrescriptionID = $PrescriptionID"; 
$select_item = mysqli_query($con, $sql);

mysqli_query($con, $sql);

@include("pharmacistHome.php");
?>
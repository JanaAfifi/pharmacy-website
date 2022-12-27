<?php

$PHN = $_POST["PHN"];
$Date = $_POST["Date"];
$Time = $_POST['Time'];
$Type1 = $_POST['Type1'];
$SSN = $_POST['SSN'];

// Create connection
$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "UPDATE `APPOINTMENT` SET Type1 = '$Type1', SSN = '$SSN' WHERE PHN = '$PHN'AND Date = '$Date'"; 

mysqli_query($con, $sql);

@include("assistantHome.php");
?>
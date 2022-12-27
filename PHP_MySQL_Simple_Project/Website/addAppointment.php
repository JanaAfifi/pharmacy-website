<?php
$Date = $_POST["date"];
$Time = $_POST["time"];
$Type1 = $_POST["type"];
$SSN = $_POST["SSN"];
$PHN = $_POST["PHN"];
// Create connection
$con=mysqli_connect("localhost","root","","471");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  
  $sql = "INSERT INTO APPOINTMENT VALUES ('$Date', '$Time', '$Type1', '$SSN', '$PHN')"; 
  mysqli_query($con, $sql);

  @include("assistantHome.php");
?>
<?php
$License_Number = $_POST["LicenseNumber"];
$SPECIALTY = $_POST["Speciality"];
$First_Name = $_POST["FirstName"];
$Last_Name = $_POST["LastName"];
$Phone_Number = $_POST["PhoneNumber"];
$Office_address = $_POST["OfficeAddress"];

// Create connection
$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "INSERT INTO DOCTOR VALUES ('$License_Number', '$SPECIALTY', '$First_Name', '$Last_Name', '$Phone_Number', '$Office_address')"; 

mysqli_query($con, $sql);

@include("assistantHome.php");
?>
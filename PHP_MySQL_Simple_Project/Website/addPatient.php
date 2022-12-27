<?php
$PHN = $_POST["PHN"];
$Address = $_POST["Address"];
$First_Name = $_POST["FirstName"];
$Last_Name = $_POST["LastName"];
$Phone_Number = $_POST["PhoneNumber"];
$Date_of_birth = $_POST["DateOfBirth"];

// Create connection
$con=mysqli_connect("localhost","root","","471");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql1 = "INSERT INTO PATIENT VALUES ('$PHN', '$Address', '$First_Name', '$Last_Name', '$Phone_Number', '$Date_of_birth')";
mysqli_query($con, $sql1);
$number = count($_POST["name"]);
if($number>1){
  for($i=0;$i<$number;$i++){
    if(trim($_POST["name"] [$i])!=''){
      $Allergy = mysqli_real_escape_string($con, $_POST["name"] [$i]);
      $sql2 = "INSERT INTO PATIENT_ALLERGY VALUES ('$PHN', '$Allergy')";
      mysqli_query($con, $sql2);
    }

}}



@include("assistantHome.php");
?>
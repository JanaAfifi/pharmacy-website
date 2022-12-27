<?php
$DeliveryID = $_POST["DeliveryID"];
$Shipping_Date = $_POST["Shipping_Date"];
$Delivery_Date = $_POST["Delivery_Date"];
$Confirmation = $_POST["Confirmation"];
// Create connection
$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "INSERT INTO DELIVERY VALUES ('$DeliveryID', '$Shipping_Date', '$Delivery_Date', '$Confirmation')"; 

mysqli_query($con, $sql);

@include("assistantHome.php");

?>
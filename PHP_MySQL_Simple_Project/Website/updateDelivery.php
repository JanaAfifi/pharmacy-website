<?php

$DeliveryID = $_POST['DeliveryID'];
$Shipping_date = $_POST['Shipping_date'];
$Delivery_date = $_POST['Delivery_date'];
$Confirmation = $_POST['Confirmation'];

// Create connection
$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "UPDATE DELIVERY SET Shipping_date ='$Shipping_date', Delivery_date = '$Delivery_date', Confirmation = '$Confirmation' WHERE DeliveryID = '$DeliveryID'"; 

mysqli_query($con, $sql);

@include("assistantHome.php");
?>
<?php
$DIN = $_POST["DIN"];
$Name = $_POST["Name"];
$Cost_per_item = $_POST["Cost_per_Unit"];
$Min_allowable = $_POST["MinAllowable"];
$Max_allowable = $_POST["MaxAllowable"];
$Info = $_POST["Info"];
$Quantity_on_hand = $_POST["QuantityOnHand"];
// Create connection
$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "INSERT INTO INVENTORY_ITEM VALUES ('$DIN', '$Name', $Cost_per_item, $Min_allowable, $Max_allowable, '$Info', $Quantity_on_hand)"; 

mysqli_query($con, $sql);

@include("managerHome.php");
?>
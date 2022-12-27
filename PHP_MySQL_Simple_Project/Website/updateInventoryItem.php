<?php

$din = $_POST['DIN'];
$name = $_POST['Name'];
$Cost_per_item = $_POST['Cost_per_item'];
$Min_allowable = $_POST['Min_allowable'];
$Max_allowable = $_POST['Max_allowable'];
$Info = $_POST['Info'];
$Quantity_on_hand = $_POST['Quantity_on_hand'];
// Create connection
$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// $inventoryItem = $_POST["DIN"];
// $sql = "SELECT * FROM `INVENTORY_ITEM` WHERE DIN = '$inventoryItem'";

// $select_item = mysqli_query($con, $sql);
// $fetch_item = mysqli_fetch_assoc($select_item);

$sql = "UPDATE INVENTORY_ITEM SET Name ='$name', Cost_per_item = $Cost_per_item, Min_allowable = $Min_allowable, Max_allowable = $Max_allowable, Info = '$Info', Quantity_on_hand = $Quantity_on_hand WHERE DIN = '$din'"; 
$select_item = mysqli_query($con, $sql);

mysqli_query($con, $sql);

@include("managerHome.php");
?>
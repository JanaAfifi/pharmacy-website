<?php
$din = $_POST["DIN"];

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    echo $din;
    $sql = "DELETE  FROM `INVENTORY_ITEM` WHERE DIN = '$din'"; 
        $result = mysqli_query($con,$sql);
        if($result){
            header('location:managerHome.php');
        }
        else
        {
            die(mysqli_error($con)); 
        }
?>
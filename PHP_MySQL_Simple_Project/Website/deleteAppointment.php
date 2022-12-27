<?php
$PHN = $_POST["PHN"];
$Date = $_POST["Date"];

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    echo $PHN;
    $sql = "DELETE  FROM `APPOINTMENT` WHERE PHN = '$PHN'AND Date = '$Date'"; 
        $result = mysqli_query($con,$sql);
        if($result){
            header('location:assistantHome.php');
        }
        else
        {
            die(mysqli_error($con)); 
        }
?>
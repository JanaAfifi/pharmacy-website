<?php
$DIN = $_POST["DIN"];
$Date = $_POST['Date'];
$DoseNumber = $_POST['DoseNumber'];

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    echo $DIN;
    $sql = "DELETE  FROM `VACCINE_RECORD` WHERE DIN = '$DIN'AND Date = '$Date'AND DoseNumber = $DoseNumber"; 
        $result = mysqli_query($con,$sql);
        if($result){
            header('location:pharmacistHome.php');
        }
        else
        {
            die(mysqli_error($con)); 
        }
?>
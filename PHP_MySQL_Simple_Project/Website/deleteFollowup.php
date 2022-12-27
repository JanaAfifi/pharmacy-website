<?php
$date = $_POST["date"];
$PrescriptionID = $_POST['PrescriptionID'];

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    echo $date;
    $sql = "DELETE  FROM `FOLLOWUP` WHERE Date = '$date' AND PrescriptionID = '$PrescriptionID'"; 
        $result = mysqli_query($con,$sql);
        if($result){
            header('location:pharmacistHome.php');
        }
        else
        {
            die(mysqli_error($con)); 
        }
?>
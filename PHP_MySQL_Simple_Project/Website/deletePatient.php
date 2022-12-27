<?php
$PHN = $_POST["PHN"];

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    echo $PHN;
    $sql = "DELETE  FROM `PATIENT` WHERE PHN = '$PHN'"; 
        $result = mysqli_query($con,$sql);
        if($result){
            header('location:assistantHome.php');
        }
        else
        {
            die(mysqli_error($con)); 
        }
?>
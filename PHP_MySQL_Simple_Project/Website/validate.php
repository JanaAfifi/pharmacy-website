<?php

$username = $_POST["username"];
$password = $_POST["password"];


// Create connection
$con=mysqli_connect("localhost","root","","471");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



//Prevent SQL injections
$query = $con->prepare("SELECT Job_type FROM EMPLOYEE WHERE Username = ? AND Password = ?");
$query->bind_param("ss", $username, $password);
$success = $query->execute();
$query->close();

$Job_type = "";

if($success) //If username and password are correct, retrieve the job type
{

  $sql = "SELECT Job_type FROM EMPLOYEE WHERE Username = '$username' AND Password = '$password'";
  $result = mysqli_query($con, $sql);
  $Job_type=mysqli_fetch_column($result, 0);
}
else
{
  header("Location: index.php");
}

//close connection
mysqli_close($con);

if($Job_type == "Manager")
{
  header("Location: managerHome.php");
  //@include("enterPatient.php");
} 
else if($Job_type == "Pharmacist")
{
  header("Location: pharmacistHome.php");
}
else if($Job_type == "Assistant")
{
  header("Location: assistantHome.php");
}
else
{
  header("Location: index.php");
}

?>

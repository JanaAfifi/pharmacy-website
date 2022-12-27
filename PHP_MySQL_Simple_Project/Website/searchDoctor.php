<?php

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$licenseNumber = $_POST["licenseNumber"];
$sql = "SELECT * FROM `DOCTOR` WHERE License_number = '$licenseNumber'";
$select_item = mysqli_query($con, $sql);
if(mysqli_num_rows($select_item) > 0){
    $fetch_item = mysqli_fetch_assoc($select_item);
    $License_number = $fetch_item['License_number'];
    $SPECIALTY = $fetch_item['SPECIALTY'];
    $First_Name = $fetch_item['First_Name'];
    $Last_Name = $fetch_item['Last_Name'];
    $Phone_number = $fetch_item['Phone_number'];
    $Office_address = $fetch_item['Office_address'];
    ?>

    <form action="updateDoctor.php" method="post">
    <label for="License_number">License number:</label>
    <input type="text" id="License_number" name="License_number" value= <?=$License_number?>><br><br>
    <label for="SPECIALTY">SPECIALTY:</label>
    <input type="text" id="SPECIALTY" name="SPECIALTY" value= <?=$SPECIALTY?>><br><br>
    <label for="First_Name">First Name:</label>
    <input type="text" id="First_Name" name="First_Name" value = <?=$First_Name?>><br><br>
    <label for="Last_Name">Last Name:</label>
    <input type="text" id="Last_Name" name="Last_Name" value = <?=$Last_Name?>><br><br>
    <label for="Phone_number">Phone number:</label>
    <input type="text" id="Phone_number" name="Phone_number" value = <?=$Phone_number?>><br><br>
    <label for="Office_address">Office address:</label>
    <input type="text" id="Office_address" name="Office_address" value = <?=$Office_address?>><br><br>
    
    <input type="submit" value="Update">
    </form>

    <?php
}

//header("Location: managerHome.php");
?>



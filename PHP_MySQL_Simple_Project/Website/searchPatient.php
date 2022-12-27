<?php

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$patient = $_POST["patient"];
$sql = "SELECT * FROM `PATIENT` WHERE PHN = '$patient'";
$select_item = mysqli_query($con, $sql);
if(mysqli_num_rows($select_item) > 0){
    $fetch_item = mysqli_fetch_assoc($select_item);

    $PHN = $fetch_item['PHN'];
    $Address = $fetch_item['Address'];
    $First_Name = $fetch_item['First_Name'];
    $Last_Name = $fetch_item['Last_Name'];
    $Phone_number = $fetch_item['Phone_number'];
    $Date_of_birth = $fetch_item['Date_of_birth'];

    ?>

    <form action="updatePatient.php" method="post">
    <label for="PHN">PHN:</label>
    <input type="text" id="PHN" name="PHN" value= <?=$PHN?>><br><br>
    <label for="Address">Address:</label>
    <input type="text" id="Notes" name="Address" value= <?=$Address?>><br><br>
    <label for="First_Name">First Name:</label>
    <input type="text" id="First_Name" name="First_Name" value = <?=$First_Name?>><br><br>
    <label for="Last_Name">Last Name:</label>
    <input type="text" id="Last_Name" name="Last_Name" value = <?=$Last_Name?>><br><br>
    <label for="Phone_number">Phone number:</label>
    <input type="text" id="Phone_number" name="Phone_number" value = <?=$Phone_number?>><br><br>
    <label for="Date_of_birth">Date of birth:</label>
    <input type="text" id="Date_of_birth" name="Date_of_birth" value = <?=$Date_of_birth?>><br><br>
    
    <input type="submit" value="Update">
    </form>

    <?php
}
else
{
  header("Location: assistantHome.php");
}

?>



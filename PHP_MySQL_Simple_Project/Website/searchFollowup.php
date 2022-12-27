<?php

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$PrescriptionID = $_POST["PrescriptionID"];
$Date = $_POST["date"];

$sql = "SELECT * FROM `FOLLOWUP` WHERE Date = '$Date' AND PrescriptionID = '$PrescriptionID'";
$select_item = mysqli_query($con, $sql);
if(mysqli_num_rows($select_item) > 0){
    $fetch_item = mysqli_fetch_assoc($select_item);
    $date = $fetch_item['Date'];
    $notes = $fetch_item['Notes'];
    $SSN = $fetch_item['SSN'];
    $PrescriptionID = $fetch_item['PrescriptionID'];

    ?>

    <form action="updateFollowup.php" method="post">
    <label for="Date">Date:</label>
    <input type="text" id="Date" name="Date" value= <?=$date?>><br><br>
    <label for="Notes">Notes:</label>
    <input type="text" id="Notes" name="Notes" value= <?=$notes?>><br><br>
    <label for="SSN">SSN:</label>
    <input type="text" id="SSN" name="SSN" value = <?=$SSN?>><br><br>
    <label for="PrescriptionID">Prescription ID:</label>
    <input type="text" id="PrescriptionID" name="PrescriptionID" value = <?=$PrescriptionID?>><br><br>
    
    <input type="submit" value="Update">
    </form>

    <?php
}
else
{
  header("Location: pharmacistHome.php");
}
?>



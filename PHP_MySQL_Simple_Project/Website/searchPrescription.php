<?php

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$PrescriptionID = $_POST['PrescriptionID'];
$sql = "SELECT * FROM `PRESCRIPTION` WHERE PrescriptionID = '$PrescriptionID'";
$select_item = mysqli_query($con, $sql);
if(mysqli_num_rows($select_item) > 0){
    $fetch_item = mysqli_fetch_assoc($select_item);

    $PrescriptionID = $fetch_item['PrescriptionID'];
    $Date = $fetch_item['Date'];
    $Workflow_state = $fetch_item['Workflow_state'];
    $PHN = $fetch_item['PHN'];
    $SSN = $fetch_item['SSN'];
    $License_number = $fetch_item['License_number'];
    $DeliveryID = $fetch_item['DeliveryID'];
    $DIN = $fetch_item['DIN'];
    $QUANTITY = $fetch_item['QUANTITY'];

    ?>

    <form action="updatePrescription.php" method="post">

    <label for="PrescriptionID">Prescription ID:</label>
    <input type="text" id="PrescriptionID" name="PrescriptionID" value= <?=$PrescriptionID?>><br><br>
    <label for="Date">Date:</label>
    <input type="text" id="Date" name="Date" value= <?=$Date?>><br><br>
    <label for="Workflow_state">Workflow state:</label>
    <input type="text" id="Workflow_state" name="Workflow_state" value= <?=$Workflow_state?>><br><br>
    <label for="PHN">PHN:</label>
    <input type="text" id="PHN" name="PHN" value= <?=$PHN?>><br><br>
    <label for="SSN">SSN:</label>
    <input type="text" id="SSN" name="SSN" value = <?=$SSN?>><br><br>
    <label for="License_number">License number:</label>
    <input type="text" id="License_number" name="License_number" value = <?=$License_number?>><br><br>
    <label for="DeliveryID">Delivery ID:</label>
    <input type="text" id="DeliveryID" name="DeliveryID" value= <?=$DeliveryID?>><br><br>
    <label for="DIN">DIN:</label>
    <input type="text" id="DIN" name="DIN" value= <?=$DIN?>><br><br>
    <label for="QUANTITY">Quantity:</label>
    <input type="text" id="QUANTITY" name="QUANTITY" value= <?=$QUANTITY?>><br><br>


    <input type="submit" value="Update">
    </form>

    <?php
}
else
{
  header("Location: pharmacistHome.php");
}

//header("Location: managerHome.php");
?>



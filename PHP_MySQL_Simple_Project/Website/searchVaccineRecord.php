<?php

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$DIN = $_POST["DIN"];
$Date = $_POST["Date"];
$DoseNumber = $_POST["DoseNumber"];
$sql = "SELECT * FROM `VACCINE_RECORD` WHERE DIN = '$DIN' AND Date = '$Date' AND DoseNumber = '$DoseNumber'";
$select_item = mysqli_query($con, $sql);
if(mysqli_num_rows($select_item) > 0){
    $fetch_item = mysqli_fetch_assoc($select_item);
    $DIN = $fetch_item['DIN'];
    $Date = $fetch_item['Date'];
    $SSN = $fetch_item['SSN'];
    $DoseNumber = $fetch_item['DoseNumber'];

    ?>

    <form action="pharmacistHome.php" method="post">
    <label for="DIN">DIN:</label>
    <input type="text" id="DIN" name="DIN" value= <?=$DIN?>><br><br>
    <label for="Date">Date:</label>
    <input type="text" id="Date" name="Date" value= <?=$Date?>><br><br>
    <label for="SSN">SSN:</label>
    <input type="text" id="SSN" name="SSN" value = <?=$SSN?>><br><br>
    <label for="DoseNumber">Dose Number:</label>
    <input type="text" id="DoseNumber" name="DoseNumber" value = <?=$DoseNumber?>><br><br>
    
    <input type="submit" value="Done">
    </form>

    <?php
}
else
{
  header("Location: pharmacistHome.php");
}

?>



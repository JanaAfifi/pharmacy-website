<?php

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$PHN = $_POST["PHN"];
$Date = $_POST["Date"];
$sql = "SELECT * FROM `APPOINTMENT` WHERE PHN = '$PHN' AND Date = '$Date'";
$select_item = mysqli_query($con, $sql);
if(mysqli_num_rows($select_item) > 0){
    $fetch_item = mysqli_fetch_assoc($select_item);
    
    $Date = $fetch_item["Date"];
    $Time = $fetch_item['Time'];
    $Type1 = $fetch_item['Type1'];
    $SSN = $fetch_item['SSN'];
    $PHN = $fetch_item['PHN'];

    ?>

    <form action="updateAppointment.php" method="post">
    <label for="Date">Date:</label>
    <input type="text" id="Date" name="Date" value= <?=$Date?>><br><br>
    <label for="Time">Time:</label>
    <input type="text" id="Time" name="Time" value= <?=$Time?>><br><br>
    <label for="Type1">Type1:</label>
    <input type="text" id="Type1" name="Type1" value= <?=$Type1?>><br><br>
    <label for="SSN">SSN:</label>
    <input type="text" id="SSN" name="SSN" value = <?=$SSN?>><br><br>
    <label for="PHN">PHN:</label>
    <input type="text" id="PHN" name="PHN" value = <?=$PHN?>><br><br>

    
    <input type="submit" value="Update">
    </form>

    <?php
}
else
{
  header("Location: assistantHome.php");
}

?>



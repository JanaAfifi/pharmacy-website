<?php

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$inventoryItem = $_POST["inventoryItem"];
$sql = "SELECT * FROM `INVENTORY_ITEM` WHERE DIN = '$inventoryItem'";
$select_item = mysqli_query($con, $sql);
if(mysqli_num_rows($select_item) > 0){
    $fetch_item = mysqli_fetch_assoc($select_item);
    $din = $fetch_item['DIN'];
    $name = $fetch_item['Name'];
    $cost = $fetch_item['Cost_per_item'];
    $minallowable = $fetch_item['Min_allowable'];
    $maxallowable = $fetch_item['Max_allowable'];
    $info = $fetch_item['Info'];
    $Quantity = $fetch_item['Quantity_on_hand'];
    ?>

    <form action="updateInventoryItem.php" method="post">
    <label for="DIN">DIN:</label>
    <input type="text" id="DIN" name="DIN" value= <?=$din?>><br><br>
    <label for="Name">Name:</label>
    <input type="text" id="Name" name="Name" value= <?=$name?>><br><br>
    <label for="Cost_per_item">Cost per item:</label>
    <input type="text" id="Cost_per_item" name="Cost_per_item" value = <?=$cost?>><br><br>
    <label for="Min_allowable">Minimum allowable:</label>
    <input type="text" id="Min_allowable" name="Min_allowable" value = <?=$minallowable?>><br><br>
    <label for="Max_allowable">Maximum allowable:</label>
    <input type="text" id="Max_allowable" name="Max_allowable" value = <?=$maxallowable?>><br><br>
    <label for="Info">Information:</label>
    <input type="text" id="Info" name="Info" value = <?=$info?>><br><br>
    <label for="Quantity_on_hand">Quantity on hand:</label>
    <input type="text" id="Quantity_on_hand" name="Quantity_on_hand" value = <?=$Quantity?>><br><br>
    
    <input type="submit" value="Update">
    </form>

    <?php
}

//header("Location: managerHome.php");
?>



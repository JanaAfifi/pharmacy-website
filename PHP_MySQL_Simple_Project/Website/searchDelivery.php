<?php

$con=mysqli_connect("localhost","root","","471");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$deliveryID = $_POST["deliveryID"];
$sql = "SELECT * FROM `DELIVERY` WHERE DeliveryID = '$deliveryID'";
$select_item = mysqli_query($con, $sql);
if(mysqli_num_rows($select_item) > 0){
    $fetch_item = mysqli_fetch_assoc($select_item);
    
    $DeliveryID = $fetch_item['DeliveryID'];
    $Shipping_date = $fetch_item['Shipping_date'];
    $Delivery_date = $fetch_item['Delivery_date'];
    $Confirmation = $fetch_item['Confirmation'];

    ?>

    <form action="updateDelivery.php" method="post">
    <label for="DeliveryID">Delivery ID:</label>
    <input type="text" id="DeliveryID" name="DeliveryID" value= <?=$DeliveryID?>><br><br>
    <label for="Shipping_date">Shipping date:</label>
    <input type="text" id="Shipping_date" name="Shipping_date" value= <?=$Shipping_date?>><br><br>
    <label for="Delivery_date">Delivery date:</label>
    <input type="text" id="Delivery_date" name="Delivery_date" value = <?=$Delivery_date?>><br><br>
    <label for="Confirmation">Confirmation:</label>
    <input type="text" id="Confirmation" name="Confirmation" value = <?=$Confirmation?>><br><br>
    
    <input type="submit" value="Update">
    </form>

    <?php
}

//header("Location: managerHome.php");
?>



<body style="background-color:powderblue;">

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h1>Manager Home Page</h2></center>
</header>

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h2>Inventory Item</h1></center>
</header>

<form action="searchInventoryItem.php" method="post">
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;">DIN: <input type="text" name="inventoryItem"><br></center>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Search Inventory Item by DIN"></center>
</form>

<form action="deleteInventoryItem.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;">DIN: <input type="text" name="DIN"> <br></center>
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Delete Inventory Item by DIN"></center>
</form>

<form action="enterInventoryItem.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Add Inventory Item"></center>
</form>

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h2>Employee Info</h1></center>
</header>

<form action="displayEmployeeInfo.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Display Employee Info"></center>
</form>

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h2>Return to Login Page</h1></center>
</header>

<form action="index.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Log Out"></center>
</form>
</body>



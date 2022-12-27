<body style="background-color:powderblue;">

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h1>Assistant Home Page</h2></center>
</header>

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h2>Patient</h1></center>
</header>

<form action="searchPatient.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>PHN: <input type="text" name="patient"><br></center>
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Search for Patient by PHN"></center>
</form>

<form action="deletePatient.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;">PHN: <input type="text" name="PHN"> <br></center>
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Delete Patient by PHN"></center>
</form>

<form action="enterPatient.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Add Patient"></center>
</form>

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h2>Appointment</h1></center>
</header>

<form action="searchAppointment.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>PHN: <input type="text" name="PHN"><br></center>
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>Date: <input type="text" name="Date"><br></center>
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Search for Appointment by PHN and Date"></center>
</form>

<form action="deleteAppointment.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>PHN: <input type="text" name="PHN"><br></center>
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>Date: <input type="text" name="Date"><br></center>
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Delete Appointment by PHN and Date"></center>
</form>

<form action="enterAppointment.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Add Appointment"></center>
</form>

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h2>Prescription</h1></center>
</header>

<form action="enterPrescription.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Add Prescription"></center>
</form>

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h2>Delivery</h1></center>
</header>

<form action="searchDelivery.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>DeliveryID: <input type="text" name="deliveryID"><br></center>
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Search for Delivery by DeliveryID"></center>
</form>

<form action="deleteDelivery.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>DeliveryID: <input type="text" name="DeliveryID"><br></center>
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Delete Delivery by DeliveryID"></center>
</form>

<form action="enterDelivery.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Add Delivery"></center>
</form>

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h2>Doctor</h1></center>
</header>

<form action="searchDoctor.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>License Number: <input type="text" name="licenseNumber"><br></center>
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Search for Doctor by License Number"></center>
</form>

<form action="deleteDoctor.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>License Number: <input type="text" name="licenseNumber"><br></center>
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Delete Doctor by License Number"></center>
</form>

<form action="enterDoctor.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Add Doctor"></center>
</form>

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h2>Return to Login Page</h1></center>
</header>

<form action="index.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Log Out"></center>
</form>
</body>

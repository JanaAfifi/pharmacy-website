<body style="background-color:powderblue;">

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h1>Pharmacist Home Page</h2></center>
</header>

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h2>Prescription</h1></center>
</header>

<form action="searchPrescription.php" method="post">
<center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>PrescriptionID: <input type="text" name="PrescriptionID"><br></center>
   <center><input type="submit" value="Search for Prescription by PrescriptionID"></center>
</form>

<form action="deletePrescription.php" method="post">
<center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>PrescriptionID: <input type="text" name="PrescriptionID"><br></center>
   <center><input type="submit" value="Delete Prescription by PrescriptionID"></center>
</form>

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h2>Followup</h1></center>
</header>

<form action="searchFollowup.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>PrescriptionID: <input type="text" name="PrescriptionID"><br></center>
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>Date: <input type="text" name="date"><br></center>
   <center><input type="submit" value="Search for Followup by PrescriptionID and Date"></center>
</form>

<form action="deleteFollowup.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>PrescriptionID: <input type="text" name="PrescriptionID"><br></center>
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>Date: <input type="text" name="date"><br></center>
   <center><input type="submit" value="Delete Followup by PrescriptionID and Date"></center>
</form>

<form action="enterFollowup.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Add Followup"></center>
</form>

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h2>Vaccine Record</h1></center>
</header>


<form action="searchVaccineRecord.php" method="post">
<center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>DIN: <input type="text" name="DIN"><br></center>
<center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>Date: <input type="text" name="Date"><br></center>
<center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>Dose number: <input type="text" name="DoseNumber"><br></center>
   <center><input type="submit" value="Search for Vaccine Record by DIN, Date, Dose number"></center>
</form>

<form action="deleteVaccineRecord.php" method="post">
<center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>DIN: <input type="text" name="DIN"><br></center>
<center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>Date: <input type="text" name="Date"><br></center>
<center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><br>Dose number: <input type="text" name="DoseNumber"><br></center>
   <center><input type="submit" value="Delete Vaccine Record by DIN, Date, Dose Number"></center>
</form>

<form action="enterVaccineRecord.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Add Vaccine Record"></center>
</form>

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h2>Return to Login Page</h1></center>
</header>


<form action="index.php" method="post">
   <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Log Out"></center>
</form>
</body>

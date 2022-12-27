<body style="background-color:powderblue;">
<?php

$con=mysqli_connect("localhost","root","","471");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT * FROM MANAGER";
$manager_query = mysqli_query($con, $sql);

$sql = "SELECT * FROM PHARMACIST";
$pharmacist_query = mysqli_query($con, $sql);

$sql = "SELECT * FROM ASSISTANT";
$assistant_query = mysqli_query($con, $sql);

?>

<style>
table, th, td {
    border: 3px solid black;

}
</style>

<header>
    <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h1>Manager</h1></center>
</header>

  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><table>
    <tr>
        <td>SSN</td>
        <td>First_Name</td>
        <td>Last_Name</td>
        <td>Address</td>
        <td>Salary</td>
        <td>Phone_number</td>
        <td>Username</td>
        <td>Password</td>
    </tr>

    <?php
        while ($row = mysqli_fetch_array($manager_query)) 
        {
            $SSN = $row['SSN'];

            $sql = "SELECT * FROM EMPLOYEE WHERE SSN = '$SSN'";
            $employee_query = mysqli_query($con, $sql);
            $employee_row = mysqli_fetch_array($employee_query);
    ?>
    <tr>
        <td><?php echo $row['SSN']; ?></td>
        <td><?php echo $employee_row['First_Name']; ?></td>
        <td><?php echo $employee_row['Last_Name']; ?></td>
        <td><?php echo $employee_row['Address']; ?></td>
        <td><?php echo $employee_row['Salary']; ?></td>
        <td><?php echo $employee_row['Phone_number']; ?></td>
        <td><?php echo $employee_row['Username']; ?></td>
        <td><?php echo $employee_row['Password']; ?></td>
    </tr>
    <?php
        }
    ?>
</table></center>

<header>
    <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h1>Pharmacists</h1></center>
</header>

  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><table>
    <tr>
        <td>SSN</td>
        <td>First_Name</td>
        <td>Last_Name</td>
        <td>Address</td>
        <td>Salary</td>
        <td>Phone_number</td>
        <td>Username</td>
        <td>Password</td>
        <td>License_number</td>
    </tr>

    <?php
        while ($row = mysqli_fetch_array($pharmacist_query)) 
        {
            $SSN = $row['SSN'];
            $sql = "SELECT * FROM EMPLOYEE WHERE SSN = '$SSN'";
            $employee_query = mysqli_query($con, $sql);
            $employee_row = mysqli_fetch_array($employee_query);
    ?>
    <tr>
        <td><?php echo $row['SSN']; ?></td>
        <td><?php echo $employee_row['First_Name']; ?></td>
        <td><?php echo $employee_row['Last_Name']; ?></td>
        <td><?php echo $employee_row['Address']; ?></td>
        <td><?php echo $employee_row['Salary']; ?></td>
        <td><?php echo $employee_row['Phone_number']; ?></td>
        <td><?php echo $employee_row['Username']; ?></td>
        <td><?php echo $employee_row['Password']; ?></td>
        <td><?php echo $row['License_number']; ?></td>
    </tr>
    <?php
        }
    ?>
</table></center>

<header>
    <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h1>Assistants</h1></center>
</header>

<center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><table>
    <tr>
        <td>SSN</td>
        <td>First_Name</td>
        <td>Last_Name</td>
        <td>Address</td>
        <td>Salary</td>
        <td>Phone_number</td>
        <td>Username</td>
        <td>Password</td>
    </tr>

    <?php
        while ($row = mysqli_fetch_array($assistant_query)) 
        {
            $SSN = $row['SSN'];
            $sql = "SELECT * FROM EMPLOYEE WHERE SSN = '$SSN'";
            $employee_query = mysqli_query($con, $sql);
            $employee_row = mysqli_fetch_array($employee_query);
    ?>
    <tr>
        <td><?php echo $row['SSN']; ?></td>
        <td><?php echo $employee_row['First_Name']; ?></td>
        <td><?php echo $employee_row['Last_Name']; ?></td>
        <td><?php echo $employee_row['Address']; ?></td>
        <td><?php echo $employee_row['Salary']; ?></td>
        <td><?php echo $employee_row['Phone_number']; ?></td>
        <td><?php echo $employee_row['Username']; ?></td>
        <td><?php echo $employee_row['Password']; ?></td>
    </tr>
    <?php
        }
    ?>
</table></center>

<header>
  <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><h2>Return to Home Page</h1></center>
</header>

<form action="ManagerHome.php">
    <center style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;"><input type="submit" value="Return to Home Page"></center>
</form>

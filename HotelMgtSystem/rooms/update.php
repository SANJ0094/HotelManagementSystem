<?php
require '../include/header.php';
?>

<!DOCTYPE>
<html>
<head>
<title>Update Records</title>
<link rel="stylesheet" type="text/css" href="../css/reserveroom.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<h1 align="center">Update the reservation</h1>

<p class="para">
Choose certain reservation id and row. Then click on the edit link and form will appear. edit your required details. 
</p>


<?php
// connect to the database
include('../database/connection.php');

// get the records from the database
if ($result = $con->query("SELECT * FROM reserveroom ORDER BY id"))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
echo "<table border='1' cellpadding='10' style='    background-color: #d6e7fd; margin-left: 200px; color: #263238; font-size: 14px; border-radius: 5px;     margin-bottom: 100px;'>";

// set table headers
echo "<tr>
<th>ID</th>
<th>Full Name</th>
<th>NicNumber</th>
<th>Email</th>
<th>Visitor</th>
<th>Room</th>
<th>Arrival date</th>
<th>Departure date</th>
<th colspan='2'>Options</th>
</tr>";

while ($row = $result->fetch_object())
{
// set up a row for each record
echo "<tr>";
echo "<td>" . $row->id . "</td>";
echo "<td>" . $row->fullname . "</td>";
echo "<td>" . $row->nic . "</td>";
echo "<td>" . $row->email . "</td>";
echo "<td>" . $row->visitor . "</td>";
echo "<td>" . $row->myroom . "</td>";
echo "<td>" . $row->Date . "</td>";
echo "<td>" . $row->mydepdate . "</td>";
echo "<td><a href='reserveroom.php?id=" . $row->id . "'>Edit</a></td>";
echo "<td><a href='delete.php?id=" . $row->id . "'>Delete</a></td>";
echo "</tr>";
}

echo "</table>";
}
// if there are no records in the database, display an alert message
else
{
echo "<p  style='font-size: 20px; margin-left: 750;'>No results to display!<br></p>";
}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $con->error;
}

// close database connection
$con->close();

?>

<a href="reserveroom.php" style="color: #ff0034; font-size: 20px; margin-left: 650;">Add New Reservation</a>
</body>

<?php 
    require '../include/footer.php'; 
?>

</html>
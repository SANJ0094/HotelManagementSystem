<?php
require '../include/header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Delete reservation</h1>
</body>


<?php
// connect to the database
include('../database/connection.php');



// confirm that the 'id' variable has been set
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
// get the 'id' variable from the URL
$id = $_GET['id'];

// delete record from database
if ($stmt = $con->prepare("DELETE FROM reserveroom WHERE id = ? LIMIT 1"))
{
$stmt->bind_param("i",$id);
$stmt->execute();
$stmt->close();
}
else
{
echo "ERROR: could not prepare SQL statement.";
}
$con->close();

// redirect user after delete is successful
header("Location: update.php");
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: update.php");
}
?>

<?php 
    require '../include/footer.php'; 
?>
</html>
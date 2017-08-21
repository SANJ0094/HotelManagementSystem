<?php
    require '../include/header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Event</title>
	<link rel="stylesheet" type="text/css" href="eventStyle.css">
</head>
<body>
	<h1>This is Update Event Page</h1>
	<form action="../database/Delete.php" method="post">
		<table>
			<tr>
				<td> Event ID : </td>
				<td> 
					<input type="number" name="EventId">
				</td>
			</tr>
		</table>

		<input type="submit" name="DeleteEvent" value="Delete">

	</form>

</body>

<?php 
    require '../include/footer.php'; 
?>

</html>
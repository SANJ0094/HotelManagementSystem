<?php
    require '../include/header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Event</title>
	<link rel="stylesheet" type="text/css" href="eventStyle.css">
</head>
<body>
	<h1>This is Add Event Page</h1>
	<form action="../database/Add.php" method="post">
		<table>
			<tr>
				<td> Event Name : </td>
				<td> 
					<input type="text" name="EventName">
				</td>
			</tr>
			<tr>
				<td> Host : </td>
				<td> 
					<input type="text" name="Host">
				</td>
			</tr>

			<tr>
				<td> Contact Number : </td>
				<td> 
					<input type="text" name="ContactNumber">
				</td>
			</tr>

			<tr>
				<td> Date : </td>
				<td> 
					<input type="date" name="Date">
				</td>
			</tr>

			<tr>
				<td> Start Time : </td>
				<td> 
					<input type="time" name="StartTime">
				</td>
			</tr>

			<tr>
				<td> End Time : </td>
				<td>
					<input type="time" name="EndTime">
				 </td>
			</tr>

			<tr>
				<td> Hall : </td>
				<td> 
					<select name="Hall">
						<option>Hall 1</option>
						<option>Hall 2 </option>
						<option>Hall 3</option>
						<option>Hall 4</option>
					</select>
				</td>
			</tr>

			<tr>
				<td> Description : </td>
				<td> 
					<textarea rows="10" cols="55" name="Description"></textarea>
				</td>
			</tr>

		</table>

		<input type="submit" name="AddEvent" value="Add Event">
		<input type="reset" value="Cancel">

	</form>
</body>
<?php 
    require '../include/footer.php'; 
?>
</html>

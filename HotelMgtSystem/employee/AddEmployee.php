<?php
    require '../include/header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
	
</head>
<body>
	<div id="employeeForm" style="margin-left:10%">
	<h1>This is Add Employee Page</h1>
	<form action="../database/Add.php" method="post">
	<table>
		<tr>
			<td> First Name : </td>
			<td> 
				<input type="text" name="first_name">
			</td>
		</tr>
		<tr>
			<td> Last Name : </td>
			<td> 
				<input type="text" name="last_name">
			</td>
		</tr>

		<tr>
			<td> NIC Number : </td>
			<td> 
				<input type="varchar" name="NIC_number">
			</td>
		</tr>

		<tr>
			<td> Sex : </td>
			<td> 
				<input type="radio" name="sex" value="M"> Male 
				<input type="radio" name="sex" value="F"> Female
			</td>
		</tr>

		<tr>
			<td> Contact Number : </td>
			<td> 
				<input type="text" name="contact_number">
			</td>
		</tr>

		<tr>
			<td> Email : </td>
			<td>
				<input type="Email" name="email">
			 </td>
		</tr>

		<tr>
			<td> Birth Date : </td>
			<td> 
				<input type="date" name="birth_date">
			</td>
		</tr>

		<tr>
			<td> Hired Date : </td>
			<td> 
				<input type="date" name="hired_date">
			</td>
		</tr>

		<tr>
			<td> Salary : </td>
			<td>
				<input type="text" name="salary">
			 </td>
		</tr>

		<tr>
			<td> Job : </td>
			<td>
				<input type="text" name="job">
			 </td>
		</tr>
		<tr>
			<td> Employee Type : </td>
			<td> 
				<select name="employee_type">
					<option selected>Full Time Employee</option>
					<option>Half Time Employee</option>
					<option>Shifted Employee</option>
				</select>
			</td>
		</tr>

	</table>

	<input type="submit" name="add_employee" value="Add Employee">
	<input type="reset" value="Cancel">
	</form>
</body>
<?php 
    require '../include/Footer.php'; 
?>
</html>

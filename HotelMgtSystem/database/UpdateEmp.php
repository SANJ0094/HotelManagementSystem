
<?php

    if(isset($_POST['SearchEmployee'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $NIC_number = $_POST['NIC_number'];
    $sex = $_POST['sex'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $birth_date = $_POST['birth_date'];
    $hired_date = $_POST['hired_date'];
    $salary = $_POST['salary'];
    $job = $_POST['job'];
    $employee_type = $_POST['employee_type'];
    

    require 'connection.php';

}






$sql = "SELECT * FROM Employees WHERE NIC_number = '$NIC_number'";
   $query2 = mysql_query( $sql, $con );
   
   if(! $query2) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_assoc($query2)) {
      INSERT INTO  "FirstName :{$row['$first_name']}  <br> ".
         "LastName : {$row['$last_name']} <br> ".
         "ContactNumber : {$row['$contact_number']} <br> ".
         "NIC_number : {$row['$NIC_number']} <br> ".
         "Sex : {$row['$sex']} <br> ".
         "ContactNumber : {$row['$contact_number']} <br> ".
         "Email : {$row['$email']} <br> ".
         "BirthDate: {$row['$birth_date']} <br> ".
         "HiredDate : {$row['$hired_date']} <br> ".
         "Salary : {$row['$salary']} <br> ".
         "Job : {$row['$job']} <br> ".
         "EmployeeType : {$row['$employee_type']} <br> ".
         "--------------------------------<br>";
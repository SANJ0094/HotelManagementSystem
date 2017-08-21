<?php

    if(isset($_POST['add_employee'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $NIC_number = $_POST['NIC_number'];
        $sex= $_POST['sex'];
        $contact_number = $_POST['contact_number'];
        $email = $_POST['email'];
        $birth_date = $_POST['birth_date'];
        $hired_date = $_POST['hired_date'];
        $salary = $_POST['salary'];
        $job = $_POST['job'];
        $employee_type = $_POST['employee_type'];


    require '../database/connection.php';

    $query = "SELECT * FROM Employees WHERE NIC_number = 947951866";
    $sqlsearch = mysqli_query($con,$query);

    $query3 = "INSERT INTO `Employees` (first_name, last_name, NIC_number, sex, contact_number, email, birth_date, hired_date, salary, job, employee_type) 
        VALUES ('$first_name', '$last_name', '$NIC_number', '$sex', '$contact_number', '$email', '$birth_date', '$hired_date', '$salary', '$job', '$employee_type') ";
    mysqli_query($con, $query3)
    or die(mysqli_error($con));  

}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<p>Insert Successfull</p>
</body>
</html>
</htm>
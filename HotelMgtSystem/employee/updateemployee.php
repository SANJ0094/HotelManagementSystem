<?php
    require '../database/connection.php';
    require '../include/header.php';

    $NIC_number = $_GET['ID'];
?>

<html>
    <head>
        
        <title>Online Recruitment</title>
    </head>
    <body>
        </br>
    
    <?php
        if(isset($_POST['update'])){
            
            //$NIC_number = $_POST['NIC_number'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $sex = $_POST['sex'];
            $contact_number = $_POST['contact_number'];
            $email = $_POST['email'];
            $birth_date = $_POST['birth_date'];
            $hired_date = $_POST['hire_date'];
            $salary = $_POST['salary'];
            $job = $_POST['job'];
            $employee_type = $_POST['employee_type'];
            
            $sql= "UPDATE employee SET First Name = '$first_name',Last Name = '$last_name',Sex='$sex',Contact NO='$contact_number',Email='$email',Birth Dte='$birth_date',Hired Dte='$hired_date',Salary='$salary',Job='$job',Employee Type='$employee_type' WHERE NIC_number = $NIC_number";
            if(!mysqli_query($con,$sql)){
                echo'<script language ="javascript">';
                echo'alert("Error")';
                echo'</script>'; 
            }
            else{
                echo'<script language ="javascript">';
                echo'alert("Job Updated succesfully")';
                echo'</script>';
            }
            
        }
    
    ?>
    
    
    
    <div class="about">
        <div class="centre">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <table class="employeelist">
        <?php 
            $sql = "select * from employees where NIC_number='$NIC_number'";
            $result = mysqli_query($con,$sql);        
            while($row = mysqli_fetch_array($result)) {
    
    ?>
    
                <tr><td>First Name</td><td><input class="in" type=text name=first_name value="<?php echo $row['first_name'] ?>"></td></tr>
                <tr><td>Last Name</td><td><input class="in" type=text name=last_name value="<?php echo $row['last_name'] ?>"></td></tr>
                <tr><td>Sex</td><td><input class="in" type=text name=sex value="<?php echo $row['sex'] ?>"></td></tr>
                <tr><td>Contact Number</td><td><input class="in" type=text name=contact_number value="<?php echo $row['contact_no'] ?>"></td></tr>
                <tr><td>Email</td><td><input class="in" type=text name=email value="<?php echo $row['email'] ?>"></td></tr>
                <tr><td>Birth Date</td><td><input class="in" type=text name=birth_date value="<?php echo $row['birth_date'] ?>"></td></tr>
                <tr><td>Hired Date</td><td><input class="in" type=text name=hire_date value="<?php echo $row['hire_date'] ?>"></td></tr>
                <tr><td>Salary</td><td><input class="in" type=text name=salary value="<?php echo $row['salary'] ?>"></td></tr>
                <tr><td>Job</td><td><input class="in" type=text name=job value="<?php echo $row['job'] ?>"></td></tr> 
                <tr><td>Employee Type</td><td><input class="in" type=text name=employee_type value="<?php echo $row['employee'] ?>"></td></tr>      
                <tr><td colspan="2"><input class=update type=submit name=update value=Update></td></tr>
                <?php } ?>
            
            </table>
            </form>
            </div>
    </div>
       
    </body>
</html>

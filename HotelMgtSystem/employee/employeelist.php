<?php
    require '../database/connection.php';
    require '../include/header.php';
?>

<html>
    <head>
        
        <title>Online Recruitment</title>
    </head>
    <body>
        </br>
    
    <?php
        if(isset($_GET['NIC_number'])){
            
            
            $id = $_GET['NIC_number'];
            $sql= "delete from Employees where NIC_number = '$NIC_number'";
            mysqli_query($con,$sql);
            
            echo'<script language ="javascript">';
            echo'alert("Employee deleted succesfully")';
            echo'</script>'; 
            
        }
    
    ?>
    
    
    
    <div class="about">
        <div class="centre">
        <table class="employeelist">
        <tr class="title"><td>NIC Number</td><td>First Name</td><td>Last Name</td><td>Contact Number</td><td>Email</td></td><td>Salary</td></td><td>Job</td></td><td>Employee type</td></tr>
        <?php 
            $sql = "select * from employees";
            $result = mysqli_query($con,$sql);        
            while($row = mysqli_fetch_array($result)) {
    
    ?>
    
            
                
                <tr class="data">
                    <td><?php echo $row['NIC_number'] ?></td>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>
                    <td><?php echo $row['contact_no'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['salary'] ?></td>
                    <td><?php echo $row['job'] ?></td>
                    <td><?php echo $row['employee'] ?></td>
                    <td class="bt"><input type="button" value=Delete onclick="location.href='employeelist.php?NIC_number=<?php echo $row['NIC_number'] ?>'"></td>
                    <td class="bt"><input type="button" value=Update onclick="location.href='updateemployee.php?ID=<?php echo $row['NIC_number'] ?>'" ></td>
                </tr>
                

                <?php } ?>
            
            </table>
            </div>
    </div>
       
    </body>
</html>

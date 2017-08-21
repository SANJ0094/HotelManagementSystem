<?php
    session_start();    
?>

<html>
    <head>
        <title>Hotel Management System</title>
        <link href="../css/headerStyle.css" rel="stylesheet">
    </head>
    <body>
    <div id="header">
        
        <div id="nav">
        <ul>
            <li><a>Rooms</a>
                <ul>
                    <li><a href="../rooms/reserveroom.php">Reserve Room</a></li>
                    <li><a  href="../rooms/update.php">Update Reservation</a></li>
                    <li><a  href="../rooms/update.php">Delete Reservation</a></li>
                </ul>
            </li>
            <li><a>Events</a>
                <ul>
                    <li><a href="../event/AddEvent.php">Add Event</a></li>
                    <li><a href="../event/UpdateEvent.php">Update Event</a></li>
                    <li><a href="../event/DeleteEvent.php">Delete Event</a></li>
                </ul>
            </li>
            <li><a>Restaurant</a>
                <ul>
                    <li><a href="../restaurant/MakeOrder.php">Make Order</a></li>
                    <li><a href="../restaurant/UpdateOrder.php">Update Order</a></li>
                    <li><a href="../restaurant/DeleteOrder.php">Delete Order</a></li>
                </ul>
            </li>
            <li><a>Stock</a>
                <ul>
                    <li><a href="../stock/AddItem.php">Add Item</a></li>
                    <li><a href="../stock/UpdateItem.php">Update Item</a></li>
                    <li><a href="../stock/DeleteItem.php">Delete Item</a></li>
                </ul>
            </li>
            <li><a>Employees</a>
                <ul>
                    <li><a href="../employee/AddEmployee.php">Add Employee</a></li>
                    <li><a href="../employee/employeelist.php">Update Employee</a></li>
                    <li><a href="../employee/employeelist.php">Delete Employee</a></li>
                </ul>
            </li>
            
            
            
        </ul>

        
        </div>
        <div id="user">

            <table align="right">
                <tr>
                    <td><img id="userlogo" src="../images/user.jpg"></td>
                    <td id="admin"><b>Admin</b></td>
                    <td><a href="../index.php" class="signoutLink"><b>LogOut</b></td>
                </tr>
            </table>
        </div>

        </div>

    </body>
</html>
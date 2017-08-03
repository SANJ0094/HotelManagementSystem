<?php
    session_start();    
?>

<html>
    <head>
        <title>Hotel Management System</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <table>
                <tr>
                    <td><img id="userlogo" src="user.jpg"></td>
                    <td>LasiniCL</td>
                </tr>
            </table>
        </div>

        <ul>
            <li><a>Rooms</a>
                <ul>
                    <li><a>Reserve Room</a></li>
                    <li><a>Update Reservation</a></li>
                    <li><a>Delete Reservation</a></li>
                </ul>
            </li>
            <li><a>Events</a>
                <ul>
                    <li><a>Add Event</a></li>
                    <li><a>Update Event</a></li>
                    <li><a>Delete Event</a></li>
                </ul>
            </li>
            <li><a>Restaurant</a>
                <ul>
                    <li><a>Make Order</a></li>
                    <li><a>Update Order</a></li>
                    <li><a>Delete Order</a></li>
                </ul>
            </li>
            <li><a>Stock</a>
                <ul>
                    <li><a>Add Item</a></li>
                    <li><a>Update Item</a></li>
                    <li>Delete Item</li>
                </ul>
            </li>
            <li><a>Employees</a>
                <ul>
                    <li><a>Add Employee</a></li>
                    <li><a>Update Employee</a></li>
                    <li>Delete Employee</li>
                </ul>
            </li>
            <li></li>
        </ul>

    </body>
</html>
<?php

    if(isset($_POST['AddEvent'])) {
        $eventname = $_POST['EventName'];
        $host = $_POST['Host'];
        $telenum = $_POST['ContactNumber'];
        $date = $_POST['Date'];
        $starttime = $_POST['StartTime'];
        $endtime = $_POST['EndTime'];
        $hall = $_POST['Hall'];
        $description = $_POST['Description'];

    require 'connection.php';

    $query = "SELECT * FROM EventTable WHERE EventId = 13";
    mysqli_query($con,$query)
    or die(mysqli_error($con));

    $query3 = "INSERT INTO `EventTable` (EventName, Host, ContactNumber, Date, StartTime, EndTime, Hall, Description) 
        VALUES ('$eventname', '$host', '$telenum', '$date', '$starttime', '$endtime', '$hall', '$description') ";
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
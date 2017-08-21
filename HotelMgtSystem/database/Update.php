<?php

    if(isset($_POST['UpdateEvent'])) {
        $eventid = $_POST['EventId'];
        $eventname = $_POST['EventName'];
        $host = $_POST['Host'];
        $telenum = $_POST['ContactNumber'];
        $date = $_POST['Date'];
        $starttime = $_POST['StartTime'];
        $endtime = $_POST['EndTime'];
        $hall = $_POST['Hall'];
        $description = $_POST['Description'];

    require 'connection.php';

    $query = "SELECT * FROM EventTable WHERE EventId = '$eventid'";
    mysqli_query($con,$query)
    or die(mysqli_error($con));

    $query4 = "UPDATE `EventTable` 
                SET `EventName` = '$eventname',
                    `Host` = '$host',
                    `ContactNumber` = '$telenum',
                    `Date` = '$date',
                    `StartTime` = '$starttime',  
                    `EndTime` = '$endtime',
                    `Hall` = '$hall',
                    `Description` = '$description'      
            WHERE `EventId` = '$eventid'";
        $result = mysqli_query($con,$query4) 
        or die(mysqli_error($con));

    }

?>
<?php

    if(isset($_POST['DeleteEvent'])) {
        $eventid = $_POST['EventId'];

        require 'connection.php';

        $query3 = "DELETE FROM `EventTable` WHERE EventId = '$eventid'";
        mysqli_query($con, $query3)
        or die(mysqli_error($con));  

    }

?>
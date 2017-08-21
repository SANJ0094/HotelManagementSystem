<?php
    require '../include/header.php';

    if(isset($_POST['SearchItem'])) {
        $itemid = $_POST['itemId'];
        // $eventname = $_POST['EventName'];
        // $host = $_POST['Host'];
        // $telenum = $_POST['ContactNumber'];
        // $date = $_POST['Date'];
        // $starttime = $_POST['StartTime'];
        // $endtime = $_POST['EndTime'];
        // $hall = $_POST['Hall'];
        // $menu = $_POST['Menu'];
        // $description = $_POST['Description'];

    require '../database/connection.php';

    // $query = "SELECT * FROM EventTable WHERE EventId = '$eventid'";
    // $sqlsearch = mysqli_query($conn,$query);
    // $resultcount = mysqli_num_rows($sqlsearch);

    // if ($resultcount > 0) {
    //     $eventid = $resultcount['EventId'];
    //     $query = "UPDATE `EventTable` SET 
    //                             `EventName` = '$eventname',
    //                             `Host` = '$host',
    //                             `ContactNumber` = '$telenum',
    //                             `Date` = '$date',
    //                             `StartTime` = '$starttime'  
    //                             `EndTime` = '$endtime'
    //                             `Hall` = '$hall'
    //                             `Menu` = '$menu'
    //                             `Description` = '$description'      
    //                          WHERE `EventId` = '$eventid'";
    //     $result = mysqli_query($conn,$query) 
    //     or die(mysqli_error($conn));
    
    // } else {

    // $query2 = "INSERT INTO `EventTable` (EventName, Host, ContactNumber, Date, StartTime, EndTime, Hall, Menu, Description) 
    //     VALUES ('$eventname', '$host', '$telenum', '$date', '$starttime', '$endtime', '$hall', '$menu', '$description') "
    // mysqli_query($conn,$query2);

    // or die(mysqli_error($conn));  

    // } 

        $sql = "SELECT * FROM items WHERE id = '$itemid'";
        $query2 = mysqli_query($con, $sql)
        or die(mysqli_error($con));

        while($row = mysqli_fetch_assoc($query2)) {
            echo '<form action="" method="post">
                <table>
                    <tr>
                        <td> Item ID : </td>
                        <td> 
                            <input type="text" name="itemId" value="'.$row['EventName'].'">
                        </td>
                    </tr>
                    <tr>
                        <td> Host : </td>
                        <td> 
                            <input type="text" name="Host" value="'.$row['Host'].'">
                        </td>
                    </tr>

                    <tr>
                        <td> Contact Number : </td>
                        <td> 
                            <input type="text" name="ContactNumber" value="'.$row['ContactNumber'].'">
                        </td>
                    </tr>

                    <tr>
                        <td> Date : </td>
                        <td> 
                            <input type="date" name="Date" value="'.$row['Date'].'">
                        </td>
                    </tr>

                    <tr>
                        <td> Start Time : </td>
                        <td> 
                            <input type="time" name="StartTime" value="'.$row['StartTime'].'">
                        </td>
                    </tr>

                    <tr>
                        <td> End Time : </td>
                        <td>
                            <input type="time" name="EndTime" value="'.$row['EndTime'].'">
                         </td>
                    </tr>

                    <tr>
                        <td> Hall : </td>
                        <td> 
                            <select name="Hall" value="'.$row['Hall'].'">
                                <option>Hall 1</option>
                                <option>Hall 2 </option>
                                <option>Hall 3</option>
                                <option>Hall 4</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td> Menu : </td>
                        <td> ';
                        $menu = $row["Menu"];
                        echo "
                            <input type='radio' name='Menu' value='Menu1' if($menu == 'Menu1') {echo 'checked'} >
                            <input type="radio" name="Menu" value="Menu2" if($menu == "Menu2") {echo "checked"} >
                            <input type="radio" name="Menu" value="Menu3" if($menu == "Menu3") {echo "checked"} >
                            <input type="radio" name="Menu" value="Menu4" if($menu == "Menu4") {echo "checked"} >
                        ";


                    echo '
                        </td>
                    </tr>

                    <tr>
                        <td> Description : </td>
                        <td> 
                            <textarea rows="10" cols="55" name="Description">'.$row['Description'].'</textarea>
                        </td>
                    </tr>
                </table>

            <input type="submit" name="UpdateEvent" value="Update">
            <input type="reset" value="Cancel">

        </form>';

        require '../include/footer.php'; 

            // echo "EventName :{$row['$eventname']}  <br> ".
            // echo "Host : {$row['$host']} <br> ".
            // echo "ContactNumber : {$row['$telenum']} <br> ".
            // echo "Date : {$row['$date']} <br> ".
            // echo "StartTime : {$row['$starttime']} <br> ".
            // echo "EndTime : {$row['$endtime']} <br> ".
            // echo "Hall : {$row['$hall']} <br> ".
            // echo "Menu : {$row['$menu']} <br> ".
            // echo "Description : {$row['$description']} <br> ".
            // echo "--------------------------------<br>";
        }
    }

?>
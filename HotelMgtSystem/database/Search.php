<?php
    require '../include/header.php';

    if(isset($_POST['SearchEvent'])) {
        $eventid = $_POST['EventId'];

        require 'connection.php';

        $sql = "SELECT * FROM EventTable WHERE EventId = '$eventid'";
        $query2 = mysqli_query($con, $sql)
        or die(mysqli_error($con));

        while($row = mysqli_fetch_assoc($query2)) {
            echo '<form action="Update.php" method="post">
                <table>
                    <tr>
                        <td> Event ID : </td>
                        <td> 
                            <input type="text" name="EventId" value="'.$row['EventId'].'">
                        </td>
                    </tr>

                    <tr>
                        <td> Event Name : </td>
                        <td> 
                            <input type="text" name="EventName" value="'.$row['EventName'].'">
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

        }
    }

?>
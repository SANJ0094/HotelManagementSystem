<!DOCTYPE html>
<html>
<head>
	<title>Update item</title>
		<?php
    require '../include/header.php';
    require '../database/connection.php';
?>
<style type="text/css">
	a:link {
    color: white;
    background-color: transparent;
    text-decoration: none;
	a:hover {
    color: darkblue;
    background-color: transparent;
    text-decoration: underline;
}
</style>
</head>
<body>
<div style="margin-left:25%">

<?php

//$sql=" SELECT * FROM 'items'";
$result = $con->query("select * from item");
//$result=mysqli_query($con,$sql);
/*
if(!$result){
	die(mysqli_error($con));
}*/
/*if (mysqli_num_rows($result) >= 1) {*/
    // output data of each row
echo '<table border="1" style="background-color="#98ACDA";">'; 
echo"<tr><td>Item ID</td><td>Item Name</td><td>No of Units</td><td>Description</td><td>Category</td><td>Re-order lavel</td><td>Availability</td></tr>";
    while ($row = $result->fetch_assoc()){
    	/*$id = $row['Item ID'];
    	$name = $row['Item Name'];
    	$nounit = $row['No of Units'];
    	$des = $row['Description'];
    	$cat = $row['Category'];
    	$order = $row['Re-order level'];
    	$avail = $row['Availability'];*/

        
		echo "<tr><td>"; 
		echo $row['item_id'];
		echo "</td><td>";   
		echo $row['item_name'];
		echo "</td><td>";    
		echo $row['item_units'];
		echo "</td><td>";   
		echo $row['item_description'];
		echo "</td><td>";   
		echo $row['item_category'];
		echo "</td><td>";   
		echo $row['item_reorder_level'];
		echo "</td><td>";   
		echo $row['item_availability'];
		echo "</td></tr>";  
		  
	    }
        echo "</table>";
/*
} else {
    echo "0 results";
}
/*while($row = mysqli_fetch_array($result)) {
    $id = $row['Item ID'];
    $name = $row['Item Name'];
    $nounit = $row['No of Units'];
    $des = $row['Description'];
    $cat = $row['Category'];
    $order = $row['Re-order level'];
    $avail = $row['Availability'];
    echo "<tr><td style='width: 100px;'>".$id."</td><td style='width: 100px;'>".$name."</td><td>".$nounit."</td><td>".$des."</td><td>".$cat."</td><td>".$order."</td><td>".$avail."</td></tr>";
} */

?>
<a href="ifupdate.php">Update</a>
</div>
<div style="position: fixed;bottom: 0;width: 100%;">
        <?php 
            require '../include/footer.php'; 
        ?>
    </div>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/restaurantStyle.css" rel="stylesheet">
</head>
<body>
	<?php
    	require '../include/header.php';
    	require '../database/connection.php';
    	if(isset($_GET['ID'])){
    		$orderId=$_GET['ID'];
			$sql='UPDATE restaurant_order SET order_status=0 where restaurant_order_id="' . $orderId . '"';

			if(!mysqli_query($con,$sql)){
        		echo'<script language ="javascript">';
                echo'alert("Error")';
                echo'</script>'; 
   			}
            else{
               	echo'<script language ="javascript">';
                echo'alert("Order Status Updated succesfully")';
               	echo'</script>';
            }		
		}
	?>
	<br>
	<br>
	<div id="existingOrders" style="margin-left:10%">

		<h1>Update Order</h1>
		
		<table>
			<thead>
				
			</thead>
			<tbody>
				<tr class="order row">
    				<th class="order">Order ID</th>
    				<th class="order">Order Description</th>
    				<th class="order">Amount</th>
    				<th class="order">Order Status</th>
    				<th class="order">Update</th>
    			</tr>
    			<?php
    				require '../database/connection.php';

    				$result = $con->query("select * from restaurant_order where order_status=1");

    				while ($row = $result->fetch_assoc()) {

    			?>
    			<tr class="order row">
                		<td class="order"><?php echo $row['restaurant_order_id'] ?></td>
                		<td class="order"><?php echo $row['order_des'] ?></td>
                		<td class="order"><?php echo $row['amount'] ?></td>
                		<td class="order"><?php echo $row['order_status'] ?></td>
                		<td class="bt"><input type="button" value="Update" onclick="location.href='UpdateOrder.php?ID=<?php echo $row['restaurant_order_id'] ?>'" ></td>
                </tr>
                <?php } ?>
					
			</tbody>
		</table>
		
	</div>
	<div style="position: fixed;bottom: 0;width: 100%;">
		<?php 
    		require '../include/footer.php'; 
		?>
	</div>
	
</body>

</html>
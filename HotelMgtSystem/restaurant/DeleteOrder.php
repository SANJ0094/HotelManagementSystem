
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
			$sql='DELETE FROM restaurant_order where restaurant_order_id="' . $orderId . '"';

			if(!mysqli_query($con,$sql)){
        		echo'<script language ="javascript">';
                echo'alert("Error")';
                echo'</script>'; 
   			}
            else{
               	echo'<script language ="javascript">';
                echo'alert("Order Deleted succesfully")';
               	echo'</script>';
            }		
		}
	?>
	<br>
	<br>
	<div id="existingOrders" style="margin-left:5%">

		<h1>Delete Order</h1>
		
		<table>
			<thead>
				
			</thead>
			<tbody>
				<tr class="order row">
    				<th class="order">Order ID</th>
    				<th class="order">Customer NIC</th>
    				<th class="order">Order Description</th>
    				<th class="order">Amount</th>
    				<th class="order">Order Date</th>
    				<th class="order">Delete</th>
    			</tr>
    			<?php
    				require '../database/connection.php';

    				$result = $con->query("select * from restaurant_order");

    				while ($row = $result->fetch_assoc()) {

    			?>
    			<tr class="order row">
                		<td class="order"><?php echo $row['restaurant_order_id'] ?></td>
                		<td class="order"><?php echo $row['restaurant_customer_nic'] ?></td>
                		<td class="order"><?php echo $row['order_des'] ?></td>
                		<td class="order"><?php echo $row['amount'] ?></td>
                		<td class="order"><?php echo $row['order_date'] ?></td>
                		<td class="bt"><input type="button" value="Delete" onclick="location.href='DeleteOrder.php?ID=<?php echo $row['restaurant_order_id'] ?>'" ></td>
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
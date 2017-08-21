<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/restaurantStyle.css" rel="stylesheet">
</head>
<body>
	<!-- <h1>This is Deletfaafe Order Page</h1> -->
	<?php
    require '../include/header.php';
?>
<br>
<br>
<div id="orderForm" style="margin-left:25%">
	<h1>Order Details</h1>
		<form style="text-align: center;" name="orderDetails" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" onsubmit="return formValidate()" method="POST">
			
			<table id="orderTable" align="center">
			<tbody>
				
				<tr class="order row">
					<td class="order" colspan="2"><input type="text" id="itemInput" onkeyup="searchItem()" placeholder="Search for food items.." title="Type in a name"></td>
				</tr>
			
				<tr class="order row">
					<td class="order" colspan="3">
						<table id="foodItemsTable">
							<tbody>
								<?php
									require '../database/connection.php';

    								$result = $con->query("select food_name,food_price from food_item");

    								echo '<tr class="order row">';
    								echo '<th>'."Food Item".'</th>';
    								echo '<th>'."Price".'</th>';
    								echo '<th>'."Order".'</th>';
    								echo '<th>'."Quantity".'</th>';
    								echo '</tr>';

    								while ($row = $result->fetch_assoc()) {

                					//unset(food_name,food_price);
                					$food_name = $row['food_name'];
                					$food_price=$row['food_price'];
                					echo '<tr class="order row">';
                					echo '<td class="order">'.$food_name.'</td>';
                					echo '<td class="order">'.$food_price.'</td>';
                					echo '<td class="order"><input type="checkbox" name="choice[]" value="'.$food_name.'" style="width: 20px;height: 20px;cursor: pointer;webkit-appearance: none;appearance: none;"></td>';
                					echo '<td class="order"><input type="number" name="quantity[]"></td>';

									}
								?>

							</tbody>
			
						</table>
					</td>
				</tr>
				<?php
					$total = 0;
					
					$items = [];
					$quantityD=[];
					$i=0;
					$k=0;


					// form submitted
					if( !empty( $_POST['choice'] ) && is_array( $_POST['choice'] ) && !empty( $_POST['quantity'] ) && is_array( $_POST['quantity'] ) )
					{
    					// loop all item choices
    					$quantities = $_POST['quantity']; 
    					//echo $quantities[0];
    					$quantitiesB=implode(", ", $quantities);
						
						$quantityC = explode(",", $quantitiesB);
						// echo sizeof($quantityC);
						// foreach ($quantityC as $key => $value) {
    		// 				if (empty($value)) {
      //  							unset($quantityC[$key]);
    		// 				}
						// }
						for($j=0;$j<sizeof($quantityC);$j=$j+1)
						{

							if(!empty($quantityC[$j]))
							{
								// echo 'notEmpty';
								//$quantity=$quantityC[$i];
								//echo $quantityC[$j];
								$quantityD[$i]=$quantityC[$j];
								//echo $quantityD[$i];
								$i=$i+1;
							}
							// else{
							// 	echo 'Empty';
							// }

							
						}
						
    					foreach( $_POST['choice'] as $key => $item  )
    					{
        					// foreach( $_POST as $key => $value $_POST['quantity'] as $quantity )
        					// {
    						$amount=0;
    						//echo $key.'*';
							$quantity=$quantityC[$key];
							//echo $quantity;
        					//echo $item;
        					require '../database/connection.php';
        					
        					$result = $con->query('SELECT food_price FROM food_item WHERE food_name = "' . $item . '"');
    						//$result = $con->query("select food_price from food_item where food_name='".$item."'");
    						while ($row = $result->fetch_assoc()){
    							//unset(food_price);
    							$price = $row['food_price'];
    							$amount  = $price * $quantity;
    							//echo $amount;

    						}
    						$total=$total+$amount;
    						//echo $price;
    						//echo $quantity;
    						//echo $total;
        					// only add if item was checked and quantity is more than 0
        					// if( isset( $item['checked'] ) && $quantity > 0 )
        					// {
            					
            	// 				$total  += $price * $quantity;
        					// }
    						$k=$k+1;
        		
    					}
    		
    					
					}
					

					
				?>

				<tr class="order row">
				<td class="order" colspan="3"><input type="submit" value="Confirm Order Items" name="orderItemsConfirm" style="height:30px; width:300px; margin-left:25%" /></td>
				</tr>
				<tr class="order row">
					<td class="order">Total Amount</td>
					<td class="order"><input readonly type="text" id="totalAmount" name="total" value="<?php echo $total.'.00';?>"></td>
				</tr>
				<tr class="order row">
					<td class="order">Customer NIC</td>
					<td class="order"><input type="text" name="nic"></td>
				</tr>
				<tr class="order row">
					<td class="order">Customer Name</td>
					<td class="order"><input type="text" name="customerName"></td>
				</tr>
				<tr class="order row">
					<td class="order">Telephone</td>
					<td class="order"><input type="text" name="telephone"></td>
				</tr>
				<tr class="order row">
					<td class="order">Amount Paid</td>
					<td class="order"><input type="text" id="paidAmount" name="paid" onkeypress="getBalance(event)"></td>
				</tr>
				<tr class="order row">
					<td class="order">Balance</td>
					<td class="order"><input readonly type="text" id="balanceAmount" name="balance"></td>
				</tr>
				<tr class="order row">
				<td class="order" colspan="3"><input type="submit" value="Save Order" name="saveOrder" style="height:30px; width:300px; margin-left:25%" /></td>
				</tr>
				<?php
					require '../database/connection.php';

					// if( !empty( $_POST['choice'] ) && is_array( $_POST['choice'])){
					// 	foreach( $_POST['choice'] as $key => $item  )
    	// 				{	

    	// 				}
					// }
					// $choices=$_POST['choice'];
					// $choice=implode(",", $choices);
					$choice="Devilled Chicken";
					//$nic="947951866V";
					if(isset($_POST['saveOrder'])){
							$nic=$_POST['nic'];
							$customerName=$_POST['customerName'];
							$telephone=$_POST['telephone'];
							$amount=$_POST['amount'];
							$date = date('Y-m-d');

							echo $nic,$choice,$amount,$date;
							$sql1="INSERT INTO restaurant_customer(restaurant_customer_nic,restaurant_customer_name,restaurant_customer_telephone) VALUES('$nic','$customerName','$telephone')";

							$sql2="INSERT INTO restaurant_order(restaurant_customer_nic,order_des,amount,order_date,) VALUES('$nic','$choice','$amount','$date')";

							if(!mysqli_query($con,$sql1) && !mysqli_query($con,$sql2)){
                				echo'<script language ="javascript">';
                				echo'alert("Error")';
                				echo'</script>'; 
            				}
            				else{
                				echo'<script language ="javascript">';
                				echo'alert("Order added succesfully")';
                				echo'</script>';
            				}

							
            				

					}
					
				?>
			</tbody>
			</table> 

		</form>
		

		


</div>
<br>
	
<script type="text/javascript" src="restaurantFunctions.js"></script>
<!-- <script type="text/javascript">
	
	function getSelectedChbox(frm) {
  		var selchbox = [];// array that will store the value of selected checkboxes
  		// gets all the input tags in frm, and their number
  		var inpfields = frm.getElementsByTagName('input');
  		var nr_inpfields = inpfields.length;
  		// traverse the inpfields elements, and adds the value of selected (checked) checkbox in selchbox
  		for(var i=0; i<nr_inpfields; i++) {
    		if(inpfields[i].type == 'checkbox' && inpfields[i].checked == true) selchbox.push(inpfields[i].value);
  		}
  		return selchbox;
	}  

	document.getElementById('btntest').onclick = function(){
  		var selchb = getSelectedChbox(this.form);     // gets the array returned by getSelectedChbox()
  		alert(selchb);

  	
	}
</script> -->
<!-- <script type="text/javascript">
	function formValidate(){
  var name=document.forms["orderDetails"]["customerName"].value;
  var nic=document.forms["orderDetails"]["nic"].value;
  var telephone=document.forms["orderDetails"]["telephone"].value;
  var totalamount=document.forms["orderDetails"]["total"].value;
  var paidamount=document.forms["orderDetails"]["paid"].value;
  var balamount=document.forms["orderDetails"]["balance"].value;

  if(isEmpty(name,"customerName"))
  {
    alert("Fileds can not be empty");
  }


}

function isEmpty(elemValue,field) {
    if(elemValue=="" || elemValue==null)
    {
      return true;
    }
}
</script> -->


</body>
<?php 
    require '../include/footer.php'; 
?>
</html>
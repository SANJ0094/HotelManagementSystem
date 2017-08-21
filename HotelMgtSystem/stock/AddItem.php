
<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
    <link rel="stylesheet" type="text/css" href="../css/additem.css">
	<?php
     
/*connect to the db*/
	include("../database/connection.php");
?>
</head>
<body>
<?php
/*allows user to add new items to the stock*/ 
    require '../include/header.php';

?>
<br>
<br>
<?php
        $result = $con->query("SELECT * FROM item_category ORDER BY item_category_id DESC LIMIT 1");
        //$last_id = mysqli_insert_id($con);
        while ($row = $result->fetch_assoc()){
                                
            $id = $row['item_category_id'];
        }
        $id=$id+1;
        //echo $id;

            
        
?>
<div class="set" style="margin-left:25%">
<form method="POST" action="#" onclick="clear()" >
  <fieldset>
    <h1>Add Item Category</h1>
    Item Category ID:<br>
    <input readonly type="text" name="CategoryID" value="<?php echo $id;?>"><br>
    Item Category Name:<br>
    <input type="text" name="CategoryName"><br><br>
    <input type="submit" value="Submit" id="submitbtn" name="add"  >
  </fieldset>

</form>
</div>
<?php
if(isset($_POST["add"])){
$id=$_POST["CategoryID"];
$name=$_POST["CategoryName"];

$dataenter="INSERT INTO `item_category`(`item_category_name`) VALUES ('$name')";

if(!mysqli_query($con,$dataenter)){
	
	echo'<script language ="javascript">';
                                echo'alert("Error")';
                                echo'</script>';
}
}

?>
<div style="position: fixed;bottom: 0;width: 100%;">
        <?php 
            require '../include/footer.php'; 
        ?>
    </div>
    <script type="text/javascript">
        function clear(){
            document.getElementById("submitbtn").value="";
        }
    </script>
</body>

</html>

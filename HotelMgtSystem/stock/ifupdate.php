<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
<?php
require ('../include/header.php');
 
include("../database/connection.php");
?>
<link rel="stylesheet" type="text/css" href="../css/additem.css">
</head>
<body>
<div >
<form method="POST" action="#" >
  <fieldset>
    <legend>Add Item:</legend>
    <table>
        <tr><td>Item Category ID:</td>
            <td><input type="number" name="ItemID"></td>
            <td>Re-Order level:</td>
            <td><input type="number" name="Re-OrderLevel"></td>
        </tr>
        <tr>
            <td>Item Name:</td>
            <td><input type="text" name="ItemName"></td>
            <td>Select Category:</td>
            <td><select name="Category">
                <option>Beverages</option>
                <option>cloth</option>
            </select></td>
        </tr>
        <tr>
            <td>Unit type:</td>
            <td><select name="Unit">
                <option>Litre</option>
                <option>Kilogram</option>
            </select></td>
        </tr>
        <tr>
            <td>Item Description:</td>
            <td> 
                <textarea rows="3" cols="55" name="Description"></textarea>
            </td>
            
        </tr>
        <tfoot>
        <tr>    
        <td><input type="submit" value="Update" name="add"></td>
        </tr>
        </tfoot>

    </table>
    
  </fieldset>

</form>
</div>
<?php
if(isset($_POST["add"])){
$id=$_POST["ItemID"];
$reorder=$_POST["Re-OrderLevel"];
$name=$_POST["ItemName"];
$cat=$_POST["Category"];
$unit=$_POST["Unit"];
$des=$_POST["Description"];

$sql="UPDATE `items` SET(`ItemId`, `Re-OrderLevel`,`ItemName`,`Category`,`Unit`,`Description`) VALUES (`$id`,`$reorder`,`$name`,`$cat`,`$unit`,`$des`)";
$q=mysqli_query($con,$sql);

if(!($q))
    {echo "mysqli_error($con)";}
}

?>
</body>
<?php 
    require '../include/footer.php'; 
?>
</html>
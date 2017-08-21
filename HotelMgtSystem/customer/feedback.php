<?php
    session_start();    
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel Management System</title>
        <style type="text/css">
            body{
                background: url("../images/useropen.jpg")no-repeat;
                background-size: cover;
                font-family: Arial;
                color: white;
            }

           #header{
                width:100%;
                /*position: fixed;*/
            }


            #nav{
                float: left;
                width:90%;
                
            }

            #userlogo{
                width: 35px;
                height: 35px;
            }


            #nav ul{
                margin: 0px;
                padding: 0px;
                list-style: none;
                background-color: black;
            }

            #nav ul li {
                float: left;
                width: 350px;
                height: 40px;
                background-color: black;
                opacity: .8;
                line-height: 40px;
                text-align: center;
                font-size: 20px;

            }

            #nav ul li a{
                text-decoration: none;
                color: white;
                display: block;
            }

            #nav ul li a:hover{
                background-color: green;
            }

            #nav ul li ul li{
                display: none;
            }

            #nav ul li:hover ul li{
                display: block;
            }

            #user{
                width: 10%;
                height: 40%;
                float: right;
                color: navy;
                
            }

            .signoutLink{
                
                text-decoration: none;
                color: #f2f2f2;
                
                
            }

            .signoutLink:hover{
                background-color: #b3b3ff;
            }

            #admin{
                color: #f2f2f2;
                
            }


        </style>
    <?php
    include("../database/connection.php");
    ?>
    
   
</head>
<body>
<div id="header">
        
        <div id="nav">
        <ul>
            <li><a href="about.php">About US</a>
            </li>
            <li><a href="feedback.php">Any feedbacks?</a>
            </li>
            <li><a href="">Contact Us</a>
            </li>  
            
        </ul>

        
        </div>
        <div id="user">

            <table align="right">
                <tr>
                    <td><img id="userlogo" src="../images/user.jpg"></td>
                    <td id="admin"><b><?php echo $_SESSION['username'] ?></b></td>
                    <td><a href="../index.php" class="signoutLink"><b>LogOut</b></td>
                </tr>
            </table>
        </div>

        </div>

<div class="set">
<form method="POST" action="#" >
  <fieldset>
    <h1>Add Feedback:</h1>
    Your Name:<br>
    <input type="text" name="Cusname"><br>
    Event You Participated:<br>
    <input type="text" name="Event"><br><br>
     Your suggestions:<br>
    <textarea name="message" rows="10" cols="30"></textarea><br>
    <input type="submit" value="Submit" name="add">
  </fieldset>

</form>
</div>

<?php
if(isset($_POST["add"])){

$name=$_POST["Cusname"];
$event=$_POST["Event"];
$des=$_POST["message"];

$dataenter="INSERT INTO `feedback`(`name`, `event`,`description`) VALUES ('$name','$event','$des')";
$x=mysqli_query($con,$dataenter);
if(!($x)){
	
	echo "mysqli_error($con)";
}
else{
    echo'<script language ="javascript">';
    echo'alert("Thank You for Your Feedback")';
    echo'</script>'; 
}
}

?>
<div style="position: fixed;bottom: 0;width: 100%;">
        <?php 
            require '../include/footer.php'; 
        ?>
    </div>
</body>

</html>
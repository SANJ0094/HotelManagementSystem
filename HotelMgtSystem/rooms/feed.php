<?php
    session_start();    
?>

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
			    width: 580px;
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
    </head>
    <body>
    <div id="header">
        
        <div id="nav">
        <ul>
            <li><a>About US</a>
            </li>
            <li><a>Any feedbacks?</a>
            </li>  
            
        </ul>

        
        </div>
        <div id="user">

            <table align="right">
                <tr>
                    <td><img id="userlogo" src="../images/user.jpg"></td>
                    <td id="admin"><b>Admin</b></td>
                    <td><a href="../index.php" class="signoutLink"><b>LogOut</b></td>
                </tr>
            </table>
        </div>

        </div>

        <div class="set">
		<form method="POST" action="#" >
		  <fieldset>
		    <legend>Add Feedback:</legend>
		    Your Name:<br>
		    <input type="text" name="Cusname"><br>
		    Event You Participated:<br>
		    <input type="text" name="Event"><br><br>
		     Your suggestions:<br>
		    <textarea name="message" rows="10" cols="30"></textarea>
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
		}

		?>
		</body>
<?php 
    require '../include/footer.php'; 
?>
</html>


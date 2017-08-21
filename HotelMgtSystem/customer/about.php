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
    </head>
    <body>
    <div id="header">
        
        <div id="nav">
        <ul>
            <li><a href="about.php">About Us</a>
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

        <img src="../images/myho.jpg" style=" width: 200px; height: 200px; margin-bottom: 10px; margin-top: 10px; margin-left: 180px; border-radius: 200px;"><img src="../images/myho2.jpg" style=" margin-bottom: 10px; border-radius: 10px;">

		<div style="margin-bottom: 10px">
		  <img class="mySlides" src="../images/food.jpg" style="width:1000px; height:500px; display: block; margin-bottom: 10px; margin-left: 150;">
		  <img class="mySlides" src="../images/chef.jpg" style="width:1000px; height:500px; display: block; margin-bottom: 10px; margin-left: 150;">
		  <img class="mySlides" src="../images/hotel2.jpg" style="width:1000px; height:500px; display: block; margin-bottom: 10px; margin-left: 150;">
		  <img class="mySlides" src="../images/wedding.jpg" style="width:1000px; height:500px; display: block; margin-bottom: 10px; margin-left: 150;">
		  <img class="mySlides" src="../images/food2.jpg" style="width:1000px; height:500px; margin-bottom: 10px; display: block; margin-left: 150;">

		  <button onclick="plusDivs(-1)" style="margin-left: 600px;">Previous</button>
		  <button onclick="plusDivs(1)">Next</button>
		</div>

		<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  if (n > x.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
		     x[i].style.display = "none";  
		  }
		  x[slideIndex-1].style.display = "block";  
		}
		</script>
		<div style=" background-color: #25221b; margin-bottom: 10px;margin-left: 50px; margin-right: 50px; padding-top: 5px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px; border-radius: 20px;">
		<h4 style="margin-left: 550px;">Timeless Grandeur</h4>
		<p>Sri Lanka’s iconic landmark, The Luxury Hotel, is situated in the heart of Colombo, along the seafront and facing the famous Galle Face Green.One of the oldest hotels east of the Suez, The Luxury Hotel embraces its rich history and legendary traditions, utilizing them to create engaging, immersive experiences that resonate with old and new generations of travelers alike. No visit to Sri Lanka is complete without staying at this majestic hotel, built in 1864 and recently restored back to its former glory.</p>
		</div>


    	</body>
<?php 
    require '../include/footer.php'; 
?>
</html>


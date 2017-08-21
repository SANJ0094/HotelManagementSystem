<?php
   require '../database/connection.php';
?>

<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="../css/register.css">
    </head>
    <body>
        
        <?php
        
        $error = FALSE;
        $fnameErr = $lnameErr = $genderErr  = $noErr = $emailErr = $unameErr = $pwdErr = "";
        
         
        
        if (isset($_POST['submit'])) {
            
            
            if(empty($_POST['fname'])){ 
                $fnameErr = "First Name is required";
                $error = TRUE;
            }else{
                $firstname = $_POST['fname'];
            }
            
            if(empty($_POST['lname'])){ 
                $lnameErr = "Last Name is required";
                $error = TRUE;
            }else{
                $lastname = $_POST['lname'];
            }
            
                        
            if(empty($_POST['gender'])){ 
                $genderErr = "Gender is required";
                $error = TRUE;
            }else{
                $gender = $_POST['gender'];
            }
            
                        
            if(empty($_POST['mobile'])){ 
                $noErr = "Mobile number is required";
                $error = TRUE;
            }else{
                $mobile = $_POST['mobile'];
                if( !preg_match("/^[0-9]*$/",$mobile)){
                    $noErr = "Invalid Mobile number";
                    $error = TRUE;
                }
            }
            
            if(empty($_POST['email'])){ 
                $emailErr = "Email is required";
                $error = TRUE;
            }else{
                $email = $_POST['email'];
                if (strpos($email, '@') == FALSE) {
                    $emailErr =  "Invalid Email";
                    $error = TRUE;
                }
            }

            if(empty($_POST['unm'])){ 
                $unameErr = "Username is required";
                $error = TRUE;
            }else{
                $username = $_POST['unm'];
            }

            
            if(empty($_POST['pwd'])){ 
                $pwdErr = "Passowrd is required";
                $error = TRUE;
            }else{
                $pwd = $_POST['pwd'];
                if (strlen($_POST["pwd"]) > '8') {
                    $pwdErr = "Passowrd can only have upto 8 characters";
                    $error = TRUE;
                }
            }
           
            
            if ($error == FALSE) {
                $sql = "INSERT INTO user (firstName,lastName,gender,phone,email,username,password) VALUES ('$firstname', '$lastname', '$gender', '$mobile', '$email','$username','$pwd')";
                if (mysqli_query($con,$sql)) {
					  header('location:../index.php?action=new');
				} else {
                    echo "Error ";
                }
            }
        }



        ?>
        
        <div class="register">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <table>
        <form action="index.php" method="post">
            <tr class="gap">
                <td>
                    <label>First Name</label><span class="error"><?php echo $fnameErr;?></span></br>
                    <input type="text" name="fname" id=fname class=input>
                </td>
            </tr>
            <tr class="gap">
                <td>
                    <label>Last Name</label><span class="error"><?php echo $lnameErr;?></span></br>
                    <input type="text" name="lname" id=lname  class=input>
                </td>
            </tr>
            <tr class="gap">
                <td>
                    <label>Gender</label></br>
                    <input type="radio" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" value="female"> Female
                </td>
            </tr>
            <tr class="gap">
                <td>
                    <label>Mobile Number</label><span class="error"><?php echo $noErr;?></span></br>
                    <input type="string" name="mobile" id=mobile  class=input>
                </td>
            </tr>
            <tr class="gap">
                <td>
                    <label>Email</label><span class="error"><?php echo $emailErr;?></span></br>
                    <input type="text" name="email" id=email  class=input>
                </td>
            </tr>
            <tr class="gap">
                <td>
                    <label>Username</label><span class="error"><?php echo $unameErr;?></span></br>
                    <input type="text" name="unm" id=unm class=input>
                </td>
            </tr>
            <tr class="gap">
                <td>
                    <label>Password</label><span class="error"><?php echo $pwdErr;?></span></br>
                    <input type="password" name="pwd" id=pwd  class=input>
                </td>
            </tr>
          
            <tr class="gap">
                <td>
                     <input type="submit" name="submit" value="Register" class=regbt onclick="checkFilled()">
                </td>
            </tr>
            </form>
        </table>
        </form>
        </div>
    </body>

    <script type="text/jscript">
    
            function checkFilled() {
                    var inputVal1 =document.getElementById("fname");
                    var inputVal2 =document.getElementById("lname");
                    var inputVal3 =document.getElementById("mobile");
                    var inputVal4 =document.getElementById("email");
                    var inputVal5 =document.getElementById("unm");
                    var inputVal6 =document.getElementById("pwd");
                    


                    if (inputVal1.value == "") {
                        inputVal1.style.backgroundColor = "red";
                        }

                    if (inputVal2.value == "") {
                        inputVal2.style.backgroundColor = "red";
                        }
                    if (inputVal3.value == "") {
                        inputVal3.style.backgroundColor = "red";
                        }
                    if (inputVal4.value == "") {
                        inputVal4.style.backgroundColor = "red";
                        }
                    if (inputVal5.value == "") {
                        inputVal5.style.backgroundColor = "red";
                        }
                    if (inputVal6.value == "") {
                        inputVal6.style.backgroundColor = "red";
                        }
                    
                    

                }
        </script>


    <?php
    sleep(1);//seconds to wait
    ?>


</html>

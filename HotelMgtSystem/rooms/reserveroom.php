<!-- header starts -->
<?php
require '../include/header.php';
// header starts 

// connect to the database
include("../database/connection.php");

// reusable function for form 
function renderForm($fullname = '', $nic ='', $email='', $visitor='', $myroom='',$mydate ='', $mydepdate ='', $error = '', $id = '') { ?>

<!DOCTYPE>

  <html>
    <head>
      <title>reserve a hotel room</title>
      <link rel="stylesheet" type="text/css" href="../css/reserveroom.css">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>

    <body>
    <h1 align="center">Reserve A Room</h1>

    <p class="para">
    Choose the day and time that you would like to reserve the room, then click on the room type prefer and enter your information.
    </p>

    <!-- image row starts to choose room-->

    <div style="margin-left: 300px; border: 1px solid #ccc; float: left; width: 180px;">
      <a target="_blank" href="1.php">
        <img src="../images/4.jpg" alt="" width="300" height="200" style="width: 100%; height: auto;">
      </a>
      <div style="padding: 15px; text-align: center;">KING DELUXE </div>
    </div>

    <div style="margin: 5px; border: 1px solid #ccc; float: left; width: 180px;">
      <a target="_blank" href="2.php">
        <img src="../images/2.jpg" alt="" width="300" height="200" style="width: 100%; height: auto;">
      </a>
      <div style= "padding: 15px; text-align: center;">KING GUEST ROOM</div>
    </div>

    <div style="margin: 5px; border: 1px solid #ccc; float: left; width: 180px;">
      <a target="_blank" href="3.php">
        <img src="../images/1.jpg" alt="" width="300" height="200" style="width: 100%; height: auto;">
      </a>
      <div style="padding: 15px; text-align: center;">TWIN GUEST ROOM
      </div>
    </div>

    <div style="margin: 5px; border: 1px solid #ccc; float: left; width: 180px;">
      <a target="_blank" href="4.php">
        <img src="../images/5.jpg" alt="" width="300" height="200" style="width: 100%; height: auto;">
      </a>
      <div style="padding: 15px; text-align: center;">TWIN DELUXE</div>
    </div>
    <!-- image row ends -->

    <!-- error message when there are form input errors by user starts -->
    <?php if ($error != '') {
    echo "<div style='padding: 4px; margin-right: 0px; margin-top: 250px; color: red; margin-left: 600px; }'>" . $error
    . "</div>";
    } ?>
    <!-- error messege ends -->

    <!-- room selection form starts -->
    <div class="dive" style=" margin-top: 300px; margin-right: 0px; margin-left: 350px;" align=center>
      <form action="" method="post" style="color: darkslategrey">
        <div>

          <?php 
          if ($id != '') 
            { 
          ?>
          <!-- geta user unreachable increental id-->
          <input type="hidden" name="id"  value="<?php echo $id; ?>" />
          <p>Room reservation ID: <?php echo $id; ?></p>
          <!-- id input ends -->
          <?php 
            } 
          ?>

          <!-- form inputs starts -->
          <strong>Full Name: *</strong> <input type="text" placeholder="Enter your full name here.." name="fullname"
          value="<?php echo $fullname; ?>"/><br/>
          
          <strong>Nic Number: *</strong> <input type="text" placeholder="Enter your nic number here.." name="nic"
          value="<?php echo $nic; ?>"/>

          <strong>Email: *</strong> <input type="email" placeholder="Enter your email here.." name="email"
          value="<?php echo $email; ?>"/>

          <select name="visitor"value="<?php echo $visitor; ?>">
          		    <option selected>Foreign Visitor</option>
          		    <option>Local Visitor</option>
          		    </select>

          <strong>Room Type: *</strong><select name="myroom"value="<?php echo $myroom; ?>">
                  <option>KING DELUXE</option>
                  <option>KING GUEST ROOM</option>
                  <option>TWIN GUEST ROOM</option>
                  <option>TWIN DELUXE</option>
                  </select>

          <strong>Arrival Date: *</strong> <input type="text" placeholder="Enter your Arrival date in YYYY-MM-DD format.." name="Date"
          value="<?php echo $mydate; ?>"/>

          <strong>Depature Date: *</strong> <input type="text" placeholder="Enter your Depature date in YYYY-MM-DD format.." name="mydepdate"
          value="<?php echo $mydepdate; ?>"/>

          <p>* required</p>
          <input type="submit" name="submit" value="Submit" />
          <!-- form inputs ends --> 

        </div>
      </form>

    </div>
    <!-- form ends -->
    </body>

  <!-- footer starts -->  
  <?php 
      require '../include/footer.php'; 
  ?>
  <!-- footer ends -->
  </html>

<?php }



/* EDIT A RESERVATION BOOKING */

// to sees the id in the url for easy to access
if (isset($_GET['id']))
{
// if the submit clicked
if (isset($_POST['submit']))
{
// if the id is numeric
if (is_numeric($_POST['id']))
{
// get variables from the form
$id = $_POST['id'];
$fullname = $_POST['fullname'];
$nic = $_POST['nic'];
$email = $_POST['email'];
$visitor = $_POST['visitor'];
$myroom = $_POST['myroom'];
$mydate = $_POST['Date'];
$mydepdate = $_POST['mydepdate'];



// check that inputs are not empty
if ($fullname == '' || $nic == '' || $email=='' || $visitor=='' || $myroom==''|| $mydate ==''|| $mydepdate =='')
{
// if empty, error message
$error = 'ERROR: Please fill in all required fields!';
renderForm($fullname, $nic, $email, $visitor, $myroom, $mydate, $mydepdate, $error, $id);
}
else
{
// if fine, update database
  if ($stmt = $con->prepare("UPDATE reserveroom SET fullname = ?, nic = ?, email= ?, visitor = ?,  myroom = ?,  Date = ?, mydepdate = ?
  WHERE id=?"))
  {
  $stmt->bind_param("sssssssi", $fullname, $nic, $email, $visitor, $myroom, $mydate, $mydepdate, $id);
  $stmt->execute();
  $stmt->close();
  }
  // show an error message if the query has an error
  else
  {
  echo "ERROR: could not prepare SQL statement.";
  }

// redirect the user once the form is updated
  header("Location: update.php");
  }
}
// if the 'id' variable is not valid, show an error message
else
{
echo "Error!";
}
}
// if the form hasn't been submitted yet, get the info from the database and show the form
else
{
// make sure the 'id' value is valid
if (is_numeric($_GET['id']) && $_GET['id'] > 0)
{
// get 'id' from URL
$id = $_GET['id'];

// get the recod from the database
if($stmt = $con->prepare("SELECT * FROM reserveroom WHERE id=?"))
{
$stmt->bind_param("i", $id);
$stmt->execute();

$stmt->bind_result($id, $fullname, $nic, $email, $visitor, $myroom, $mydate, $mydepdate);
$stmt->fetch();

// show the form
renderForm($fullname, $nic, $email, $visitor, $myroom, $mydate, $mydepdate, NULL, $id);

$stmt->close();
}
// show an error if the query has an error
else
{
echo "Error: could not prepare SQL statement";
}
}
// if the 'id' value is not valid, redirect the user back to the view.php page
else
{
header("Location: update.php");
}
}
}



/* NEW RECORD */

// if the 'id' variable is not set in the URL, we must be creating a new record
else
{
// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit']))
{
// get the form data
$fullname = $_POST['fullname'];
$nic = $_POST['nic'];
$email = $_POST['email'];
$visitor = $_POST['visitor'];
$myroom = $_POST['myroom'];
$mydate = $_POST['Date'];
$mydepdate = $_POST['mydepdate'];


if ($fullname == '' || $nic == '' || $email=='' || $visitor=='' || $myroom=='' || $mydate==''|| $mydepdate=='')
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($fullname, $nic, $email, $visitor, $myroom, $mydate, $mydepdate, $error);
}
else
{
// insert the new record into the database
if ($stmt = $con->prepare("INSERT INTO reserveroom (fullname, nic, email, visitor, myroom, Date, mydepdate) VALUES (?, ?, ?, ?,?, ?, ?)"))
{
$stmt->bind_param("sssssss", $fullname, $nic, $email, $visitor, $myroom, $mydate, $mydepdate);
$stmt->execute();
$stmt->close();
}
// show an error if the query has an error
else
{
echo "ERROR: Could not prepare SQL statement.";
}

// redirec the user
header("Location: update.php");
}

}
// if the form hasn't been submitted yet, show the form
else
{
renderForm();
}
}

// close the mysqli connection
$con->close();
?>
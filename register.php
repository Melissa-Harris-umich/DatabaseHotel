<!Doctype html>
<html>
<head>
    <title>Guest Table</title>
    <link rel="stylesheet" type="text/css" href="/github/databasehotel/style.css">
</head>
<body>
 <?php
 session_start();
   $con = mysqli_connect('localhost', 'root','usbw','hotel_db') or die(mysqli_error($con));

?>
<br />

<h1>Hotel Database</h1>


<!---Input form here HTML ---->
<form action="phpreference.php" method="post" name="action" >
  <!---Name of table column goes in the name= field-->

  <div>
  <label>Username:</label>
  <input type="text" id="username" name="username"><br>
  <label>Password:</label>
  <input type="password" id="password" name="password"><br>
  <label>Usertype:</label>
  <input type="text" id="usertype" name="usertype" placeholder = "Guest/Manager"><br>
  <label>First name:</label>
  <input type="text" id="Fname" name="GFname"><br>
  <label>Last name:</label>
  <input type="text" id="Lname" name="GLname"><br>
  <label>Address:</label>
  <input type="text" id="address" name="GAddress"><br>
  <label>City:</label>
  <input type="text" id="city" name="GCity"><br>
  <input type="submit" value="Submit" name='Reg_Insert'>
</div>
</form>







</body>
</html>

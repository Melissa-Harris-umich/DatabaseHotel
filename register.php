<!Doctype html>
<html>
<head>
    <title>Guest Table</title>
    <link rel="stylesheet" type="text/css" href="/github/databasehotel/style.css">
</head>
<body>
 <?php
   $con = mysql_connect('localhost', 'root','usbw'); /*Function used
   to connect to database*/
   $db = mysql_select_db('hotel_db');
   if($con) //Verify  connection to database
   {
    //echo "Successfully connected to the database";
  }
  else {
    die("Error");
  }

  if(!empty($_POST['submit'])) {
echo 'Cookies';
$sql = "INSERT INTO Registration (username, password, User_type, GFname, GLname, GAddress,  GCity) values
('$_POST[username]','$_POST[password]','$_POST[usertype]','$_POST[GFname]', '$_POST[GLname]', '$_POST[GAddress]','$_POST[GCity]')";




if(mysql_query($sql,$con )){
  echo "Records added successfully.";
} else{
  echo "ERROR: Could not able to execute $sql. " . mysql_error($con);
}
}

?>



<br />

<h1>Hotel Database</h1>


<!---Input form here HTML ---->
<form action="register.php" method="post" name="action" value="updateG">
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

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
   $db = mysql_select_db('test');
   if($con) //Verify  connection to database
   {
    //echo "Successfully connected to the database";
  }
  else {
    die("Error");
  }


?>
<br />

<h1>Hotel Database</h1>


<!---Input form here HTML ---->
<form action="/github/databasehotel/action_page.php" method="post" name="action" value="updateG"> 
  <!---Name of table column goes in the name= field-->

  <div>
  <label>First name:</label>
  <input type="text" id="Fname" name="GFname"><br><br>
  <label>Last name:</label>
  <input type="text" id="Lname" name="GLname"><br><br>
  <label>Address:</label>
  <input type="text" id="address" name="GAddress"><br><br>
  <label>City:</label>
  <input type="text" id="city" name="GCity"><br><br>
  <input type="submit" value="Submit" >
</div>
</form>





<?php
//Get table data
$query = "SELECT * FROM guest ";//Display info within Database
$result =mysql_query($query);
?>
<!-----shows guest table----------->
<table  style="width:600px; line-height:40px;" id="Guest_Table">

<tr>
 <th colspan="5"><h3>Guest Table</h3></th>
</tr>
<th> ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>City</th>
</tr>

<?php
    
 //Table data taken from assigned variables, displays guest data in Front-end table  
 while($row = mysql_fetch_assoc($result))
 {

 ?>
 <tr>
 <td><?php echo  $row['GuestID']; ?></td>
 <td><?php echo  $row['GFname']; ?></td>
 <td><?php echo  $row['GLname']; ?></td>
 <td><?php echo  $row['GAddress']; ?></td>
 <td><?php echo  $row['GCity']; ?></td>
 
 </tr>

 <?php
 }
     ?>


 </table>

  

</body>
</html>



<!Doctype html>
<html>
<head>
    <title>Connecting to a Database</title>
</head>
<body>
 <?php
   $con = mysql_connect('localhost', 'root','usbw'); /*Function used
   to connect to database*/
   $db = mysql_select_db('test');
   if($con) //Verify  connection to database
   {
    echo "Successfully connected to the database";
  }
  else {
    die("Error");
  }

  if($db){ //Verify that database is found
    echo 'Successfully found the database';
  }else{
    die('Error.Database not found');
  }
?>
<br />
<br />

<?php
$query = mysql_query("SELECT * FROM test ");//Dispaly info within Database

  while($row = mysql_fetch_array($query)){
    $id = $row['ID#'];
    $fname = $row['Fname'];
	$lname = $row['Lname'];

		echo $id . ' ' . $fname . ' '. $lname .'<br />';
		
		

     }
    ?>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Site</title>
    <link rel="stylesheet" type="text/css" href="/github/databasehotel/style.css">
 
</head>
<body>
<?php
   $con = mysql_connect('localhost', 'root','usbw'); /*Function used
   to connect to database*/
   $db = mysql_select_db('421 Database');
   if($con) //Verify  connection to database
   {
    //echo "Successfully connected to the database";
  }
  else {
    die("Error");
  }


?>



<h1>Manager Site</h1>
    
</body>
</html>
<!Doctype html>
<html>
<head>
    <title>Guest Table</title>
    <link rel="stylesheet" type="text/css" href="/github/databasehotel/style.css">
</head>
<body>
 <?php
 $con = mysqli_connect('localhost', 'root','usbw','hotel_db') or die(mysqli_error($con));


?>
<br />

<h1>Hotel Database</h1>




<?php

 
    

    if(isset($_POST['Reg_Insert'])) {

        $reg = $_POST['Reg_Insert'];

$sql = "INSERT INTO Registration (username, password, usertype, GFname, GLname, GAddress,  GCity) values
('$_POST[username]','$_POST[password]','$_POST[usertype]','$_POST[GFname]', '$_POST[GLname]', '$_POST[GAddress]','$_POST[GCity]')";


    

if(mysqli_query($con,$sql )){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysql_error($con);
}


    }
// Close connection

  ?>

</body>
</html>
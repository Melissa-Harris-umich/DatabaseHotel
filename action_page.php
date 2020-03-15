<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$con = mysql_connect("localhost", "root", "usbw");

// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysql_connect_error());
}

// $GuestId = mysqli_real_escape_string($con, $db['GuestId']);
// $GFname = mysqli_real_escape_string($con, $db['GFname']);
// $GLname = mysqli_real_escape_string($con, $db['GLname']);
// $GAddress = mysqli_real_escape_string($con, $db['GAddress']);
// $GCity = mysqli_real_escape_string($con, $db['GCity']);

mysql_select_db('test', $con);
//Insert into Guest table
$sql = "INSERT INTO GUEST (GuestId, GFname, GLname, GAddress,GCity) values 
('$_POST[GuestId]', '$_POST[GFname]', '$_POST[GLname]', '$_POST[GAddress]','$_POST[GCity]')";

if(mysql_query($sql,$con )){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysql_error($con);
}
 
// Close connection
mysql_close($con);
?>
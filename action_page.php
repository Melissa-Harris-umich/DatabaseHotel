<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$con = mysql_connect("localhost", "root", "usbw");

// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysql_connect_error());
}



mysql_select_db('421 database', $con);
//Insert into Guest table
$sql = "INSERT INTO GUEST (GFname, GLname, GAddress,GCity) values 
('$_POST[GFname]', '$_POST[GLname]', '$_POST[GAddress]','$_POST[GCity]')";

if(mysql_query($sql,$con )){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysql_error($con);
}
 
// Close connection
mysql_close($con);
?>
<br>
<a href="http://localhost/Github/DatabaseHotel/login.php"><button>Click here to go back</button></a>
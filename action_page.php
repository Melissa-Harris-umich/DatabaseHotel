<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$con = mysqli_connect("localhost", "root", "usbw","hotel_db");

// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysql_connect_error());
}

//If adding record to guest



//Insert into Guest table

///When book button is submitted

$bookbtn=$_POST['bkbtn'];

if(isset($bookbtn)) {

$cin = $_POST['checkin'];
$out = $_POST['checkout'];

$availability = "SELECT RoomID, room_type.code as code, room_type.type as rtype, room_type.cost as cost, room_type.capacity as cap
FROM room inner join room_type on room.Rcode = room_type.code
WHERE NOT EXISTS (

SELECT RID
FROM booking
WHERE Start_date >= '$cin '
AND '$out' <= End_date
AND RID = ROOMID
)";

  
   $aResult = mysqli_query($con,$availability) or die(mysqli_error($con));
   echo"Rooms Available"; 
   
     while($row = mysqli_fetch_assoc($aResult)) {
       
     

      ?>
      <table>
      <tr>
      <td><?php echo  $row['RoomID']; ?></td>
      <td><?php echo  $row['code']; ?></td>
      <td><?php echo  $row['cost']; ?></td>
      <td><?php echo  $row['rtype']; ?></td>
      <td><?php echo  $row['cap']; ?></td>
      </tr>
      </table>
<?php
}

}
    

    if(isset($_Post['Gpage'])) {

$sql = "INSERT INTO Registration (username, password, usertype, GFname, GLname, GAddress,  GCity) values
('$_POST[username]','$_POST[password]','$_POST[usertype]','$_POST[GFname]', '$_POST[GLname]', '$_POST[GAddress]','$_POST[GCity]')";


    

if(mysql_query($sql,$con )){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysql_error($con);
}


    }
// Close connection
mysqli_close($con);
?>
<br>
<a href="guest.php"><button>Choose a different date</button></a>
<a href="index.php"><button>Click here to go back</button></a>
</table>

  

</body>
</html>
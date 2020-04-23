<?php 
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
  echo 'Set and not empty, and no undefined index error!';
}
//works manually, id does not move from one page to other, may need new page
$_SESSION['GID'] = '3';

$gid = $_SESSION['GID'];

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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



if(isset($_POST['bkbtn'])) {

$cin = $_POST['checkin'];
$out = $_POST['checkout'];
$guests = $_POST['num_guests'];
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
?>
<div>
<form action="action_page.php" method="post" name="action">
   <tr>
   <th> <input type='checkbox' id='checkAll'></th>
    </tr>
<?php
   
     while($row = mysqli_fetch_assoc($aResult)) {
       
        ?>


     
     
     
      <tr>
      <td><input class='checkbox ' type="checkbox"  id="<?php echo  $row['RoomID']; ?>" name="id[]"></td>
      <td name="RoomId"><?php echo  $row['RoomID']; ?></td>
      <td name ="code"><?php echo  $row['code']; ?></td>
      <td ><?php echo  $row['cost']; ?></td>
      <td><?php echo  $row['rtype']; ?></td>
      <td><?php echo  $row['cap']; ?></td>
      </tr>
      </table>

   

      <?php
}
$Rmid= $row['id'];



?>
<button type="submit" name="addroom" id="addroom" class="btn btn-theme" >Book!</button>
</form>
</div>



<?php
}
?>

<?php

    if(isset($_POST['addroom'])){

        echo "cats";
        $rm = $_POST['id'];
        $rmm = $_POST['RoomID'];

        if (is_array($rm))
{
  foreach ( $id as $key => $value ) 
  {
      print( $value );
  }
}

        echo $rm;
        echo $rmm;

        $query = "INSERT INTO BOOKING values (1,'$gid','$_POST[RoomID]',
       '$cin','$cout','$guests')";

    

    if(mysqli_query($con,$query )){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not execute $query. " . mysqli_error($con);
    }
}

?>





























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
















$aResult = mysqli_query($con,"SELECT * FROM booking") or die(mysqli_error($con));


if(isset($_POST['data'])){
        $dataArr = $_POST['data'];
        foreach($dataArr as $id){
            mysqli_query($con, "DELETE FROM booking where Start_date='$id' " );
        }
        echo ' record deleted successfully';
}
mysqli_close($con);
?>
<br>





  

</body>
</html>
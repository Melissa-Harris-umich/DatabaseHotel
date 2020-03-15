<!Doctype html>
<html>
<head>
    <title>Connecting to a Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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

<!---Input form here adds to Guest table---->
<form action="/action_page.php" method="post"> 

  <label for="ID">ID:</label>
  <input type="text" id="ID" name="GuestId"><br><br>

  <label for="Fname">First name:</label>
  <input type="text" id="Fname" name="GFname"><br><br>
  <label for="Lname">Last name:</label>
  <input type="text" id="Lname" name="GLname"><br><br>
  <label for="Address">Address:</label>
  <input type="text" id="Address" name="GAddress"><br><br>
  <label for="City">City:</label>
  <input type="text" id="City" name="GCity"><br><br>

  <input type="submit" value="Submit" onclick="addRow('Guest_Table')">
</form>

<?php
//Get table data
$query = mysql_query("SELECT * FROM test ");//Dispaly info within Database

  while($row = mysql_fetch_array($query)){
    $id = $row['ID#'];
    $fname = $row['Fname'];
	$lname = $row['Lname'];


		
     }

     ?>
<!-----shows guest table----------->
<table id="Guest_Table">

<tr>
<th> ID</th>
<th>First Name</th>
<th>Last Name</th>
</tr>
<tr>
<?php
    
   
 echo"<td>$id</td>";
 echo"<td>$fname</td>";
 echo"<td>$lname</td>";
 echo"<td>$address</td>";
 echo"<td>$city</td>";
 
     ?>

  </tr>
   <tr>
     <td>Eve</td>
     <td>Jackson</td>
     <td>94</td>
   </tr> 
 </table>

 <!-------Dynamically adds new row to Guest table NOT WORKING/FINISHED YET---------->
    <script language="javascript"> 

    function addRow(Guest_Table) {

      
			var table = document.getElementById(tableID);
      var index = $("table tbody tr:last-child").index();
    var row = '<tr>' +          
                '<td><input type="text" name="GuestId" ></td>' +
                '<td><input type="text" name="GLname" ></td>' +
                '<td><input type="text" name="GFname" ></td>' +
                '<td><input type="text" name="GAddress" ></td>' +
    '</tr>';
    $("Guest_Table").append(row);  




}

    }
  
  </script>

</body>
</html>



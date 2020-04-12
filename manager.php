<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  #myDIV {
  width: 100%;
  padding: 5px 0;
  text-align: left;
  background-color: white;
  margin-top: 5px;
  display: none;
  }
  #myBuB {
  width: 100%;
  padding: 5px 0;
  text-align: left;
  background-color: white;
  margin-top: 5px;
  display: none;
  }


  #myBIB {
  width: 100%;
  padding: 5px 0;
  text-align: left;
  background-color: white;
  margin-top: 5px;
  display: none;
  }

  #myBoB {
  width: 100%;
  padding: 5px 0;
  text-align: left;
  background-color: white;
  margin-top: 5px;
  display: none;
  }
  #myBaB {
  width: 100%;
  padding: 5px 0;
  text-align: left;
  background-color: white;
  margin-top: 5px;
  display: none;
  }
  #myBaB1 {
  width: 100%;
  padding: 5px 0;
  text-align: left;
  background-color: white;
  margin-top: 5px;
  display: none;
  }
  #myBaB2 {
  width: 100%;
  padding: 5px 0;
  text-align: left;
  background-color: white;
  margin-top: 5px;
  display: none;
  }
  #myBaB3 {
  width: 100%;
  padding: 5px 0;
  text-align: left;
  background-color: white;
  margin-top: 5px;
  display: none;
  }
  #myBaB4 {
  width: 100%;
  padding: 5px 0;
  text-align: left;
  background-color: white;
  margin-top: 5px;
  display: none;
  }

</style>
</head>
<body>



  <h1>Manager Page</h1>
  <p> Please select 1 option </p>

<form action = "manager.php" method = "post">
<input type="checkbox"name="language[]" id = "UpdateHotel" value="Update Hotel" onclick="myFunction(this.id)" />Update Hotel</p>
  <div id = "myDIV"  display="none">


     <label>Hotel ID</label><input type = "text" name="HotelID1"><br>
    <label> Phone#</label><input type "text"  name ="Phone1"><br>
    <label> Manager First Name<input type "text"   name ="Managerfirst1"><br>
    <label> Manager Last Name<input type "text"   name="ManagerLast1"><br>
    <label> Star Rating<input type "text"    name="StarRating1"><br>
    <label> Number of Rooms<input type "text"    name="NumberofRooms1"><br>
    <label> Hotel City<input type "text"   name="Hotelcity1"><br>
</option>


  </div>




  <p><input type="checkbox"name="language[]" id = "AddRoom"  value="AddRoom" onclick="myFunction(this.id)"/>Add a Room</p>
    <div id = "myBuB"  display="none">

    <label> Hotel ID </label><input type = "text" name="HID5"><br> <!-- Primary Key -->
    <label> Room ID</label><input type = "text" name="RoomID5"><br><!-- Primary Key -->
    <label> Room Code</label><input type = "text" name="RoomCode5"><br>
    <label> Availability</label><input type = "text" name="Availability5"><br>
    `                                                                     `


  </div>

<p><input type="checkbox"name="language[]" id = "DeleteRoom"  value="DeleteRoom" onclick="myFunction(this.id)"/>Delete a Room</p>
  <div id = "myBIB"  display="none">

  <label> Hotel ID </label><input type = "text" name="HID4"><br> <!-- Primary Key -->
  <label> Room ID</label><input type = "text" name="RoomID3"><br><!-- Primary Key -->


</div>


<p><input type="checkbox" name="language[]" id = "AddHotel" value="AddHotel" onclick="myFunction(this.id)"/>Add Hotel</p>
  <div id = "myBoB"  display="none">

   <input type "text" hidden = "HotelID2"  name ="HotelID2"><br> <!--Remains hidden because this attribute auto increments -->
  <label> Phone#</label><input type "text"  name ="Phone2"><br>
  <label> Manager First Name<input type "text"   name ="Managerfirst2"><br>
  <label> Manager Last Name<input type "text"   name="ManagerLast2"><br>
  <label> Star Rating<input type "text"    name="StarRating2"><br>
  <label> Number of Employees<input type "text"    name="NumberEmployees2"><br>
  <label> Number of Rooms<input type "text"    name="NumberofRooms2"><br>
  <label> Hotel City<input type "text"   name="Hotelcity2"><br>

</div>


<p><input type="checkbox" name="language[]" id = "DeleteHotels" value="DeleteHotels" onclick="myFunction(this.id)"/>Delete Hotel</p>
  <div id = "myBaB"  display="none">

  <label>HotelID</label><input type = "text" name="HotelID3">


</div>



<p><input type="checkbox"name="language[]" id = "AddRoomType" value="AddRoomType" onclick="myFunction(this.id)"/>Add a Room Type</p>
  <div id = "myBaB1"  display="none">

  <label>Roomcode</label><input type = "text" name ="Roomcode"><br>
  <label>Roomtype</label><input type = "text" name="Roomtype"><br>
  <label>Capacity</label>  <input type = "text" name="Capacity"><br>
  <label>Cost</label><input type = "text" name="Cost"><br>



</div>

<p><input type="checkbox"name="language[]" id ="Revenue" value="Revenue" onclick="myFunction(this.id)"/>Generate Revenue</p>
<div id = "myBaB3" display = "none">

  <label>Hotel ID</label><input type = "text" name = "HotelID4"><br>

</div>



<p><br><input type="submit" name="submit" /></br></p>
</form>

<script>
  function myFunction(id)
  {
    if(id === "UpdateHotel")
    {
    var x = document.getElementById("myDIV");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";

     }
   }


   if(id == "AddRoom")
   {


     var x = document.getElementById("myBuB");
       if (x.style.display === "block") {
         x.style.display = "none";
       } else {
         x.style.display = "block";

      }
    }





   if(id === "DeleteRoom")
   {
     var x = document.getElementById("myBIB");
       if (x.style.display === "block") {
         x.style.display = "none";
       } else {
         x.style.display = "block";

      }
    }
      if(id === "AddHotel")
      {
        var x = document.getElementById("myBoB");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";

         }
       }
         if(id === "DeleteHotels")
         {
           var x = document.getElementById("myBaB");
             if (x.style.display === "block") {
               x.style.display = "none";
             } else {
               x.style.display = "block";

            }
          }
            if(id === "AddRoomType")
            {
              var x = document.getElementById("myBaB1");
                if (x.style.display === "block") {
                  x.style.display = "none";
                } else {
                  x.style.display = "block";

               }
             }
               if(id === "AddOccupants")
               {
                 var x = document.getElementById("myBaB2");
                   if (x.style.display === "block") {
                     x.style.display = "none";
                   } else {
                     x.style.display = "block";

                  }
                }
                if(id === "Revenue")
                {
                  var x = document.getElementById("myBaB3");
                    if (x.style.display === "block") {
                      x.style.display = "none";
                    } else {
                      x.style.display = "block";

                   }
                 }

   }

</script>



<?php

$servername = "localhost";
$username ="root";
$password = "usbw";
$dbname = "421 project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo("connection");
if(isset($_POST["submit"]))  //if user clicks the submit button
{
     $language = $_POST['language']; //Stores checkbox values that were clicked


  if(!empty($_POST["language"]))  //if user clicks on a check box
  {
    echo '<h3>The following actions have been selected<h3>';
    foreach($_POST["language"] as $key => $values)  /* $key => Values allows for
    more than one value that has been checked to be stored.*/
    {
          echo $values;
    }
   }
    if($values == "Update Hotel")
    {
      echo 'Update Hotel firs if';

       if(!empty($_POST['Phone1']))
       {

        $Phone = $_POST['Phone1'];
         $query = "UPDATE 421 project . hotel SET Phone_number = '$Phone'";
         if(mysqli_query($conn, $query)){
             echo "Records added successfully.";
         }

         else{
             echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
         }


       }else if(!empty($_POST['Managerfirst1']) )
       {
         echo 'It works';
        $ManagerFn = $_POST['Managerfirst1'];
         $query1 = "UPDATE  hotel SET Manager_Fname = '$ManagerFn'";
         $result = mysqli_query($conn,$query1);
         if(mysqli_query($conn, $query1)){
             echo "Records added successfully.";
         }
          else{
             echo "ERROR: Could not able to execute $query1. " . mysqli_error($conn);
         }


       }

       else if(!empty($_POST['ManagerLast1']))
       {
            echo 'It works';
         $ManagerLn = $_POST['ManagerLast1'];
          $query2 = "UPDATE  hotel SET Manager_LName = '$ManagerLn'";
          $result = mysqli_query($conn,$query2);
          if(mysqli_query($conn, $query2)){
              echo "Records added successfully.";
          }
           else{
              echo "ERROR: Could not able to execute $query2. " . mysqli_error($conn);
          }



       } else if(!empty($_POST['StarRating1']))
       {
            echo 'It works';
            $StarRating = $_POST['StarRating1'];
            $query3 = "UPDATE hotel SET Stars = '$StarRating'";
            $result = mysqli_query($conn,$query3);
            if(mysqli_query($conn, $query3)){
                echo "Records added successfully.";
            }
             else{
                echo "ERROR: Could not able to execute $query3. " . mysqli_error($conn);
            }



       }else  if(!empty($_POST['NumberofRooms1']) )
       {
            echo 'It works';
         $NumberofRooms = $_POST['NumberofRooms1'];
         $query4 = "UPDATE  hotel SET Num_rooms = '$NumberofRooms'";
         if(mysqli_query($conn, $query4)){
             echo "Records added successfully.";
         }

         else{
             echo "ERROR: Could not able to execute $query4. " . mysqli_error($conn);
         }

       } else if(!empty($_POST['Hotelcity1']) )
       {
            echo 'It works';
         $HotelCity =  $_POST['Hotelcity1'];
         $query5 = "UPDATE  hotel SET City = '$HotelCity'";
         if(mysqli_query($conn, $query5)){
             echo "Records added successfully.";
         }

         else {
             echo "ERROR: Could not able to execute $query5. " . mysqli_error($conn);
         }


       }

      }


    if($values == "AddRoom")
    {
      if(!empty($_POST['HID5']) && !empty($_POST['RoomID5']) && !empty($_POST['RoomCode5']) &&  !empty($_POST['Availability5']))

        $HID = $_POST['HID5'];
        $RoomID = $_POST['RoomID5'];
        $RoomCode = $_POST['RoomCode5'];
        $Availability = $_POST['Availability5'];

        $query = "INSERT INTO ROOM (HID, RoomID, Rcode, Availability) VALUES ('$HID', '$RoomID','$RoomCode', '$Availability')";

        if(mysqli_query($conn, $query)){
            echo "Records added successfully.";
        }
            else{
                echo "ERROR: Could not able to execute query: $query.  " . mysqli_error($conn);
            }
      }







    if($values == "DeleteRoom")
    {
         echo 'delete first if';

          if(!empty($_POST['HID4']) && !empty($_POST['RoomID3']) )
          {

            $HID = $_POST['HID4'];
            $RoomID =  $_POST['RoomID3'];
            $query6 = "DELETE FROM hotel WHERE  HotelID = '$HID'";
            $query8 = "DELETE FROM room WHERE RoomID = '$RoomID'";


            if(mysqli_query($conn, $query6) && mysqli_query($conn, $query8)){
                echo "Records Deleted successfully.";

            }

            else{
                echo "ERROR: Could not able to execute query6: $query6.  " . mysqli_error($conn);
                  echo "ERROR: Could not able to execute query6: $query8.  " . mysqli_error($conn);



            }
          }

    }

    if($values == "AddHotel")
    {
         echo 'Add hotels works';

      if( empty($_POST['HotelID2']) && !empty($_POST['Phone2'])  && !empty($_POST['Managerfirst2']) && !empty($_POST['ManagerLast2']) && !empty($_POST['StarRating2']) && !empty($_POST['NumberEmployees2']) &&  !empty($_POST['NumberofRooms2'])  && !empty($_POST['Hotelcity2']) )
      {


         echo 'Add hotel if statement works';

          $HotelID = $_POST['HotelID2'];
          $Phone = $_POST['Phone2'];
          $ManagerFn = $_POST['Managerfirst2'];
          $ManagerLn = $_POST['ManagerLast2'];
          $StarRating = $_POST['StarRating2'];
          $NumofEmployees = $_POST['NumberEmployees2'];
          $NumberofRooms = $_POST['NumberofRooms2'];
          $HotelCity = $_POST['Hotelcity2'];
          $query10 = "INSERT INTO hotel VALUES( '$HotelID','$Phone','$ManagerFn', '$ManagerLn', '$StarRating','$NumofEmployees',' $NumberofRooms','$HotelCity')";

            if(mysqli_query($conn, $query10)){
              echo "Records added successfully.";
            }
            else {
              echo "ERROR: Could not able to execute $query10. " . mysqli_error($conn);
            }
        }
    }



    if($values == "DeleteHotels")
    {
       echo 'First`if statment works';


        if(!empty($_POST['HotelID3']))
        {

          $HotelID = $_POST['HotelID3'];
          $query9 = "DELETE FROM hotel WHERE HotelID = '$HotelID'";
          if(mysqli_query($conn, $query9))
          {
            echo "Records Deleted successfully";

          }
          else
          {
              echo "ERROR: Could not able to execute $query9. " . mysqli_error($conn);
          }


        }

      }





    if($values == "AddRoomType")
    {
        echo 'Add Room type first if works';

      if(!empty($_POST['Roomcode']) && !empty($_POST['Roomtype']) && !empty($_POST['Capacity']) && !empty($_POST['Capacity']))
       {

         $RoomCode1 = $_POST['Roomcode'];
         $Roomtype1 = $_POST['Roomtype'];
         $Capactity = $_POST['Capacity'];
         $Cost = $_POST['Cost'];
         $query8 = "INSERT INTO ROOM_TYPE VALUES ('$RoomCode1', '$Roomtype1', $Capactity, '$Cost')";

         if(mysqli_query($conn,$query8))
         {
            echo "Records added successfully.";
        }
          else
          {
            echo "ERROR: Could not able to execute query8: $query8.  " . mysqli_error($conn);
          }
        }
    }

    if($values == "Revenue")
   {

      if(!empty($_POST['HotelID4']))
      {
      $HotelID = $_POST['HotelID4'];
      $query13 = "SELECT HID, SUM( Cost ) FROM ROOM, ROOM_TYPE, HOTEL WHERE Availability = TRUE AND HOTEL.HotelID AND ROOM.HID = $HotelID AND ROOM.RCode = ROOM_TYPE.Code GROUP BY HotelID";

      $result = mysqli_query($conn,$query13);


    // output data of each row
    while($row = mysqli_fetch_assoc($result))
    {
       echo  $row['Cost'];

      }
    }
  }







}

 ?>
</body>
</html>

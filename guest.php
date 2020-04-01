<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
   <link rel="stylesheet" type="text/css" href="/github/databasehotel/style.css">
  
    <title>Guest Page</title>
  </head>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->


    <!---Our CSS Style------------->


      <!-----PHP CONNECTING---->
      <?php
   $con = mysql_connect('localhost', 'root','usbw'); /*Function used
   to connect to database*/
   $db = mysql_select_db('421 database');
   if($con) //Verify  connection to database
   {
    //echo "Successfully connected to the database";
  }
  else {
    die("Error");
  }


?>
<body>



<style>


/*For Guest Background*/
#header {
     background: url(assets/img/hero/guestbg.jpg)no-repeat; 
     background-attachment: fixed;
     height: 100vh;
     background-size: 100%;


}
label{
  color:white;
 
}
#myDIV {
  width: 100%;
  padding: 5px 0;
  text-align: center;
  margin-top: 5px;
  display: none;
}

#Del {
 
  padding: 55px 0;
  text-align: center;
  margin-top: 5px;
  display: none;
  align-content:center;
}

#Can {
 
  text-align: center;
  margin-top: 5px;
  display: none;
  align-content:center;
}

.btn-theme {
  background-color:#dab31e;

}
  h3 {
    color: #dab31e;
  }


</style>
<header>
<!--Top Navigation bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
          <a class="navbar-brand" href="#">HOTEL</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#title">About Us</a>
                </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>

            </ul>
          </div>
        </nav>
<!-- Top Navigation Cod Ends Here -->
</header>

            <!-- id in section given header for meaning, to make more meaningful -->
    <section id="header" class="jumbotron text-center mb-0">
      <div class="center">


    <h1>Choose an Option</h1>


<form method="post">
 <!-- Button Options -->
 <button type="button" id= "Book"  class="btn btn-dark" onclick="myFunction(this.id)" >Book a room</button>
 <button type="button" id="Cancel" class="btn btn-dark" onclick="myFunction(this.id)">Cancel your reservation</button>
 <button type="button" id="Delete" class="btn btn-danger" onclick="myFunction(this.id)">Delete your account</button>


 <!---------------------------------Book a room menu functions  -->
 <div id="myDIV" display="none">
 <label for="num_guests">Number of guests: </label>
<select id="num_guests" name="num_guests">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
<label for="checkin">Check in date:</label>
<input type ="date" name="checkin">
<label for="checkout">Check out date:</label>
<input type ="date" name="checkout">
</div>
<!-------------------------- Book a room menu options end here -->


<!------------------------- Cancel Option delete from table here -->
<div id="Can" display="none">
  <label for="Can">Please choose reservation to cancel:</label>

  <?php
//Get table data
$query = "SELECT * FROM guest ";//Change to booking information
$result =mysql_query($query);
?>

  <table class="table table-sm table-dark" id="Guest_Table">

    <tr>	
    <thead><h3>Your Reservations</h3></th>
    </tr>
    <th scope="col"> ID</th>
    <th scope="col">First Name</th>	
    <th scope="col">Last Name</th>	
    <th scope="col">Address</th>
    <th scope="col">City</th>
    <th scope="col">Check to Cancel</th>
    </tr>	
</thead>
<tbody>
    <tr>	
    <?php	
   
     //Table data taken from assigned variables, displays guest data in Front-end table  
     while($row = mysql_fetch_assoc($result)) 
     {
       ?>
  
     <td><?php echo  $row['GuestID']; ?></td>
     <td><?php echo  $row['GFname']; ?></td>
     <td><?php echo  $row['GLname']; ?></td>
     <td><?php echo  $row['GAddress']; ?></td>
     <td><?php echo  $row['GCity']; ?></td>
     <td><input type="checkbox"></td>
     </tr>
         
         <?php
        }
            ?>
         </tbody>
     </table>
     <button type="submit" class="btn btn-theme">Submit</button>
 </div>
<!-------------------------- Cancel a room menu options end here -->


<!--------------------------------DELETE ACCOUNT------------------------------->
<div id="Del" display="none">
<h3>Are you sure you want to delete your account?</h3>
<input type="radio">yes</input>  
<input type="radio">no</input>

<!--------------------------------DELETE ACCOUNT------------------------------->


<!-- Javascript -->
<script>
// Function for toggling menu after button click here
function myFunction(id) {
  var can = document.getElementById("Can");
  var b = document.getElementById("myDIV");
  var del = document.getElementById("Del");
  
  if(id =="Book") {
    var x = document.getElementById("myDIV");
    del.style.display = "none";
    can.style.display = "none";

  }
  
  if(id =="Cancel") {
  var x = document.getElementById("Can");
  del.style.display = "none";
  b.style.display = "none";
  }

  if(id =="Delete") {
  var x = document.getElementById("Del");
  can.style.display = "none";
  b.style.display = "none";
  }

  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }

  
}

// Toggle function end


</script>
<!-- End of Javascript code -->


</body>
</html>

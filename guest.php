<?php 
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
  echo 'Set and not empty, and no undefined index error!';
}
//works manually, id does not move from one page to other, may need new page
$_SESSION['GID'] = '3';
  echo $_SESSION['GID'];
$gid = $_SESSION['GID'];

?>
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
  
  <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!---Our CSS Style------------->


      <!-----PHP CONNECTING---->
  <?php 

   $con = mysqli_connect('localhost', 'root','usbw','hotel_db') or die(mysqli_error($con));


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
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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



<!-----<form action='/github/databasehotel/guest.php' method="post">
Button Options -->
 <button type="button" id= "Book"  class="btn btn-dark" onclick="myFunction(this.id)" >Book a room</button>
 <button type="button" id="Cancel" class="btn btn-dark" onclick="myFunction(this.id)">Cancel your reservation</button>
 <button type="button" id="Delete" class="btn btn-danger" onclick="myFunction(this.id)">Delete your account</button>


 <!---------------------------------Book a room menu functions  -->
 <div id="myDIV" display="none">
<form action="action_page.php" method="post" name="action">

 
 <label for="num_guests">Number of guests: </label>
<select id="num_guests" name="num_guests">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
<label for="checkin">Check in date:</label>
<input type ="date" id="cin" name="checkin">
<label for="checkout">Check out date:</label>
<input type ="date" id="cout" name="checkout">

<input type="submit" name="bkbtn" id="bkbtn" class="btn btn-theme" >

</form>
</div>

<div id="show"></div>

<!-- //Test 4/16/2020 Noy being used below --> 
<script>
$(document).ready(function() {
$('#bkbtn').click(function(){
  var checkin =$('#cin').val();
  var checkout =$('#cout').val();
    setInterval(function() {
        $('#show').load('action_page.php')
    }, 3000);
  });
 
    });

    function sendResponse(){
  $.ajax({
    type : 'post',
    url : 'action_page.php',
    data : { 'data1':cin,
            'data2': cout },
    success : function(response) {
                alert(response);
              },
    error : function(errResponse){
              alert(errResponse);
    
  }
  });

}

</script>
<!-------------------------- Book a room menu options end here -->


<!------------------------- Cancel Option delete from table here -->
<div id="Can" display="none">
  <label for="Can">Please choose reservation to cancel:</label>

  <?php
//Get table data
$reservations = "SELECT * FROM booking where GID = '$gid'   ";//gid needs to be replaced by session but issue
$result =mysqli_query($con,$reservations);
?>
<div>
<!-- <form action="guest.php" method="post" > -->
  <table class="table table-sm table-dark" id="Guest_Table">

    <tr>	
    <thead><h3>Your Reservations</h3></th>
    </tr>
    <th> <input type='checkbox' id='checkAll'></th>
    <th scope="col">Hotel</th>
    <th scope="col">Guest ID</th>	
    <th scope="col">Room ID</th>	
    <th scope="col">Check in Date:</th>
    <th scope="col">Check out Date:</th>
    <th scope="col">Number of occupants</th>
  
    </tr>	
</thead>
<tbody>
    <tr>	
    <?php	
  
     //Table data taken from assigned variables, displays guest data in Front-end table  
     while($row = mysqli_fetch_assoc($result)) 
     {
       ?>
  <td><input class='checkbox ' type="checkbox"  id="<?php echo  $row['Start_date']; ?>" name="id[]"></td>
     <td><?php echo  $row['HID']; ?></td>
     <td><?php echo  $row['GID']; ?></td>
     <td><?php echo  $row['RID']; ?></td>
     <td><?php echo  $row['Start_date']; ?></td>
     <td><?php echo  $row['End_date']; ?></td>
     <td><?php echo  $row['Num_occupance']; ?></td>
     
     </tr>
         

    
    
         <?php
        }
       
?>
         </tbody>

     <button type="button" class="btn btn-theme" id="can_res">Delete</button>
            
     
     </table>
     </div>
    



    </form>
 </div>
<!-------------------------- Cancel a room menu options end here -->
<script>
$(document).ready(function(){
  $('#checkAll').click(function(){
    if(this.checked){
      $('.checkbox').each(function(){
        this.checked = true;
      });
    }else{
      $('.checkbox').each(function() {
        this.checked = false;
      });
    
    }
  });

$('#can_res').click(function(){
  var dataArr = new Array();
  if($('input:checkbox:checked').length > 0){
    $('input:checkbox:checked').each(function(){
      dataArr.push($(this).attr('id'));
      $(this).closest('tr').remove();
    });
    sendResponse(dataArr)
  }else{
    alert('No records selected');
  }

});
});


function sendResponse(dataArr){
  $.ajax({
    type : 'post',
    url : 'action_page.php',
    data : {'data' :dataArr},
    success : function(response) {
                alert(response);
              },
    error : function(errResponse){
              alert(errResponse);
    
  }
  });

}
</script>
<!--------------------------------DELETE ACCOUNT------------------------------->
<form action = "guest.php" method = "post">
<div id="Del" display="none">
<h3>Are you sure you want to delete your account?</h3>
<?php
//Get table data

if(isset($_POST['delbtn'])){
  echo "Delete button pressed";
$Delete_user = "DELETE FROM REGISTRATION where GuestId = '$gid'   ";//gid needs to be replaced by session but issue
$result2 =mysqli_query($con,$Delete_user);

if($result2) {
  header('Location: index.php');
  echo "Records Deleted successfully.";

}else{
echo "Did not delete"; 
  }  
}
?>

 <button type="submit" class="btn btn-theme" name='delbtn'>Confirm</button>
</div>
</form>
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

<?php
mysqli_close($con);
?>
</script>

</body>
</html>

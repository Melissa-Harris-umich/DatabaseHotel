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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    

    <!---Our CSS Style------------->


      <!-----PHP CONNECTING---->
      <?php
   $con = mysqli_connect('localhost', 'root','usbw','hotel_db') or die(mysqli_error($con));

    

?>
<body>

<!------------------------- Cancel Option delete from table here -->
<div id="Can" display="none">
  <label for="Can">Please choose reservation to cancel:</label>

  <?php
//Get table data
$reservations = "SELECT * FROM booking  ";//Change to booking information Get user id php for session
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
    <th scope="col">Check to Cancel</th>
    </tr>	
</thead>
<tbody>
    <tr>	
    <?php	
  
     //Table data taken from assigned variables, displays guest data in Front-end table  
     while($row = mysqli_fetch_array($result)) 
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

     <button type="button" class="btn btn-theme" id="delete">Delete</button>
            
     
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

$('#delete').click(function(){
  var dataArr = new Array();
  if($('input:checkbox:checked').length > 0){
    $('input:checkbox:checked').each(function(){
      dataArr.push($(this).attr('id'));
    });
    console.log(dataArr);
  }else{
    alert('No records selected');
  }

});
});
</script>
    
</body>
</html>
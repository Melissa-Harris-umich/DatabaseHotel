<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

<style>
html,body{
background-image: url(img/guestbg.jpg);
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
  box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
  

}
.btn-c {
 background-color:#dab31e;

}
</style>
</head>
<body>



<!------PHP----------->

<?php
   $con = mysql_connect('localhost', 'root','usbw'); /*Function used
   to connect to database*/
   $db = mysql_select_db('hotel_db');
   if($con) //Verify  connection to database
   {
    //echo "Successfully connected to the database";
  }
  else {
    die("Error");
  }

  if(!empty($_POST['submit'])) {
echo 'Cookies';
$sql = "INSERT INTO Registration (username, password, User_type, GFname, GLname, GAddress,  GCity) values
('$_POST[username]','$_POST[password]','$_POST[usertype]','$_POST[GFname]', '$_POST[GLname]', '$_POST[GAddress]','$_POST[GCity]')";




if(mysql_query($sql,$con )){

  echo 
  "<script type=\"text/javascript\">".
  "window.alert('Records added successfully.');".
  "top.location = 'index.php';".
  "</script>"; 

   exit; 


  header('Location: index.php');
} else{
	echo
  "<script type=\"text/javascript\">".
  "window.alert('Unsuccessful Try again.');".
  "top.location = 'test.php';".
  "</script>"; 
  exit; 

  echo "ERROR: Could not able to execute $sql. " . mysql_error($con);
}
}

?>
<!--PHP-->




  

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Registration</h3>
			 			</div>
			 			<div class="panel-body">
             <form action="test.php" method="post" name="action" value="updateG">
			    			<div class="row">


			    		
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="username" name="username" class="form-control input-sm" placeholder="Username">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" name="password"  class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    			</div>
			    			

                <div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">



                   
                    
			                <input type="text" name="GFname" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="GLname" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<select type="dropdown" name="usertype"  class="form-control input-sm" placeholder="Guest/Manager">

                 
  <option value="Manager">Manager</option>
  <option value="Guest">Guest</option>

</select>
			    			</div>

                
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="GAddress" class="form-control input-sm" placeholder="Address">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="GCity" class="form-control input-sm" placeholder="City">
			    					</div>
			    				</div>
			    			</div>
			    			<input type="submit" value="Register" name='submit' class="btn btn-c btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>


    </body>
</html>
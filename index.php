<!DOCTYPE html>


<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php


$servername = "localhost";
$username ="root";
$password = "usbw";
$dbname = "hotel_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo("connection");



 if(isset($_POST['login_btn'])) //If user clicks login button

{


	//Validates user that is logging in

$user = $_POST['username'];  //Retrieve data stored in username field

$pass = $_POST['password'];  //Retrieve data stored in password field
$usertype = $_POST['usertype'];
$guest_id = $_POST['guestid'];
$query = "SELECT * FROM REGISTRATION WHERE username = '$user' and password = '$pass'";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));;

$count = mysqli_num_rows($result);
echo $count;
	if($count == 1) {

	if($usertype == 'Guest'){
		?>



			<?php echo 'orange' ;
			$SESSION['user'] = $_POST['username'];//Retrieves guest id for account deletion and booking addition and deletion
			header('Location: guest.php');
			?>
			<?php

		}else if($usertype == 'Manager'){

			?>
			<script type = "text/javascript">
			<?php header('Location: http://' . $_SERVER['HTTP_HOST'] . 'manager.php');?>

			<?php
		}
}else{ echo "Wrong username and pass";
}
}






?>


<body>
	<div class="header">
		<h2>Hotel Login</h2>

	</div>
	<form method="post" action="index.php">


		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
			<div class="input-group">
		Select user type: <select name ="usertype">
			<option value= "Manager">Manager</option>
			<option value= "Guest">Guest</option>
		</select>
	</div>

		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not a member? Register as guest <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>

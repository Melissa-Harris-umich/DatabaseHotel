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
$dbname = "421 Database";
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo("connection");

 if(isset($_POST['login_btn'])) //If user clicks login button

{

$user = $_POST['username'];
$pass = $_POST['password'];
$usertype = $_POST['usertype'];
$query = "SELECT * FROM guest WHERE GFname = '$user' and GLname = '$pass'";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));;

$count = mysqli_num_rows($result);
echo $count;
	if($count == 1) {

	if($usertype == 'Guest'){
		?>


			<?php echo 'orange' ?>
			<script type = "text/javascript">
			<?php header('Location: http://' . $_SERVER['HTTP_HOST'] . '/Github/databasehotel/databasetabletest.php');?>
			<?php

		}else{ echo "Wrong username and pass";
}
}
}
?>


<body>
	<div class="header">
		<h2>Login</h2>

	</div>
	<form method="post" action="login.php">


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
			Not a member? Register as guest <a href="login_action.php">Sign up</a>
		</p>
	</form>
</body>
</html>

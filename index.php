<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>

<head>

<title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="/github/databasehotel/style.css">
</head>
<?php


$servername = "localhost";
$username ="root";
$password = "usbw";
$dbname = "421 project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo("connection");



 if(isset($_POST['login_btn'])) //If user clicks login button

{


	//Validates user that is logging in

$user = $_POST['username'];  //Retrieve data stored in username field

$pass = $_POST['password'];  //Retrieve data stored in password field
$usertype = $_POST['usertype'];
$query = "SELECT * FROM REGISTRATION WHERE username = '$usertype' and password = '$pass'";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));;

$count = mysqli_num_rows($result);
echo 'Count number is:'; echo $count;
	if($result) {

	if($usertype == 'Guest'){
		?>



			<?php echo 'orange' ;
			$SESSION['user'] = $_POST['username'];//Retrieves guest id for account deletion and booking addition and deletion
			header('Location: http://' . $_SERVER['HTTP_HOST'] . '/DatabaseHotel/guest.php/');
			?>
			<?php

		}else if($usertype == 'Manager'){

			?>
			<script type = "text/javascript">
			<?php header('Location: http://' . $_SERVER['HTTP_HOST'] . '/DatabaseHotel/manager.php/');?>
</script>
			<?php
		}
}else{
	echo
	"<script type=\"text/javascript\">".
	"window.alert('Wrong username and password. Try again.');".
	"top.location = 'index.php';".
	"</script>";
	exit;

}
}
?>
	<title>Login Page</title>
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>



<div class="center">
  <h1>Hotel Database</h1>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card mt-5">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">

			</div>
			<div class="card-body">
      <form method="post" action="index.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
            <!----User name------>

						<input type="text" class="form-control" name='username' placeholder="username">

					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
             <!----password------>
						<input type="password" class="form-control" name='password' placeholder="password">
					</div>
					<div class="align-items-right remember pl-7 ">

		 Select user type: <select name ="usertype"> </div>
			<option value= "Manager">Manager</option>
			<option value= "Guest">Guest</option>
		</select>
	</div>


					<div class="form-group pt-2">
						<input type="submit" value="Login" name='login_btn' class="btn float-right login_btn ">
					</div>


			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="register.php">Sign Up</a>
				</div>

			</div>
		</div>
	</div>
</div>



<style>


@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url(img/guestbg.jpg);
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #dab31e;;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #dab31e;;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #dab31e;;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}

</style>
</body>
</html>

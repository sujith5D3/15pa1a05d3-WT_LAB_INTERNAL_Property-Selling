<?php include('server.php');
session_start(); 
if(isset($_POST['register'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
		$query="INSERT INTO  `user`(`username`,`email`,`password`) VALUES('username','email','password')";
		mysqli_query($conn,$query);
		header('location:login.php');
		
	}
?>
<!DOCTYPE>
<html>
<head>
	<title>Registration From</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">
		<!--Display errors here-->
		
		<div class="input_group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Your name" value="<?php  $username; ?>">
		</div>
		<div class="input_group">
			<label>Email</label>
			<input type="text" name="email" placeholder="Your Email" value="<?php  $email; ?>">
		</div>
		<div class="input_group">
			<label>Password</label>
			<input type="password" name="password1" placeholder="Your password">
		</div>
		<div class="input_group">
			<label>Confirm password</label>
			<input type="password" name="password2" placeholder="Confirm password">
		</div>
		<div class="input_group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>

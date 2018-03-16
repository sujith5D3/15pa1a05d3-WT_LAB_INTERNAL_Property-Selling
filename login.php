<?php include('server.php');
session_start();

		if (isset($_POST['Login'])) {
			$username = $_POST['username'];
			$password = $_POST['password1'];
			echo 'hello';
			$query="SELECT * FROM user WHERE user_name='$username' and password='$password' ";
				$sql = mysqli_query($conn,$query);
					 if(mysqli_num_rows($sql)>0) {
    			    	    		$_SESSION['username'] = $username;
    			    	    		$_SESSION['password'] = $password;
        			    		header('location:add.php');
        			    		}
        			    		else{
        			    		echo $sql;
        			    		echo "user does not exist";
        			}
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
		<h2>Login</h2>
	</div>
	<form method="post" action="">
		<div class="input_group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Name">
		</div>
		<div class="input_group">
			<label>Password</label>
			<input type="password" name="password1" placeholder="Your password">
		</div>
		<div class="input_group">
			<button type="submit" name="Login" >Login</button>
		</div>
		<p>
			Not yet registered? <a href="register.php">Sign up</a>
		</p>
		
	</form>
</body>
</html>


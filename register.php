<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registration</h2>	
	</div>
	
	<form method="post" action="register.php">
	
		<?php include('errors.php'); ?>
	
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		
		<div class="input-group">
			<label>Phone No.</label>
			<input type="text" name="phonenumber">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
	
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
			
			<button type="reset" name="reset" class="btn">Reset</button>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>	
	</form>
</body>
</html>
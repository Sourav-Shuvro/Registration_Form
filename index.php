<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>	
	</div>
		
	<div class="content">
		<?php if (isset ($_SESSION['success'])); ?>
			<div class="error success">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
						
					?>
				</h3> 	
			</div>
		
		<?php if(isset($_SESSION["username"])): ?>
			<p>Welcome<strong><?php echo $_SESSION['username']; ?></strong></p>
			<p><a href="login.php" style="color:red;">Logout</a></p>
		<?php endif ?>
	</div>
	
</body>
</html>
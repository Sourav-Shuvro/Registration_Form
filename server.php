<?php
	session_start();
	$username="";
	$email="" ;
	$errors= array();
	
	$db = mysqli_connect("localhost", 'root', '', 'registration');
	
	//if the registration button clicked
	if(isset($_POST['register'])) {
		$username= mysqli_real_escape_string($db,$_POST['username']);
		$email= mysqli_real_escape_string($db,$_POST['email']);
		$phonenumber= mysqli_real_escape_string($db,$_POST['phonenumber']);
		$password_1= mysqli_real_escape_string($db,$_POST['password_1']);
		$password_2= mysqli_real_escape_string($db,$_POST['password_2']);
		
		
		if(empty($username)){
			array_push($errors,"Username is required");
		}
		
		if(empty($email)){
			array_push($errors,"Email is required");
		}
		
		if(empty($password_1)){
			array_push($errors,"Password is required");
		}
			
		if($password_1 != $password_2){
			array_push($errors,"Password is not match");
		}
		if(count($errors)==0){
			$sql= "INSERT INTO users(username, email, password, phonenumber)
				VALUES ('$username', '$email', '$password_1','$phonenumber')";
			mysqli_query($db, $sql);
			$_SESSION['username']= $username;
			$_SESSION['success']= "You are logged in";
			header('location: index.php');
		}

	}
	//login from login page
		if(isset($_POST['login'])) {
		$username= mysqli_real_escape_string($db,$_POST['username']);
		$password= mysqli_real_escape_string($db,$_POST['password_1']);
		
		if(empty($username)){
			array_push($errors,"Username is required");
		}
		
		if(empty($password)){
			array_push($errors,"Password is required");
		}
		
		if(count($errors)==0){
			$query= "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result= mysqli_query($db, $query);
			if(mysqli_num_rows($result)==1){
				$_SESSION['username']= $username;
				$_SESSION['success']= "You are logged in";
				header('location: index.php');
			}
			else{
				array_push($errors, "Invalid username or password");
			}
		}
		}
	
?>
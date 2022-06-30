<?php
session_start();

	include("connection.php");
	include("function.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted-collect the data
		$user_name= $_POST['user_name'];
		$password= $_POST['password'];
		
		if(!empty($user_name) && !empty($password) && !is_numeric ($user_name))
		{
			//save to database
			$user_id = random_num(20);
			$query ="insert into users(user_id,user_name,password) values ('$user_id','$user_name','$password')";
			
			mysqli_query($con, $query);
			
			header("Location: login.php");
			die;
		}
		else
		{
			echo "Please enter some valid information";
		}
	}
?>

<!DOCTYPE html> 
<head>
<title>Signup</title>
	<link rel="stylesheet" href="styles/login.css">
</head>
<body>
	<div class="login-page">
	<div class="form">
		<img src="images/user.png" class="avatar"><br>
		<h1>Signup</h1><br>
		<form method="post" class="login-form" name="form">
		<input type="text" placeholder="username" name="user_name">
		<input type="password" placeholder="password" name="password">
		<button>Signup</button>
		<p class="message">have an account <a href="beauticianloginpage.html">Login</a></p>
		</form>	
	</div>
	</div>
</body>
</html>
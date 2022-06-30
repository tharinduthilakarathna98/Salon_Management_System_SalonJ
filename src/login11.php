<?php
session_start();

	include("connection.php");
	include("function.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name= $_POST['user_name'];
		$password= $_POST['password'];
		
		if(!empty($user_name) && !empty($password) && !is_numeric ($user_name))
		{
			//read from database
			$query ="select * from users where user_name = '$user_name' limit 1";
			
			$result= mysqli_query($con, $query);
			
			
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{ 
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
		}
		else
		{
			echo "Please enter some valid information";
		}
	}
?>

<!DOCTYPE html>
<head>
<title>Login</title>
	<link rel="stylesheet" href="styles/login.css">
</head>
<body>
	<div class="login-page">
	<div class="form">
		<img src="images/user.png" class="avatar"><br>
		<h1>Login</h1><br>
		<form method="post" class="login-form">
		<input type="text" placeholder="user_name" name="user_name" id="user_name" required>
		<input type="password" placeholder="password" name="password" id="password" required>
		<button>Login</button>
		<p class="message"> Don't have an account <a href="signup.php">signup</a></p>
		</form>	
	</div>
	</div>
</body>
</html>
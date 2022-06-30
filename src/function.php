<?php

function check_login11($con)
{	
	if(isset ($_SESSION['user_id']))
	{
		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";/*asking from database*/
		 
		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	 }
	 
	 //redirect to login
	 header("Location: login.php");
	 die;
	 
}

function random_num($length)
{
	$text="";
	
	if($length <6)
	{
		$length=6;
	}
	
	$len =rand(4,$length);
	
	for($i=0; $i<$len; $i++)
	{
		#code...
		$text .= rand(0,9);
	}
	
	return $text;
}

?>
<?php

$connection =mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'update');


if(isset($_POST['update']))
{
	$user_id =$_POST['user_id'];
	
	$query =("UPDATE 'beautician' SET fname='$_POST[fname]',lname='$_POST[lname]',dob='$_POST[dob]',email='$_POST[email]',address='$_POST[address]',contact='$_POST[contact]' where user_id='$_POST[user_id]'");
	$query_run = mysqli_query($connection, $query);
	
	if($query_run)
	{
		echo 'Data Update';
	}
	else
	{
		echo 'Data not updated';
	}
}

?>

<!DOCTYPE html>
<head>
<title>Updation</title>
<!--Add_stylesheet-->
<link rel="stylesheet" href="styles/update.css">
</head>
<body>
	<div class="update-page">
	<div class="form">
		<h1>Update Info</h1><br>
		<form method="POST" class="update-form">
		<input type="text" name="user_id" placeholder="Enter user_ID">
		<input type="text" name="fname" placeholder="Enter First name">
		<input type="text" name="lname" placeholder="Enter last name">
		<input type="date" name="dob">
		<input type="email" name="email" placeholder="Enter email">
		<input type="text" name="address" placeholder="Enter address">
		<input type="text" name="contact" placeholder="Enter Phone number">
		
		<button name="update">Update</button>
		</form>	
	</div>
	</div>
</body>
</html>
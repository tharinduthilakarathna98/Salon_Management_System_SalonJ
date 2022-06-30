<?php

	$dbhost ="localhost";
	$dbuser ="root";
	$dbpass="";
	$dbname="salon_j";
	
	if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
	{
		die("failed to connect!");
	}
	
	if(isset ($_POST['send']))
	{
	
		$from = $_POST['from'];
		$to = $_POST['to'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];		

		$connect=new mysqli($dbhost, $dbuser ,$dbpass , $dbname );

		$sql ="INSERT INTO mail (from, to, subject , message) values ('$from', '$to', '$subject' , '$message')";
	
		if(mysqli_query($con, $sql))
		{
			echo "Message sent";
		}
		else
		{
			echo "Message not sent";
			
			header("Location: mail.php");
			die;
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>New mail form</title>
	<link rel="stylesheet" href="styles/new_mail.css">
</head>
<body>
	<div class="new_mail-page">
	<div class="form">
		<h1>New Mail</h1><br>
		<form method="POST" class="send-mail">
		<input type="email" name="from" placeholder="From" required>
		<input type="email" name="to" placeholder="To" required>
		<input type="text" name="subject" placeholder="Subject" required>
		<textarea name="message" placeholder="Message" cols="40" rows="10" required></textarea>
		
		<button name="send">Send</button>
		</form>	
	</div>
	</div>
</body>
</html>
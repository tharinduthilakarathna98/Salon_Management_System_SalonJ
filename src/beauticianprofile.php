<?php

session_start();
	
	include("connection.php");
	include("function.php");


?>

<!DOCTYPE html>
<head>
	
	<title>Profile Info</title>
	<link rel="stylesheet" href="styles/profile-info.css">
	
	<!--References!-->
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="left">
			<img src= "images/gril1.jpg" alt="beautician" width="100%">
			<h4>Rose Brooke</h4>
			<p>Hair Specialist</p>
		</div>
		<div class="right">
			<div class="info">
				<h3>Profile Info</h3>
				<div class="info-data">
					<div class="row">
						<div class="name">
							<h5><ion-icon name="person-outline"></ion-icon> Full Name</h5>
						</div>
						<div class="answer">
							Rose Brooke
					</div>
					</div>
						<hr>
					<div class="row">
							<div class="name">
								<h5><ion-icon name="glasses-outline"></ion-icon> Age</h5>
							</div>
							<div class="answer">
								27
							</div>
					</div>
						<hr>
					<div class="row">
							<div class="name">
								<h5><ion-icon name="mail-outline"></ion-icon> Email</h5>
							</div>
							<div class="answer">
									rose.b@gmail.com
							</div>
					</div>
						<hr>
					<div class="row">
							<div>
								<h5><ion-icon name="call-outline"></ion-icon> Contact</h5>
							</div>
							<div class="answer">
								071-5874412
							</div>
					</div>
						<hr>
					<div class="row">
							<div class="name">
								<h5><ion-icon name="home-outline"></ion-icon> Address</h5>
							</div>
							<div class="answer">
								No:07,School Lane,Kaluthara
							</div>
					</div>
				</div>
			</div>
			
			<div class="social-media">
				<h3>Social Links</h3><br>
				<ul>
					<li><a href="www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href=""><i class="fab fa-twitter"></i></a></li>
					<li><a href=""><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div><br>
			<div class= "edit">
			<a href = "update.php">Edit</a>
		</div>
		
		<div class="footer">
			<div class ="footer-bar">
				<h5>Quick Links</h5>
					<a href="Home.html">Home</a>
					<a href="update.php">dashboard</a>
					<a href="calender.html">Calender</a>
					<a href="signup.php">Login</a>
					<a href="mail.php">Mail</a>
					<a href="https://www.iamsalonanddayspa.com/faq/">FAQs</a>

	
			</div>
		</div>
	</div>	
	
</body>
</html>
<?php

session_start();
	
	include("connection.php");
	include("function.php");

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Dashboard</title>
	<!--References!-->
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	<link rel="stylesheet" href="style/index.css">	
</head>

<body>
	<input type="checkbox" id="sidebar-toggle">
	<div class="sidebar">
		<div class="sidebar-header">
			<h3 class="brand">
				<span class="logo">Dashboard</span>
			</h3>
			<label for="sidebar-toggle"><ion-icon name="menu-outline"></ion-icon></label>
		</div>
		
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="profile.php">
					<ion-icon name="person-outline"></ion-icon>
						<span class="profile"></span>
						<span>Profile Info</span>
					</a>
				</li>
				<li>
					<a href="#">
					<ion-icon name="book-outline"></ion-icon>
						<span class="booking"></span>
						<span>Bookings</span>
					</a>
				</li>
				<li>
					<a href="mail.php">
					<ion-icon name="mail-unread-outline"></ion-icon>
						<span class="mailbox"></span>
						<span>Mail</span>
				</li>
				<li>
					<a href="login.php">
					<ion-icon name="enter-outline"></ion-icon>
						<span class="leaves"></span>
						<span>Exit</span>
					</a>
				</li>
				<li>
					<a href="Home.html">
					<ion-icon name="home-outline"></ion-icon>
						<span class="home"></span>
						<span>Home</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="main-content">
	
		<header>
			<div class="search-wrapper">
				<span><ion-icon name="search-outline"></ion-icon></span>
				<input type="search" placeholder="Search">
			</div>
			
			<div class="social-icons">
				<span><a href="mail.php"><ion-icon name="mail-outline"></ion-icon></a></span>
				<span><ion-icon name="notifications-outline"></ion-icon></span>
				<span><a href="calender.html"><ion-icon name="calendar-outline"></a></ion-icon></span>
			</div>			
		</header>
		
		<main>
		
			<h2 class ="dash-title"> Overview</h2>
			
			<div class="dash-cards">
				<div class="single-card">
					<div class="card-body">
						<span><ion-icon name="person-outline"></ion-icon> </span>
						<div>
							<h5>Profile Info</h5>
						</div>
					</div>
					<div class="card-footer">
						<a href="profile.php">View all</a>
					</div>
				</div>
				
				<div class="single-card">
					<div class="card-body">
						<span><ion-icon name="briefcase-outline"></ion-icon></span>
						<div>
							<h5>Appointments Cancellation</h5>
						</div>
					</div>
					<div class="card-footer">
						<a href="">View all</a>
					</div>
				</div>
				
				<div class="single-card">
					<div class="card-body">
						<span><ion-icon name="cash-outline"></ion-icon></span>
						<div>
							<h5>Processing Profit</h5>
						</div>
					</div>
					<div class="card-footer">
						<a href="salary.php">View all</a>
					</div>
				</div>	
			</div>
			
			<section class="recent">
				<div class="activity-grid">
					<div class="activity-card">
						<h3>Recent activity</h3>
					
						<table>
							<thead>
								<tr>
									<th>Appointment_Id</th>
									<th>Time</th>
									<th>Appointment_Type</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>App20210521</td>
									<td>8.30 am</td>
									<td>Hair Cutting</td>
									<td>
										<span class="accept">Accepted  <ion-icon name="happy-outline"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>App20210522</td>
									<td>9.30 am</td>
									<td>Dressing</td>
									<td>
										<span class="accept">Accepted  <ion-icon name="happy-outline"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>App20210523</td>
									<td>10.30 am</td>
									<td>Facial</td>
									<td>
										<span class="pending">Pending  <ion-icon name="sad-outline"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>App20210523</td>
									<td>11.00 am</td>
									<td>Waxing</td>
									<td>
										<span class="accept">Accepted  <ion-icon name="happy-outline"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>App20210527</td>
									<td>11.40 am</td>
									<td>Facial</td>
									<td>
										<span class="pending">Pending  <ion-icon name="sad-outline"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>App20210528</td>
									<td>10.30 am</td>
									<td>Facial</td>
									<td>
										<span class="accept">accepted  <ion-icon name="happy-outline"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>App20210523</td>
									<td>10.30 am</td>
									<td>Facial</td>
									<td>
										<span class="pending">Pending  <ion-icon name="sad-outline"></ion-icon></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<div class="summary">
						<div class="summary-card">
							<div class="summary-single">
									<span class= "id-badge"><ion-icon name="person-circle-outline"></ion-icon></span>
								<div>
									<h5>200</h5>
									<small>Overall Appointments</small>
								</div>
							</div>
							<div class="summary-single">
									<span class= "id-badge"><ion-icon name="calendar-number-outline"></ion-icon></span>
								<div>
									<h5>16</h5>
									<small>Number of leaves</small>
								</div>
							</div>
							<div class="summary-single">
									<span class= "id-badge"><ion-icon name="accessibility-outline"></ion-icon></span>
								<div>
									<h5>5</h5>
									<small>Pending Appointments</small>
								</div>
							</div>
						</div>
						
						<div class="mail-card">
							<div class="mail-flex">
								<div class="mail-img"></div>
								<div class="mail-info">
									<h5>New mail</h5>
									<a href="mail.php">lily.f@gmail.com</a>
								</div>
							</div>
							<div class="mail-flex">
								<div class="mail-img"></div>
								<div class="mail-info">
									<h5>New mail</h5>
									<a href ="mail.php">lily.f@gmail.com</a>
								</div>
							</div>
							<div class="text-center">
								<button><a href ="mail.php">Open</a></button>
							</div>
						</div>
					</div>	
				</div>
			</section>
			
		</main>
	
</body>
</html>
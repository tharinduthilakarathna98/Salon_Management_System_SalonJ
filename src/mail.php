<?php

session_start();
	
	include("connection.php");
	include("function.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>mailbox</title>
	
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	<link rel="stylesheet" href="styles/mail.css">	
</head>
<body>
	
	<input type="checkbox" id="sidebar-toggle">
	<div class="sidebar">
		<div class="sidebar-header">
			<label for="sidebar-toggle"><ion-icon name="menu-outline"></ion-icon></label>
		</div><br><br>
		
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="new_mail.php">
					<ion-icon name="add-outline"></ion-icon>
						<span class="mailbox"></span>
						<span>New Mail</span>
				</li>
				<li>
					<a href="#inbox">
					<ion-icon name="mail-unread-outline"></ion-icon>
						<span class="profile"></span>
						<span>Inbox</span>
					</a>
				</li>
				<li>
					<a href="#outbox">
					<ion-icon name="mail-open-outline"></ion-icon>
						<span class="profile"></span>
						<span>sent mail</span>
					</a>
				</li>
				<li>
					<a href="#">
					<ion-icon name="archive-outline"></ion-icon>
						<span class="booking"></span>
						<span>Drafts</span>
					</a>
				</li>
				<li>
					<a href="#junk">
					<ion-icon name="trash-outline"></ion-icon>
						<span class="mailbox"></span>
						<span>Junk mail</span>
				</li>
				<li>
					<a href="Home.html">
					<ion-icon name="enter-outline"></ion-icon>
						<span class="leaves"></span>
						<span>Exit</span>
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
			<h3 class="brand">
				<span class="logo"><?php echo $user_data['user_name']; ?></span>.salonj@gmail.com<br><br>
			</h3>
		</header>
		
		<main>		
			<section class="recent">
				<div class="activity-grid">
					<div class="activity-card" id="inbox">
						<h3>Inbox</h3>
					
						<table>
							<tbody>
								<tr>
									<td>lisa.salonj@gmail.com</td>
									<td><h2>Hi <?php echo $user_data['user_name']; ?>,How's it going?Sorry I haven't been in touch for such a long time .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Dear Team:Good morning. There are some exciting changes coming to our depar .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>headoffice.j@gmail.com</td>
									<td><h2>Hi <?php echo $user_data['user_name']; ?>, we are happy to announce you have been selected to the... </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>manager.salonj@gmail.com</td>
									<td><h2>Monthly Payment,your monthly payment had been send to the bank.. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Account update ,your profile update request confirmed,Go and see new.. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>andy.k@gmail.com</td>
									<td><h2>Hi <?php echo $user_data['user_name']; ?>,your makeup is soo good dear it's looks like an angle.. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Hi Linda,How's it going?Sorry I haven't been in touch for such a long time .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<div class="activity-card" id="outbox">
						<h3>Outbox</h3>
					
						<table>
							<tbody>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Hi Linda,How's it going?Sorry I haven't been in touch for such a long time .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Dear Team:Good morning. There are some exciting changes coming to our depar .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Hi Linda,How's it going?Sorry I haven't been in touch for such a long time .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Hi Linda,How's it going?Sorry I haven't been in touch for such a long time .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Hi Linda,How's it going?Sorry I haven't been in touch for such a long time .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Hi Linda,How's it going?Sorry I haven't been in touch for such a long time .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Hi Linda,How's it going?Sorry I haven't been in touch for such a long time .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<div class="activity-card" id="junk">
						<h3>Junk Box</h3>
					
						<table>
							<tbody>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Hi Linda,How's it going?Sorry I haven't been in touch for such a long time .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Dear Team:Good morning. There are some exciting changes coming to our depar .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Hi Linda,How's it going?Sorry I haven't been in touch for such a long time .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Hi Linda,How's it going?Sorry I haven't been in touch for such a long time .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Hi Linda,How's it going?Sorry I haven't been in touch for such a long time .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Hi Linda,How's it going?Sorry I haven't been in touch for such a long time .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
								<tr>
									<td>admin.salonj@gmail.com</td>
									<td><h2>Hi Linda,How's it going?Sorry I haven't been in touch for such a long time .. </h2></td>
									<td>
										<span class="mail"><ion-icon name="person-circle-sharp"></ion-icon></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					
				</div>
			</section>
		</main>
	</div>
</body>
</html>

<html>
<head>
	
	<title>Contact_Us</title>
	
	<link href="styles/Contact Us.css" rel="stylesheet" type="text/css">
	
</head>
<body>
<header>
			<div class="wrapper">
				<div class="logo">
					<img src="images/logo.jpg" width="300px" style="border: solid #fff;">
				</div>
				<header>
				<nav>
					<a href="Home.html" class="navtab">HOME</a>
					<a href="Contact Us.php" class="navtab">CONTACT</a>
					<a href="aboutus.html" class="navtab">ABOUT US</a>
					<a href="Careers.php" class="navtab">CAREERS</a>
					<a href="product.html" class="navtab">PRODUCTS</a>
				</nav>
				<a href="userlog.html"><img src="images/user.png" width="40px" id="user"></a>

			</div>
			<br/>
		
		</header>
		
<center>	
       <div class="new01" >
		<h1 style="color:#fff; font-size:45;" >CONTACT US</h1></div><br>
		<hr>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      
		  
                            <label id="addformalign">First Name:</label>
				<input type="text" name="FirstName" style="width:250px" placeholder="First Name" required><br><br>
				<label  id="addformalign">Last Name:</label>
				<input type="text" name="LastName" style="width:250px" placeholder="Last Name" required><br><br>
				<label  id="addformalign">Email Address:</label><br>
				<input type="text"  name="Email" style="width:500px" placeholder="E mail" required>
<br><br>

				<label id="addformalign">Mobile number:</label><br>
				<input type="text"  name="PhoneNo" style="width:500px" placeholder="Phone Number" required>

<br><br>

				<label id="addformalign">Message:</label><br>
				<input type="text" name="Message" placeholder="Your Message" id="Message">
				
<br><br>
			    <input type="submit" value="Submit" name="btnSubmit" id="Submit">



</form>
</div>
<br>
</center>

        <div class="add_details">
			<h2>Visit Us at</h2> <br>
			<h3> Nugegoda </h3>
			<p>Address: 297 High Level Rd,<br>Nugegoda</p>
			<p>Open Hours: 8.30 AM - 10.30PM <br></p>
			<p>Phone: 0702373464</p>
			<h3> Galle </h3>
			<p>Address: 137A Wackwella Rd,<br>Galle </p>
			<p>Open Hours: 8.30 AM - 10.30PM <br></p>
			<p>Phone: 0712349856</p>
			<h3> Matara</h3>
			<p>Address: 4A Akuressa Rd,<br>Matara </p>
			<p>Open Hours: 8.30 AM - 10.30PM <br></p>
			<p>Phone: 0712449635</p> <br>
			
			<h2>Email Us on</h2>
			<p>salon_j@gmail.com</p>
		</div>
<hr>

<br>
		<div class="footer">
			<img src="images/logo.jpg" width="100px">
			<a href="Home.html"><h2>HOME</h2></a>
			<a href="Contact Us.php"><h2>CONTACT</h2></a>
			<a href="aboutus.html"><h2>ABOUT US</h2></a>
			<a href="find a salon.html"><h2>FIND A SALON</h2></a>
			
		</div>
		
		<div class="payments-store">
			
			<a href="Payment Checkout.php"><img src="images/credit-card.png" width="40px" id="credit"></a>
			<a href="Payment Checkout.php"><img src="images/master-card.png" width="40px" id="master"></a>
			<a href="https://play.google.com/store/apps/details?id=com.maz.combo632&hl=en&gl=US"><img src="images/playstore.png" width="40px" id="play"></a>
			<a href="https://youtu.be/FXonIbSmTPw"><img src="images/youtube.png" width="40px" id="youtube"></a>
			<a href="www.twitter.com"><img src="images/twitter.png" width="40px" id="tweet"></a>
			<a href="www.facebook.com"><img src="images/facebook.png" width="40px" id="facebook"></a>
			<a href="www.instagram.com"><img src="images/instagram.png" width="40px" id="insta"></a>
	       
		</div>
</body>
</html>

<?php


//The connection object
$con=new mysqli("localhost","root","","salon_j");
// Check connection
if($con->connect_error){
die("Connection failed: " . $con->connect_error);
}


if(isset($_POST["btnSubmit"])){
 $FirstName = $_POST['FirstName'];
 $LastName = $_POST['LastName'];
 $Email = $_POST['Email'];
 $PhoneNo = $_POST['PhoneNo'];
 $Message = $_POST['Message'];



$sql= "INSERT INTO contact (FirstName, LastName, Email, PhoneNo, Message)VALUES('$FirstName','$LastName','$Email', '$PhoneNo','$Message')";
if($con->query($sql)){
	
 echo "<script> alert('Thank You!!!')</script>";
 
}
else{
echo "Error:". $con->error;
}
}
$con->close();
?>
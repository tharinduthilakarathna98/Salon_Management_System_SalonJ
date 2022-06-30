

<html>
<head>
	
	<title>Carreers</title>
	
	<link href="styles/Careers.css" rel="stylesheet" type="text/css">
	
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
		

	<div class="new01" >
	<h1 style="color:#fff; font-size:45; text-align:center" >CAREERS</h1></div><br>
	<hr>
	  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  	<div id="name">
		   <h2 style="color:#fff;" class="name"> Name</h2>
		   <input class ="Firstname" type="text" name="Firstname">
		   <label class="Firstlabel">First Name</label>
		   <input class ="Lastname" type="text" name="Lastname">
		   <label class="Lastlabel">Last Name</label>
		   </div>
		   
		   <h2 style="color:#fff;" class="name"> Address</h2>
		   <input class ="Address" type="text" name="Address">
		   
		   <h2 style="color:#fff;" class="name"> Date of Birth </h2>
		   <input class="DOB" type ="text" name="DOB">
		   
		   <h2 style="color:#fff;" class="name"> Email </h2>
           <input class="email" type="text" name="Email">
		  
		   <h2 style="color:#fff;" class ="name"> Phone Number </h2>
		   <input class="number" type="text" name="PhoneNo">
		   
		   <h2 style="color:#fff;" class="name">NIC </h2>
		   <input class="nic" type="text" name="NIC">
		   
		   <h2 style="color:#fff;" class="name"> Carrer Path </h2>
		   <select class="option" name="CareerPath">
		   <option disabled="disabled" selected="selected">--Choose Job Role </option>
		   <option > Hair Cutter </option>
		   <option> Massage Therapist </option>
		   <option> Beautician </option>
           </select>
		   
		   <h2 style="color:#fff;" id="Guest"> Are you an experienced person on above mentioned path ? </h2>
		   
		   <label class="radio">
		    <input class="radio-one" type="radio" name="experience" value="Yes">
			<span class="checkmark"> </span> Yes
			</label>
			
		   <label class="radio">
		    <input class="radio-two" type="radio" name="experience" value="No">
			<span class="checkmark"> </span> No
			</label>
			</br>
			</br>
			</br>
			</br>
			
			 <input type="submit" value="Submit" id="submit" name="btnSubmit"> </br></br></br>
	  </form>
		  
		  <br>
            <div class="new02">		  
		  </div>      
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
			<p>salonjesmine@gmail.com</p>
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

require 'config.php';

if(isset($_POST["btnSubmit"])){
 $Firstname = $_POST['Firstname'];
 $Lastname = $_POST['Lastname'];
 $Address = $_POST['Address'];
 $DOB = $_POST['DOB'];
 $Email = $_POST['Email'];
 $PhoneNo = $_POST['PhoneNo'];
 $NIC = $_POST['NIC'];
 $CareerPath = $_POST['CareerPath'];
 $experience = $_POST['experience'];



$sql= "INSERT INTO jobs (Firstname,Lastname, Address, DOB, Email, PhoneNo, NIC, CareerPath, experience)VALUES('$Firstname','$Lastname','$Address','$DOB','$Email', '$PhoneNo', '$NIC', '$CareerPath', '$experience')";
if($con->query($sql)){
	
 echo "<script> alert('Successfuly registered!!!')</script>";
 
}
else{
echo "Error:". $con->error;
}
}
$con->close();
?>
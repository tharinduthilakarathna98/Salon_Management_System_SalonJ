<?php

session_start();

 if(!isset($_SESSION['userloggedin'])){
      echo "<script> alert('You need to login!!!')</script>";
      echo "<script>";
      echo "window.location = 'userlog.php'";
      echo "</script>";
     }

require 'config.php';

if(isset($_POST["btnSubmit"])){
 $method=$_POST['method'];
 $cardholder=$_POST['cardholder'];
 $validthru=$_POST['validthru'];
 $cvv=$_POST['cvv'];
 $cardno=$_POST['cardno'];



$sql= "INSERT INTO pay (method,cardholder, validthru, cvv, cardno)VALUES('$method','$cardholder','$validthru','$cvv', '$cardno')";
if($con->query($sql)){
 echo "<script> alert('Payment is successfull!!!')</script>";
 
}
else{
echo "Error:". $con->error;
}
}
$con->close();
?>



<html>
<head>

  <title>Payment</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="styles/paymentcheck.css" type="text/css">
  <script src="js/payment.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
				<a href=""><img src="images/user.png" width="40px" id="user"></a>

			</div>
			<br/>
		
</header>
		

	<div class="new01" >
	<h1 style="color:#fff; font-size:45; text-align:center" >PAYMENT</h1></div><br>
	<hr>
	<center>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	<div class="checkout-panel">
    <div class="panel-body">
      <h2 class="title">Pay By Card</h2>

      <div class="progress-bar">
        <div class="step active"></div>
        <div class="step active"></div>
        <div class="step"></div>
        <div class="step"></div>
      </div>

      <div class="payment-method">
        <label for="card" class="method card">
          <div class="card-logos">
            <img src="images/visa_logo.png"/>
            <img src="images/mastercard_logo.png"/>
          </div>

          <div class="radio-input">
            <input id="card" type="radio" name="method" value="Pay with Credit Card">
            Pay with Credit Card
          </div>
        </label>

        <label for="paypal" class="method paypal">
          <img src="images/paypal_logo.png"/>
          <div class="radio-input">
            <input id="paypal" type="radio" name="method" value="Pay with PayPal">
            Pay with PayPal
          </div>
        </label>
      </div>

      <div class="input-fields">
        <div class="column-1">
          <label for="cardholder">Cardholder's Name</label>
          <input type="text" id="cardholder" name="cardholder" />

          <div class="small-inputs">
            <div>
              <label for="date">Valid thru</label>
              <input type="text" id="date" placeholder="MM / YY" name="validthru" />
            </div>

            <div>
              <label for="verification">CVV / CVC *</label>
              <input type="password" id="verification" name="cvv"/>
            </div>
          </div>

        </div>
        <div class="column-2">
          <label for="cardnumber">Card Number</label>
          <input type="password" id="cardnumber" name="cardno"/>

          <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
        </div>
      </div>
    </div>

    <div class="panel-footer">
      <button class="btn back-btn">Back</button>


      <button class="btn next-btn" id="Submit" name="btnSubmit" value="pay">PAY</button>




    </div>
  </div>  
</form>
</center>
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
			
			<a href=""><img src="images/credit-card.png" width="40px" id="credit"></a>
			<a href=""><img src="images/master-card.png" width="40px" id="master"></a>
			<a href=""><img src="images/playstore.png" width="40px" id="play"></a>
			<a href=""><img src="images/youtube.png" width="40px" id="youtube"></a>
			<a href=""><img src="images/twitter.png" width="40px" id="tweet"></a>
			<a href=""><img src="images/facebook.png" width="40px" id="facebook"></a>
			<a href=""><img src="images/instagram.png" width="40px" id="insta"></a>
	       
		</div>
</body>
</html>	
<?php 

   

    setcookie("Booking", "Services", time()+2*24*60*60);//set cookie


    if(isset($_COOKIE["Booking"])){ //check cookie is set
    echo "Auction Item is a  " . $_COOKIE["Booking"];
    } else{
    echo "No items for auction.";
    }

     session_start(); 

     if(!isset($_SESSION['userloggedin'])){
     	echo "<script> alert('You need to login!!!')</script>";
     	echo "<script>";
      echo "window.location = 'userlog.php'";
      echo "</script>";
     }
 ?>


<!DOCTYPE html>
<html>
<head>
	
	<title>Booking_Page</title>

	<link href="styles/booking.css" rel="stylesheet"  type="text/css">
	<script src="src/js/booking.js"></script>
</head>
<body>
		<header>
			<div class="wrapper">
				<div class="logo">
					<img src="image
					s/logo.jpg" width="250px" style="border: solid #fff;">
				</div>
				<nav>
					<a href="Home.html" class="navtab">HOME</a>
					<a href="Contact Us.php" class="navtab">CONTACT</a>
					<a href="aboutus.html" class="navtab">ABOUT US</a>
					<a href="Careers.php" class="navtab">CAREERS</a>
					<a href="product.html" class="navtab">PRODUCTS</a>
				</nav>
				<a href="User login page.html"><img src="images/user.png" width="40px" id="user"></a>

			</div>
		</header>

		<div class="con1">
		<br/><br/><br/><br/><br/><br/>
			
		</div>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>

  <center>
  <button  onclick="loadDetails('btn1')" id="btn1" class="bn">haircutting</button>
  <button  onclick="loadDetails('btn2')" id="btn2" class="bn">hairdressing</button>
  <button  onclick="loadDetails('btn3')" id="btn3" class="bn">facial</button>
  <button  onclick="loadDetails('btn4')" id="btn4" class="bn">massage</button>
  <button  onclick="loadDetails('btn5')" id="btn5" class="bn">tattoo</button>
  <button  onclick="loadDetails('btn6')" id="btn6" class="bn">shaving</button>
  <button  onclick="loadDetails('btn7')" id="btn7" class="bn">wax</button>
  </center>


  <center>
  <p id="para" class="setpara"><marquee width="60%" direction="left" height="100px">
Click above to see details of Services.   Select our services as your wish!!
</marquee></p>

 <img src="images/sal.jpg" id="img" width="800px;" >

   </center>
 

<div class="form-cover" style="height: 600px;">

	<center><h1 style="float: right; margin-right: 600px; margin-top: 100px; color: #b2bacf; font-family: serif; font-size: 50px;">Stay Safe<br>&<br>beauty</h1></center>

<form action="" method="post" enctype="multipart/form-data">  
   <div style="width:200px;border-radius:6px;margin:0px auto">  
<table border="1" style="float: right; margin-right: -600px; width: 500px; height: 600px;" >  
   <tr>  
      <td colspan="2" style="color: yellow;">Select your services</td>  
   </tr>  
   <tr>  
      <td>haricutting</td>  
      <td><input type="checkbox" name="serve[]" value="haricutting"></td>  
   </tr>  
   <tr>  
      <td>hairdressing</td>  
      <td><input type="checkbox" name="serve[]" value=".hairdressing"></td>  
   </tr>  
   <tr>  
      <td>facial</td>  
      <td><input type="checkbox" name="serve[]" value="facial"></td>  
   </tr>  
   <tr>  
      <td>massage</td>  
      <td><input type="checkbox" name="serve[]" value="massage"></td>  
   </tr>
   <tr>  
      <td>tattoo</td>  
      <td><input type="checkbox" name="serve[]" value="tattoo"></td>  
   </tr>  
   <tr>  
      <td>shaving</td>  
      <td><input type="checkbox" name="serve[]" value="shaving"></td>  
   </tr>    
   <tr>  
      <td>Book_date</td>  
      <td><input type="DATE" name="date" value="date"></td>  
   </tr>  
   <tr>  
      <td colspan="2" align="center"><input type="submit" value="submit" id="Submit" name="sub"></td>  
   </tr>  
</table>  
</div>  
</form>
<img src="images/face-mask.png" width="500px;" id="mask">
</div> 
<?php  
if(isset($_POST['sub']))  
{  
$host="localhost";
$username="root"; 
$word="";
$db_name="salon_j"; 
$tbl_name="book"; 
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");
$checkbox1=$_POST['serve'];
$date = $_POST['date'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$in_ch=mysqli_query($con,"insert into book(Services,date) values ('$chk','$date')");  
if($in_ch==1)  
   {  
      echo'<script>alert("Booking is successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
}  
?>  


 

   

         
         
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
	

		
		
		<div class="">
			<center>
			<a href="Home.html"><h1 class="numbers">1</h1></a>
			<a href="Contact Us.php"><h1 class="numbers">2</h1></a>
			<a href="aboutus.html"><h1 class="numbers">3</h1></a>
			<a href="Careers.php"><h1 class="numbers">4</h1></a>
			<a href="product.html"><h1 class="numbers">5</h1></a>
			<hr class="foot-hr">
			</center>
		</div>

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
		<script>
			function loadDetails(btn){

 if(btn == "btn1"){
    
   
   document.getElementById("para").innerHTML = "Different people get haircuts for different reasons. Talking to you about what a client doesn’t like about their current cut can help guide you to make any necessary corrections. Likewise, if you have a specific hairstyle in mind you should be upfront and detailed about your expectations so that your client can make the appropriate choices. The reasoning and motivation behind wanting a change in hairstyle can help inform the method and tool choices. That is why it is important to be a hairstylist that can communicate openly with clients. And, the best way to prepare for a career in hair cutting is to attend a hair school near you. Let’s take a more in depth look at the three main reasons people seek out a new haircut.<mark><br> Blow Dry 1300/=<br>Blow Dry with curling or flat iron 1600/=<br>Hair cut with Blow Dry 2000/= <br> Mens Hair cut 1500/=<br> Formal Hair Design 2500/=</mark>";
   document.getElementById("img").src="images/hair.jpg";
}
 else if(btn == "btn2"){
 	
 	
 	document.getElementById("para").innerHTML= " You know that you look gorgeous no matter what your current style is. There comes a time for many of us, however, that we are willing to put in the time and effort to leave our hair alone and let it grow. This is easier said than done. When someone mentions “advanced cosmetology techniques”, this term may not always be clear. Cosmetology covers several different areas in the beauty industry. First and foremost, the primary goal of cosmetology is to enhance someone’s appearance.<mark><br> Wash & blow dry 1600/=<br>Treatment 1700/=<br>Pedicure 2700/= <br> weddings 12500/=<br> Festival-Grooming From 2500/=</mark>";
    document.getElementById("img").src="images/dressing.jpg";
 }
 else if(btn == "btn3"){
 	
 	document.getElementById("img").src="images/face.jpg";
 	document.getElementById("para").innerHTML= "A good facial leaves your facial skin smooth, bright, and flushed. It's fun to get a facial at a spa, but you can get the same great results in the comfort of your home without spending any money. Start by thoroughly cleansing and exfoliating your skin, then use a steam treatment and mask to draw impurities from your pores. Finish with toner and moisturizer to help your skin look beautifully soft and refreshed.<mark><br> Acne facials 2600/=<br>Microdermabrasion 1700/=<br>Pedicure 2700/= <br> Ageless facials 3500/=<br> Dermaplaning From 4500/=</mark>";

 }
 else if(btn == "btn4"){
 	
 	
 	document.getElementById("para").innerHTML= "Massage is the stroking, kneading, warming, rolling and pressing of skin and muscles.There are lots of different kinds of massage, each with broadly different origins and aims - some focus on soothing muscle pain; others on increasing energy levels; some aim to improve a specific physical condition; others simply to help you relax.Massage makes you feel good in lots of ways, and can have a positive effect on your whole body - your bones, your muscles, your heart, your skin, your breathing, digestion, and your mental health.<mark><br> fullbody 12600/=<br>Ayurwedic 21700/=<br>dayfull 22700/=</mark>";
    document.getElementById("img").src="images/mas.jpg";
 }
 else if(btn == "btn5"){
 	
 	
 	document.getElementById("para").innerHTML= "Tattoos in these communities were used to depict the social status of a person, rites of passage, and family status. They were sometimes even used for medicinal purposes. Every culture has its own designs and techniques, but most of the tribal tattoos are done in black.Tribal tattoos feature bold line motifs, repetitive patterned designs, elements, bold black lines, and spiritual and mythical symbolism. The most popular tribal tattoos are the Hawaiian flower, Indian motifs, letters, and rose tattoos.<mark><br> Laser From 10000/=<br>keycut From 4000/=<br>Remove 15000/=</mark>";
    document.getElementById("img").src="images/tat.jpg";
 }
 else if(btn == "btn6"){
 	
 	
 	document.getElementById("para").innerHTML= "There is no shortage of men’s razors and other shaving tools on the market, but do any of them offer the perfect shave? According to dermatologists, it’s less about which tools you use, and more about your shaving preparation and technique. For a clean and comfortable shave, dermatologists offer these tips.Shaving can be a challenge for both men and women. Here are dermatologists’ tips to help you get a clean shave.<mark><br> Mens From 1000/=<br>Ladies From 2000/=</mark>";
    document.getElementById("img").src="images/shave.jpg";
 }
 else if(btn == "btn7"){
 	
 	
 	document.getElementById("para").innerHTML= "Get smooth, sleek and beautiful. Waxing isn’t just about hair removal. It’s a skin care treatment as well. Our fast and effective waxing services will leave your skin hair-free and fabulously smooth. Before your first waxing service, please allow a minimum of ten days of hair growth.For most waxing services, we use the Nufree® Nudesse hair removal system. The Nufree® Nudesse product is a soy-based, antimicrobial, safe and gentle product. To prevent irritation and ingrown hairs, Finipil®, an antibacterial/antimicrobial cooling lotion, is applied immediately after the hair removal treatment. Finipil® is also recommended for daily use at home.If you are taking Retin A or Acutane, waxing services cannot be performed. Skin care products that contain glycolicacids or alpha hydroxy acids must be discontinued 3-5 days before the waxing service.<mark><br>Ladies From 1000/=</mark>";
    document.getElementById("img").src="images/wa.jpg";
 }
 else {
 	alert("Invaid");

 }

}


		</script>
	
</body>
</html>

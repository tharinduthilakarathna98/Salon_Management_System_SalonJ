<?php 
//connection
$hostname="localhost";
$username="root";
$pw="";
$db="salon_j";
//registration form
$con=new mysqli($hostname,$username,$pw,$db);
if(isset($_POST['submit'])){
$fname= $_POST["first"];
$lname=$_POST["last"];
$bdate=$_POST["birthday"];
$email=$_POST["email"];
$phone=$_POST["number"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$pw=$_POST["password"];



//registration insert
$sql= "INSERT INTO userregis(fname,lname,dob,email,phone,gender,address,password) VALUES ('$fname','$lname','$bdate','$email','$phone','$gender','$address','$pw')";
if($con->query($sql)){
	echo "<script> alert('Successfully registered!!!'); </script> ";
}
	else{
		echo "error".$con->error;
		
	}
	
	
}		
		
	
	
	
			
		
     



?>
 






<!DOCTYPE html>
<html>
<head>
	
	<title>MY profile</title>
	<link href="styles/Home.css" rel="stylesheet"  type="text/css">
	<link href="styles/profile1.css" rel="stylesheet"  type="text/css">
	
	<style >
	
	</style>
</head>
<body>
	
		
	
	
	
	
	<div class ="sidetab">
	
	<?php 
		//propic upload

	if(isset($_FILES["fileupload"])){
		$target_dir="uploads/";
        $file= $target_dir.basename($_FILES["fileupload"]["name"]);
	if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$file)){
		
		//echo"the file".basename($_FILES["fileupload"]["name"])."Uploaded";
	}
	else{
		echo"Error";
	}
   //propic insert 
		$query="INSERT INTO propic(img) VALUES('$file')";
		
		$imgresult= mysqli_query($con,$query);
		
	
	
	$selectimg= "select id,img from propic where id=( SELECT MAX(id) FROM propic )";
	$imgdis= mysqli_query($con,$selectimg);
	
	$imgrow=mysqli_fetch_array($imgdis);

	}
	
?>
	<center> <img src="<?php if(isset($_FILES["fileupload"])){echo $imgrow[1]}?>"id='imguser' > <center>
	
	
	
	
	
		
		
		<center><button id="update"  onclick="openpopup()"> Update</button></center>
		
	   <div class="popup" id="popform">
		<form action="#" method="POST" class="formbox" enctype="multipart/form-data">
		<h3 style="color: #5a7348;"> Select Image To Upload</h3>
		<input type="file" name="fileupload" id="fileupload">
		<input type="submit" id="picsubmit" value="Upload Image" name="picsubmit">
		
		
		<button type="button" class="closebtn" onclick="closepopup()"> Close </button>

		

		</form>
		</div>
		
		<script> 
		//propic tab popup
		function openpopup(){
			
			document.getElementById("popform").style.display="block";
		}
		
		function closepopup(){
			
			document.getElementById("popform").style.display="none";
		}
		</script>
		
		
		<a href="#"><button class="tab" >My Profile</button><br></a>
		<a href="booking.php"><button class="tab" >My Booking </button><br></a>
		<a href="Home.html"><h2> <button class="tab" >HOME</button></a>
	    <a href="logout.php"><h2> <button class="tab" >Logout</button></a>
		
		</div>

        <center>
<?php 
//connection
$hostname="localhost";
$username="root";
$pw="";
$db="salon_j";

$con=new mysqli($hostname,$username,$pw,$db);
			//read user data
	$result="SELECT regid, fname, lname, dob, email,phone,gender,address,password FROM userregis WHERE regid=( SELECT MAX(regid) FROM userregis )";
	$result= mysqli_query($con,$result);
	
	
	$row=mysqli_fetch_array($result);
	
	
	?>
	
		<form method="post" action="profile.php ?action=add&regid=<?php echo $row["regid"];?>">
		<div class="box">
		<label  > First Name  </label>
		<input type="text" name="fname" id="fname" value="<?php echo $row[1];?>"> <br>
		<label> Last Name  </label>
		<input type="text" name="lname" id="lname" value="<?php echo $row[2];?>"><br>
		<label>Birthday &nbsp &nbsp &nbsp </label>
		<input type="text" name="birthday" id="birthday"class="styl" style="margin-left: 100px;" value="<?php echo $row[3];?>" ><br>
		<label> Email &nbsp &nbsp &nbsp </label>
		<input type="text" name="email" id="email"value="<?php echo $row[4];?>"><br>
		<label> Phone  &nbsp &nbsp </label>
		<input type="text" name="phone" id="phone" value="<?php echo $row[5];?>" ><br>
		<label> Address  &nbsp &nbsp </label>
		<input type="text" name="address" id="address"value="<?php echo $row[7];?>" ><br>
		<br> <br> <br>

			 
			 			
			
	
			 </div>
			
			 </form>
			 
			</center>	
	
	
		
		<div class="">
			<center>
			<a href=""><h1 class="numbers">1</h1></a>
			<a href=""><h1 class="numbers">2</h1></a>
			<a href=""><h1 class="numbers">3</h1></a>
			<a href=""><h1 class="numbers">4</h1></a>
			<a href=""><h1 class="numbers">5</h1></a>
			<hr class="foot-hr">
			</center>
		</div>

		<div class="footer">
			<img src="images/logo.jpg" width="100px">

         

			<a href=""><h2>HOME</h2></a>
			<a href=""><h2>CONTACT</h2></a>
			<a href=""><h2>ABOUT US</h2></a>
			<a href=""><h2>FIND A SALON</h2></a>

			
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

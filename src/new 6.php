<?php
	$hostname="localhost";
$username="root";
$pw="";
$db="vehicle";
	
	$con=new mysqli($hostname,$username,$pw,$db);
	if(isset($_POST['submit'])){
	$code=$_POST("VehicleCode");
	$name=$_POST("VehicleName");
	
	$sql = "INSERT INTO details (ID, Name) VALUES ('$code', '$name')";
	
	if($conn->query($sql)){
		echo "Inserted Successfully..!!";
	}
	else{
		echo "Error..!!'";
	}
	}
?>

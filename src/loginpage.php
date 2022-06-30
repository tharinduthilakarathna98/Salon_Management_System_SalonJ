<?php
  session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  $username = $_POST["username"];
	  $password = $_POST["password"]; 
		
      if($username == "test" && $password == "1234") {
         //session_register("myusername");

        $_SESSION['logged_user'] = $username;
        
         
         header("location: Home.html");
          echo "<script> alert('Login is successfully!!!!')</script>";
      }else {
         echo "<script> alert('You have entered a wrong username or password!!!!')</script>";
      }
   }
?>


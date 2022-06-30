<?php
  session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
      if($username == "test" && $password == "1234") {
         //session_register("myusername");

        $_SESSION['logged_user'] = $username;
        
         
         header("location: c.php");
          echo "<script> alert('Login is successfully!!!!')</script>";
      }else {
         echo "<script> alert('You have entered a wrong username or password!!!!')</script>";
      }
   }
?>


<!DOCTYPE html>
<html>
<head>
  <title>User_Login_Page</title>
  <link rel="stylesheet" type="text/css" href="src/styles/User login page.css">
</head>
<body>
  

  <content>
    <a href="Home.html"><img src="images/previous.png" width="40px" style="margin-right: 580px; margin-top: 45px;"></a>

     <center>
      
    

    <h1 style="color: #fff; font-size: 150px;">Login</h1>
     
  
  <form action="">
    <label>username</label>
    <input type="text" id="username" name="username" placeholder="username" class="name">
    <br/> <br/>
    <label>Password</label>
    <input type="password" id="password" name="password" placeholder="password" class="name">
    <br/> <br/>

    <a href="User registration page.html"><p class="reg">Click Here To Register</p></a>
 
    <input type="submit" value="LOGIN" id="Submit">
    <br><br>
  </form>

</content>
    
</center>
</body>
</html>
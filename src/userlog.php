<?php
  session_start();

   include_once('config.php');

  if(isset($_POST['btn-submit'])){
    $username = $_POST['username'];
    echo $username;
    $password = $_POST['password'];
    echo $password;


    $sql = "SELECT * FROM userregis where email = '$username';";

    $result = $con->query($sql);

    if($result->num_rows > 0){
        $user = $result->fetch_assoc();

        if($user['password'] === $password){
            echo "<script> alert('Logged in!!!!')</script>";
            echo "<script>";
            echo "window.location = 'Home.html'";
            echo "</script>";

            
            $_SESSION['userloggedin'] = true;
            $_SESSION['user_email'] = $user['email'];
        }else{
          echo "<script> alert('Password is incorrect!!!!')</script>";
          echo "<script>";
          echo "window.location = 'userlog.php'";
          echo "</script>";
        }
    }else{
      echo "<script> alert('no user!!!')</script>";
    }
  }


?>


<!DOCTYPE html>
<html>
<head>
  <title>User_Login_Page</title>
  <link rel="stylesheet" type="text/css" href="styles/User login page.css">
</head>
<body>
  

  <content>
    <a href="Home.html"><img src="images/previous.png" width="40px" style="margin-right: 580px; margin-top: 45px;"></a>

     <center>
      
    

    <h1 style="color: #fff; font-size: 150px;">Login</h1>
     
  
  <form action="userlog.php" method="post">
    <label>username</label>
    <input type="text" id="username" name="username" placeholder="username" class="name">
    <br/> <br/>
    <label>Password</label>
    <input type="password" id="password" name="password" placeholder="password" class="name">
    <br/> <br/>

    <a href="registration.html"><p class="reg">Click Here To Register</p></a>
 
    <input type="submit" name="btn-submit" value="LOGIN" id="Submit">
    <br><br>
  </form>

</content>
    
</center>
</body>
</html>
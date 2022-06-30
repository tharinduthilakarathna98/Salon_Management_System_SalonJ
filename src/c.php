<?php
   session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        
        <title> Admin Dashboard</title>
        
        <link rel="stylesheet" type="text/css" href="styles/c.css">   
    </head>
    <body>
        <div class="container">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon"><img src="images/Logo.jpg" width="60px" id="user"></span>
                            <span class="title"><h2>Salon J</h2></span>
                        </a>
                    </li>
                   
                    <!--li>
                        <a href="update.php">
                            <span class="icon"><img src="icons/home.png" width="20px" id="user"></span>
                            <span class="title">Update</span>
                        </a>
                    </li--->
                    <li>
                        <a href="delete.php">
                            <span class="icon"><img src="icons/home.png" width="20px" id="user"></span>
                            <span class="title">Delete</span>
                        </a>
                    </li>
                    <li>
                        <a href="adminloginpage.html">
                            <span class="icon"><img src="icons/signout.png" width="20px" id="user"></span>
                            <span class="title">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <center>
            <h1>Display Records of registered users</h1>
        </center>

            <div id="main1">

            <table border="2" align ="right">
<tr>
    <th>RegisterID</th>
    <th> Firstname</th>
    <th> Lastname</th>
    <th>dob</th>
    <th>email</th>
    <th>phone</th>
    <th>gender</th>
    <th>address</th>
    
</tr>


<?php
    
    
    include'connection.php';
    error_reporting(0);
    
        $query = "select * from userregis";
        $datas = mysqli_query($conn, $query);
        $total=mysqli_num_rows($datas);
        

    echo $result['regid']." ".$result['fname']." ".$result['lname']." ".$result['dob']." ".$result['email']." ".$result['phone']." ".$result['gender']." ".$result['address'];
        
        //echo $total;

        if($total!=0)
        {
            $result = mysqli_fetch_assoc($datas);
            while($result = mysqli_fetch_assoc($datas))
            {
               echo ("<tr>");
               echo ("<td>".  $result['regid']. "</td>");
                echo ("<td>".  $result['fname']. "</td>");
                 echo ("<td>".  $result['lname']. "</td>");
               echo ("<td>" . $result['dob'] . "</td>");
               echo ("<td>" . $result['email'] . "</td>");
               echo ("<td>" . $result['phone'] . "</td>");
               echo ("<td>" . $result['gender'] . "</td>");
               echo ("<td>" . $result['address'] . "</td>");
               echo ("</tr>");

            }
           // echo "Table has records";
            echo("<br>");
        }
        else
        {
            echo "No records found";
        }





?>


    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
     <h2 ><a style="color: red;" href="salary.php">Beautician Salary</a></h2>
     </center>
    <br>
    <br>
    <br>
<center>
     <h1>Display Records of registered users</h1>
 </center>
    <table border="2" align ="right">
<tr>
    <br>
    <th>id</th>
    <th>Services</th>
    <th>date</th>
   
    
</tr>


<?php
    
    
    include'connection.php';
    error_reporting(0);
    
        $query = "select * from book";
        $bookings = mysqli_query($conn, $query);
        $total=mysqli_num_rows($bookings);
        

        echo $result['id']." ".$result['Services']." ".$result['date'];
        
        //echo $total;

        if($total!=0)
        {
            $result = mysqli_fetch_assoc($bookings);
            while($result = mysqli_fetch_assoc($bookings))
            {
                echo "
                <tr>
                <td>".$result['id']."</td>
                <td>".$result['Services']."</td>
                <td>".$result['date']."</td>
                </tr>
                ";


            }
           // echo "Table has records";
             echo("<br>");
              echo("<br>");
              echo("<br>");
              
               

        }
        else
        {
            echo "No records found";
        }





?>
    </table>


    <br>
    <br>
    <br>
    <br>

            </body>
    </html>
 
        

 
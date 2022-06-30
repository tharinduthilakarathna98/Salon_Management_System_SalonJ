<html>
<head>

<?php
error_reporting(0);
include 'connection.php';
$name = $_POST['user'];

$sql = "delete from register where username = $name";

if($_POST['submit']){
    if (mysqli_query($conn, $sql)){
        echo"Data delete successfully";
    }
    else {
        echo"Something went wrong";
    }
}


?>


</head>


<body>

<form action="delete.php" method="POST">
    <h4>Give id to delete the user data </h4>
    Username: <input type="text" name="user">
    
    <input type="submit" name="submit" value="delete">

</form>

</body>

</html>
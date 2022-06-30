<?php
require 'config.php';
function readData()
{
global $con;
$sql = "SELECT username, password, gender, email, Year, phone, address FROM register";
$result = $con->query($sql);
if ($result->num_rows > 0) 
{
echo ("<h1>Display Records of registered users</h1>");
echo ("<table border='1'>");
while($row = $result->fetch_assoc()){
echo ("<tr>");
echo ("<td>". $row['username']. "</td>");
echo ("<td>" . $row['password'] . "</td>");
echo ("<td>" . $row['gender'] . "</td>");
echo ("<td>" . $row['email'] . "</td>");
echo ("<td>" . $row['Year'] . "</td>");
echo ("<td>" . $row['phone'] . "</td>");
echo ("<td>" . $row['address'] . "</td>");
echo ("</tr>");
}
echo ("</table>");
}
else 
{
echo "No results";
}
$con->close();
}
readData();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="src/styles/adminpagestyle.css">
</head>
<body>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Search Customer Data </h3>
Student Name :<input type="text" name="username">
<input type="submit" value="Submit" name="btnSubmit">
<input type="reset" value="Reset">
</form>


</body>
</html>



<?php
require 'config.php';
if(isset($_POST["btnSubmit"])){
$username = $_POST["username"];
$sql= "SELECT  * FROM register where username LIKE '%$username%'";
if($result=$con->query($sql)){
if($result->num_rows > 0){
echo ("<table border='1'>");
while($row = $result->fetch_assoc()){
echo ("<tr>");
echo ("<td>". $row['username']. "</td>");
echo ("<td>" . $row['password'] . "</td>");
echo ("<td>" . $row['gender'] . "</td>");
echo ("<td>" . $row['email'] . "</td>");
echo ("<td>" . $row['Year'] . "</td>");
echo ("<td>" . $row['phone'] . "</td>");
echo ("</tr>");
}
echo ("</table>");
}else
{
echo "no results";
}

$con->close();
}
}
?>

<?php
require 'config.php';
function readlData()
{
global $con;
$sql = "SELECT id,Services, date FROM book";
$result = $con->query($sql);
if ($result->num_rows > 0) 
{
echo ("<h1>Display Records of Bookings</h1>");
echo ("<table border='1'>");
while($row = $result->fetch_assoc()){
echo ("<tr>");
echo ("<td>" . $row['id'] . "</td>");
echo ("<td>". $row['Services']. "</td>");
echo ("<td>" . $row['date'] . "</td>");

}
echo ("</table>");
}
else 
{
echo "No results";
}
$con->close();
}
readlData();
?>


<?php
require 'config.php';
function read1Data()
{
global $con;
$sql = "SELECT id, description, image, price FROM salonproduct";
$result = $con->query($sql);
if ($result->num_rows > 0) 
{
echo ("<h1>Display all avilable products</h1>");
echo ("<table border='1'>");
while($row = $result->fetch_assoc()){
echo ("<tr>");
echo ("<td>". $row['id']. "</td>");
echo ("<td>" . $row['description'] . "</td>");
echo ("<td>" . $row['image'] . "</td>");
echo ("<td>" . $row['price'] . "</td>");
echo ("</tr>");
}
echo ("</table>");
}
else 
{
echo "No results";
}
$con->close();
}
read1Data();
?>
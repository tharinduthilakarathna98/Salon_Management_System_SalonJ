<!DOCTYPE html>
<head>
	<title>Salary Calculation</title>
	<link rel="stylesheet" href="styles/salary.css">
</head>
<body>
<form action="" method="POST">
	<h1>Salary Calculation</h1>
	<div class="input">
		<table>
		<tr>
			<td>Employee Id</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>
				designation
			</td>
			<td>
				<select name="desig">
					<option>(Choose)</option>
					<option>Beautician</option>
					<option>Manager</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Basic Salary
			</td>
			<td>
				<input type="text" name="salary">
			</td>
		</tr>
		<tr>
			<td>
				<button>Calculate</button>
			</td>
		</tr>
		</table>
	</div><br>

<div class="output">
<center>
<?php
	if($_POST)
	{
		$id=$_POST['id'];
		$desig=$_POST['desig'];
		$salary=$_POST['salary'];
	
		if(is_numeric($salary))
		{
			if($salary!=NULL)
			{
				switch($desig)
				{
					case "Beautician":
						$hra=($salary*25)/100;
						$cov=1000;
						$extra=500;
						$gross=$hra+$cov+$extra+$salary;
					
						if($gross<10000)
							$intax=$gross;
						elseif($gross>10000 && $gross<12000)
							$intax=($gross*3)/100;
						elseif($gross>12000 && $gross<14000)
							$intax=($gross*3)/100;
						elseif($gross>14000 && $gross<15000)
							$intax=($gross*5)/100;
						elseif($gross>15000)
							$intax=($gross*8)/100;
							$net=$gross-$intax;
							
						echo "<b style = 'color:#fff;'>Salary slip</b><hr><br><br>";
						echo "<b style = 'color:#fff; '>Employee ID : $id</b><br><br>";
						echo "<b style = 'color:#fff;'>Designation : $desig</b><br><br>";
						echo "<b style = 'color:#fff;'>Salary : RS. $net<br></b>";
						break;	
					
					default:
						echo("Restricted designation !");
				}
			}
		}
	}
?>
</center>
</div>
	<div class="return"><br>
		<button><a href ="index.php">Return to dashboard</a></button>
	</div>
</form>
</body>
</html>


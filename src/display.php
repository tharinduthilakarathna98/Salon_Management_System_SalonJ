<?php
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
						
					<ol align="center"><font color=skyblue size='4pt'>Total salary</font>
					echo "<b style = 'color:#fff; size:4pt;'>Employee ID :$id</b><br>";
					echo "<b style = 'color:#fff;'>Designation:$desig</b><br>";
					echo "<b style = 'color:#fff;'>Salary :$net<br></b>";
?>				
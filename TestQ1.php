<!DOCTYPE html>
<html>
<head>
	<title>Test Question 1</title>
</head>
<body>

	<form action="TestQ1.php" method="POST">
		Number of servers : <input type="text" name="no_servers"><br>
		


		Server load every minute : 

		<input type="text" name="server_load"><br>

		<!-- <input type="number" name="min1">
		<input type="number" name="min2">
		<input type="number" name="min3">
		<input type="number" name="min4">
		<input type="number" name="min5"> -->

		<button type="submit" name="submit">Submit</button>
	</form>

	<?php

	if(isset($_POST["submit"]))
	{
		$num_of_servers=$_POST["no_servers"];
		$server_load=explode(" ", $_POST["server_load"]); //string to array using space as a delimiter

		
		
		// $sum=$min1+$min2+$min3+$min4+$min5;

		for($i=0;$i<5;$i++)
		{
			if ($server_load[$i] < 50)
			{
				if(intdiv($num_of_servers,2)<1)
				{
					$num_of_servers=1;
				}
				else
				{
					$num_of_servers=intdiv($num_of_servers,2);
				}

			}
			else
			{
				$num_of_servers=(($num_of_servers*2)+1);
			}

			print($num_of_servers)."<br>";
		}

		print("The number of servers working after 5 minutes is : ".$num_of_servers);

	}
	?>

</body>
</html>
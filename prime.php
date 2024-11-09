<html>
	<body>
	<form method="post">
		Enter Value : <input type= "number" name="number"><br>
		<input type="submit" value="SUBMIT" />
	</form>
	</body>
</html>
<?php
	if($_POST)
	{
		$number=$_POST['number'];
		$flag=1;
		$count=2;
		while($count<$number)
		{
			if($number%$count==0)
			{
				$flag=0;
				echo "$number is not prime";
				break;
			}
			$count++;
		}
		if($flag==1)
			echo "$number is prime";
	}
?>
<html>
	<body>
	<form method="post">
		Enter Value : <input type="number" name="number"><br>
		<input type="submit" value="SUBMIT" />
	</form>
	</body>
</html>
<?php
	if($_POST)
	{
		$number=$_POST['number'];
		if($number%2==0)
		{
			echo "$number is even";
		}
		else
		{
			echo "$number is odd";
		}
	}
?>